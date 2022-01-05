<?php
namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\fontend\FrontendDangnhapRequest;
use Auth;


class LoginController extends Controller
{
	
	public function getdangnhap (){
		if(Auth::check()){
			return redirect('admin');
		}else{
			return view('backend.admin.loginAdmin');
		}
		
	}
	public function postdangnhap(FrontendDangnhapRequest $req){
		$email = $req->email;
		$password = $req->password;

		$result=User::where('email',$email)->first();
		if(Auth::attempt($req->only('email','password'))){
			return redirect('admin');
		}
		else{
			return redirect()->back()->with('message','Sai email hoac password');
		}
		return view('backend.index');
		
	}
	public function getdangky (){
		return view('backend.admin.dangky');
	}
	public function postdangky (Request $req){
		User::create([
			'name'=>$req->name,
			'email'=>$req->email,
			// bcrypt:mã hóa mật khẩu
			'password'=>bcrypt($req->password)
		]);
		echo"Đăng ký thành công";
	}


	public function logout(){
		Auth::logout();
		return redirect()->route('postdangnhap');

	}
	public function error(){
		$code = request()->code;
		$errors = config('error.',$code);
		return view('backend.error',compact('errors'));
	}
}
 ?>