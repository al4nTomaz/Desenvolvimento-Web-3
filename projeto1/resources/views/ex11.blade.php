@extends('layouts.main')
@extends('layouts.menu')

@section('title', 'ex11')
@section('content')
<?php 

    $nome = "Alan";

    echo strrev($nome)."\n";

    $aux = strlen($nome)-1;

    for ($i=$aux; $i >= 0; $i--) { 
        echo $nome[$i];
    }
?>
@endsection
@yield('content2') 