<?php

/**
 * Created by PhpStorm.
 * User: igor
 * Date: 09/05/2017
 * Time: 23:16
 */
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticiasRequest extends FormRequest
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
            'titulo' => 'required',
             'descricao' => 'required',
             'criador' => 'required',
         ];
     }
}