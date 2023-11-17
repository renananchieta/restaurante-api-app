<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovimentacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $itens = [
            [
                "id" => 1,
                "cliente_id" => 1,
                "valor" => 6500.50,
                "tipo_movimentacao_id" => 1,
                "data" => date('Y-m-d H:i:s'),
                "observacao" => 'Entrada de crédito no cadastro do cliente.'
            ],
            [
                "id" => 2,
                "cliente_id" => 2,
                "valor" => 1600.50,
                "tipo_movimentacao_id" => 1,
                "data" => date('Y-m-d H:i:s'),
                "observacao" => 'Entrada de crédito no cadastro do cliente.'
            ],
            [
                "id" => 3,
                "cliente_id" => 3,
                "valor" => 1400.50,
                "tipo_movimentacao_id" => 1,
                "data" => date('Y-m-d H:i:s'),
                "observacao" => 'Entrada de crédito no cadastro do cliente.'
            ],
            [
                "id" => 4,
                "cliente_id" => 4,
                "valor" => 1600.50,
                "tipo_movimentacao_id" => 1,
                "data" => date('Y-m-d H:i:s'),
                "observacao" => 'Entrada de crédito no cadastro do cliente.'
            ],
            [
                "id" => 5,
                "cliente_id" => 5,
                "valor" => 2100.50,
                "tipo_movimentacao_id" => 1,
                "data" => date('Y-m-d H:i:s'),
                "observacao" => 'Entrada de crédito no cadastro do cliente.'
            ],
            [
                "id" => 6,
                "cliente_id" => 6,
                "valor" => 6000.50,
                "tipo_movimentacao_id" => 1,
                "data" => date('Y-m-d H:i:s'),
                "observacao" => 'Entrada de crédito no cadastro do cliente.'
            ],
            [
                "id" => 7,
                "cliente_id" => 7,
                "valor" => 6000.50,
                "tipo_movimentacao_id" => 1,
                "data" => date('Y-m-d H:i:s'),
                "observacao" => 'Entrada de crédito no cadastro do cliente.'
            ],
            [
                "id" => 8,
                "cliente_id" => 8,
                "valor" => 1000.50,
                "tipo_movimentacao_id" => 1,
                "data" => date('Y-m-d H:i:s'),
                "observacao" => 'Entrada de crédito no cadastro do cliente.'
            ],
            [
                "id" => 9,
                "cliente_id" => 9,
                "valor" => 6000.50,
                "tipo_movimentacao_id" => 1,
                "data" => date('Y-m-d H:i:s'),
                "observacao" => 'Entrada de crédito no cadastro do cliente.'
            ],
            [
                "id" => 10,
                "cliente_id" => 10,
                "valor" => 6000.50,
                "tipo_movimentacao_id" => 1,
                "data" => date('Y-m-d H:i:s'),
                "observacao" => 'Entrada de crédito no cadastro do cliente.'
            ],
            [
                "id" => 11,
                "cliente_id" => 11,
                "valor" => 2000.00,
                "tipo_movimentacao_id" => 1,
                "data" => date('Y-m-d H:i:s'),
                "observacao" => 'Entrada de crédito no cadastro do cliente.'
            ],
        ];
        DB::table('movimentacao')->insert($itens);
    }
}
