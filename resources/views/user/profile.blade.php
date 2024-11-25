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
                    <x-book-card :book="$book" />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
