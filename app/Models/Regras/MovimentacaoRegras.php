<?php

namespace App\Models\Regras;

use App\Models\Entity\Cliente;
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
        $clienteOrigem = Cliente::where('identificacao', $p->identificacaoOrigem)->get(['id', 'nome', 'saldo']);
        // return $clienteOrigem[0]->nome;

        $clienteDestino = Cliente::where('identificacao', $p->identificacaoDestino)->get(['id', 'nome', 'saldo']);
        // return $clienteDestino;

        $extrato = new Movimentacao();
        $extrato->cliente_id = $clienteOrigem[0]->id;
        $extrato->valor = $p->valorTransferencia;
        $extrato->tipo_movimentacao_id = 2;
        $extrato->data = date('Y-m-d H:i:s');
        $extrato->observacao = 'Transferência de crédito para'.$clienteDestino[0]->nome;
        $extrato->save();
        
        $extrato = new Movimentacao();
        $extrato->cliente_id = $clienteDestino[0]->id;
        $extrato->valor = $p->valorTransferencia;
        $extrato->tipo_movimentacao_id = 1;
        $extrato->data = date('Y-m-d H:i:s');
        $extrato->observacao = 'Recebimento via transferência de crédito por '.$clienteOrigem[0]->nome;
        $extrato->save();

        return ;
    }
}
