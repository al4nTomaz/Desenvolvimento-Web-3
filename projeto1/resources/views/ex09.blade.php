@extends('layouts.main')
@extends('layouts.menu')

@section('title', 'ex09')
@section('content')
<?php 

    $nomes = array("Alan", "Thales", "Fernanda", "Azulie");

    foreach ($nomes as $nome){
        echo $nome."\n";
    }
?>
@endsection
@yield('content2') 