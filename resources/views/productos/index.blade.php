@extends('layouts.app')

@section('content')
<h2>Listado de Productos</h2>

@if($productos->isEmpty())
    <p>No hay productos registrados.</p>
@else
    <table style="width:100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #333; color: white;">
                <th style="padding: 10px; border: 1px solid #ccc;">Nombre</th>
                <th style="padding: 10px; border: 1px solid #ccc;">Descripción</th>
                <th style="padding: 10px; border: 1px solid #ccc;">Precio</th>
                <th style="padding: 10px; border: 1px solid #ccc;">Stock</th>
                <th style="padding: 10px; border: 1px solid #ccc;">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td style="padding: 10px; border: 1px solid #ccc;">{{ $producto->nombre }}</td>
                    <td style="padding: 10px; border: 1px solid #ccc;">{{ $producto->descripcion }}</td>
                    <td style="padding: 10px; border: 1px solid #ccc;">${{ number_format($producto->precio, 2) }}</td>
                    <td style="padding: 10px; border: 1px solid #ccc;">{{ $producto->stock }}</td>
                    <td style="padding: 10px; border: 1px solid #ccc;">
                        <a href="{{ route('productos.show', $producto->id) }}">Ver detalle</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
@endsection
