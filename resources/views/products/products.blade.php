@extends('layouts.app')

@section('content')

<livewire:productsView />
<!-- Botón para abrir el carrito -->
<button type="button" class="btn btn-success" data-bs-toggle="offcanvas" data-bs-target="#cartOffcanvas" aria-controls="cartOffcanvas">
    Ver Carrito
</button>


@endsection