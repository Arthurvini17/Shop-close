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

                @guest
                <li> <a href="{{ route('register') }}">Registrar</a></li>
                <li><a href="{{route('login')}}">Logar</a></li>
                @endguest 

                <li> <a href="{{route('items.index')}}"> Pagina inicial</a></li>
                @auth
                <li><a href="{{ route('items.create') }}">Anuncie aqui</a></li>

                <li><a href="{{route('dashboard')}}">Meus itens</a></li>
                <li>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                            Sair
                        </a>
                    </form>
                </li>
                @endauth
            </ul>
        </nav>
    </header>

  
        @yield('content')
    
        <footer>
            <h1>Shop <span>Close  &copy </span></h1>
        </footer>
</body>
</html>