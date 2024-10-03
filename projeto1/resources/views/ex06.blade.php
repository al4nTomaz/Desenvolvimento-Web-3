@extends('layouts.main')
@extends('layouts.menu')

@section('title', 'ex06')
@section('content')
<?php 

    echo "números impares de 100 a 200:\n";

    $resultado = 100;
    do{
        if ($resultado % 2 != 0) {
            echo $resultado."\n";
        }
        $resultado++;
    }while ($resultado <= 200); 

   
?>
@endsection
@yield('content2') 