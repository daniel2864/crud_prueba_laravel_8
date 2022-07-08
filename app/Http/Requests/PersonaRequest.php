<?php

namespace App\Http\Requests;

use App\Rules\IsInteger;

use Illuminate\Foundation\Http\FormRequest;

class PersonaRequest extends FormRequest
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
        $action     = app('request')->route()->getAction();
        $controller = class_basename($action['controller']);
        switch ($controller) {
            case "PersonaController@store":
                return [
                    'cedula'     => [
                        'required',
                        'unique:personas',
                        'min:10|max:12',
                        new IsInteger(),
                    ],
                    'nombre'     => 'required|string|min:8',
                    'email'    => 'required|string|email|max:70|unique:personas'
                ];
            case "PersonaController@edit_submit":
                return [
                    'cedula'     => [
                        'required',
                        'min:10|max:12',
                        new IsInteger(),
                    ],
                    'nombre'     => 'required|string|min:8',
                    'email'    => 'required|string|email|max:70'
                ];
        }
    }
}
