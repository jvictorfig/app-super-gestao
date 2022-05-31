<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = 
        [
            0 => 
            [
                'nome' => 'fornecedor 1', 
                'ativo' => 'S',
                'cnpj' => '123',
                'ddd' => '79',
                'telefone' => '99999-9999'
            ],
            1 => 
            [
                'nome' => 'fornecedor 2', 
                'ativo' => 'N',
                'cnpj' => '321',
                'ddd' => '11',
                'telefone' => '11111-1111'
            ],
            2 => 
            [
                'nome' => 'fornecedor 3',
                'ativo' => 'S',
                'cnpj' => '222',
                'ddd' => null,
                'telefone' => null
            ]
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
