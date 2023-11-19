@extends('temp-base')

@section('content')
    <main class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>La langosta ahumada” es una empresa dedicada a ofrecer banquetes; sus tarifas son las
                    siguientes: el costo de platillo por persona es de $95.00, pero si el número de personas es
                    mayor a 200 pero menor o igual a 300, el costo es de $85.00. Para más de 300 personas
                    el costo por platillo es de $75.00. Se requiere un Programa PHP + HTML que ayude a
                    determinar el presupuesto. Enviar datos por POST</h3>
            </div>
            @if (isset($backend_url))
                <form action="{{ route($backend_url) }}" method="POST" class="form-inline mt-3">
                    @csrf
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="number" name="cant_personas" class="form-control" step="any"
                            placeholder="¿reservacion para cuantos?">
                    </div>
                    <div class="form-group mx-sm-3 mb-2  w-100 ">
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
