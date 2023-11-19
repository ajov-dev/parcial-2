@extends('temp-base')

@section('content')
    <main class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Incremento de limite de credito segun tipo de tarjeta</h3>
            </div>
            @if (isset($backend_url))
                <form action="{{ route($backend_url) }}" method="POST" class="form-inline mt-3">
                    @csrf
                    <div class="form-group mx-sm-3 mb-2">
                        <h3>
                            El banco “Pueblo desconocido” ha decidido aumentar el límite de crédito de las tarjetas de
                            crédito de sus clientes, para esto considera que si su cliente tiene tarjeta tipo 1, el aumento
                            será de 25 %; si tiene tipo 2, será de 35 %; si tiene tipo 3, de 40 %, y para cualquier otro
                            tipo, de 50 %. Realice un Programa en PHP + HTML para determinar el nuevo límite de
                            crédito que tendrá una persona en su tarjeta. Enviar datos por POST.
                        </h3>
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <h3>Banco Desconocido, los Familiares primeros.</h3>
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="radio" id="tipo_01" name="rol" value="tipo1">
                        <label for="tipo_01">- Tarjeta Tipo 01</label><br>
                        <input type="radio" id="tipo_02" name="rol" value="tipo2">
                        <label for="tipo_02">- Tarjeta Tipo 02</label><br>
                        <input type="radio" id="tipo_03" name="rol" value="tipo3">
                        <label for="tipo_03">- Tarjeta Tipo 03</label><br>
                        <input type="radio" id="tipo_04" name="rol" value="tipo4">
                        <label for="tipo_04">- Tarjeta Tipo 04</label><br>
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
