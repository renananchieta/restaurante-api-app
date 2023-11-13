<?php

namespace App\Models\Facade;

use App\Models\Entity\Cliente;
use Illuminate\Support\Facades\DB;

class ClienteDB 
{
    public static function getCliente(object $parametros)
    {
        $query = Cliente::query();

        if (isset($parametros->cliente)){
            $query->where('id',$parametros->cliente);
        }

        $query->orderBy('nome');

        return $query->get();
    }

    public static function consultaSaldo($p)
    {
        $clienteOrigem = Cliente::where('identificacao', $p->identificacaoOrigem)->get(['id', 'nome', 'saldo']);
        return $clienteOrigem[0]->saldo;
    }
}
