<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:150',
            'description' => 'required|max:500',
            'thumb' => 'required',
            'price' => 'required|starts_with:$',
            'series' => 'required',
            'sale_date' => 'required|before:31/12/2024|after:05/05/1895',
            'type' => 'required',
        ];
    }

    /**
     * Return a message for the rules violation
     * 
     * @return string
     */
    public function messages()
    {
        return [
            'title.required' => 'The title is necessary.',
            'title.max' => 'The title is too long.',
            'description.required' => 'The description is necessary',
            'description.max' => 'Your text is too long, can\'t exceed 500 characters.',
            'thumb.required' => 'The image path is necessary.',
            'price.required' => 'The price is necessary.',
            'price.starts_with' => 'The price have to start with "$".',
            'series.required' => 'The series is necessary.',
            'sale_date.required' => 'The sale date is necessary.',
            'sale_date.before' => 'The date cannot exceed the end of the current year.',
            'sale_date.after' => 'The comic can\'t be much older than the first comic in the history! :)',
            'type.required' => 'The type is necessary.',
        ];
    }
}
