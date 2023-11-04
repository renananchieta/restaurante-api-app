<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $itens = [
            [
                "id" => 1,
                "categoria_id" => 1,
                "nome" => "Chapa Mista"
            ],
            [
                "id" => 2,
                "categoria_id" => 2,
                "nome" => "Espeto Misto"
            ],
            [
                "id" => 3,
                "categoria_id" => 3,
                "nome" => "Frango a Milanesa"
            ],
            [
                "id" => 4,
                "categoria_id" => 4,
                "nome" => "Spaguetti"
            ],
            [
                "id" => 5,
                "categoria_id" => 5,
                "nome" => "Sopa de Caranguejo"
            ],
            [
                "id" => 6,
                "categoria_id" => 6,
                "nome" => "Doce de Maracujá"
            ],
            [
                "id" => 7,
                "categoria_id" => 7,
                "nome" => "Chocolate"
            ],
            [
                "id" => 8,
                "categoria_id" => 8,
                "nome" => "Laranja 500 ml"
            ],
            [
                "id" => 9,
                "categoria_id" => 9,
                "nome" => "Coca-cola Lata (350 ml)"
            ],
            [
                "id" => 10,
                "categoria_id" => 10,
                "nome" => "Heineken (600 ml)"
            ],
            [
                "id" => 11,
                "categoria_id" => 11,
                "nome" => "Caipirinha"
            ],
        ];
        DB::table('produto')->insert($itens);
    }
}
