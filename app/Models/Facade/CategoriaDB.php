<?php

namespace App\Models\Facade;

use App\Models\Entity\Categoria;

class CategoriaDB 
{
    public static function getCategoria(object $parametros)
    {
        $query = Categoria::query();

        if (isset($parametros->categoria)){
            $query->where('nome', 'like', '%' .$parametros->categoria . '%');
        }

        $query->orderBy('nome');

        return $query->get();
    }
}
