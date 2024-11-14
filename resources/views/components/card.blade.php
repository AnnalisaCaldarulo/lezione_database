<div class="card" style="width: 18rem;">
    <img src="https://picsum.photos/{{ 300 + $id }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $name }} {!! $surname !!}</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk
            of the card's content.</p>

        <p>L'id dello Studente è {{ $id }}</p>

        <a href="{{ route('dettaglioStudente', ['id' => $id]) }}"
            class="btn btn-primary">Vai al dettaglio</a>
    </div>
</div>