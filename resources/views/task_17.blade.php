@extends('temp-base')

@section('content')
    <main class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>tabla de multiplicar con enlace </h3>
            </div>
            @if (isset($backend_url))
            <form method="GET" class="form-inline mt-3">
                    @csrf
                    <table class="table table-bordered">
                        <tbody>
                            @foreach ($table as $dato)
                                <tr>
                                    <td>{{ $dato }}</td>
                                    <td>
                                        <a class="btn btn_secondary" href="#"
                                            onclick="redirigir('{{ route($backend_url, ['numero' => $dato]) }}')">
                                            Enlace a tabla {{ $dato }}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- <div class="form-group mx-sm-3 mb-2  w-100 ">
                        <button type="submit" class="btn btn-primary mt-2 mb-2 w-25">Calcular</button>
                    </div> --}}
                </form>
            @endif

            <script>
                function redirigir(url) {
                    window.location.href = url;
                }
            </script>


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

                                    <th scope="col">Numero</th>
                                    <th scope="col">Resultado</th>
                                </tr>
                            <tbody>
                                @foreach ($response as $dato)
                                    <tr>
                                        <td>{{ $id }} * {{ $dato }}</td>
                                        <td>
                                            {{ $dato * $id }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            @endif
        </div>
    </main>
@endsection
