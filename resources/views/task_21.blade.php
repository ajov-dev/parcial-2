@extends('temp-base')

@section('content')
    <main class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Porcentajes aleatorios con color.</h3>
            </div>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Numero</th>
                        <th>Valor</th>
                        <th>Porcentaje de progres bar utilizado.</th>
                    </tr>
                    @foreach ($response as $item)
                        <tr>
                            <th>{{ $item['id'] }}</th>
                            <th>{{ $item['element'] }}</th>
                            <th>
                                <div class="progress">
                                    {{-- cambiale el color al progress bar --}}
                                    <div class="progress-bar {{$item['progress-color']}}" role="progressbar" style="width: {{ $item['element'] }}%;" aria-valuenow="{{ $item['element'] }}" aria-valuemin="0" aria-valuemax="100">{{ $item['element'] }}%</div>
                                </div>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
