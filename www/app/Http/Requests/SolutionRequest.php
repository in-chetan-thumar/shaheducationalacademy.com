<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolutionRequest extends FormRequest
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
        $routes = ['solutions.create','solutions.store'];
        $rules = [
            'title'=>'required|string|max:255',
        ];
        if (in_array(request()->route()->getName(),$routes)) {
            $rules['file'] = 'required|mimes:pdf';
        }
        return $rules;
    }
}
