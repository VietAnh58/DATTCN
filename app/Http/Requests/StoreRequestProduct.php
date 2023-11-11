<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequestProduct extends FormRequest
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
            'product_name' => 'required|unique:products|max:255',
            'price' => 'required',
            'image' => 'required',
             'category_id' => 'required',
        ];
    }
    
    public function messages(): array
    {
        return [
            'product_name.required' => 'Vui lòng nhập tên sản phẩm!',
            'product_name.unique' => "Tên $this->name đã tồn tại!",
            'price.required' => 'Vui lòng nhập giá sản phẩm',
            // 'image.required' => 'Vui lòng thêm ảnh sản phẩm',
            'category_id.required' => 'Vui lòng chọn danh mục sản phẩm',
        ];
    }
}
