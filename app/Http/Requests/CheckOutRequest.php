<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CheckOutRequest extends FormRequest
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

       public function rules(Request $request)
    {
        return [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'address' => 'required',
            'phone_number' => 'required',

        ];
    }

    public function messages(){
        return [
            'name.required' => 'Vui lòng điền tên người nhận ',
            'email.required' => 'Vui lòng điền email người nhận ',
            'email.email' => 'Email không đúng định dạng',
            'address.required' => 'Vui lòng điền địa chỉ người nhận ',
            'phone_number.required' => 'Vui lòng điền số điện thoại người nhận',
        ];
    }
}
