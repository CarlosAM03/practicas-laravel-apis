<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StudentsController extends Controller
{
    public function index()
    {
        $url = env('URL_SERVER_API');
        $response = Http::get($url . '/students');
        $data = $response->json();
        return view('students', compact('data'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API');
        $response = Http::get($url . '/students');
        $data = $response->json();
        return view('student');
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        $response = Http::post($url . '/students', [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'language' => $request->language,
        ]);

        if ($response->failed()) {
            dd('Error API:', $response->json());
        }

        return redirect()->route('students.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/students/' . $id);
        return redirect()->route('students.index');
    }

    public function view($id)
    {
        $url = env('URL_SERVER_API');
        $response = Http::get($url . '/students/' . $id);
        $student = $response->json();
        return view('studentDetail', compact('student'));
    }

    public function update(Request $request)
    {
        $url = env('URL_SERVER_API');

        $response = Http::put($url . '/students/' . $request->id, [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'language' => $request->language,
        ]);

        if ($response->failed()) {
            dd('Error API:', $response->json());
        }

        return redirect()->route('students.index');
    }
}
