<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgentProductRequest extends FormRequest
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
            'product_id' => 'required',
            'agent_id' => 'required',
            'agent_product_code' => 'required'
        ];
    }
}
