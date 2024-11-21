<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center py-5 display-4">
                    Login
                </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                {{-- form
        method post
        action login: 
        1. input email 
        2. input password
    --}}
                <form action="{{route('login')}}" method="POST" class="p-5 rounded shadow bg-white">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Inserisci la tua mail:</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Inserisci la tua password:</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="mb-3 text-center">
                        <button class="btn btn-outline-success" type="submit">
                            Accedi
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-layout>
