@extends('temp-base')

@section('content')
    <main class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Calculo de Promedio</h3>
            </div>
            @if (isset($backend_url))
                <form action="{{ route($backend_url) }}" method="POST" class="form-inline mt-3">
                    @csrf
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" name="nombre_estudiante" class="form-control" step="any"
                            placeholder="Ingrese el nombre del estudiante.">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" name="nombre_materia" class="form-control" step="any"
                            placeholder="Ingrese el nombre de la materia.">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="number" name="nota_01" class="form-control" step="any"
                            placeholder="Ingrese la nota 01.">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="number" name="nota_02" class="form-control" step="any"
                            placeholder="Ingrese la nota 02.">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="number" name="nota_03" class="form-control" step="any"
                            placeholder="Ingrese la nota 03.">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="number" name="examen_final" class="form-control" step="any"
                            placeholder="Ingrese la nota del examen final.">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="number" name="proyecto_final" class="form-control" step="any"
                            placeholder="Ingrese la nota del proyecto final.">
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
                            <tbody>
                                <tr>
                                    <th>Nombre del estudiante</th>
                                    <th>{{ $nombre_estudiante }}</th>
                                </tr>
                                <tr>
                                    <th>Nombre de la materia</th>
                                    <th>{{ $nombre_materia }}</th>
                                </tr>
                                {{-- <tr>
                                    <th>Nota 1</th>
                                    <td>{{ $nota_01 }}</td>
                                </tr>
                                <tr>
                                    <th>Nota 2</th>
                                    <td>{{ $nota_02 }}</td>
                                </tr>
                                <tr>
                                    <th>Nota 3</th>
                                    <td>{{ $nota_03 }}</td>
                                </tr> --}}
                                <tr>
                                    <th>Porcentaje del promedio de la materia</th>
                                    <td>{{ $materia_promedio }}%</td>
                                </tr>
                                <tr>
                                    <th>Porcenteje del examen final</th>
                                    <td>{{ $examen_final }}%</td>
                                </tr>
                                <tr>
                                    <th>Porcenteje del proyecto final</th>
                                    <td>{{ $proyecto_final }}%</td>
                                </tr>
                                <tr>
                                    <th>Nota Final</th>
                                    <th>{{ $response }}%</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @endif
            @endif
        </div>
    </main>
@endsection
