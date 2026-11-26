{{-- resources/views/normas/index.blade.php --}}

@extends('layouts.app')

@section('titulo', 'Normas')

@section('contenido')
<h2>Normas</h2>
<ul>
    @foreach($normas as $norma)
        <li>
            {{ $norma }}
        </li>
    @endforeach
</ul>
@endsection
