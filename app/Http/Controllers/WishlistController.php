<?php 
namespace App\Http\Controllers;
use  Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Product;
use Auth;
class WishlistController extends Controller
{
	public function __construct(){
		$this->middleware('cus');
	}
	public function wishlist(){
		$user = Auth::guard('cus')->user();
		$product = $user->wishlists;
		return view('frontend.wishlist',compact('product'));
	}
	public function addWishlist(Request $req,$id){
		$user = Auth::guard('cus')->user();
		$c_id = $user->id;
		$wish = Wishlist::create([
			'customer_id'=>$c_id,
			'product_id'=>$id
		]);
		return redirect()->route('wishlist');
	}
	public function removeWish($id){
		 Wishlist::where('product_id','=',$id)->delete();
		return redirect()->back()->withSuccess('Xóa sản phẩm thành công');
	}
}

 ?>