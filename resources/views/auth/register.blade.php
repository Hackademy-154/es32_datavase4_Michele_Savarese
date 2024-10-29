<x-layout>

    <div class="container">
        <div class="rowjustify-content-center">
            <div class="col-12">
                <h1 class="display-4 text-center text-white text-shadow-dark">
                    Autenticati
                </h1>
            </div>
        </div>
        <div class="row justify-content-center pt-5">
            <div class="col-12 col-md-6">
                <form action="
                {{route('register')}}" method="POST"
                    class="rounded shadow p-5 bg-secondary-subtle text-center">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome completo:</label>
                        <input value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror"
                            type="text" name="name">
                        @error('name')
                            <div class="alert alert-danger">{{ $name }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Mail:</label>
                        <input value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror"
                            type="email" name="email">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label  @error('password') is-invalid @enderror"">
                            Password:
                        </label>
                        <input value="{{ old('password') }}" class="form-control" type="password" name="password">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label  @error('password_confirmation') is-invalid @enderror"">
                            Conferma Password:
                        </label>
                        <input value="{{ old('password_confirmation') }}" class="form-control" type="password_confirmation" name="password_confirmation">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-center ">
                        <button class="btn btn-primary">
                            Registrati
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
