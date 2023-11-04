<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'nome' => 'required|string',
            'telefone' => 'required|string',
            'identificacao' => 'required|integer',
            'saldo' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/'
        ];
    }

    public function valid(): array
    {
        return [
            'nome' => $this->request->get('nome'),
            'telefone' => $this->request->get('telefone'),
            'identificacao' => $this->request->get('identificacao'),
            'saldo' => floatval(str_replace(',', '.', $this->request->get('saldo'))),
        ];
    }
}
