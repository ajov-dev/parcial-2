@extends('temp-base')

@section('content')
    <main class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Hashing solo</h3>
            </div>
            @if (isset($backend_url))
                <form method="GET" class="form-inline mt-3">
                    <table class="table table-bordered">
                        <tbody>
                            {{-- hashea los numeros del 1 al 100 --}}
                            @foreach ($response as $item)
                                <tr>
                                    <th>{{ $item }}</th>
                                    <th>{{ $obj[$item]['hash'] }}</th>
                                    <th>
                                        <a class="btn btn-primary" href="#"
                                            onclick="redirigir('{{ route($backend_url, ['hash' => $obj[$item]['hash']]) }}')">
                                            Ver
                                        </a>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
                        <h3>{{ $response }}</h3>
                    </div>
                @endif
            @endif
        </div>
    </main>
@endsection
