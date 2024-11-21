<x-layout>
    <div class="container-fluid min-vh-100">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-4 py-5 text-shadow">
                    Inserisci un autore nel database!
                </h1>
            </div>
        </div>
        <div class="row justify-content-center pb-5">
            <div class="col-12 col-md-6 ">
                <form action="{{route('author.store')}}" method="POST" class="p-5 rounded shadow bg-white"
                    enctype="multipart/form-data">
                    @csrf
                    {{-- cross site request forgery --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror " id="name"
                            name="name" value="{{ old('name') }}">
                        @error('name')
                            <p class="fst-italic text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="surname" class="form-label">Cognome</label>
                        <input type="text" class="form-control @error('surname') is-invalid @enderror " id="surname"
                            name="surname" value="{{ old('surname') }}">
                        @error('surname')
                            <p class="fst-italic text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="bio" class="form-label">Biografia</label>
                        <textarea name="bio" id="bio" class="form-control @error('bio') is-invalid @enderror" cols="30"
                            rows="10">{{ old('bio') }}</textarea>
                        @error('bio')
                            <p class="fst-italic text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="pic" class="form-label">Headshot</label>
                        <input type="file" class="form-control @error('pic') is-invalid @enderror" id="pic"
                            name="pic">
                        @error('pic')
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
