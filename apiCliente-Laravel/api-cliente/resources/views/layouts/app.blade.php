<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Sistema de Estudiantes</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f1f1f1;
        }

        header {
            background: #007bff;
            padding: 15px 20px;
            color: white;
        }

        header h2 {
            margin: 0.5;
            font-size: 22px;
        }

        nav {
            margin-top: 8px;
        }

        nav a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            background: white;
            width: 90%;
            max-width: 1100px;
            margin: 25px auto;
            padding: 25px;
            border-radius: 10px;
        }

        h1 {
            margin-top: 0;
        }

        /* FORMULARIOS */
        form {
            display: flex;
            flex-direction: column;
            width: 300px;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
        }

        input {
            padding: 8px;
            margin-top: 5px;
        }

        button {
            margin-top: 15px;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        button a {
            color: white;
            text-decoration: none;
        }

        button:hover {
            background: #0056b3;
        }

        /* TABLAS */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th {
            background: #007bff;
            color: white;
            padding: 10px;
        }

        td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        td button {
            margin: 2px;
            background: #343a40;
        }

        td button a {
            color: white;
        }

        td button.btn-delete {
            background: #dc3545;
        }
    </style>
</head>
<body>

<header>
    <h2>Sistema de Estudiantes</h2>
    <nav>
        <a href="{{ route('students.index') }}"> Listado</a>
        <a href="{{ route('student.create') }}"> Crear Estudiante</a>
    </nav>
</header>

<div class="container">
    @yield('content')
</div>

</body>
</html>
