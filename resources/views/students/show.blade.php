@extends('layouts.app')

@section('title', 'Detalhes do Estudante')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Detalhes do Estudante</h1>
        <div class="flex space-x-2">
            <a href="{{ route('students.edit', $student->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg flex items-center">
                <i class="fas fa-edit mr-2"></i> Editar
            </a>
            <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg flex items-center">
                    <i class="fas fa-trash mr-2"></i> Remover
                </button>
            </form>
            <a href="{{ route('students.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg flex items-center">
                <i class="fas fa-arrow-left mr-2"></i> Voltar
            </a>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="p-6">
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h2 class="text-xl font-semibold text-gray-700 mb-4">Informações Pessoais</h2>
                    <div class="space-y-4">
                        <div>
                            <p class="text-sm font-medium text-gray-500">CPF</p>
                            <p class="mt-1 text-gray-900">{{ $student->cpf }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Nome Completo</p>
                            <p class="mt-1 text-gray-900">{{ $student->name }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Data de Nascimento</p>
                            <p class="mt-1 text-gray-900">{{ date('d/m/Y', strtotime($student->date_of_birth)) }}</p>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h2 class="text-xl font-semibold text-gray-700 mb-4">Turmas</h2>
                    @if($student->classrooms->count() > 0)
                        <ul class="divide-y divide-gray-200">
                            @foreach($student->classrooms as $classroom)
                            <li class="py-3">
                                <p class="font-medium">{{ $classroom->num_class }} - {{ $classroom->semester }}</p>
                                <p class="text-sm text-gray-500">{{ $classroom->period_day }}</p>
                            </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-gray-500">Este estudante não está matriculado em nenhuma turma.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection