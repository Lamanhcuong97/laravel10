<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
class ProductRequest extends FormRequest
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
    public function rules(Request $request)
    {
       
        return [
            'name' => 'required|min:4',
            'slug' => 'required|min:4',
            'original_price' => 'required',
            'price' => 'required',
            'description' => 'required',
            'content' => 'required',
            'product_code' => 'required|unique:products,id,'. $request->id,
            'category_id' => 'required',

        ];
    }

    public function messages(){
        return [
            'name.required' => 'Vui lòng điền tên sản phẩm ',
            'name.min' => 'Tên sản phẩm ngắn quá ',
            'slug.required' => 'Vui lòng điền tên sản phẩm ',
            'original_price.required' => 'Vui lòng nhập giá gốc của sản phẩm ',
            'price.required' => 'Vui lòng nhập giá bán của sản phẩm ',
            'product_code.required' => 'Vui lòng nhập mã sản phẩm',
            'content.required' => 'Vui lòng nhâp nội dung sản phẩm',
            'product_code.unique' => 'Mã sản phẩm không được trùng nhau',
        ];
    }
}
