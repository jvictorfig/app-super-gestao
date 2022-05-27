<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');

//Usando expressões regulares para limitar o que deve ser recebido como parâmetro
Route::get('/contato/{nome}/{idCategoria}', 'ContatoController@retornarCategoria')
    ->where('idCategoria', '[0-9]+')
    ->where('nome', '[A-Za-z]+');

//Os parâmetros da requisição podem ser opcionais ao utilizar a '?' à direita do seu respectivo nome, basta termos um valor pré-declarado na função chamada
Route::get('/contato/{nome?}/{idCategoria?}/{assunto?}/{mensagem?}','ContatoController@retornarContatoMensagem');

Route::get('/login', function(){ return 'Login'; })->name('site.login');


Route::prefix('/app')->group(function()
{
    Route::get('/clientes', function(){ return 'Clientes';})->name('app.clientes');

    Route::get('/produtos', function(){ return 'Produtos';})->name('app.produtos');

    Route::get('/fornecedores', function(){ return 'Fornecedores';})->name('app.fornecedores');
});

//Redirecionamento de rotas
Route::get('/rota1', function(){ echo "rota1"; })->name('site.rota1');
Route::get('/rota2', 
    function()
    { 
        return redirect()->route('site.rota1'); 
    })->name('site.rota2');

//Rota de fallback (Usada para evitar erros)
Route::fallback(function()
{
    echo "Esta página não existe! <a href='".route('site.index')."'>Clique aqui</a> para voltar para a página principal";
});
