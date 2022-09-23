<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
       return  $this->middleware(['auth','permission:master admin|Role Add|Role Update|Role Delete']);
    }

    public function index()
    {   
            $allrole = Role::orderBy("created_at","DESC")->get();
            $page_name = "Roles Panel";
            return view('admin.dashboard.roles.view',compact("allrole","page_name"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createRoles()
    {   $permissions = Permission::latest()->pluck("name","id");
        $page_name = "PUBLISH NEW ROLE";
        return view('admin.dashboard.roles.create',compact("permissions",'page_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeRoles(Request $request)
    {
        $request->validate(["name"=>"required|string","description"=>"string","permissions"=>"required|array"]);
        $roles= Role::create($request->only("name","description"));
            $roles->givePermissionTo($request->permissions);
        return response()->json(["roles_submitted"=>"roles_successfully!","url"=>"/is_admin/roles"]);
   
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
    public function editRoles(Role $role)
    {   
        $role_name= $role->name;
        $permissions = Permission::latest()->pluck("name","id");
        $permission = $role->permissions()->pluck("name","id");
        return view('admin.dashboard.roles.modify',compact("permissions","permission","role","role_name"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateRoles(Request $request, Role $roles)
    {
        $request->validate(["name"=>"required|string","description"=>"string","permissions"=>"required|array"]);
        $roles->name = $request->name;
        $roles->description = $request->description;
        $roles->save();
        $roles->revokePermissionTo($roles->permissions);
        $roles->givePermissionTo($request->permissions);
        return response()->json(["roles_updated"=>"roles_modify_successfully!","url"=>url("is_admin/roles")]);
   
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyRoles(Role $role)
    {
        $role->delete();
        return redirect()->back()->with("trashed", "Role Trashed Successfully!");
    }
}
