<?php

namespace App\Models\Regras;

use App\Models\Entity\Movimentacao;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TransferenciaRegras extends Model
{
    public static function transferirCredito($p)
    {
        DB::table("cliente as cl")
            ->where("cl.identificacao", "=", $p->identificacaoOrigem)
            ->decrement("saldo", $p->valorTransferencia);

        DB::table("cliente as cl")
            ->where("cl.identificacao", "=", $p->identificacaoDestino)
            ->increment("saldo", $p->valorTransferencia);

        return ;
    }
}
