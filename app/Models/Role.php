<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name','permissions'];

    public function add(){
    	request()->validate([
            'name'=>'required'
        ],[
            'name.required'=>'Tên nhóm quyền không để trống'
        ]);
        // array_push(request()->route,'admin.index');
        $routes= json_encode(request()->route);
         $role=Role::create([
            'name'=>request()->name,
            'permissions'=>$routes
        ]);
        return $role;
    }
    public function edit($id){
    	$role=Role::find($id);
        request()->validate([
            'name'=>'required'
        ],[
            'name.required'=>'Tên nhóm quyền không để trống'
        ]);
        // array_push(request()->route,'admin.index');
        $routes= json_encode(request()->route);
        $role->update([
            'name'=>request()->name,
            'permissions'=>$routes
        ]);
        return $role;
    }
}
