<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLanguageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'canonical' => 'required|unique:languages',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '• Bạn chưa nhập tên ngôn ngữ',
            'canonical.required' => '• Bạn chưa nhập từ khóa ngôn ngữ',
            'canonical.unique' => '• Từ khóa ngôn ngữ đã tồn tại',
        ];
    }
}
