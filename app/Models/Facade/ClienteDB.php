<?php

namespace App\Models\Facade;

use App\Models\Entity\Cliente;

class ClienteDB 
{
    public static function getCliente(object $parametros)
    {
        $query = Cliente::query();

        if (isset($parametros->cliente)){
            $query->where('nome', 'like', '%' .$parametros->cliente . '%');
        }

        $query->orderBy('nome');

        return $query->get();
    }
}
