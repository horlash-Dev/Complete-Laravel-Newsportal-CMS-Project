@auth
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a href="{{route("dashboard")}}"><i class="la la-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
          </li>

          <li class=" nav-item"><a href="{{route("u-profile", auth()->user()->username)}}" target=""><i class="ft-user-check"></i><span class="menu-title" data-i18n="eCommerce">Profile</span></a>
          </li>
          <li class=" navigation-header"><span>Articles panel</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right"></i>
          </li>
          @can('Post List','master admin')
          <li class=" nav-item"><a href="" target=""><i class="ft-clipboard"></i><span class="menu-title" data-i18n="plus">Articles</span></a>
            <ul class="menu-content">
              @can('Post List','master admin')
              <li><a class="menu-item" href="{{url("/is_admin/all/articles")}}"><i></i><span data-i18n="eCommerce">All Articles</span></a>
              </li>
              @endcan
              @can('Post Add','master admin')
              <li><a class="menu-item" href="{{route("article.create")}}"><i></i><span data-i18n="plus">Publish New Article</span></a>
              </li>
              <li><a class="menu-item" href="{{url("/is_admin/gallery")}}"><i></i><span data-i18n="plus">Image Libary</span></a>
              </li>
              @endcan
            </ul>
          </li>
          @endcan
          @can('Category List','master admin')
          <li class=" nav-item"><a href="" target=""><i class="ft-grid"></i><span class="menu-title" data-i18n="">Categories</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="{{url("/is_admin/categories")}}"><i></i><span data-i18n="eCommerce">Category</span></a>
              </li>
              @can('Category Add','master admin')
              <li><a class="menu-item" href="{{route("new-category")}}"><i></i><span data-i18n="plus">Publish Category</span></a>
              </li>
              @endcan
            </ul>
          </li>
          <li class=" nav-item"><a href="" target=""><i class="ft-grid"></i><span class="menu-title" data-i18n="">Sub Categories</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="{{url("/is_admin/sub/categories")}}"><i></i><span data-i18n="eCommerce">Sub-Category</span></a>
              </li>
              @can('Category Add','master admin')
              <li><a class="menu-item" href="{{route("new-sub-category")}}"><i></i><span data-i18n="plus">Publish Category</span></a>
              </li>
              @endcan
            </ul>
          </li>
          <li class=" nav-item"><a href="" target=""><i class="ft-tag"></i><span class="menu-title" data-i18n="">Post Tags</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="{{url("/is_admin/tags")}}"><i></i><span data-i18n="eCommerce">Tags</span></a>
              </li>
            </ul>
          </li>
          @endcan
          @can('Comment View','master admin')
          <li class=" nav-item"><a href="" target=""><i class="ft-message-circle"></i><span class="menu-title" data-i18n="">Comment</span></a>
            @can('Comment View','master admin')
            <ul class="menu-content">
              <li><a class="menu-item" href="{{url("/is_admin/comments")}}"><i></i><span data-i18n="eCommerce">Aprroved Comments</span></a>
              </li>
              <li><a class="menu-item" href="{{url("/is_admin/comments/unapprove")}}"><i></i><span data-i18n="plus">UnAprroved Comments</span></a>
              </li>
            </ul>
            @endcan
          </li>
          <li class=" nav-item"><a href="" target=""><i class="ft-message-square"></i><span class="menu-title" data-i18n="">Comments Replies</span></a>
            <ul class="menu-content">
              @can('Comment View','master admin')
              <li><a class="menu-item" href="{{url("/is_admin/replies")}}"><i></i><span data-i18n="eCommerce">Aprroved Comments</span></a>
              </li>
              <li><a class="menu-item" href="{{url("/is_admin/replies/unapprove")}}"><i></i><span data-i18n="plus">UnAprroved Comments</span></a>
              </li>
              @endcan
            </ul>
          </li>
          @endcan
          @can('master admin')
          <li class=" navigation-header"><span data-i18n="Security Settings">User Account Settings</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right"></i>
          </li>
          <li><a class="menu-item" href="{{url("/is_admin/all/authors")}}"><i class="ft-users"></i><span data-i18n="eCommerce">Authors</span></a>
          </li>
          <li><a class="menu-item" href="{{url("/is_admin/author/register")}}"><i class="ft-user-check"></i><span data-i18n="eCommerce">Add New</span></a>
          </li>
          <li><a class="menu-item" href="{{route("u-permission")}}"><i class="ft-user-plus"></i><span data-i18n="eCommerce">Author Permissions</span></a>
          </li>
          <li class=" navigation-header"><span data-i18n="Security Settings">Trashed panel</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right"></i>
          </li>
          <li class=" nav-item"><a href="{{route("tr-post")}}" target=""><i class="ft-trash-2"></i><span class="menu-title" data-i18n="eCommerce">Articles</span></a>
          </li>
          <li class=" nav-item"><a href="{{route("tr-user")}}" target=""><i class="ft-user-minus"></i><span class="menu-title" data-i18n="eCommerce">Authors</span></a>
          </li>
          <li class=" nav-item"><a href="{{route("tr-permission")}}" target=""><i class="ft-trash"></i><span class="menu-title" data-i18n="eCommerce">Permissions</span></a>
          </li>
          <li class=" nav-item"><a href="{{route("tr-roles")}}" target=""><i class="ft-trash"></i><span class="menu-title" data-i18n="eCommerce">Roles</span></a>
          </li>
          @endcan
          @can('master admin')
          <li class=" navigation-header"><span data-i18n="Security Settings">Security Settings</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right"></i>
          </li>
          <li class=" nav-item"><a href="{{url("/is_admin/permissions")}}" target=""><i class="ft-lock"></i><span class="menu-title" data-i18n="eCommerce">Permissions</span></a>
          </li>
          <li class=" nav-item"><a href="{{url("/is_admin/direct/permission")}}" target=""><i class="ft-lock"></i><span class="menu-title" data-i18n="eCommerce">Direct Permission</span></a>
          </li>
          <li class=" nav-item"><a href="" target=""><i class="ft-shield"></i><span class="menu-title" data-i18n="">Roles</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="{{url("/is_admin/roles")}}"><i></i><span data-i18n="eCommerce">All Roles</span></a>
              </li>
              <li><a class="menu-item" href="{{route("new-roles")}}"><i></i><span data-i18n="plus">Add Role</span></a>
              </li>
            </ul>
          </li>
          @endcan
          @can('master admin')
          <li class=" navigation-header"><span data-i18n="Security Settings">Site Settings</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right"></i>
          </li>
          <li class=" nav-item"><a href="{{route("u-general")}}" target=""><i class="ft-settings"></i><span class="menu-title" data-i18n="eCommerce">Site Info</span></a>
          </li>
          <li class=" nav-item"><a href="{{route("u-menus")}}" target=""><i class="ft-settings"></i><span class="menu-title" data-i18n="eCommerce">Menus</span></a>
          </li>
          <li class=" nav-item"><a href="{{route("u-home")}}" target=""><i class="ft-tv"></i><span class="menu-title" data-i18n="eCommerce">Homepage</span></a>
          </li>
          @endcan
        </ul>
      </div>
  </div>
  @endauth