<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $primaryKey = 'wishlist_id';
    protected $fillable = ['customer_id','product_id'];

    public function cus(){
  	return $this->belongsTo(Customer::class,'customer_id');
    }
    public function product(){
    	return $this->belongsTo(Product::class,'product_id');
    }
    public function add(){
  		$wishlist=Wishlist::create([
            'customer_id '=>request()->customer_id,
            'product_id'=>request()->product_id,
        ]);
      return $wishlist;
  }
}
