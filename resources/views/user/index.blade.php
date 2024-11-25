<x-layout>
    <div class="container min-vh-100">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class=" text-shadow display-4 py-5">
                    Tutti gli utenti del sito
                </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($users as $user)
                <div class="col-12 col-md-3 mb-5 d-flex justify-content-center">
                    <div class="card shadow" style="width: 18rem;">
                        {{-- @dump($user) --}}
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $user->name }}</h5>
                            <div class="text-center">
                                <a href="{{route('book.byUser', compact('user'))}}" class="btn btn-outline-success">Vai ai suoi libri</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
