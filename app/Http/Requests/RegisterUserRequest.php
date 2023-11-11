<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
{
    return [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|max:32',
        're-password' => 'required|same:password',
    ];
}

public function messages(): array
{
    return [
        'name.required' => 'Tên không được bỏ trống.',
        'email.required' => 'Email không được bỏ trống.',
        'email.unique' => 'Email đã tồn tại, vui lòng nhập một email khác.',
        'email.email' => 'Email không hợp lệ, vui lòng nhập một email đúng định dạng.',
        'password.required' => 'Mật khẩu không được bỏ trống.',
        'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
        're-password.required' => 'Bạn phải xác nhận mật khẩu.',
        're-password.same' => 'Mật khẩu xác nhận không trùng khớp với mật khẩu nhập ban đầu.',
    ];
}

}
