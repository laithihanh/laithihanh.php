<?php 
namespace App\Http\Controllers;
use  Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDtail;
use App\Models\Payment;
use Auth;
use Session;
class CheckoutController extends Controller
{
	public function __construct(){
		$this->middleware('cus');
	}
	public function checkout(){
		$payment= Payment::all();
		return view('frontend.checkout',compact('payment'));
	}

	public function post_checkout(Request $req, Cart $cart){
		$c_id = Auth::guard('cus')->user()->id;
		if($order = Order::create([
			'customer_id' =>$c_id,
			'note'=> $req->note,
			'payment'=>$req->payment,
			'total_amount'=>($cart->total_price+30)
		])){
			$order_id = $order->order_id;

			foreach($cart->items as $product_id=>$item){
				$product = $item['product_id'];
				$color = $item['color_id'];
				$size = $item['size_id'];
				$quantity = $item['quantity'];
				$price = $item['price'];


				OrderDtail::create([
					'order_id'=>$order_id,
					'product_id'=>$product,
					'color'=>$color,
					'size'=>$size,
					'price'=>$price,
					'quantity'=>$quantity
				]);	
			}
			session(['cart'=>'']);
			return redirect()->back()->with('success','Đặt hàng thành công');
	}else{
		return redirect()->back()->with('success','Đặt hàng không thành công');
	}
}
}
 ?>