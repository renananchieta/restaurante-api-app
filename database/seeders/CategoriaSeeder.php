<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $itens = [
            [
                "id" => 1,
                "nome" => "Chapas"
            ],
            [
                "id" => 2,
                "nome" => "Espetos"
            ],
            [
                "id" => 3,
                "nome" => "Pratos Executivos"
            ],
            [
                "id" => 4,
                "nome" => "Massas"
            ],
            [
                "id" => 5,
                "nome" => "Sopas"
            ],
            [
                "id" => 6,
                "nome" => "Sobremesas"
            ],
            [
                "id" => 7,
                "nome" => "Sorvetes"
            ],
            [
                "id" => 8,
                "nome" => "Sucos"
            ],
            [
                "id" => 9,
                "nome" => "Refrigerantes"
            ],
            [
                "id" => 10,
                "nome" => "Cervejas"
            ],
            [
                "id" => 11,
                "nome" => "Drinks"
            ],
        ];
        DB::table('categoria')->insert($itens);
    }
}
