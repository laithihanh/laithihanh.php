<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tintuc= Blog::paginate(2);
        return view ('backend.blog.index',compact('tintuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view ('backend.blog.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tintuc = new Blog();
        $tintuc->add();
        return redirect()->route('admin.blog.store');
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
       $blog= Blog::find($id);
       return view ('backend.blog.edit',compact('blog'));
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
        $tintuc = new Blog();
        $tintuc->edit($id);
        return redirect()->route('admin.blog.store')->withSuccess('Cập nhập bản ghi thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Blog::find($id)->delete();
        return redirect()->back()->withSuccess('Xóa bản ghi thành công');
    }
    public function getTimkiem(Request $req){
        $tintuc=Blog::where('title','like','%'.$req->key.'%')->paginate(2);
            return view('backend.blog.index',compact('tintuc'));
        }
    public function comment(){
         $comments= Comment::all();
        return view('backend.blog.comment',compact('comments'));
    }

}
