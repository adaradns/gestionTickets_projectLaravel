<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TicketRequest extends Request
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
            'titulo' => 'min:5|max:100|required',
            'descripcion' => 'min:20|max:350|required',
            'achivo' => 'image|mimes:jpg,png'

        ];
    }
}
