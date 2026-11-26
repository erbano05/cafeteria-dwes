{{-- resources/views/carta/view.blade.php --}}

@extends('layouts.app')

@section('titulo', $producto["nombre"])

@section('contenido')
<h2>Producto - {{ $producto["nombre"] }}</h2>
<ul>
    <li>{{ $producto["codigo"] }}</li>
    <li>{{ $producto["nombre"] }}</li>
    <li>{{ number_format($producto['precio'], 2, ',', '.') }}€</li>
</ul>
@endsection
