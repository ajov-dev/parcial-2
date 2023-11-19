@extends('temp-base')

@section('content')
    <main class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Calculo de porcentaje de de personas en razon de su sexo.</h3>
            </div>
            @if (isset($backend_url))
                <form action="{{ route($backend_url) }}" method="GET" class="form-inline mt-3">
                    @csrf
                    <div class="form-group mx-sm-3 mb-2">
                        <h3>Se pide crear un algoritmo que calcule el porcentaje de alumnos y alumnas de un salón de
                            clase.</h3>
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" name="cant_mujeres" class="form-control" step="any"
                            placeholder="Ingrese la cantidad de Mujeres en el aula.">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" name="cant_hombres" class="form-control" step="any"
                            placeholder="Ingrese la cantidad de Hombres en el aula.">
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
                                    <th>Poblacion general</th>
                                    <th>{{ $response }}</th>
                                </tr>
                                <tr>
                                    <th>Porcentaje de Mujeres</th>
                                    <th>{{ $porcentaje_mujeres }}%</th>
                                </tr>
                                <tr>
                                    <th>Porcentaje de Hombres</th>
                                    <th>{{ $porcentaje_hombres }}%</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @endif
            @endif
        </div>
    </main>
@endsection
