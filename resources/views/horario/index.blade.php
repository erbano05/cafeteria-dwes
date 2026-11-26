{{-- resources/views/horario/index.blade.php --}}

@extends('layouts.app')

@section('titulo', 'Horario')

@section('contenido')
<h2>Horario</h2>
<ul>
    @foreach($horario as $dia)
        <li>
            {{ $dia["codigo"] }}
            · {{ $dia["dia"] }}
            · {{ $dia["hora"] }}
        </li>
    @endforeach
</ul>
@endsection
