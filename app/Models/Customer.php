<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Customer;
class Customer extends Authenticatable
{
    use Notifiable;

	
   protected $fillable = ['name','email','password','phone','address'];

   public function wish(){
        return $this->hasMany(Wishlist::class,'customer_id');
    }
    public function order(){
        return $this->hasMany(Order::class,'customer_id');
    }
     public function star(){
        return $this->hasMany(Star::class,'customer_id');
    }

   public function wishlists(){
   		return $this->belongsToMany(Product::class,'wishlists','customer_id','product_id');
   }
   public function order_list(){
      return $this->hasMany(Order::class,'customer_id','order_id');
   }
   public function add(){
   		$user=Customer::create([
            'name'=>request()->name,
            'email'=>request()->email,
            'password'=>bcrypt(request()->password), 
            'phone'=>request()->phone,
            'address'=>request()->address
        ]);
      return $user;
   }
}

