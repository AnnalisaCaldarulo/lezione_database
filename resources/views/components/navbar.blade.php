<nav class="navbar navbar-expand-lg bg-success shadow" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'homepage' ? 'active fw-bold' : '' }}"
                        aria-current="page" href="{{ route('homepage') }}">Welcome</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Libri
                    </a>
                    <ul class="dropdown-menu">
                        @auth
                            <li><a class="dropdown-item {{ Route::currentRouteName() == 'book.create' ? 'active fw-bold' : '' }}"
                                    href="{{ route('book.create') }}">Crea</a></li>
                        @endauth
                        <li><a class="dropdown-item   {{ Route::currentRouteName() == 'book.index' ? 'active fw-bold' : '' }}"
                                href="{{ route('book.index') }}">Tutti i libri</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Autori
                    </a>
                    <ul class="dropdown-menu">
                        @auth
                            <li><a class="dropdown-item {{ Route::currentRouteName() == 'author.create' ? 'active fw-bold' : '' }}"
                                    href="{{ route('author.create') }}">Crea</a></li>
                        @endauth
                        <li><a class="dropdown-item   {{ Route::currentRouteName() == 'author.index' ? 'active fw-bold' : '' }}"
                                href="{{ route('author.index') }}">Tutti i libri</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ Route::currentRouteName() == 'user.index' ? 'active fw-bold' : '' }}"
                        href="{{ route('user.index') }}">Tutti gli utenti</a>
                </li>
                @guest
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Autenticazione
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                        </ul>
                    </li>
                    {{-- @endif --}}
                @endguest
                {{-- @if (Auth::user()) --}}
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Ciao, {{ Auth::user()->name }} !
                        </a>
                        {{-- $user --}}
                        {{-- @dump(Auth::user()->name) --}}
                        <ul class="dropdown-menu">
                            {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">logout</button>
                            </form>
                            <li><a class="dropdown-item" href="{{ route('profile') }}">Profilo</a></li>
                        </ul>
                    </li>
                    {{-- @endif --}}
                @endauth
            </ul>
        </div>
    </div>
</nav>
