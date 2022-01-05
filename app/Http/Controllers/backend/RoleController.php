<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use Route;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Role::paginate(15);
        return view('backend.role.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $routes = [];
        $all = Route::getRoutes();
        foreach($all as $r){
            $name = $r->getName();
            // strpos tìm kí tự đầu tiên trong một chuỗi
            $pos = strpos($name,'admin');
            if($pos !== false){
                array_push($routes,$r->getName());
            }
        }
         // dd($routes);
        return view('backend.role.add',compact('routes'));
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = new Role();
        $role->add();
        return redirect()->route('admin.role.index')->with('success','Thêm nhóm quyền thành công');
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
    public function edit($id)
    {
        $model = Role::find($id);
        $permissions = json_decode($model->permissions);
        // dd($permissions);
        $routes = [];
        $all = Route::getRoutes();

        foreach($all as $r){
            $name = $r->getName();
            $pos = strpos($name,'admin');
            if($pos !== false){
                array_push($routes,$name);
            }
        }

        return view('backend.role.edit',compact('routes','model','permissions'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $role = new Role();
        $role->edit($id);
        
        return redirect()->route('admin.role.index')->withSuccess('Cập nhập bản ghi thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Role::find($id)->delete();
        return redirect()->back()->withSuccess('Xóa bản ghi thành công');
    }
}
