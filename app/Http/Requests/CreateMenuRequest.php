<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMenuRequest extends FormRequest
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
            'name' => 'required|unique:menu|max:255',
            'link' => 'unique:menu',
            'order_number' => 'unique:menu',
        ];
    }
    
    public function messages(): array
    {
        return [
            'name.required' => 'Vui lòng nhập tên menu!',
            'name.unique' => "Tên $this->name đã tồn tại!",
            'link.unique' => "Tên $this->link đã tồn tại!",
            'order_number.unique' => "Tên $this->order_number đã tồn tại!",
        ];
    }
    
    }