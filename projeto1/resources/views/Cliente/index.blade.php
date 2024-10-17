@extends('layouts.main')

@section('title', 'Listar Clientes')
@section('content')

<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
        @foreach($clientes as $cliente)

        <tr>
            <td>{{ $cliente->nome }}</td>
            <td>{{ $cliente->cpf }}</td>
            <td>{{ $cliente->telefone }}</td>
            <td>{{ $cliente->email }}</td>
            <td>
                <form action="" method="post" onsubmit="return confirm('Está certo disso?');">
                    @csrf

                    @method('DELETE')
                    <input type="submit" name="Deletar">
                </form>
            </td>
            <td>
                <a href="">Editar</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
@endsection