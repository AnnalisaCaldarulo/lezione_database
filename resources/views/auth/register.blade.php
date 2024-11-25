<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center py-5 display-4">
                    Registrati
                </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{-- form
    richiesta POST method
    action /register
    input: name, email, password, password_confirmation 
    --}}
                <form action="{{ route('register') }}" method="POST" class="p-5 rounded shadow bg-white">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Inserisci il tuo nome:</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Inserisci la tua mail:</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Inserisci la tua password:</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma password:</label>
                        <input type="password" class="form-control" name="password_confirmation"
                            id="password_confirmation">
                    </div>
                    <div class="mb-3 text-center">
                        <button class="btn btn-outline-success" type="submit">
                            Registrati
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-layout>
