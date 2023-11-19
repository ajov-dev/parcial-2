@extends('temp-base')

@section('content')
    <main class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Buscador en buscadores</h3>
                <form action="{{ route($backend_url) }}" method="POST" class="form-inline mt-3">
                    @csrf
                    <div class="form-group mx-ms-3 mb-2">
                        <input type="text" class="form-control" placeholder="Que necesitas encontrar?" name="input_searched">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="radio" id="google" name="search" value="google">
                        <label for="google">- Google</label><br>
                        <input type="radio" id="bing" name="search" value="bing">
                        <label for="bing">- Bing</label><br>
                        <input type="radio" id="yahoo" name="search" value="yahoo">
                        <label for="yahoo">- Yahoo</label><br>
                        <input type="radio" id="youtube" name="search" value="youtube">
                        <label for="youtube">- Youtube</label><br>
                        <input type="radio" id="google_maps" name="search" value="google_maps">
                        <label for="google_maps">- Google Maps</label><br>
                    </div>
                    <div class="form-group mx-sm-3 mb-2 w-100 ">
                        <button type="submit" class="btn btn-primary mt-2 mb-2 w-25">Calcular</button>
                    </div>
                </form>
            </div>
    </main>
@endsection
