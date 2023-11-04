<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CategoriaResource;

class ProdutoResource extends JsonResource
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
            'produto' => mb_strtoupper($this->nome),
            'categoria' => new CategoriaResource($this->categoria),
            'categoriaId' => $this->categoria->id,
            'categoriaDesc' => mb_strtoupper($this->categoria->nome),
        ];
    }
}
