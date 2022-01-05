<?php 
namespace App\Http\Controllers;
use  Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
	public function index(){
		
		return view('frontend.cart');
	}
	public function add(Cart $cart,$id){
		$qttt = request()->quantity ? request()->quantity : 1;
		$color =request()->color_id;
		$size = request()->size_id;
		$product = Product::find($id);
		$cart->add($product,$qttt,$color,$size);
		return redirect()->back()->with('success','Thêm sản phẩm vào giỏ hàng thành công');
	}
	public function remove(Cart $cart,$id){
		$color =request()->color_id;
		$size = request()->size_id;
		$cart->remove($id,$color,$size);
		return redirect()->back()->withSuccess('Xóa sản phẩm khỏi giỏ hàng thành công');
	}
	public function update(Cart $cart,$id){
		$color =request()->color_id;
		$size = request()->size_id;
		$quantity = request()->quantity ? request()->quantity:1;
		$cart->update($id,$color,$size,$quantity);
		return redirect()->back()->withSuccess('Cập nhập sản phẩm thành công');
	}
	public function clear(Cart $cart){
	
		$cart->clear();
		return redirect()->back()->withSuccess('Xóa giỏ hàng thành công');
	}
}

 ?>