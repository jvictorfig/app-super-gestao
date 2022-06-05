@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                @component('site.layouts._components.form_contato', ['classe' => 'borda-preta'])
                    <p>Nossa equipe irá analisar a sua mensagem e retornaremos o mais brevemente possível!</p>
                    <p>Nosso tempo de resposta é de no máximo 48 horas.</p>
                @endcomponent
            </div>
        </div>  
    </div>
@endsection
