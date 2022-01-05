<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['customer_id','blog_id','content'];
    
    public function cus(){
  		return $this->belongsTo( Customer::class,'customer_id');
  }
  public function comsment(){
    	return $this->hasOne(Blog::class,'blog_id','blog_id');
    }
}
