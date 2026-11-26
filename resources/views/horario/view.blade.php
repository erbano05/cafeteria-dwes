{{-- resources/views/horario/view.blade.php --}}

@extends('layouts.app')

@section('titulo', 'Horario')

@section('contenido')
<h2>Horario</h2>
<ul>
    @foreach($horario as $dia)
        <li><a href="{{ route() }}">
            {{ $dia["codigo"] }}
            · {{ $dia["dia"] }}
            · {{ $dia["hora"] }}
        </a></li>
    @endforeach
</ul>
@endsection
