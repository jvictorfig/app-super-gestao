<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato()
    {
        return view('site.contato');
    }

    public function retornarCategoria(string $nome, int $idCategoria)
    {
        echo "Estamos aqui: $nome - $idCategoria";
    }

    public function retornarContatoMensagem
    (
        string $nome = 'Desconhecido',
        int $idCategoria = 1,
        string $assunto = 'Sem assunto',
        string $mensagem = 'Sem mensagem'
    )
    {
        echo "Estamos aqui: $nome - $idCategoria - $assunto - $mensagem";
    }
}
