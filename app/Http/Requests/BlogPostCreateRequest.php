<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Session;

class BlogPostCreateRequest extends FormRequest
{
    const TITLE_MAX_LENGTH = 50;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max' . self::TITLE_MAX_LENGTH,
            'body' => 'required|string'
        ];
    }
}
