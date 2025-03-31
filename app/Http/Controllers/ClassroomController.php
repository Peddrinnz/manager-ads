<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;

class ClassroomController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::paginate(20);
        return view('classrooms.index', compact('classrooms'));
    }

    public function show($id)
    {
        $classrooms = Classroom::findOrFail($id);
        return view('classrooms.show', compact('classrooms'));
    }
}
