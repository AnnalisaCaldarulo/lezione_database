<x-layout title="Homepage">
    {{-- <x-header>
        Benvenuti a Nicolandia
    </x-header> --}}

    {{-- altro modo --}}

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <x-header titleHeader="Benvenuti a Valerioland" />
</x-layout>
