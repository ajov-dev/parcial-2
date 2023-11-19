@extends('temp-base')

@section('content')
    <main class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Calculo de Salario Neto</h3>
            </div>
            @if (isset($backend_url))
                <form action="{{ route($backend_url) }}" method="POST" class="form-inline mt-3">
                    @csrf
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="number" name="hora_pago" class="form-control" step="any"
                            placeholder="Ingrese el pago por hora realizado al empleado.">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="number" name="hora_trabajo" class="form-control" step="any"
                            placeholder="Ingrese las horas trabajadas del empleado.">
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
                    <div class="form-group mx-sm-3 mb2">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Concepto</th>
                                    <th class="text-end" scope="col">Valor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Pago por horas</th>
                                    <td class="text-end">{{ $hora_pago }}</td>
                                </tr>
                                <tr>
                                    <th>Horas Trabajadas</th>
                                    <td class="text-end">{{ $hora_trabajo }}</td>
                                </tr>
                                <tr>
                                    <th>Salario Bruto</th>
                                    <td class="text-end">{{ $salario_bruto }}</td>
                                </tr>
                                <tr>
                                    <th>Descuento 20%</th>
                                    <td class="text-end">{{ $descuento }}</td>
                                </tr>
                                <tr>
                                    <th>Salario Neto</th>
                                    <th class="text-end">{{ $response }}</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @endif
            @endif
        </div>
    </main>
@endsection
