<?php

namespace App\Models\Facade;

use App\Models\Entity\Pedido;
use Illuminate\Support\Facades\DB;

class PedidoDB 
{
    public static function getPedido(object $parametros)
    {
        $query = Pedido::query();

        if (isset($parametros->mesa)){
            $query->where('mesa', 'like', '%' .$parametros->mesa . '%');
        }

        $query->orderBy('mesa');

        return $query->get();
    }
}
