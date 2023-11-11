<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'title' => 'required|unique:categories|max:255',
        ];
    }
    
    public function messages(): array
    {
        return [
            'title.required' => 'Vui lòng nhập tên danh mục!',
            'title.unique' => "Tên $this->name đã tồn tại!"
        ];
    }
    
    }