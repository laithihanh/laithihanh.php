<?php 
namespace App\Http\Controllers;
use  Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Comment;
use App\Models\Blog;
use Auth;
class CommentController extends Controller
{
	public function post_comment(Request $req, $id){
		$c_id = Auth::guard('cus')->user()->id;
		Comment::create([
			'customer_id'=>$c_id,
			'blog_id'=>$id,
			'content'=>$req->content
		]);

		return redirect()->back()->with('success','Gửi comment thành công');
	}

}

 ?>