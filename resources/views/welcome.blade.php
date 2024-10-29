<x-layout>

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-4 text-shadow">
                    Database 2 - Michele savarse
                </h1>
            </div>
        </div>

        <div class="row justify-content-center">
            {{-- @dd($ciccio) --}}
            @foreach ($boardgames as $boardgame)
                <div class="col-12 col-md-4">
                    <x-card :boardgame="$boardgame" />
                </div>
            @endforeach
        </div>
    </div>
    {{-- <header class="bg-black vh-100">
    </header> --}}

</x-layout>
