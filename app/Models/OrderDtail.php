<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class OrderDtail extends Model
{
    protected $primaryKey = 'orderDetail_id';
    protected $fillable = ['order_id','product_id','color','size','quantity','price'];
    public function product(){
    	return $this->belongsTo(Product::class,'product_id');
    }
    public function attr_color(){
        return $this->hasOne(Color::class,'color_id','color');
    }
    public function attr_size(){
        return $this->hasOne(Size::class,'size_id','size');
    }
    
}
