@extends('layouts.main')

@section('title', 'Cadastrar Cliente')
@section('content')
    <form action="cadastrarCliente" method="post">
        @csrf

        {{session('mensagem')}}

        <p>Nome: <input type="text" name="nome"></p>
        <p>CPF: <input type="text" name="cpf"></p>
        <p>Telefone: <input type="text" name="telefone"></p>
        <p>E-mail: <input type="text" name="email"></p>
        <input type="submit" name="Cadastrar">
    </form>
@endsection