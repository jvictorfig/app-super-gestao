<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2)
    {
        //Serão utilizados arrays associativos para passar os parâmetros p1 e p2 para a view
        //return view('site.teste', ['p1' => $p1, 'p2' => $p2]);
        //Também pode-se usar o método compact, que trará o mesmo resultado
        //return view('site.teste', compact('p1', 'p2'));
        //também usa-se o método with
        return view('site.teste')->with('p1', $p1)->with('p2', $p2);
    }
}
