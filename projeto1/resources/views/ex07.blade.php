@extends('layouts.main')
@extends('layouts.menu')

@section('title', 'ex07')
@section('content')
<?php 

    $vetor[0] = rand(0, 501);

    $maior = $vetor[0];
    $menor = $vetor[0];

    for ($i=1; $i < 500; $i++) { 
        $vetor[$i] = rand(1, 600);

        if ($vetor[$i] > $maior) {
            $maior = $vetor[$i];
        }

        if ($vetor[$i] < $menor) {
            $menor = $vetor[$i];
        }

        echo $vetor[$i]."\n\n";
    }

    echo $maior."\n";
    echo $menor."\n";
?>
@endsection
@yield('content2') 