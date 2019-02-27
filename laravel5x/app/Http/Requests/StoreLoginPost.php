<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLoginPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        // cho phep validate data
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // tao ra cac luat - rang buoc du lieu.
            // key : gia tri cua thuoc tinh name cua the input - value : la cac rule.moi cule cacj nhau bawng dau |
            'user'=>'required|min:3|max:60', 'pass'=> 'required|min:3|max:60'
        ];
    }

    // tao ham thong bao loi ra ngoai
    public function messages()
    {
        return [
            // key : name cua the input va luat tuong ung cua ham ben tren
            'user.required'=>'User ko duoc de trong !!!',
            'user.min' =>':attribute khong duoc nho hon :min ki tu',
            'user.max' =>':attribute khong duoc lon hon :max ki tu',
            'pass.required'=>'Pass ko duoc de trong !!!',
            'pass.min' =>':attribute khong duoc nho hon :min ki tu',
            'pass.max' =>':attribute khong duoc lon hon :max ki tu'
        ];
    }
}
