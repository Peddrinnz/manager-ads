<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::paginate(20);
        return view('students.index', compact('students'));
    }

    public function show($id)
    {   
        $students = Student::findOrFail($id);
        return view('students.show', compact('students'));
    }
}
