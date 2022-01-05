<?php 
namespace App\Http\Controllers;
use  Illuminate\Http\Request;
use App\Models\Star;
use App\Models\Product;
use Auth;
class RatingController extends Controller
{
	public function __construct(){
		$this->middleware('cus');
	}
	public function post_danhgia(Request $req, $id){

		$c_id = Auth::guard('cus')->user()->id;
		Star::create([
			'customer_id'=>$c_id,
			'product_id'=>$id,
			'star'=>$req->star,
			'content'=>$req->content
		]);
		return redirect()->back()->with('thanhcong','Gửi đánh giá thành công');
	}

}

 ?>