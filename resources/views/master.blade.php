<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

    <title>@yield ('title')</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>Anunciar item </li>
                <li>Registrar</li>
                <li>Logar</li>
                <li>Pagina inicial</li>
                <li><a href="{{ route('items.create') }}">Anuncie aqui</a></li>
            </ul>
        </nav>
    </header>

  
        @yield('content')
    
        <footer>
            <h1>Shop Close &copy;</h1>
        </footer>
</body>
</html>