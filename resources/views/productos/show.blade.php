@extends('layouts.app')

@section('content')
<h2>{{ $producto->nombre }}</h2>

<p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
<p><strong>Precio:</strong> ${{ number_format($producto->precio, 2) }}</p>
<p><strong>Stock:</strong> {{ $producto->stock }}</p>

<a href="{{ route('productos.index') }}">Volver al listado</a>
@endsection
