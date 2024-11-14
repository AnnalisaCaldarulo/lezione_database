<header class="container-fluid bg-homepage">
    <div class="row vh-100">
        <div class="col-12 d-flex align-items-center justify-content-center">
            {{-- <h1 class="display-1 fw-bold text-decoration-underline">{{$slot}}</h1> --}}
            {{-- altro modo --}}
            <h1 class="display-1 fw-bold text-decoration-underline">{{$titleHeader}}</h1>
        </div>

        {{-- facciamoci la logica per vedere o no l'immagine --}}

        {{-- @if(Route::currentRouteName() == 'homepage')
            <div class="col-12">
                <img class="w-50 d-block mx-auto" src="/media/madooo.jpeg" alt="immagine header">
            </div>
        @else --}}
            <div class="col-12">
                <h2 class="text-center">Miao Miao sono un testo senza immagine</h2>
            </div>
        {{-- @endif --}}

    
    </div>
</header>