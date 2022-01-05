<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Image;
use App\Models\Color;
use App\Models\Size;
use DB;
use App\Models\ProductAttr;
use App\Http\Requests\Product\ProductAddRequest;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product= Product::paginate(5);
        return view ('backend.product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        $color =Color::all();
        $size=Size::all();
        return view ('backend.product.add',compact('category','color','size'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductAddRequest $request, Product $product)
    {
        $pro = new Product();
        $pro->add();
        return redirect()->route('admin.product.store')->withSuccess('thêm mới bản ghi thành công');;
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
        $category=Category::all();
        $color =Color::all();
        $size=Size::all();
        $pro= Product::find($id);
        $img_pro=Image::where('product_id',$id)->get();
        $id_attr=ProductAttr::where('product_id',$id)->get();
        // tách chuỗi
        $colorid = explode(",", $id_attr[0]->color_id) ;
        $sizeid =  explode(",", $id_attr[0]->size_id);
         return view ('backend.product.edit',compact('pro','category','img_pro','color','size','colorid','sizeid'));
  
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
        $pro = new Product();
        $pro->edit($id);
        return redirect()->route('admin.product.store')->withSuccess('Cập nhập bản ghi thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = Product::find($id);
        if($pro->order_detail->count()==0  && $pro->wish->count()==0 && $pro->star->count() ==0){
            $pro->delete();
            return redirect()->back()->withSuccess('Xóa bản ghi thành công');
        }else{
            return redirect()->back()->withSuccess('Xóa bản ghi không thành công');
        } 
    }
   
    public function getSearch(Request $req){  
        $product=Product::where('name','like','%'.$req->key.'%')->paginate(5);
            return view('backend.product.index',compact('product'));
    }

    public function viewProduct($id){
       $sanpham= Product::where('product_id',$id)->get();
       $pro = Product::where('product_id',$id)->first();
       // Lấy màu
       $color=array($pro->product_Attr->color_id);
       $arrColor = explode(",", $color[0]);
       $nam_color=Color::whereIn('color_id',$arrColor)->get();
       // Lấy size
       $size = array($pro->product_Attr->size_id);
       $arrSize = explode(",", $size[0]);
       $nam_size=Size::whereIn('size_id',$arrSize)->get();
       $product = Product::find($id);

       return view('backend.product.productDetail',compact('sanpham','product','pro','nam_color','nam_size'));
    }

}
