<?php

namespace App\Http\Requests\ProposalRequest;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSpacesRequest extends FormRequest
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
            'spaces'    => 'array',//|required',
        ];
    }
}
