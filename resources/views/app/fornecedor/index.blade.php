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


@dd($fornecedores) {{-- utiliza-se o @dd() pois a sintaxe '{{}}' não interpreta arrays --}}
{{-- Na sintaxe blade, não utiliza-se o ';' para encerrar comandos --}}
