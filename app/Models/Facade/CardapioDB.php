<?php

namespace App\Models\Facade;

use App\Models\Entity\Cardapio;

class CardapioDB 
{
    public static function getItemDoCardapio(object $parametros)
    {
        $query = Cardapio::query();

        if (isset($parametros->cardapio)){
            $query->where('produto_id', $parametros->cardapio);
        }

        $query->orderBy('produto_id');

        return $query->get();
    }
}
