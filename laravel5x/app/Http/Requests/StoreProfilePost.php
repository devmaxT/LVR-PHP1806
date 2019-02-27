<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
class StoreProfilePost extends FormRequest
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
        $id = $request->input('idProfile');
        $ruleEmail = ($id) ? 'unique:profiles,email,'.$id : 'unique:profiles,email';
        return [
            'fullname' => 'required|min:3|max:60',
            'email' => 'required|email|'.$ruleEmail,
            'phone' => 'required',
            'address' => 'required',
            'date' => 'required',
            'gender' => 'required|numeric',
            'single' => 'required|numeric',
            'description' => 'required'
        ];
    }
    public function messages()
    {
        return [
            // key : name cua the input va luat tuong ung cua ham ben tren
            'fullname.required'=>':attribute ko duoc de trong !!!',
            'fullname.min' =>':attribute khong duoc nho hon :min ki tu !!!',
            'fullname.max' =>':attribute khong duoc lon hon :max ki tu !!!',
            'email.required'=>':attribute ko duoc de trong !!!',
            'email.email' =>':attribute phai la dinh dang email !!!',
            'email.unique' => ':attribute bi trung !!!',
            'phone.required' =>':attribute ko duoc de trong !!!',
            'address.required' =>':attribute ko duoc de trong !!!',
            'date.required' =>':attribute ko duoc de trong !!!',
            'gender.required' =>':attribute ko duoc de trong !!!',
            'gender.numeric' =>':attribute khong hop le !!!',
            'single.required' =>':attribute ko duoc de trong !!!',
            'single.numeric' =>':attribute khong hop le !!!',
            'description.required' =>':attribute ko duoc de trong !!!',

        ];
    }
}
