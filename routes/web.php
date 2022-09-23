<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "ArticleController@index")->name('/');
Auth::routes(["verify"=>true, "register"=>false]);
Route::get('/category/{category}', 'CategoryController@showCategory')->name('categories');
Route::get('/tag/{tag}', 'Search@tags')->name('tags');
Route::get('/search', 'Search@filter')->name('search');
Route::get('/sub-category/{subcategory}', 'SubCategoryController@showSubCategory')->name('subcategories');
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');
Route::get('/author/{username}', 'DashboardController@userdetails')->name('authors');
Route::post('/articles/new/{article}/comment', 'CommentController@store')->name('add-comments');
Route::post('/articles/new/{comment}/reply', 'ReplyController@store')->name('add-reply');
Route::get('/{article}', 'ArticleController@show')->name('article.show');
Route::get('/contact-us', 'ArticleController@index')->name('contact-us');

Route::prefix("is_admin")->middleware("auth",'role:Administrator|Moderator|Author')->group(function ()
{
  Route::resource('article', 'ArticleController')->except(["index","show","destroy"])->middleware('permission:master admin|Post Update|Post Add');
  Route::delete('/destroy/{article}/article', "admin\ArticlesPanel@trashArticles")->name("trash-article")->middleware('permission:master admin|Post Delete');
  Route::group(['prefix' => 'gallery', 'middleware' => ['web','permission:master admin|Post Add']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
  });
  Route::get('/permissions', "admin\PermissionController@index")->middleware('permission:master admin|Permission List');
  Route::get('/direct/permission', "admin\PermissionController@directAccess")->middleware('permission:master admin');
  Route::post('/direct/permission', "admin\PermissionController@directAccessStore")->middleware('permission:master admin');
  Route::post('/new/permission', "admin\PermissionController@storePermission")->name("new-permission")->middleware('permission:master admin|Permission Add');
  Route::get('/modify/{permission}/permission', "admin\PermissionController@editPermission")->name("edit-permission")->middleware('permission:master admin|Permission Update');
  Route::put('/update/{permission}/permission', "admin\PermissionController@updatePermission")->name("update-permission")->middleware('permission:master admin|Permission Update');
  Route::delete('/destroy/{permission}/permission', "admin\PermissionController@destroyPermission")->name("trash-permission")->middleware('permission:master admin|Permission Delete');

  Route::get('/roles', "admin\RolesController@index")->middleware("role:Administrator");
  Route::get('/new/role', "admin\RolesController@createRoles")->name("new-roles")->middleware('permission:master admin|Role Add');
  Route::post('/new/role', "admin\RolesController@storeRoles")->name("new-role")->middleware('permission:master admin|Role Add');
  Route::get('/modify/{roles}/role', "admin\RolesController@editRoles")->name("edit-roles")->middleware('permission:master admin|Role Update');
  Route::put('/update/{roles}/roles', "admin\RolesController@updateRoles")->name("update-roles")->middleware('permission:master admin|Role Update');
  Route::delete('/destroy/{roles}/roles', "admin\RolesController@destroyRoles")->name("trash-roles")->middleware('permission:master admin|Role Delete');


  Route::get('/categories', "admin\CategoriesPanel@index")->middleware('permission:master admin|Category List');
  Route::get('/new/category', "admin\CategoriesPanel@createCategory")->name("new-category")->middleware('permission:master admin|Category Add');
  Route::post('/new/category', "admin\CategoriesPanel@storeCategory")->name("new-category")->middleware('permission:master admin|Category Add');
  Route::get('/modify/{category}/category', "admin\CategoriesPanel@editCategory")->name("edit-category")->middleware('permission:master admin|Category Upddate');
  Route::put('/update/{category}/categories', "admin\CategoriesPanel@updateCategory")->name("update-category")->middleware('permission:master admin|Category Update');
  Route::delete('/destroy/{category}/categories', "admin\CategoriesPanel@destroyCategory")->name("trash-category")->middleware('permission:master admin|Category Delete');
  Route::put('/update/{category}/status', "admin\CategoriesPanel@checkStatus")->name("check-status")->middleware('permission:master admin');
  Route::get('/articles/{category}/category', "admin\CategoriesPanel@articles")->name("post-article")->middleware('permission:master admin|Category List');
  Route::get('/sub/category/{category}/', "admin\CategoriesPanel@subcategory")->name("post-subcategory")->middleware('permission:master admin|Category List');
  
  Route::get('/sub/categories', "admin\subCategoriesPanel@index")->middleware('permission:master admin|Category List');
  Route::get('/new/sub/category', "admin\subCategoriesPanel@createCategory")->name("new-sub-category")->middleware('permission:master admin|Category Add');
  Route::post('/new/sub/category', "admin\subCategoriesPanel@storeCategory")->name("new-sub-category")->middleware('permission:master admin|Category Add');
  Route::get('/modify/{category}/sub/category', "admin\subCategoriesPanel@editCategory")->name("edit-sub-category")->middleware('permission:master admin|Category Update');
  Route::put('/update/{category}/sub/categories', "admin\subCategoriesPanel@updateCategory")->name("update-sub-category")->middleware('permission:master admin|Category Update');
  Route::delete('/destroy/{category}/sub/categories', "admin\subCategoriesPanel@destroyCategory")->name("trash-sub-category")->middleware('permission:master admin|Category Delete');
  Route::put('/sub/update/{category}/status', "admin\subCategoriesPanel@checkStatus")->name("check-sub-status")->middleware('permission:master admin');
  Route::get('/sub/articles/{category}/category', "admin\subCategoriesPanel@articles")->name("post-sub-article")->middleware('permission:master admin|Category List');
  Route::get('/subcategory/{category}/', "admin\subCategoriesPanel@category")->name("post-sub-category")->middleware('permission:master admin|Category List');
  
  Route::get('/tags', "admin\ArticleTags@index")->middleware('permission:master admin|Category List');
  Route::post('/new/tags', "admin\ArticleTags@storeTag")->name("new-tags")->middleware('permission:master admin|Category Add');
  Route::get('/modify/{tags}/tags', "admin\ArticleTags@editTag")->name("edit-tags")->middleware('permission:master admin|Category Update');
  Route::put('/update/{tags}/tags', "admin\ArticleTags@updateTag")->name("update-tags")->middleware('permission:master admin|Category Update');
  Route::delete('/destroy/{tags}/tags', "admin\ArticleTags@destroyTag")->name("trash-tags")->middleware('permission:master admin|Category Delete');
  
  Route::get('/comments', "admin\CommentPanel@index")->middleware('permission:master admin|Comment View');
  Route::get('/comments/unapprove', "admin\CommentPanel@publish")->middleware('permission:master admin|Comment View');
  Route::put('/comment/{comment}/approve', "admin\CommentPanel@approve")->name("c-approve")->middleware('permission:master admin|Comment Approval');
  Route::put('/comment/{comment}/update', "admin\CommentPanel@updatecomment")->name("c-update")->middleware('permission:master admin|Comment Reply');
  Route::get('/modify/{comment}/comment', "admin\CommentPanel@editcomment")->name("comment-edit")->middleware('permission:master admin|Comment Reply');
  Route::delete('/destroy/{comment}/comment', "admin\CommentPanel@destroyComment")->name("trash-comment")->middleware('permission:master admin|Comment Delete');
 
  Route::get('/replies', "admin\ReplyPanel@index")->middleware('permission:master admin|Comment View');
  Route::get('/replies/unapprove', "admin\ReplyPanel@publish")->middleware('permission:master admin|Comment View');
  Route::put('/reply/{comment}/approve', "admin\ReplyPanel@approve")->name("rp-approve")->middleware('permission:master admin|Comment Approval');
  Route::put('/reply/{comment}/update', "admin\ReplyPanel@updatecomment")->name("rp-update")->middleware('permission:master admin|Comment Reply');
  Route::get('/modify/{comment}/reply', "admin\ReplyPanel@editcomment")->name("rp-edit")->middleware('permission:master admin|Comment Reply');
  Route::delete('/destroy/{comment}/reply', "admin\ReplyPanel@destroyComment")->name("trash-rp")->middleware('permission:master admin|Comment Delete');
 
 

  Route::get('/all/articles', "admin\ArticlesPanel@index")->middleware('permission:master admin|Post List');
  Route::put('/update/status/{article}', "admin\ArticlesPanel@checkStatus")->name("check-post-status")->middleware('permission:master admin');
  Route::put('/update/hot/{article}', "admin\ArticlesPanel@hotnews")->name("check-hot")->middleware('permission:master admin');

  Route::get('/all/authors', "admin\AuthorPanel@index")->name("all-author")->middleware('role:Administrator');
  Route::get('/author/register', "admin\AuthorPanel@registerForm")->middleware('role:Administrator');
  Route::post('/author/register', "admin\AuthorPanel@register")->name("new-user")->middleware('role:Administrator');
  Route::get('/author/{user}/role', "admin\AuthorPanel@role")->name("u-role")->middleware('role:Administrator');
  Route::get('/author/permissions', "admin\AuthorPanel@permissions")->name("u-permission")->middleware('role:Administrator');
  Route::put('/author/{user}/add-role', "admin\AuthorPanel@addrole")->name("save-role")->middleware('role:Administrator');
  Route::put('/author/{user}/revoke', "admin\AuthorPanel@permission")->name("u-revoke")->middleware('role:Administrator');
  Route::get('/author/{user}/change', "admin\AuthorPanel@showPermission")->name("u-show-per")->middleware('role:Administrator');
  Route::get('/logout', "admin\AuthorPanel@logout")->name("s-out");
  Route::delete('/author/{user}/trash', "admin\AuthorPanel@trash")->name("trash-user")->middleware('role:Administrator');

  Route::get('/articles/trash', "admin\TrashController@articles")->name("tr-post")->middleware('permission:master admin');
  Route::get('/author/trash', "admin\TrashController@users")->name("tr-user")->middleware('permission:master admin');
  Route::get('/author/{user}/restore', "admin\RestoreController@users")->name("restore.user")->middleware('permission:master admin');
  Route::get('/articles/{articles}/restore', "admin\RestoreController@articles")->name("restore.post")->middleware('permission:master admin');
  Route::delete('/author/{user}/delete', "admin\TrashController@deleteUser")->name("f-trash-user")->middleware('permission:master admin');
  Route::delete('/article/{user}/delete', "admin\TrashController@deleteArticle")->name("f-trash-post")->middleware('permission:master admin');
  Route::get('/permissions/trash', "admin\TrashController@permissions")->name("tr-permission")->middleware('permission:master admin');
  Route::get('/permission/{permissions}/restore', "admin\RestoreController@permission")->name("restore.permission")->middleware('permission:master admin');
  Route::delete('/permission/{permissions}/delete', "admin\TrashController@deletepermission")->name("f-trash-permission")->middleware('permission:master admin');
  Route::get('/roles/trash', "admin\TrashController@roles")->name("tr-roles")->middleware('permission:master admin');
  Route::get('/roles/{role}/restore', "admin\RestoreController@roles")->name("restore.roles")->middleware('permission:master admin');
  Route::delete('/roles/{role}/delete', "admin\TrashController@deleteroles")->name("f-trash-roles")->middleware('permission:master admin');
  
});
Route::prefix("admin/setting")->middleware(["auth","role:Administrator","permission:master admin"])->group(function ()
{ 
  Route::get('/general', "admin\Settings@index")->name("u-general");
  Route::put('/general', "admin\Settings@general")->name("site_desc");
  Route::get('/menu', "admin\Settings@menu")->name("u-menus");
  Route::put('/menu', "admin\Settings@Savemenu")->name("site_menu");
  Route::get('/homepage', "admin\Settings@sections")->name("u-home");
  Route::put('/homepage', "admin\Settings@homepage")->name("site_homepage");
});

Route::prefix("dashboard")->middleware("auth")->group(function ()
{ 
  Route::get('/author/{user}/profile', "admin\AccountPanel@profile")->name("u-profile")->middleware('can:profile,user');
  Route::get('/author/{user}/account', "admin\AccountPanel@editProfile")->name("u-edit-profile")->middleware('can:profile,user');
  Route::put('/author/{user}/save', "admin\AccountPanel@updateProfile")->name("u-profile-update")->middleware('can:profile,user');
  Route::put('/author/{user}/password', "admin\AccountPanel@updatePassword")->name("u-profile-password")->middleware("password.confirm")->middleware('can:profile,user');
  Route::put('/author/{user}/bio', "admin\AccountPanel@updateBio")->name("u-profile-update-bio")->middleware('can:profile,user');
});