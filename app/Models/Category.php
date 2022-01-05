<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'cate_id';
    protected $fillable = ['name','slug','images','description','status'];
    public function products(){
        return $this->hasMany( Product::class,'cate_id','cate_id');
    }

    public function add(){
    	$category=Category::create([
            'name'=>request()->name,
            'slug'=>request()->slug,
            'description'=>request()->description,
            'status'=>request()->status
        ]);
        return $category;
    }
    public function edit($id){
    	$category= $this->where('cate_id',$id)->update([
            'name'=>request()->name,
            'slug'=>request()->slug,
            'description'=>request()->description,
            'status'=>request()->status
        ]);
        return $category;
    }
}
