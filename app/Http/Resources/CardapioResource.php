<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CardapioResource extends JsonResource
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
            'produto' => new ProdutoResource($this->produto),
            'descricao' => $this->descricao,
            'valor' => number_format($this->valor, 2, ',', '.'),
            'produtoId' => $this->produto->id,
            'produtoDesc' => mb_strtoupper($this->produto->nome),
            'categoria' => $this->produto->categoria->nome,
        ];
    }
}
