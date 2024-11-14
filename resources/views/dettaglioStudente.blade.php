<x-layout title="Dettaglio">


    <header class="container-fluid bg-homepage">
        <div class="row vh-100">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <h1 class="display-1 fw-bold text-decoration-underline">Pagina Dettaglio</h1>
            </div>

            <div class="col-12 d-flex flex-column align-items-center">
                <h2>{{ $student['name'] }} {{ $student['surname'] }} </h2>
                <h4>Ciao, ho {{ $student['age'] }} anni e la mia materia preferita è {{ $student['subject'] }}</h4>
                <a href="{{ route('chiSiamo') }}" class="btn btn-success">Tornare Indietro</a>
            </div>
        </div>
    </header>

</x-layout>
