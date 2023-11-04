<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoMovimentacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $itens = [
            [
                "id" => 1,
                "descricao" => "Entrada"
            ],
            [
                "id" => 2,
                "descricao" => "Saída"
            ],
        ];
        DB::table('tipo_movimentacao')->insert($itens);
    }
}
