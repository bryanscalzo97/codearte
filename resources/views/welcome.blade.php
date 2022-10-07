{{--
Vamos a pedir que este template "extienda" o "herede" el template de [layouts/main.blade.php].
--}}
@extends('layouts.main')

@section('title', 'Página Principal') {{-- El segundo parámetro es el contenido.  --}}

@section('main') 
<h1>Hola Mundo :D</h1>
@endsection
