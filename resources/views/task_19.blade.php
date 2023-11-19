@extends('temp-base')

@section('content')
    <main class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Hashing + modal</h3>
            </div>

            @if ($load == 'task_19.store')
                <table class="table table-bordered">
                    <tbody>
                        {{-- hashea los numeros del 1 al 100 --}}
                        @foreach ($response as $item)
                            <tr>
                                <th>{{ $obj[$item]['id'] }}</th>
                                <th>{{ $obj[$item]['hash'] }}</th>
                                <th>
                                    <button onclick="redirigir('{{ route($load, ['hash' => $obj[$item]['hash']]) }}')"
                                        type="button" class="btn btn-primary">
                                        Ver
                                    </button>
                                </th>
                                <th>
                                    <!-- Modal trigger button -->
                                    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                                        data-bs-target="#modalId">
                                        Ver Modal
                                    </button>
                                    <!-- Optional: Place to the bottom of scripts -->
                                    <script>
                                        const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
                                    </script>
                                    <!-- Modal Body -->
                                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static"
                                        data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="modalTitleId">El hash para el numero
                                                        {{ $item }}</h3>
                                                    <a href="{{ route('task_19.index') }}" class="btn btn-close"></a>
                                                </div>
                                                <div class="modal-body">
                                                    {{ $obj[$item]['hash'] }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

            @if ($load == 'task_19.index')
                <div class="form-group mx-sm-3 mb-2">
                    <div class="alert {{ $alert_type }} mt-3" role="alert">
                        <nav class="nav justify-content-end">
                            <a href="{{ route($load) }}" type="button" class="btn-close"></a>
                        </nav>
                        <h4>{{ $message }}</h4>
                    </div>
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <h3>{{ $response }}</h3>
                </div>
                <div class="modal" id="modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Message</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif


            <script>
                function redirigir(url) {
                    window.location.href = url;
                }
                // genera el modal con el contenido de la vista
            </script>


        </div>
    </main>
@endsection
