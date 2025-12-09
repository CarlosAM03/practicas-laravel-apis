@extends('layouts.app' )
@section('title', 'Alumnos' )
@section('content')

<h1>Nuevo Estudiante</h1>

<form action="{{ route('students.store' ) }}" method="POST">
    @csrf
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <label for="phone">Telefono</label>
        <input type="text" name="phone" id="phone">
        <label for="language">Lenguaje</label>
        <input type="text" name="language" id="language">
        <button type="submit">Guardar</button>
</form>
    @endsection