<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '00.000.000/0000-00',
                'ddd' => 11,
                'telefone' => '1234-5688'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'N',
                'cnpj' => '00.000.000/0000-00',
                'ddd' => 11,
                'telefone' => '1234-5688'
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'N',
                'cnpj' => '00.000.000/0000-00',
                'ddd' => 11,
                'telefone' => '1234-5688'
            ],

        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
