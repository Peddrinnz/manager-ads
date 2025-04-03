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

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'cpf' => 'required|unique:students|max:14',
            'name' => 'required|max:100',
            'date_of_birth' => 'required|date',
        ]);

        Student::create($validated);

        return redirect()->route('students.index')
                         ->with('success', 'Estudante criado com sucesso!');
    }

    public function show($id)
    {   
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        
        $validated = $request->validate([
            'cpf' => 'required|max:14|unique:students,cpf,'.$student->id,
            'name' => 'required|max:100',
            'date_of_birth' => 'required|date',
        ]);

        $student->update($validated);

        return redirect()->route('students.index')
                         ->with('success', 'Estudante atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.index')
                         ->with('success', 'Estudante removido com sucesso!');
    }
    public function removeStudent(Request $request, $classroomId, $studentId)
    {
    $classroom = Classroom::findOrFail($classroomId);
    $classroom->students()->detach($studentId);

    return back()->with('success', 'Estudante removido da turma!');
    }
}