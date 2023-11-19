@extends('temp-base')

@section('content')
    <main class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>porcentajes aleatorios</h3>
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
                                    <div class="progress-bar" role="progressbar" style="width: {{ $item['element'] }}%;" aria-valuenow="{{ $item['element'] }}" aria-valuemin="0" aria-valuemax="100">{{ $item['element'] }}%</div>
                                </div>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
