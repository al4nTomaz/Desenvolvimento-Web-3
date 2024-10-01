@extends('layouts.main')

@section('title', 'Teste')
@section('content')

    <body>
        <h1> Área de testes!!</h1>

        {{-- comentário blade, fica oculto no inspecionar --}}
        <!-- comentário normal html -->

        {{-- @php
            $nome = 'Alan';

            $clientes = ['joão', 'josé', 'tulio'];

            $i = 0;
        @endphp

        {{ $nome }}

        @if (count($clientes) == 0)
            <p>Não há clientes cadastrados</p>
        @elseif (count($clientes) == 1)
            <p> Há 1 cliente cadastrado </p>
        @else
            <p>Foram encontrados {{ count($clientes) }} cliente cadastrados </p>
        @endif

        @for ($i = 0; $i < count($clientes); $i++)
            {{ $i }}
            <br>
        @endfor

        @foreach ($clientes as $cliente)
            {{ $loop->index }}
            <span> - </span>
            {{ $cliente }}
            <br>
        @endforeach

        @php
            $listaclientes = [
                0 => ['nome' => 'João', 'telefone' => '9999-9999'],
                1 => ['nome' => 'Maria', 'telefone' => '8888-8888'],
                2 => ['nome' => 'Pedro', 'telefone' => '7777-7777'],
                3 => ['nome' => 'Ana', 'telefone' => '6666-6666'],
            ];
        @endphp

        @foreach ($listaclientes as $posicao => $valor)
            <p>{{ $posicao }}: {{ $valor['nome'] }} - Telefone: {{ $valor['telefone'] }}</p>
        @endforeach

        @php
            $listaclientes = [];
        @endphp

        @forelse ($listaclientes as $posicao => $valor)
            <p>{{ $posicao }}: {{ $valor['nome'] }} - Telefone: {{ $valor['telefone'] }}</p>
        @empty
            <p>Não há usuários cadastrados</p>
        @endforelse

        @while ($cliente = array_pop($clientes))
            {{ $cliente }}
        @endwhile

        @while ($i < count($clientes))
            {{ $clientes[$i] }}
            @php
                $i++;
            @endphp
        @endwhile --}}

        {{-- <h1> {{ $item }} </h1>
        <h3> Está custando : R$ {{ $preco }} </h3>

        <h1> {{ $produto }} </h1>
        <h3> Está custando : R$ {{ $valor }} </h3> --}}

        @forelse ($clientes as $cliente)
            {{ $loop->index }}
            <span> - </span>
            {{ $cliente }}
            <br>

        @empty
            <p> Não existe usuário cadastrado </p>
        @endforelse

    </body>

@endsection
