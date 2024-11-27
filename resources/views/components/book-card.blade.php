<div class="card shadow">
    @if (!$book->cover)
        <img src="/media/default.jpg" class="img-card" alt="...">
    @else
        <img src="{{ Storage::url($book->cover) }}" class="img-card" alt="...">
    @endif
    <div class="card-body">
        <h5 class="card-title">{{ $book->title }}</h5>
        <ul>
            @foreach ($book->categories as $category)
                <li> {{$category->name}} </li>
            @endforeach
        </ul>
            <div class="text-center btn-container pb-3">
            <a href="" class="btn btn-card">Vai al dettaglio</a>
        </div>
    </div>
    @if (Route::currentRouteName() == 'book.index')
        <div class="card-footer">
            {{-- $user --}}
            {{-- @dump($book->user->name) --}}
            {{ $book->user ? $book->user->name : 'Nessun utente collegato' }}
            <a href="{{route('book.edit', compact('book'))}}" class="btn btn-warning">Modifica</a>
            <form action="{{route("book.destroy", compact('book'))}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Cancella</button>
            </form>
        </div>
    @endif
</div>
