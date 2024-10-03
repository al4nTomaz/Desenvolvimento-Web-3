@extends('layouts.main')
@extends('layouts.menu')

@section('title', 'ex08')
@section('content')
<?php 

    $pico = "pico";
    $le = "lé";

    echo "eu sou $pico, eu sou o $le. Juntos nós somos ".$pico.$le."!\n";


   
?>
@endsection
@yield('content2') 