<x-layout>
    <div class="container-fluid bg-homepage vh-100">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="h1 text-center display-4 py-5">
                    Inserisci un libro nel database!
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{route('book.store')}}" method="POST" class="p-5 rounded shadow bg-white">
                    @csrf
                    {{-- cross site references forgery --}}
                    {{-- title, plot, price, pages --}}
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="plot" class="form-label">Trama</label>
                        <textarea name="plot" id="plot" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>
                    <div class="mb-3">
                        <label for="pages" class="form-label">Numero di pagine</label>
                        <input type="number" class="form-control" id="pages" name="pages">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
