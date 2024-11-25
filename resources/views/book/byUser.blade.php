<x-layout>
    <div class="container min-vh-100">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class=" text-shadow display-4 py-5">
                    Tutti i libri dell'utente {{$user->name}}
                </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            {{-- @dump($books) --}}
            @foreach ($user->books as $book)
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
                        <div class="card-footer">
                            {{-- $user --}}
                            {{-- @dump($book->user->name) --}}
                           {{$book->user ? $book->user->name : 'Nessun utente collegato'}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
