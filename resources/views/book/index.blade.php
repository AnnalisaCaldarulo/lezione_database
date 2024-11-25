<x-layout>
    <div class="container min-vh-100">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class=" text-shadow display-4 py-5">
                    Tutti i libri
                </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            {{-- @dump($books) --}}
            @foreach ($books as $book)
                <div class="col-12 col-md-3 mb-5 d-flex justify-content-center">
                    <x-book-card :book="$book" />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
