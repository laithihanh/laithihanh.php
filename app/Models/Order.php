<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'order_id';
    protected $fillable = ['customer_id','payment','total_amount','note'];

  public function orderdetail(){
        return $this->hasMany( OrderDtail::class,'order_id','order_id');
    }
  public function cus(){
  	return $this->belongsTo( Customer::class,'customer_id');
  }
  public function add(){
  		$order=Order::create([
            'customer_id '=>request()->customer_id,
            'total_amount'=>request()->total_amount,
            'payment'=>request()->payment

        ]);
      return $order;
  }
}
