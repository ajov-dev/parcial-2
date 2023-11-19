@extends('temp-base')

@section('content')
    <main class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Arbol de *</h3>
            </div>
            @if (isset($backend_url))
                <form action="{{ route($backend_url) }}" method="POST" class="form-inline mt-3">
                    @csrf
                    <div class="form-group mx-sm-3 mb-2">
                        <h3>
                            Crear un programa en PHP + HTML que lea un valor N y que imprima un triángulo de
                            asteriscos, como se muestra a continuación, si el valor leído es 5:
                            *
                            **
                            ***
                            ****
                            *****
                            Enviar datos por POST.
                        </h3>
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="number" name="steps" class="form-control" step="any"
                                placeholder="cantidad de pisos para el arbol. (mayor a 0 menor a 50)">
                        </div>
                    </div>

                    <div class="form-group mx-sm-3 mb-2 w-100 ">
                        <button type="submit" class="btn btn-primary mt-2 mb-2 w-25">Calcular</button>
                    </div>
                </form>
            @endif


            @if (isset($reload))
                <div class="form-group mx-sm-3 mb-2">
                    <div class="alert {{ $alert_type }} mt-3" role="alert">
                        <nav class="nav justify-content-end">
                            <a href="{{ route($reload) }}" type="button" class="btn-close"></a>
                        </nav>
                        <h4>{{ $message }}</h4>
                    </div>
                </div>
                @if (isset($response))
                    <div class="form-group mx-sm-3 mb-2 text-center">
                        <h3>pilla tu arbol</h3>
                        @foreach ($response as $rama)
                            {{ $rama }} <br>
                        @endforeach

                    </div>
                @endif
            @endif
        </div>
    </main>
@endsection
