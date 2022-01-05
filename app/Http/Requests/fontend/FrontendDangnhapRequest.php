<?php

namespace App\Http\Requests\fontend;

use Illuminate\Foundation\Http\FormRequest;

class FrontendDangnhapRequest extends FormRequest
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
           
            'email'=>'required|email|',
            'password'=>'required|min:6|max:20'
        ];
    }
     public function messages()
    {
        return [
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Email không đúng định dạng',
            'password.required'=>'Vui lòng nhập mật khẩu',
            'password.min'=>'Mật khẩu ít nhất 6 ký tự',
            'password.max'=>'Mật khẩukhông quá 20 ký tự'
        ];
    }
}
