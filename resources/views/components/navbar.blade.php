<nav class="navbar navbar-expand-lg {{ Route::currentRouteName() == 'homepage' ? 'bg-success' : 'bg-warning' }}">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
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
                    <a class="nav-link" href="{{ route('doveAndiamo') }}">Dove Andiamo?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('book.create') }}">crea</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('book.index') }}">Tutti i libri</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
