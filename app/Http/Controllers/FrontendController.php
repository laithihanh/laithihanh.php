<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\fontend\FrontendDangkyRequest;
use App\Http\Requests\fontend\FrontendDangnhapRequest;
use App\Http\Requests\fontend\ContactRequest;

use App\Models\Product;
use App\Models\Category;
use App\Models\Image;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Customer;
use App\Models\ProductAttr;
use App\Models\Size;
use App\Models\Color;
use App\Models\Star;
use App\Models\Comment;
use Auth;
use Illuminate\Support\Facades\Mail;
// use DB;
class FrontendController extends Controller
{
	public function index(){
		$slide=Banner::where('id','=','8')->get();
		$baner= Banner::where('id','>=','11')->get();
		$i=Banner::limit(3)->orderBy('id','ASC')->get();
		$product=Product::limit(6)->where('sale_price','<=','90.00')->get();
		$blog=Blog::limit(3)->orderBy('blog_id','ASC')->get();
		$rating = Star::where('product_id');
		$category=Category::all();
		return view('frontend.index',compact('product','slide','blog','icon','i','baner','category','rating'));
	}
	public function shop(){
		$category=Category::all(); 
		$product=Product::paginate(6);
		return view('frontend.shop-page',compact('product','category'));
	}
	public function single($id){
		$pro=Product::find($id);

		$img_pro=Image::where('product_id',$id)->get();
		$proAttr = ProductAttr::where('product_id',$id)->get();
		
		$colorId = explode(',',$proAttr[0]->color_id);
		$sizeId = explode(',', $proAttr[0]->size_id) ;

		$listSize = Size::whereIn('size_id',$sizeId)->get();
		$listColor = Color::whereIn('color_id',$colorId)->get();

		$product=Product::limit(3)->orderBy('product_id','ASC')->get();
		$rating= Star::with('cus:id,name')->paginate(20);	
		 return view('frontend.single-product',compact('img_pro','pro','listColor','listSize','product','rating'));
	}
	public function loi(){
		return view('frontend.loi');
	}
	public function category1(){
		$product=Product::where('cate_id','=','7')->get();
		return view('frontend.category1',compact('product'));
	}
	public function category2(){
		$product=Product::where('cate_id','=','9')->get();
		return view('frontend.category2',compact('product'));
	}
	public function category3(){
		$product=Product::where('cate_id','=','3')->get();
		return view('frontend.category3',compact('product'));
	}
	public function category4(){
		$product=Product::where('cate_id','=','4')->get();
		return view('frontend.category4',compact('product'));
	}
	public function blog(){
		$blog=Blog::limit(8)->orderBy('blog_id','ASC')->get();
		$tin=Blog::limit(4)->orderBy('blog_id','DESC')->get();
		$category=Category::all(); 
		return view('frontend.blog',compact('blog','tin','category'));
	}
	public function blogDetail($id){
		$comment= Comment::with('cus:id,name')->paginate(20);
		$tintuc=Blog::find($id);
		$blogDetail= Blog::where('blog_id',$id)->get();
		$category=Category::all(); 
		$tin=Blog::limit(4)->orderBy('blog_id','DESC')->get();
		return view('frontend.blogDetail',compact('blogDetail','category','tin','tintuc','comment'));
	}
	public function contact(){
		return view('frontend.contact');
	}
	public function login(){
		return view('frontend.login');
	}
	public function post_contact(ContactRequest $req){
		Mail::send('email.contact',[
			'name'=>$req->name,
			'subject'=>$req->subject,
			'content'=>$req->content
		],function($mail) use($req){
			$mail->to('laihanh698@gmail.com',$req->name);
			$mail->from('wendtravel68@gmail.com');
			$mail->subject($req->subject);
		});
		return redirect()->back()->with('success','Gửi email thành công');
	}
	public function postlogin(FrontendDangnhapRequest $req){
		$login=Auth::guard('cus')->attempt($req->only('email','password'),$req->has('remember'));
		if($login){
			return redirect('home')->with('thongbao','Đăng nhập thành công');
		}
		else{
			return redirect()->back()->with('message','Đăng nhập thất bại');
		}
	}
	public function register(){
		return view('frontend.register');
	}
	public function postdang_ky(FrontendDangkyRequest $req){
		Customer::create([
			'name'=>$req->name,
			'email'=>$req->email,
			'password'=>bcrypt($req->password),
			'phone'=>$req->phone,
			'address'=>$req->address
		]);
		return redirect()->route('register')->with('thành công','Tạo tài khoản thành công');
	}
	public function dang_xuat(){
		Auth::guard('cus')->logout();
		return redirect('home')->with('alert','Đăng xuất thành công');
	}
	public function Search(Request $req){
        $product=Product::where('name','like','%'.$req->key.'%')->get();
            return view('frontend.search',compact('product'));    
        }
	public function tktin(Request $req){
		$category=Category::all(); 
        $tin=Blog::where('title','like','%'.$req->key.'%')->get();
            return view('frontend.searchTin',compact('tin','category'));   
        }
    // public function view($slug){
    // 	$category =  Category::where('slug',$slug)->first();
    // 	return view ('frontend.category',compact('category'));
    // }
}
 ?>