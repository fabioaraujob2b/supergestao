<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fornecedor::create([
            'nome' => 'Fábio',
            'site' => 'www.fabio.fabio',
            'uf' => 'RJ',
            'email' => 'fabio@fabio.fabio.br'
        ]);

    }
}
