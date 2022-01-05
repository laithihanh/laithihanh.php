<?php

namespace App\Http\Requests\fontend;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\customer\CustomerRequest;
class CustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required|email|unique:customers,email',
            'password'=>'required|min:6|max:32',
            'passwordAgain'=>'required|same:password',
            'phone'=>'required|min:6|max:32',
            'address'=>'required'
        ];
    }
     public function messages()
    {
        return [
           'name.required'=>'Bạn chưa nhập tên',
            'email.required'=>'Bạn chưa nhập email',
            'email.email'=>'Bạn chưa nhập đúng định dạng email',
            'email.required'=>'Email đã tồn tại',
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu phải ít nhất 6 ký tự',
            'password.max'=>'Mật khẩu chỉ tối đa 32 ký tự',
            'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
            'passwordAgain.same'=>'Mật khẩu nhập lại chưa khớp',
            'phone.required'=>'Bạn chưa nhập số điện thoại',
            'address.required'=>'Bạn chưa nhập địa chỉ'
        ];
    }
}
