<x-layout>
    <div class="container-fluid min-vh-100">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-4 py-5 text-shadow">
                    Modifica il libro "{{ $book->title }}"
                </h1>
            </div>
        </div>
        <div class="row justify-content-center pb-5">
            <div class="col-12 col-md-6 ">
                {{-- !specificare al form: GUARDA CHE ACCETTI PIU' TIPI DI DATO, PIU' FORMATI --}}
                <form action="{{route('book.update', compact('book'))}}" method="POST" class="p-5 rounded shadow bg-white" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    {{-- cross site request forgery --}}
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror " id="title"
                            name="title" value="{{ $book->title}}">
                        @error('title')
                            <p class="fst-italic text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="plot" class="form-label">Trama</label>
                        <textarea name="plot" id="plot" class="form-control @error('plot') is-invalid @enderror" cols="30"
                            rows="10">{{$book->plot }}</textarea>
                        @error('plot')
                            <p class="fst-italic text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                            name="price" value="{{ $book->price}}">
                        @error('price')
                            <p class="fst-italic text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="pages" class="form-label">Numero di pagine</label>
                        <input type="number" class="form-control @error('pages') is-invalid @enderror" id="pages"
                            name="pages" value="{{ $book->pages }}">
                        @error('pages')
                            <p class="fst-italic text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="categories" class="form-label">Seleziona i generi del libro:</label>
                        <select name="categories[]" id="categories" class="form-control" multiple>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if($book->categories->contains($category)) selected @endif  > {{ $category->name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="cover" class="form-label">Immagine di copertina</label>
                        <input type="file" class="form-control @error('cover') is-invalid @enderror" id="cover"
                            name="cover">
                        @error('cover')
                            <p class="fst-italic text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
