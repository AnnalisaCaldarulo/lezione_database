<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-4 py-5">
                    Dettagli dell'autore <span class="fst-italic"> {{ $author->name }} {{ $author->surname }}</span>
                </h1>
            </div>
            <div class="col-12">
                <a href="{{ route('author.edit', compact('author')) }}" class="btn btn-warning">Modifica</a>

                <form action="{{ route('author.delete', compact('author')) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Cancella</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
