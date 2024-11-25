<nav class="navbar navbar-expand-lg bg-success shadow" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'homepage' ? 'active fw-bold' : '' }}"
                        aria-current="page" href="{{ route('homepage') }}">Welcome</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'chiSiamo' ? 'active fw-bold' : '' }}"
                        href="{{ route('chiSiamo') }}">Chi Siamo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ Route::currentRouteName() == 'doveAndiamo' ? 'active fw-bold' : '' }}"
                        href="{{ route('doveAndiamo') }}">Dove Andiamo?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ Route::currentRouteName() == 'book.create' ? 'active fw-bold' : '' }}"
                        href="{{ route('book.create') }}">crea</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ Route::currentRouteName() == 'book.index' ? 'active fw-bold' : '' }}"
                        href="{{ route('book.index') }}">Tutti i libri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ Route::currentRouteName() == 'author.create' ? 'active fw-bold' : '' }}"
                        href="{{ route('author.create') }}">crea un autore</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ Route::currentRouteName() == 'author.index' ? 'active fw-bold' : '' }}"
                        href="{{ route('author.index') }}">Tutti gli autori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ Route::currentRouteName() == 'user.index' ? 'active fw-bold' : '' }}"
                        href="{{ route('user.index') }}">Tutti gli utenti</a>
                </li>
                {{-- @auth --}}
                {{-- @guest --}}

                {{-- @if (!Auth::user()) --}}
                @guest
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Autenticazione
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
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
                        </ul>
                    </li>
                    {{-- @endif --}}
                @endauth
            </ul>
        </div>
    </div>
</nav>
