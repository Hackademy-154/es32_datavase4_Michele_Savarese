<x-layout>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <h1 class="text-center text-black display-4 text-shadow">
                    Modifica i dati di <span class="fst-italic">{{ $author->name }}</span> </h1>
                @if (@session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                @endif

            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{route('author.update', compact('author'))}}" method="POST" class="rounded shadow p-5 bg-secondary-subtle text-center"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome:</label>
                        <input value="{{ $author->name }}" class="form-control @error('name') is-invalid @enderror"
                            type="text" name="name">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <label for="bio" class="form-label  @error('bio') is-invalid @enderror">Biografia:</label>
                        <textarea name="bio" id="bio" cols="30" rows="10"
                            class="form-control @error('bio') is-invalid @enderror">
                            {{ $author->bio}}
                        </textarea>

                        @error('bio')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <p>Vecchia immagine:</p>
                        <img src="{{ Storage::url($author->pic) }}" alt="">
                    </div>

                    <div class="mb-3">
                        <label for="pic" class="form-label  @error('pic') is-invalid @enderror">
                            Headshot:
                        </label>
                        <input class="form-control" type="file" name="pic">
                        @error('pic')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text-center ">
                        <button class="btn btn-primary">
                            Modifica </button>
                    </div>
                    {{-- <label for=""></label>
                    <input type="text" name="">
                    <button type="submit"></button> --}}
                </form>
            </div>
        </div>

    </div>

</x-layout>
