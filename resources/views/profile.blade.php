<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">

                <h1 class="text-center py-5 display-4 text-shadow-dark">
                    Profilo di {{ Auth::user()->name }}
                </h1>

            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>
                    Tutti gli autori di {{ Auth::user()->name }}
                </div>
{{-- @dump(Auth::user()->authors) --}}
@foreach (Auth::user()->authors as $author)
    <div class="col-12 col-md-3">
        <div class="card" style="width: 18rem;">
            <img src="{{ Storage::url($author->pic) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $author->name }}</h5>
                <p class="card-text"></p>
                <a href="{{ route('author.show', compact('author')) }}" class="btn btn-primary">Visualizza
                    scheda</a>
            </div>
        </div>
    </div>
@endforeach
                </h2>
        </div>
    </div>

</x-layout>
