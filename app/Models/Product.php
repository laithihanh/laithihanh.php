<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Image;
use App\Models\ProductAttr;
use App\Models\Star;
class Product extends Model
{
	protected $primaryKey = 'product_id';
    protected $fillable = ['name','cate_id','price','sale_price','images','description','status','quantity'];

    public function add(){
        // Cắt đường dẫn ảnh
    	 $image=str_replace(url('uploads').'/','', request()->images);
         $product= $this->create([
            'name'=>request()->name,
            'slug'=>request()->slug,
            'cate_id'=>request()->cate_id,
            'images'=>$image,
            'price'=>request()->price,
            'sale_price'=>request()->sale_price,
            'quantity'=>request()->quantity,
            'description'=>request()->description,
            'status'=>request()->status
        ]);
        $idPro = $product->product_id;
        // thêm ảnh liên quan vào bảng Image
        $images=json_decode(request()->imagesList); 
         foreach($images as $key =>$value){
            $img=Image::create([
                'product_id'=>$idPro,
                'images'=>str_replace('http://localhost/MARCHO/uploads/','',$value),
            ]);
        }
        // Thêm màu vào bảng product_attrs
        $colors = request()->color;
        $colorItem = "";
        $i=0;
        foreach ($colors as $key => $value) {
            $i++;
            if($i==1){
             $colorItem .="$value";
            }else{
                $colorItem .=",$value";
            }
        }
        // Thêm size vào bảng product_attrs
        $sizes = request()->size;
        $i=0;
        $valueSize="";
        foreach ($sizes as $key => $value) {
            $i++;
            if($i==1){
             $valueSize .="$value";
            }else{
                $valueSize .=",$value";
            }
        }
        $attr=ProductAttr::create([
            'product_id'=>$idPro,
            'color_id'=>$colorItem,
            'size_id'=>$valueSize
        ]);
       
    }
    public function edit($id){
    	// SỬA ẢNH MÔ TẢ 
        $img_pro=Image::where('product_id',$id)->delete();
        $images=json_decode(request()->imagesList); 
            foreach($images as $key =>$value){
            Image::create([
                'product_id'=>$id,
                'images'=>str_replace('http://localhost/MARCHO/uploads/','',$value),
            ]);
        }
        // SỬA TÊN, ẢNH SẢN PHẨM,....
        $image=str_replace(url('uploads').'/','', request()->images);
        $product= Product::find($id);
        $product->update([
            'name'=>request()->name,
            'cate_id'=>request()->cate_id,
            'images'=>$image,
            'description'=>request()->description,
            'quantity'=>request()->quantity,
            'sale_price'=>request()->sale_price,
            'price'=>request()->price,
            'status'=>request()->status
        ]);
        $idPro = $product->product_id;
        $colors = request()->color;
        $colorItem = "";
        $i=0;
        foreach ($colors as $key => $value) {
            $i++;
            if($i==1){
             $colorItem .="$value";
            }else{
                $colorItem .=",$value";
            }
        }
        $sizes = request()->size;
        $i=0;
        $valueSize="";
        foreach ($sizes as $key => $value) {
            $i++;
            if($i==1){
             $valueSize .="$value";
            }else{
                $valueSize .=",$value";
            }
        }
        $attr=ProductAttr::where('product_id',$id)->delete();
        ProductAttr::create([
            'product_id'=>$idPro,
            'color_id'=>$colorItem,
            'size_id'=>$valueSize
        ]);
    }
    public function productDetail(){
        return $this->hasMany(ProductAttr::class, 'product_id','product_id');
    }
    // public function colors(){
    //     return $this->belongsToMany(Color::class,'product_attrs','product_id','color_id');
    // }
    public function product_Attr(){
        return $this->hasOne(ProductAttr::class,'product_id','product_id');
    }
    // public function sizes(){
    //     return $this->belongsToMany(Size::class,'product_attrs','product_id','size_id');
    // }
    public function getImages(){
        return $this->hasMany(Image::class,'product_id','product_id');
    }
    public function order_detail(){
        return $this->hasMany(OrderDtail::class,'product_id','product_id');
    }
    public function wish(){
        return $this->hasMany(Wishlist::class,'product_id','product_id');
    }
    public function star(){
        return $this->hasMany(Star::class,'product_id','product_id');
    }
    public function number_star($id){
        $star = Star::where('product_id', $id)->get();
        if ($star->count() != 0) {
            $qt = 0;
            foreach ($star as $key => $value) {
                $qt += $value->star;
            }
            return $qt / $star->count();
        }else{
            return 0;
        }
    }
}

