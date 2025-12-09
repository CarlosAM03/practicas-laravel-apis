<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    // GET /students
    public function index()
    {
        $students = Student::all();

        if ($students->isEmpty()) {
            return response()->json([
                "status" => "error",
                "message" => "No se encontraron estudiantes"
            ], 200);
        }

        return response()->json($students, 200);
    }

    // POST /students
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'required',
            'email'    => 'required|email',
            'phone'    => 'required',
            'language' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Datos incorrectos',
                'error'   => $validator->errors()
            ], 400);
        }

        $students = Student::create($request->all());

        return response()->json($students, 201);
    }

    // GET /students/{id}
    public function show($id)
    {
        $students = Student::find($id);

        if (!$students) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Estudiante no encontrado'
            ], 404);
        }

        return response()->json($students, 200);
    }

    // PUT /students/{id}
    public function update(Request $request, $id)
    {
        $students = Student::find($id);

        if (!$students) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Estudiante no encontrado'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name'     => 'required',
            'email'    => 'required|email',
            'phone'    => 'required',
            'language' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Error al validar los datos',
                'errors'  => $validator->errors()
            ], 400);
        }

        $students->update($request->all());

        return response()->json([
            'status'  => 'success',
            'message' => 'Estudiante actualizado con éxito',
            'data'    => $students
        ], 200);
    }

    // PATCH /students/{id}
    public function updatePartial(Request $request, $id)
    {
        $students = Student::find($id);

        if (!$students) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Estudiante no encontrado'
            ], 404);
        }

        // reglas correctas para actualización parcial
        $validator = Validator::make($request->all(), [
            'name'     => 'sometimes',
            'email'    => 'sometimes|email',
            'phone'    => 'sometimes',
            'language' => 'sometimes'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Error al validar los datos',
                'errors'  => $validator->errors()
            ], 400);
        }

        $students->update($request->only([
            'name',
            'email',
            'phone',
            'language'
        ]));

        return response()->json([
            'status'  => 'success',
            'message' => 'Estudiante actualizado parcialmente con éxito',
            'data'    => $students
        ], 200);
    }

    // DELETE /students/{id}
    public function destroy($id)
    {
        $students = Student::find($id);

        if (!$students) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Estudiante no encontrado'
            ], 404);
        }

        $students->delete();

        return response()->json([
            'status'  => 'success',
            'message' => 'Estudiante eliminado'
        ], 200);
    }
}
