<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <img class="img-top card-img" src="{{ Storage::url($boardgame->box) }}" alt="">
        <h5 class="card-title">{{ $boardgame->name }}</h5>
        <p class="card-text">{{ $boardgame->type }}</p>
        <p class="card-text">{{ $boardgame->players }}</p>
        <p class="card-text">{{ $boardgame->instructor }}</p>
        {{-- <a href="{{route('boardgame.show') }}" class="btn btn-primary">Go somewhere</a> --}}
    </div>
</div>
