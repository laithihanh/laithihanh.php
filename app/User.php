<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Role;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function hasPermission($route){
        $routes = $this->routes();

        return in_array($route,$routes) ? true : false;
        // return true;
    }
    // Các route đc gán cho người dùng này
    public function routes(){
       $data = [];
        foreach($this->getRoles as $role){
            $permission = json_decode($role->permissions);
            foreach($permission as $per){
                if(!in_array($per,$data)){
                     array_push($data,$per); 
                }
            }        
        }
        // dd($data);
        return $data;
    }
    public function getRoles(){
        return $this->belongsToMany('App\Models\Role','user_roles','user_id','role_id');
    }
}
