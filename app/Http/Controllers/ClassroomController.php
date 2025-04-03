<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;
use App\Models\Student;

class ClassroomController extends Controller
{
    public function index()
    {
    $classrooms = Classroom::withCount('students')->paginate(20);
    return view('classrooms.index', compact('classrooms'));
    }

    public function create()
    {
        return view('classrooms.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'num_class' => 'required|unique:classrooms|max:20',
            'semester' => 'required|max:20',
            'period_day' => 'required|in:Manhã,Tarde,Noite',
        ]);

        Classroom::create($validated);

        return redirect()->route('classrooms.index')
                         ->with('success', 'Turma criada com sucesso!');
    }

    public function show($id)
    {
    $classroom = Classroom::with('students')->findOrFail($id);
    return view('classrooms.show', compact('classroom'));
    }

    public function edit($id)
    {
    $classroom = Classroom::findOrFail($id);
    $availableStudents = Student::whereDoesntHave('classrooms', function($query) use ($id) {
        $query->where('classroom_id', $id);
    })->get();

    return view('classrooms.edit', compact('classroom', 'availableStudents'));
    }

    public function update(Request $request, $id)
    {
        $classroom = Classroom::findOrFail($id);
        
        $validated = $request->validate([
            'num_class' => 'required|max:20|unique:classrooms,num_class,'.$classroom->id,
            'semester' => 'required|max:20',
            'period_day' => 'required|in:Manhã,Tarde,Noite',
        ]);

        $classroom->update($validated);

        if ($request->has('new_students')) {
            $classroom->students()->attach($request->new_students);
        }
    
        return redirect()->route('classrooms.show', $classroom->id)
                         ->with('success', 'Turma atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $classroom = Classroom::findOrFail($id);
        $classroom->delete();

        return redirect()->route('classrooms.index')
                         ->with('success', 'Turma removida com sucesso!');
    }

    public function removeStudent(Request $request, $classroomId, $studentId)
    {
        $classroom = Classroom::findOrFail($classroomId);
        $classroom->students()->detach($studentId);

        return back()->with('success', 'Estudante removido da turma!');
    }
}