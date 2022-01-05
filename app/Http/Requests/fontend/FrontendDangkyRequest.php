<?php

namespace App\Http\Requests\fontend;

use Illuminate\Foundation\Http\FormRequest;

class FrontendDangkyRequest extends FormRequest
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
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6|max:20',
            're_password'=>'required|same:password',
            'phone'=>'required|min:10|numeric',
            'address'=>'required'
        ];
    }
     public function messages()
    {
        return [
           'name.required'=>'Bạn chưa nhập tên',
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Email không đúng định dạng',
            'email.unique'=>'Email đã có người sử dụng',
            'password.required'=>'Vui lòng nhập mật khẩu',
            're_password.required'=>'Bạn chưa nhập lại mật khẩu',
            're_password.same'=>'Mật khẩu không giống nhau',
            'password.min'=>'Mật khẩu ít nhất 6 ký tự',
            'password.max'=>'Mật khẩu không quá 20 ký tự',
            'phone.required'=>'Bạn chưa nhập sđt',
            'phone.numeric'=>'Sđt không đúng định dạng',
            'address.required'=>'Bạn chưa nhập địa chỉ'
        ];
    }
}
