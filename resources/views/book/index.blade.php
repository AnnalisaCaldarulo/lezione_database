<x-layout>
    <div class="container-fluid bg-homepage vh-100">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="h1 text-center display-4 py-5">
                    Tutti i libri
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            {{-- @dump($books) --}}
            @foreach($books as $book)
            <div class="col-12 col-md-3">
                <div class="card p-3 bg-warning rounded">
                    {{$book->title}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
