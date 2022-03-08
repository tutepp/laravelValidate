<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormRequest extends FormRequest
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
            'name' => 'required|max:255|min:2',
            'phone_number' => ['required','max:10','regex:/(0)[0-9]{9}/'],
//            SĐT bắt đầu từ 0, yêu cầu nhập đầy đủ, các số từ 0 tới 9
            'email' => 'required',
            'status' =>'required',
            'password' => ['required',
               'min:6',
               ],
                //Ký tự viết hoa tiếng Anh (A - Z)
                //Các ký tự viết thường tiếng Anh (a - z)
                //Cơ số 10 chữ số (0 - 9)
                //Không phải chữ và số (Ví dụ:!, $, # Hoặc%)
                //Ký tự Unicode,ít nhất là 6 ký tự

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Bạn vui lòng không bỏ trống tên',
            'name.max' => 'Tên bạn quá dài',
            'name.min' => 'Tên bạn phải trên 2 ký tự',
            'phone_number.required' => 'Bạn vui lòng không bỏ trống số điện thoại',
            'phone_number.regex' => 'Số điện thoại phải là 10 số và bắt đầu bằng số 0',

            'email.required' => 'Bạn vui lòng không bỏ trống email',

            'password.required' => 'Bạn vui lòng không bỏ trống password',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
            'password.regex' => 'Mật khẩu phải có chữ cái hoặt số và không có ký tự đặc biệt',

            'status.required' =>'Vui lòng chọn trạng thái'
        ];
    }
}
