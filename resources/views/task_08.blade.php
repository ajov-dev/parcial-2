@extends('temp-base')

@section('content')
    <main class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Calculo de porcentaje de inversion</h3>
            </div>
            @if (isset($backend_url))
                <form action="{{ route($backend_url) }}" method="POST" class="form-inline mt-3">
                    @csrf
                    <div class="form-group mx-sm-3 mb-2">
                        <h3>3 amigos decidieron invertir en la bolsa de valores, pero ahora decidieron que quieren conocer
                            el porcentaje de inversion que poseen.</h3>
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" name="cant_inversion_01" class="form-control" step="any"
                            placeholder="Ingrese la inversion de Manuel.">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" name="cant_inversion_02" class="form-control" step="any"
                            placeholder="Ingrese la inversion de Luis.">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" name="cant_inversion_03" class="form-control" step="any"
                            placeholder="Ingrese la inversion de Juan.">
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

                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Inverison Total</th>
                                    <th>{{ $response }}</th>
                                </tr>
                                <tr>
                                    <th>Porcentaje de Manuel</th>
                                    <th>{{ $pi_01 }}%</th>
                                </tr>
                                <tr>
                                    <th>Porcentaje de Luis</th>
                                    <th>{{ $pi_02 }}%</th>
                                </tr>
                                <tr>
                                    <th>Porcentaje de Juan</th>
                                    <th>{{ $pi_03 }}%</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @endif
            @endif
        </div>
    </main>
@endsection
