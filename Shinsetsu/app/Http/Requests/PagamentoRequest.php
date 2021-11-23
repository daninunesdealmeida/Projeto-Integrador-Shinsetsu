<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PagamentoRequest extends FormRequest
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
            'catao' => 'required',
            'nome_cartao' => 'required',
            'dt_vencimento' => 'required',
            'boleto' => 'required',
            'fk_vendas' => 'required',
            'fk_users' => 'required',            
        ];
    }
}
