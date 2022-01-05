<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $primaryKey = 'blog_id';
    protected $fillable = ['name','images','title','content'];
    public function add(){
    	$image=str_replace(url('uploads').'/','', request()->images);
        // dd($image);
        $tintuc=Blog::create([
            'title'=>request()->title,
            'images'=>$image,
            'content'=>request()->content,
        ]);
    }
    public function edit($id){
    	$image=str_replace(url('uploads').'/','', request()->images);
        $tintuc= Blog::find($id);
        $tintuc->update([
            'title'=>request()->title,
            'content'=>request()->content,
            'images'=>$image,
        ]);
    }
}
