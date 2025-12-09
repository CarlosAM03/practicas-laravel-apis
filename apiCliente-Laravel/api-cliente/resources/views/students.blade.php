@extends('layouts.app' )
@section('title', 'Alumnos' )
@section('content')
<h1>Estudiantes</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Lenguaje de programación favorito</th>
            <th>Acciones</th>
        </tr>
    </thead>
<tbody>
@if (!is_array($data) || isset($data['status']))
    <p>No hay estudiantes registrados.</p>
@else
    @foreach ($data as $student)
        <tr>
            <td>{{ $student['id'] }}</td>
            <td>{{ $student['name'] }}</td>
            <td>{{ $student['email'] }}</td>
            <td>{{ $student['phone'] }}</td>
            <td>{{ $student['language'] }}</td>
            <td>
                <button><a href="{{ route('student.view', $student['id']) }}">Revisar</a></button>
                <button><a href="{{ route('student.delete', $student['id']) }}">Borrar</a></button>
            </td>
        </tr>
    @endforeach
@endif

</tbody>
</table>
@endsection