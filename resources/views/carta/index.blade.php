{{-- resources/views/carta/index.blade.php --}}

@extends('layouts.app')

@section('titulo', 'Carta')

@section('contenido')
<h2>Carta</h2>
<ul>
    @foreach ($productos as $producto)
        <li><a href="{{ route('vista_producto', ['codigo' => $producto["codigo"]]) }}">
            {{ $producto['codigo'] }}
            - {{ $producto['nombre'] }}
            - {{ number_format($producto['precio'], 2, ',', '.') }}€
        </a></li>
    @endforeach
</ul>
@endsection
