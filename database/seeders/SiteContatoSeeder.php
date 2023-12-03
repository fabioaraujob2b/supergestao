<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Carbon\Factory;
use Database\Factories\SiteContatoFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        SiteContato::create([
            'nome' => 'Sistema SG',
            'telefone' => '11111111',
            'email' => '1@1.COM',
            'motivo_mensagem' => 1,
            'mensagem' => 'DASDSADSD'
        ]);
        */
        \App\Models\SiteContato::factory()->count(100)->create();
    }
}
