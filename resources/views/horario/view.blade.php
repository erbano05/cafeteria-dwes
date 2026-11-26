{{-- resources/views/horario/view.blade.php --}}

@extends('layouts.app')

@section('titulo', 'Horario')

@section('contenido')
<h2>Horario - {{ $dia["dia"] }} ({{ $dia["codigo"] }})</h2>
<p>{{ $dia["hora"] }}</p>

<h3>Trabajadores</h3>
@if(!empty($trabajadores))
    <ul>
        @foreach($trabajadores as $trabajador)
            <li>{{ $trabajador }}</li>
        @endforeach
    </ul>
@else
    <p>No hay trabajadores este día</p>
@endif
@endsection
