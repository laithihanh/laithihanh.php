<?php

namespace App\Http\Requests\fontend;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'email'=>'required|email',
            'subject'=>'required',
            'content'=>'required'
        ];
    }
     public function messages()
    {
        return [
           'name.required'=>'Bạn chưa nhập tên',
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Email không đúng định dạng',
            'subject.required'=>'Bạn chưa nhập tiêu đề',
            'content.required'=>'Bạn chưa nhập nội dung'
        ];
    }
}
