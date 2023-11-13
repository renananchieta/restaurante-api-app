<?php

namespace App\Models\Regras;

use App\Models\Entity\Cliente;
use App\Models\Entity\Movimentacao;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TransferenciaRegras extends Model
{
    public static function transferirCredito($p)
    {
        Cliente::where('identificacao', $p->identificacaoOrigem)->decrement("saldo", $p->valorTransferencia);

        Cliente::where('identificacao', $p->identificacaoDestino)->increment("saldo", $p->valorTransferencia);

        return ;
    }
}
