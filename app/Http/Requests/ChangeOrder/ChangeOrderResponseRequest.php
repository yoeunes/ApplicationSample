<?php

namespace App\Http\Requests\ChangeOrder;

use Illuminate\Foundation\Http\FormRequest;

class ChangeOrderResponseRequest extends FormRequest
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
            'changes'   => 'array|required',
        ];
    }
}
