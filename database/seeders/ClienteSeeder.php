<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $itens = [
            [
                "id" => 1,
                "nome" => "Renan Anchieta",
                "telefone" => "9193039532",
                "identificacao" => 111,
                "saldo" => 150.50
            ],
            [
                "id" => 2,
                "nome" => "Maria das Graças Gonçalves",
                "telefone" => "9193039533",
                "identificacao" => 112,
                "saldo" => 16.50
            ],
            [
                "id" => 3,
                "nome" => "Renato Pereira",
                "telefone" => "9193039534",
                "identificacao" => 113,
                "saldo" => 14.50
            ],
            [
                "id" => 4,
                "nome" => "José Renato Pereira",
                "telefone" => "9193039535",
                "identificacao" => 114,
                "saldo" => 16.50
            ],
            [
                "id" => 5,
                "nome" => "Beatriz Oliveira",
                "telefone" => "9193039536",
                "identificacao" => 115,
                "saldo" => 21.50
            ],
            [
                "id" => 6,
                "nome" => "Amanda Lisboa",
                "telefone" => "9193039537",
                "identificacao" => 116,
                "saldo" => 6.50
            ],
            [
                "id" => 7,
                "nome" => "Kenne Barbosa",
                "telefone" => "9193039538",
                "identificacao" => 117,
                "saldo" => 6.50
            ],
            [
                "id" => 8,
                "nome" => "Rafaella Brandão",
                "telefone" => "9193039539",
                "identificacao" => 118,
                "saldo" => 10.50
            ],
            [
                "id" => 9,
                "nome" => "Beatriz Alves",
                "telefone" => "9181039532",
                "identificacao" => 119,
                "saldo" => 6.50
            ],
            [
                "id" => 10,
                "nome" => "Allana Raiol",
                "telefone" => "9181039533",
                "identificacao" => 120,
                "saldo" => 6.50
            ],
            [
                "id" => 11,
                "nome" => "Jayne Mendes",
                "telefone" => "9181039534",
                "identificacao" => 121,
                "saldo" => 20.00
            ],
        ];
        DB::table('cliente')->insert($itens);
    }
}
