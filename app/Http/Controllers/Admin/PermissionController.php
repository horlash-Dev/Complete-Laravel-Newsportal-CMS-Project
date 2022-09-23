<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use App\User;
class PermissionController extends Controller
{   
    function __construct()
    {
       return  $this->middleware(['auth','permission:master admin|Permission Add|Permission List|Permission Update|Permission Delete']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    $allpermission = Permission::orderBy("created_at","DESC")->get();
        $page_name = "Permisson Panel";
        return view('admin.dashboard.permission.view',compact("allpermission","page_name"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPermission()
    {
        // return view('admin.dashboard.permission.create');
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePermission(Request $request)
    {
        $request->validate(["name"=>"required|string","description"=>"string"]);
        Permission::create($request->only("name","description"));
        return response()->json(["permission_submitted"=>"permission_successfully!","url"=>"/is_admin/permissions"]);
    }

    protected function directAccessStore(Request $request)
    {   $this->authorize("performAction",auth()->user());
        $request->validate(["Username"=>"required|string","Permissions"=>"required|string"]);
         $user=  User::where("username", $request->Username)->firstorfail();
       $user->givePermissionTo($request->Permissions);
       return redirect()->back()->with("d-approved","permission granted!");
    }

    protected function directAccess()
    {  $this->authorize("performAction",auth()->user());
        $page_name = "DIRECT USER PERMISSION";
       return view('admin.dashboard.permission.direct',compact('page_name'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editPermission(Permission $permission)
    {   $page_name = $permission->name;
        return view('admin.dashboard.permission.modify',compact('page_name',"permission"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePermission(Request $request, Permission $permission)
    { $request->validate(["name"=>"required|string","description"=>"string"]);
        $permission->name = $request->name;
        $permission->description = $request->description;
        $permission->save();
        return response()->json(["permission_updated"=>"permission_modify_successfully!","url"=>route("edit-permission",[$permission->Url])]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyPermission(Permission $permission)
    {
        $permission->delete();
        return redirect()->back()->with("trashed", "Permission Trashed Successfully!");
    }
}
