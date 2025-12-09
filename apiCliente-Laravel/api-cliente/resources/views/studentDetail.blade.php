@extends('layouts.app')
@section('title', 'Alumnos' )
@section('content')
<h1>Editar Estudiante</h1>
<form action="{{ route('student.update' ) }}" method="POST">
@csrf
<input type="hidden" name="id" value="{{ $student['id' ] }}">
<label for="name">Nombre</label>
<input type="text" name="name" id="name" value="{{ $student['name' ] }}">
<label for="email">Email</label>
<input type="text" name="email" id="email" value="{{ $student['email' ] }}">
<label for="phone">Telefono</label>
<input type="text" name="phone" id="phone" value="{{ $student['phone' ] }}">
<label for="language">Lenguaje</label>
<input type="text" name="language" id="language" value="{{ $student['language' ] }}">
<button type="submit">Guardar</button>
</form>
@endsection