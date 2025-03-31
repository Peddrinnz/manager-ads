@extends('layouts.app')

@section('title', 'Início')

@section('content')
    <div class="text-center">
        <h1 class="text-3xl font-bold">Bem-vindo ao Gerenciamento de Estudantes</h1>
        <p class="mt-4 text-gray-700">Selecione uma opção abaixo:</p>
        
        <div class="mt-6">
            <a href="{{ route('students.index') }}" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Mostrar Estudantes</a>
            <a href="{{ route('classrooms.index') }}" class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-700">Mostrar Turmas</a>
        </div>
    </div>
@endsection
