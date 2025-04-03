@extends('layouts.app')

@section('title', 'Detalhes da Turma')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Detalhes da Turma</h1>
        <div class="flex space-x-2">
            <a href="{{ route('classrooms.edit', $classroom->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg flex items-center">
                <i class="fas fa-edit mr-2"></i> Editar
            </a>
            @foreach($classroom->students as $student)
                <li class="py-3 flex justify-between items-center">
                <div>
                    <p class="font-medium">{{ $student->name }}</p>
                    <p class="text-sm text-gray-500">{{ $student->cpf }}</p>
                </div>
            <form action="{{ route('classrooms.removeStudent', ['classroom' => $classroom->id, 'student' => $student->id]) }}" method="POST">
                @csrf
                    @method('DELETE')
            <button type="submit" class="text-red-600 hover:text-red-900 text-sm flex items-center">
                <i class="fas fa-user-minus mr-1"></i> Remover
            </button>
        </form>
    </li>
@endforeach
            <a href="{{ route('classrooms.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg flex items-center">
                <i class="fas fa-arrow-left mr-2"></i> Voltar
            </a>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="p-6">
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h2 class="text-xl font-semibold text-gray-700 mb-4">Informações da Turma</h2>
                    <div class="space-y-4">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Número da Turma</p>
                            <p class="mt-1 text-gray-900">{{ $classroom->num_class }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Semestre</p>
                            <p class="mt-1 text-gray-900">{{ $classroom->semester }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Período do Dia</p>
                            <p class="mt-1 text-gray-900">{{ $classroom->period_day }}</p>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h2 class="text-xl font-semibold text-gray-700 mb-4">Estudantes Matriculados</h2>
                    @if($classroom->students->count() > 0)
                        <ul class="divide-y divide-gray-200">
                            @foreach($classroom->students as $student)
                            <li class="py-3">
                                <p class="font-medium">{{ $student->name }}</p>
                                <p class="text-sm text-gray-500">CPF: {{ $student->cpf }}</p>
                            </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-gray-500">Nenhum estudante matriculado nesta turma.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection