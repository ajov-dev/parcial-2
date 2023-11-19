<!-- home.blade.php -->
@extends('temp-base') <!-- Indica que 'home' extiende 'temp-base' -->

@section('content') <!-- Define la sección 'content' en la plantilla base -->
{{-- genera una vista simple con bustrap como una landing page de bienvenida --}}
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>¡Bienvenido!</h1>
            <p>Esta es una página de bienvenida.</p>
        </div>
    </div>
    
</div>
@endsection
