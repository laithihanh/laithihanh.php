<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddRequest extends FormRequest
{
    /**
     * Determine if the user is numericauthorized to make this request.
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
            'name'=>'required|unique:products',
            'cate_id'=>'required',
            'price'=>'required|numeric|min:0',
            'sale_price'=>'required|numeric',
            'images'=>'required',
            'imagesList'=>'required',
            'description'=>'required',
            'quantity'=>'required'
        ];
    }
     public function messages()
    {
        return [
            'name.required'=>'Tên sản phẩm không được để trống',
            'name.unique'=>'Tên sản phẩm đã tồn tại',
            'category_id.required'=>'Bạn chưa chọn tên danh mục',
            'price.required'=>'Bạn chưa nhập giá sản phẩm',
            'price.numeric'=>'Bạn nhập sai định dạng',
            'price.min'=>'Bạn nhập sai giá',
            'sale_price.numeric'=>'Sai định dạng',
            'sale_price.required'=>'Bạn chưa nhập giá sản phẩm',
            'images.required'=>'Bạn chưa chọn ảnh',
            'imagesList.required'=>'Bạn chưa chọn ảnh liên quan',
            'description.required'=>'Bạn chưa mô tả sản phẩm',
            'quantity.required'=>'Bạn chưa nhập số lượng sản phẩm',
        ];
    }
}
