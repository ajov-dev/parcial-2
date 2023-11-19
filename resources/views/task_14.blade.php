@extends('temp-base')

@section('content')
    <main class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Bono de antiguedad</h3>
            </div>
            @if (isset($backend_url))
                <form action="{{ route($backend_url) }}" method="POST" class="form-inline mt-3">
                    @csrf
                    <div class="form-group mx-sm-3 mb-2">
                        <h3>Se les dará un bono por antigüedad a los empleados de una tienda. Si tienen un año, se les
                            dará $100; si tienen 2 años, $200, y así sucesivamente hasta los 5 años. Para los que
                            tengan más de 5, el bono será de $1000. Enviar datos por POST.</h3>
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" name="time_empresa" class="form-control" step="any"
                            placeholder="Veamos, cuanto tiempo tienes en la empresa?">
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
                    <div class="form-group mx-sm-3 mb-2">
                        <h4>{{ $response }}</h4>
                    </div>
                @endif
            @endif
        </div>
    </main>
@endsection
