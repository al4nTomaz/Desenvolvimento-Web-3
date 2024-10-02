@extends('layouts.main')

@section('title', 'Tabuada Matemática')
@section('content')
    <h1 class="titulo-tabuada">Tabuada do {{ $valor }}</h1>
    <section id="secao1" class="secao-temp">
        @for ($i = 0; $i < 11; $i++)
            @php
                $aux = $valor * $i;
            @endphp
            <div class="tabuada">
                <span>
                    {{ $valor }} X {{ $i }} = {{ $aux }}
                </span>

                @for ($j = $aux; $j > 0; $j--)
                    <img class="img-cogumelo" src="./img/cogumelo.png" alt="cogumelo">
                @endfor
                <br>
            </div>
        @endfor
    </section>
@endsection
