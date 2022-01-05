<?php

namespace App\Http\Requests\fontend;

use Illuminate\Foundation\Http\FormRequest;

class PasswordRequest extends FormRequest
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
            'password'=>'required|min:6|max:20',
            'password_confim'=>'required|same:password'
        ];
    }
     public function messages()
    {
        return [
            'password.required'=>'Vui lòng nhập mật khẩu',
            'password.min'=>'Mật khẩu ít nhất 6 ký tự',
            'password.max'=>'Mật khẩu không quá 20 ký tự',
            'password_confim.required'=>'Trường này không được để trống',
            'password_confim.same'=>'Mật khẩu xác nhận không đúng'
        ];
    }
}
