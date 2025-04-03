@extends('layouts.app')

@section('title', isset($classroom) ? 'Editar Turma' : 'Criar Turma')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">{{ isset($classroom) ? 'Editar Turma' : 'Adicionar Nova Turma' }}</h1>
        <a href="{{ route('classrooms.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg flex items-center">
            <i class="fas fa-arrow-left mr-2"></i> Voltar
        </a>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <form action="{{ isset($classroom) ? route('classrooms.update', $classroom->id) : route('classrooms.store') }}" method="POST">
            @csrf
            @if(isset($classroom))
                @method('PUT')
            @endif
            
            <div class="p-6 space-y-6">
                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <label for="num_class" class="block text-sm font-medium text-gray-700">Número da Turma</label>
                        <input type="text" name="num_class" id="num_class" value="{{ old('num_class', $classroom->num_class ?? '') }}" 
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500">
                        @error('num_class')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="semester" class="block text-sm font-medium text-gray-700">Semestre</label>
                        <input type="text" name="semester" id="semester" value="{{ old('semester', $classroom->semester ?? '') }}" 
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500">
                        @error('semester')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="period_day" class="block text-sm font-medium text-gray-700">Período do Dia</label>
                        <select name="period_day" id="period_day" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500">
                            <option value="Manhã" {{ old('period_day', $classroom->period_day ?? '') == 'Manhã' ? 'selected' : '' }}>Manhã</option>
                            <option value="Tarde" {{ old('period_day', $classroom->period_day ?? '') == 'Tarde' ? 'selected' : '' }}>Tarde</option>
                            <option value="Noite" {{ old('period_day', $classroom->period_day ?? '') == 'Noite' ? 'selected' : '' }}>Noite</option>
                        </select>
                        @error('period_day')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                @if(isset($classroom))
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Estudantes Matriculados</label>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        @if($classroom->students->count() > 0)
                            <ul class="divide-y divide-gray-200">
                                @foreach($classroom->students as $student)
                                <li class="py-2 flex justify-between items-center">
                                    <div>
                                        <p class="font-medium">{{ $student->name }}</p>
                                        <p class="text-sm text-gray-500">{{ $student->cpf }}</p>
                                    </div>
                                    <form action="{{ route('classrooms.removeStudent', ['classroom' => $classroom->id, 'student' => $student->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 text-sm">
                                            <i class="fas fa-user-minus"></i> Remover
                                        </button>
                                    </form>
                                </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-gray-500">Nenhum estudante matriculado.</p>
                        @endif
                    </div>
                </div>
                
                <div>
                    <label for="new_students" class="block text-sm font-medium text-gray-700">Adicionar Estudantes</label>
                    <select name="new_students[]" id="new_students" multiple
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500">
                    @foreach($availableStudents as $student)
                    <option value="{{ $student->id }}">
                        {{ $student->name }} ({{ $student->cpf }})
                    </option>
            @endforeach
        </select>
                </div>
                @endif
            </div>
            
            <div class="bg-gray-50 px-6 py-4 flex justify-end">
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg flex items-center">
                    <i class="fas fa-save mr-2"></i> Salvar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection