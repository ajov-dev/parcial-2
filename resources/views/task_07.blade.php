@extends('temp-base')

@section('content')
    <main class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Calculo de presupuesto medico</h3>
            </div>
            @if (isset($backend_url))
                <form action="{{ route($backend_url) }}" method="GET" class="form-inline mt-3">
                    @csrf
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="number" name="presupuesto" class="form-control" step="any"
                            placeholder="Ingrese el presupuesto medico para este año.">
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

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Departamento</th>
                                    <th>Porcentaje Correspondiente</th>
                                    <th>valor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ginecologia</td>
                                    <td>40.00% </td>
                                    <td>${{ $response * 0.4 }}</td>
                                </tr>
                                <tr>
                                    <td>Pediatria</td>
                                    <td>30.00% </td>
                                    <td>${{ $response * 0.3 }}</td>
                                </tr>
                                <tr>
                                    <td>Traumatologia</td>
                                    <td>30.00% </td>
                                    <td>${{ $response * 0.3 }}</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                @endif
            @endif
        </div>
    </main>
@endsection
