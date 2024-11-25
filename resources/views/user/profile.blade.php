<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center py-5"> Ciao, {{ Auth::user()->name }} </h1>
            </div>
        </div>
        {{-- Auth::user() -> restituisce l'oggetto di classe User (autenticato) --}}
        <div class="row">
            @foreach (Auth::user()->books as $book)
                <div class="col-12 col-md-3 mb-5 d-flex justify-content-center">
                    <div class="card shadow" style="width: 18rem;">
                        @if (!$book->cover)
                            <img src="https://picsum.photos/{{ 300 + $book->id }}" class="card-img-top" alt="...">
                        @else
                            <img src="{{ Storage::url($book->cover) }}" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p class="card-text text-truncate"> {{ $book->plot }} </p>
                            <div class="text-center">
                                <a href="" class="btn btn-outline-success">Vai al dettaglio</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
