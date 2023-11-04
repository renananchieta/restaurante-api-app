<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClienteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nome' => mb_strtoupper($this->nome),
            'telefone' => $this->telefone,
            'identificacao' => $this->identificacao,
            'saldo' => $this-> saldo, 
            'saldoShow' => number_format($this->saldo, 2, ',', '.'),
        ];
    }
}
