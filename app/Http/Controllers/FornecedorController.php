<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = 
        [
            0 => ['nome' => 'fornecedor 1', 'ativo' => 'S'],
            1 => ['nome' => 'fornecedor 2', 'ativo' => 'N'],
            2 => ['nome' => 'fornecedor 3', 'ativo' => 'S']
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
