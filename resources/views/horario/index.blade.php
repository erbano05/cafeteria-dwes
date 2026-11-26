{{-- resources/views/horario/index.blade.php --}}

@extends('layouts.app')

@section('titulo', 'Horario')

@section('contenido')
<h2>Horario</h2>
<ul>
    @foreach($horario as $dia)
        <li><a href="{{ route('vista_horario', ['codigo' => $dia["codigo"]]) }}">
            {{ $dia["codigo"] }}
            · {{ $dia["dia"] }}
            · {{ $dia["hora"] }}
        </a></li>
    @endforeach
</ul>
@endsection
