<?php

namespace App\Models\Facade;

use App\Models\Entity\Produto;
use Illuminate\Support\Facades\DB;

class ProdutoDB 
{
    public static function getProduto(object $parametros)
    {
        $query = Produto::query();

        if (isset($parametros->produto)){
            $query->where('nome', 'like', '%' .$parametros->produto . '%');
        }

        $query->orderBy('nome');

        return $query->get();
    }
}
