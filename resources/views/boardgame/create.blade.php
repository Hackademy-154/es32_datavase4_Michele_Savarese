<x-layout>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <h1 class="text-center text-black display-4 text-shadow">
                    Inserisci i dati dei giochi
                </h1>
                @if (@session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                @endif
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{ route('boardgame.library') }}" method="POST"
                    class="rounded shadow p-5 bg-secondary-subtle text-center" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome del gioco:</label>
                        <input value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror"
                            type="text" name="name">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label  @error('type') is-invalid @enderror">Tipo di
                            gioco:</label>
                        <input value="{{ old('type') }}" class="form-control" type="text" name="type">
                        @error('type')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="players" class="form-label  @error('players') is-invalid @enderror">Numero di
                            giocatori:</label>
                        <input value="{{ old('players') }}" class="form-control" type="number" name="players">
                        @error('players')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="instructor"
                            class="form-label  @error('instructor') is-invalid @enderror">Istruttore:</label>
                        <input value="{{ old('instructor') }}" class="form-control" type="text" name="instructor">
                        @error('instructor')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="box" class="form-label  @error('box') is-invalid @enderror">Immagine:</label>
                        <input class="form-control" type="file" name="box">
                        @error('box')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text-center ">
                        <button class="btn btn-primary">
                            Inserisci nel database
                        </button>
                    </div>
                    {{-- <label for=""></label>
                    <input type="text" name="">
                    <button type="submit"></button> --}}
                </form>
            </div>
        </div>
    </div>

</x-layout>
