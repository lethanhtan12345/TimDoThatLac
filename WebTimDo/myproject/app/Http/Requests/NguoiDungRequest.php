<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NguoiDungRequest extends FormRequest
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
            'username'=>'required',
            'password'=>'required|min:8',
        ];
    }
    public function messages()
    {
        return[
            'username.required'=>'Không được để trống thông tin này !',
            'password.min'=>'Mật khẩu không đc ít hơn 8 ký tự',
            'password.required'=>'Mật khẩu không được trống',
        ];
    }
}
