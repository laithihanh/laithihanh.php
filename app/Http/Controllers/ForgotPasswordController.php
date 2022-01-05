<?php 
namespace App\Http\Controllers;
use  Illuminate\Http\Request;
use App\Models\Customer;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\fontend\PasswordRequest;
class ForgotPasswordController extends Controller
{
	public function quenmk(){
		return view('frontend.email');
	}
	public function sendquenmk(Request $req){
		$email = $req->email;

		$checkedCus = Customer::where('email',$email)->first();
		// Kiểm tra xem email có đúng định dạng chưa
		if(!$checkedCus){
			return redirect()->back()->with('success','Email không tồn tại');
		}
		// mã hóa link dổi mật khẩu
		$code = bcrypt(md5(time().$email));

		// Thêm mới vào cơ sở dl
		$checkedCus->code = $code;
		// carbon lấy ra ngày h hiện tại
		$checkedCus->time_code = Carbon::now();
		$checkedCus->save();

		$url= route('resetPassword',['code'=>$checkedCus->code,'email'=>$email]);
		$data=[
			'route'=>$url
		];
		Mail::send('email.reset_password',$data,function($mail) use($checkedCus){
			$mail->to($checkedCus->email);
			$mail->from('wendtravel68@gmail.com');
			$mail->subject('Lấy lại mật khẩu');
		});
		return redirect()->back()->with('success','Link lấy lại mật khẩu đã được gửi vào email của bạn');
	}
	public function resetpassword(Request $req){
		$code = $req->code;
		$email= $req->email;

		$checkedCus = Customer::where([
			'code'=>$code,
			'email'=>$email
		])->first();

		if(!$checkedCus){
			return redirect()->with('success','Đường dẫn lấy lại mật khẩu không đúng, bạn vui lòng thử lại');
		}
		return view('frontend.quenmk');
	}
	public function saveResetpassword(PasswordRequest $PasswordRequest){
		if($PasswordRequest->password){
			$code = $PasswordRequest->code;
			$email = $PasswordRequest->email;

			$checkedCus = Customer::where([
			'code'=>$code,
			'email'=>$email
			])->first();
			if(!$checkedCus){
				return redirect()->with('success','Đường dẫn lấy lại mật khẩu không đúng, bạn vui lòng thử lại');
			}
			$checkedCus->password = bcrypt($PasswordRequest->password);
			$checkedCus->save();

			return redirect()->route('getlogin')->with('success','Mật khẩu đã được đổi thành công, mời bạn đăng nhập');
		}
	}
}
 ?>