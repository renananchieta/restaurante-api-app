<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardapioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $itens = [
            [
                "id" => 1,
                "produto_id" => 1,
                "descricao" => "Acompanha arroz, macarrão, salada, farofa de ovo, purê de batata e batata frita. Serve 4 pessoas.",
                "valor" => 150.50
            ],
            [
                "id" => 2,
                "produto_id" => 2,
                "descricao" => "Acompanha arroz, macarrão, salada, feijão e farofa. Serve 1 pessoa.",
                "valor" => 16.50
            ],
            [
                "id" => 3,
                "produto_id" => 3,
                "descricao" => "Acompanha arroz, macarrão, salada, feijão e farofa. Serve 1 pessoa",
                "valor" => 14.50
            ],
            [
                "id" => 4,
                "produto_id" => 4,
                "descricao" => "650 gramas de Spaguetti ao molho rosê e tirinhas de carme.",
                "valor" => 16.50
            ],
            [
                "id" => 5,
                "produto_id" => 5,
                "descricao" => "Acompanha 3 pães careca.",
                "valor" => 21.50
            ],
            [
                "id" => 6,
                "produto_id" => 6,
                "descricao" => "150 gramas de Doce de Maracujá",
                "valor" => 6.50
            ],
            [
                "id" => 7,
                "produto_id" => 7,
                "descricao" => "2 Bolas.",
                "valor" => 6.50
            ],
            [
                "id" => 8,
                "produto_id" => 8,
                "descricao" => "Servido em uma taça de vidro com gelo.",
                "valor" => 10.50
            ],
            [
                "id" => 9,
                "produto_id" => 9,
                "descricao" => "Coca-cola Lata.",
                "valor" => 6.50
            ],
            [
                "id" => 10,
                "produto_id" => 10,
                "descricao" => "Longneck",
                "valor" => 6.50
            ],
            [
                "id" => 11,
                "produto_id" => 11,
                "descricao" => "Servido em um copo de 500 ml com uma tira de limão",
                "valor" => 20.00
            ],
        ];
        DB::table('cardapio')->insert($itens);
    }
}
