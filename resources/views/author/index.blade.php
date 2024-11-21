<x-layout>
    <div class="container min-vh-100">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class=" text-shadow display-4 py-5">
                    Tutti gli autori
                </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($authors as $author)
                <div class="col-12 col-md-3 mb-5 d-flex justify-content-center">
                    <div class="card shadow" style="width: 18rem;">
                        @if (!$author->pic)
                            <img src="https://picsum.photos/{{ 300 + $author->id }}" class="card-img-top" alt="...">
                        @else
                            <img src="{{ Storage::url($author->pic) }}" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $author->name }} {{ $author->surname }}</h5>
                            <p class="card-text text-truncate"> {{ $author->bio }} </p>
                            <div class="text-center">
                                <a href="{{ route('author.show', compact('author')) }}"
                                    class="btn btn-outline-success">Vai al dettaglio</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
