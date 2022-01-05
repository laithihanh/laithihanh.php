<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = ['name','images','content'];
    public function add(){
    	$image=str_replace(url('uploads').'/','', request()->images);
        // dd($image);
        $banner=Banner::create([
            'name'=>request()->name,
            'slug'=>request()->slug,
            'images'=>$image,
            'content'=>request()->content,
            
        ]);
    }
    public function edit($id){
    	$image=str_replace(url('uploads').'/','', request()->images);
        $banner= Banner::find($id);
        $banner->update([
            'name'=>request()->name,
            'images'=>$image,
            'content'=>request()->content,
        ]);
    }
}
 
 