<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\Category\CategoryAddRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category= Category::paginate(3)
        return view ('backend.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryAddRequest $request,Category $category)
    {
        $category->add();
         return redirect()->route('admin.category.store');
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
        $cate= Category::find($id);
       return view ('backend.category.edit',compact('cate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Category $category)
    {
        $category->edit($category->cate_id);
        return redirect()->route('admin.category.store')->withSuccess('Cập nhập bản ghi thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cate=Category::find($id);
        if($cate && $cate->products->count() ==0){
            $cate->delete();
            return redirect()->back()->withSuccess('Xóa bản ghi thành công');
        }else{
             return redirect()->back()->withSuccess('Xóa bản ghi không thành công');
        }
       
        
    }
    public function getTk(Request $req){  
        $category=Category::where('name','like','%'.$req->key.'%')->paginate(3);
             return view('backend.category.index',compact('category'));   
        }   
}

