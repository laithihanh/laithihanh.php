<?php
namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Product;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Blog;
use Illuminate\Support\Facades\Redirect;

class BackendController extends Controller
{
	public function index(){
		$product_acount = Product::count();
		$order_acount = Order::count();
		$cus_acount = Customer::count();
		$category_acount = Category::count();
		$order = Order::where('status',1)->get();
		return view('backend.index',compact('product_acount','order_acount','cus_acount','category_acount','order'));
	}
	
}
 ?>