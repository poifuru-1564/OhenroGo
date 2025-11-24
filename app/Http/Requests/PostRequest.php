<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'         => 'required|string|max:255',
            'body'          => 'required|string',
            'prefecture_id' => 'required|exists:prefectures,id',
            'temple_id'     => 'required|exists:temples,id',
            'status_id'     => 'required|exists:status,id',
            'topic_id'      => 'required|exists:topics,id',
            'image'         => 'nullable|image|mimes:jpg,jpeg,png|max:4096',
        ];
    }
    public function messages()
    {
        return [
            'prefecture_id.required' => 'please select a prefecture.',
            'temple_id.required'     => 'please select a temple.',
            'status_id.required'     => 'please select a status.',
            'topic_id.required'      => 'please select a topic.',
            'image.required' => 'please select an image.',
            'image.image'    => 'please select an image file.',
            'image.max'      => 'the image size is too large (maximum 4MB).',
        ];
    }
}
