<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Role;
use App\Models\UserRole;
use Auth;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;
        $data = User::paginate(15);
        return view('backend.user.index',compact('data','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $roles= Role::orderBy('name','ASC')->get();
        return view ('backend.user.add',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
         $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'
         ]);
         $data= [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
         ];
         if($user = User::create($data)){
            return redirect()->route('admin.user.index');
            if(is_array($request->role)){
            foreach($request->role as $role_id){
                UserRole::create([
                    'user_id'=>$id,
                    'role_id'=>$role_id
                ]);
            }
            }
         }
         return redirect()->route('admin.user.store');
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
        $user= User::find($id);
        $role_assigments =  $user->getRoles->pluck('name','id')->toArray();
       // dd( $role_assigments);
        $roles= Role::orderBy('name','ASC')->get();
       return view ('backend.user.edit',compact('user','roles','role_assigments'));
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
        $user= User::find($id);
        $rules = [
            'name'=>'required',
            'email'=>'required|email|unique:users,email,'.$user->id,
        ];
        $messages = [
            'name.required'=>'Tên đã tồn tại',
            'email.required'=>'Email đã tồn tại'
        ];

        if($request->password != ''){
            $rules['confirm_password'] = 'required|same:password';

            $messages['confirm_password.required'] = 'Vui lòng nhập lại mật khẩu';
            $messages['confirm_password.same'] = 'Nhập lại mật khẩu không đúng';
        }
         // dd($request->all());
        $request->validate($rules,$messages);
        $data=[
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=>$request->password ? bcrypt($request->password) :$user->password,
        ];
        $user->update($data);
        if(is_array($request->role)){
            UserRole::where('user_id',$id)->delete();
            foreach($request->role as $role_id){
                UserRole::create([
                    'user_id'=>$id,
                    'role_id'=>$role_id
                ]);
            }
        }
        return  redirect()->route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       User::find($id)->delete();
        return redirect()->back()->withSuccess('Xóa bản ghi thành công');
    }
}
