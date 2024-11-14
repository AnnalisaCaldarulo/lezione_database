<x-layout title="Chi Siamo">

  <x-header titleHeader="Benvenuti in Chi Siamo"/>

    {{-- sezione delle card --}}

    <section class="container my-5">
        <h2>I miei studenti:</h2>
        <div class="row justify-content-center">

            @foreach ($students as $student)
                <div class="col-12 col-md-3">
                  {{-- qui ci va la card --}}
                    <x-card
                        id="{{$student['id']}}"
                        name="{{$student['name']}}"
                        surname="{{$student['surname']}}"
                    />
                </div>
            @endforeach

        </div>
    </section>

</x-layout>
