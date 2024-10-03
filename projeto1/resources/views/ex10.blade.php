@extends('layouts.main')
@extends('layouts.menu')

@section('title', 'ex10')
@section('content')
<?php 

    $soma = 0;
    for ($i=0; $i < 20; $i++) { 
        $vetor[$i] = $i + 1;
        echo $vetor[$i]."\n";
        $soma += $vetor[$i];
    }

    echo "soma: ".$soma;
?>
@endsection
@yield('content2') 