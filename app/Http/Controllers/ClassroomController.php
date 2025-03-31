<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        $classroom = Classroom::paginate(20);
        return view('classrooms.index', compact('classrooms'));
    }

    public function show($id)
    {
        $classroom = Classroom::findOrFail($id);
        return view('classrooms.show', compact('classrooms'));
    }
}
