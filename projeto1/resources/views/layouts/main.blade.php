<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagex/png" href="./img/cogumelo.png">
    <link rel="stylesheet" href="./css/style.css">

    <title> @yield('title') </title>
</head>

<body>

    <header>
        <nav>
            <ul>
                <li>
                    <a href="/">Home<a>
                </li>
                <li>
                    <a href="/smb">Super Mario Bros.<a>
                </li>
                <li>
                    <a href="/smb2">Super Mario Bros. 2</a>
                </li>
                <li>
                    <a href="/smb3">Super Mario Bros. 3</a>
                </li>
                <li>
                    <a href="/smb4">Super Mario World</a>
                </li>
                {{-- <li>
                    <a href="/teste">Teste</a>
                </li> --}}
                <li>
                    <a href="/tabuadatematica">Tabuada Temática</a>
                </li>
            </ul>
        </nav>
        <hr>
    </header>

    @yield('content')
    @yield('content2') 

    <footer>
        <hr>
        <h2 class="secao-titulo">Atividade de Web.</h2>
    </footer>

</body>

</html>
