@extends('temp-base')

@section('content')
    <main class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Calculo de costo por tiempo</h3>
            </div>
            @if (isset($backend_url))
                <form action="{{ route($backend_url) }}" method="POST" class="form-inline mt-3">
                    <div class="form-group mx-sm-3 mb-2">
                        <h3>
                            Escriba un programa donde se ingrese el tiempo necesario para un cierto proceso en horas,
                            minutos y segundos. Se
                            calcule el costo total del proceso sabiendo que el costo por segundo es B/.0.25. Enviar datos
                            por POST
                        </h3>

                    </div>
                    @csrf
                    <div class="form-group mx-sm-3 mb-2"> <input type="number" name="time_h" class="form-control"
                            step="any" placeholder="Ingrese las horas a evaluar">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="number" name="time_m" class="form-control" step="any"
                            placeholder="Ingrese los minutos a evaluar">
                    </div>
                    <div class="form-group mx-sm-3 mb-2"> <input type="number" name="time_s" class="form-control"
                            step="any" placeholder="Ingrese los segundos a evaluar">
                    </div>
                    <div class="form-group mx-sm-3 mb-2 w-100">
                        <button type="submit" class="btn btn-primary mt-2 mb-2 w-25">Calcular</button>
                    </div>
                </form>
                @endif @if (isset($reload))
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
                            <h4>{{ $costo_total }}</h4>
                        </div>
                    @endif
                @endif
        </div>
    </main>
@endsection
