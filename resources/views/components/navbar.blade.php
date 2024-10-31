<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{-- {{Auth::user()}} --}}
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('author.index') }}">Lista autori</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('boardgame.create') }}">Inserisci un gioco</a>
                </li> --}}
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Ciao, {{ Auth::user()->name }}!
                        </a>
                        <ul class="dropdown-menu">
                            {{-- <li><a class="dropdown-item" href="#">Logout</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li> --}}

                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit">Logout</button>
                            </form>
                            <li><a class="dropdown-item" href="{{ route('boardgame.create') }}">Inserisci un gioco</a></li>
                            <li><a class="dropdown-item" href="{{ route('author.create') }}">Inserisci un autore</a></li>
                            <li><a class="dropdown-item" href="{{ route('profile') }}">Profilo utente</a></li>

                        </ul>

                    </li>
                @endauth

                @guest
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Ciao!
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                            <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                        </ul>
                    </li>
                @endguest


            </ul>
        </div>
    </div>
</nav>
