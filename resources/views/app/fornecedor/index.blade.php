<h3>Fornecedor</h3>

{{-- Este comentário será descartado pelo interpretador do blade --}}

@php
//Aqui dentro, toda a sintaxe do php puro funciona normalmente
echo "Texto de teste";
@endphp

{{-- As duas linhas abaixo funcionam como sinônimo --}}
{{ 'Este funciona ' }}
<?= 'da mesma forma que este.' ?>

@if(count($fornecedores) > 0 && count($fornecedores) <= 10)
    <h3>Existem alguns fornecedores cadastrados.</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados.</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados.</h3>
@endif

{{-- Enquanto o if() verifica se a condição é true, o @unless() verifica se a condição é false (negação do if) --}}
{{-- O @isset verifica se a variável está definida --}}
@isset($fornecedores)
    <br>
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Ativo: {{ $fornecedores[0]['ativo'] }}
    <br>
    @if(!($fornecedores[1]['ativo'] == 'S'))
        <h3>Fornecedor Inativo!</h3>
    @endif
    @unless($fornecedores[1]['ativo'] == 'S')
        <h3>Permanece inativo!</h3>
    @endunless
@endisset

@php
    /* Enquanto o @isset verifica se a variável está definida, o @empty verifica se a variável está vazia */
@endphp


@foreach($fornecedores as $ind => $fornecedor)
    @isset($fornecedor['nome'])
        <br>Nome: {{$fornecedor['nome']}}
        @empty($fornecedor['nome'])
            Vazio
        @endempty
    @endisset
    @isset($fornecedor['ativo'])
        <br>Status: {{$fornecedor['ativo']}}
        @empty($fornecedor['ativo'])
            Vazio
        @endempty
    @endisset
    @isset($fornecedor['cnpj'])
        <br>Status: {{$fornecedor['cnpj']}}
        @empty($fornecedor['cnpj'])
            Vazio
        @endempty
    @endisset
    <br>Telefone: ({{$fornecedor['ddd'] ?? 'Sem ddd'}}) {{$fornecedor['telefone'] ?? 'Sem telefone'}}
    @switch($fornecedor['ddd'])
        @case ('11')
            <br>São Paulo (SP)
            @break
        @case ('79')
            <br>Aracaju (SE)
            @break
        @case ('85')
            <br>Fortaleza (CE)
            @break
        @default
            <br>Estado não definido!
    @endswitch
@endforeach

{{-- Outra forma de verificar se uma variável existe e/ou está vazia é com o operador condicional ternário do blade --}}
<hr>
@isset($fornecedores)
    Representante: {{ $fornecedores[0]['representante'] ?? 'Representante não definido' }}
@endisset
<hr>
{{-- O @forelse funciona como o @foreach, porém ele trata o caso em que o array é vazio --}}
{{-- A variável $loop nos mostra em que índice do array estamos --}}
@php 
    $gatoDeBotas = 
    [
        0 => ['nome' => 'gatito'], 1 => ['nome' => 'arturito'], 2 => ['nome' => '']
    ] 
@endphp
@forelse($gatoDeBotas as $ind => $gato)
    <br>Índice: {{$loop->iteration}}
    <br>Nome: {{$gato['nome']}}
    @if ($loop->first)
        <br>Primeiro índice
    @endif
    @if ($loop->last)
        <br>Último índice
    @endif
@empty
    <br> Não há gatos cadastrados! <br>
@endforelse


@dd($fornecedores) {{-- utiliza-se o @dd() pois a sintaxe '{{}}' não interpreta arrays --}}
{{-- Na sintaxe blade, não utiliza-se o ';' para encerrar comandos --}}
