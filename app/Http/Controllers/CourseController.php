<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CourseController extends Controller
{
    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        return Redirect::route('dashboard')->with('status', '¡Curso enviado a revisión! Será aprobado por un administrador pronto.');
    }
}