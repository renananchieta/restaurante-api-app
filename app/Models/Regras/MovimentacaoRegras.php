<?php

namespace App\Models\Regras;

use App\Models\Entity\Movimentacao;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MovimentacaoRegras extends Model
{
    public static function saldoInicialCliente($p)
    {
        $extrato = new Movimentacao();
        $extrato->cliente_id = $p->id;
        $extrato->valor = $p->saldo;
        $extrato->tipo_movimentacao_id = 1; //Entrada
        $extrato->data = date('Y-m-d H:i:s');
        $extrato->observacao = 'Entrada de crédito no cadastro.';
        $extrato->save();
    }

    public static function extrato($p)
    {
        return Movimentacao::where('cliente_id',$p->id)->get();
    }

    public static function transferenciaEntreClientes($p)
    {
        $clienteOrigem = DB::table("cliente as cl")
                            ->where("cl.identificacao", "=", $p->identificacaoOrigem)
                            ->first();

        $clienteDestino = DB::table("cliente as cl")
                            ->where("cl.identificacao", "=", $p->identificacaoDestino)
                            ->first();

        $extrato = new Movimentacao();
        $extrato->cliente_id = $clienteOrigem->id;
        $extrato->valor = $p->valorDaTransferencia;
        $extrato->tipo_movimentacao_id = 2;
        $extrato->data = date('Y-m-d H:i:s');
        $extrato->observacao = 'Transferência de crédito '.$clienteDestino->nome;
        $extrato->save();

        
        
        $extrato = new Movimentacao();
        $extrato->cliente_id = $clienteDestino->id;
        $extrato->valor = $p->valorDaTransferencia;
        $extrato->tipo_movimentacao_id = 1;
        $extrato->data = date('Y-m-d H:i:s');
        $extrato->observacao = 'Recebimento via transferência de crédito por '.$clienteOrigem->nome;
        $extrato->save();
    }
}
