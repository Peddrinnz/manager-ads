@extends('layouts.app')

@section('title', 'Detalhes do Estudante')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Detalhes do Estudante</h1>

    <div class="bg-white p-6 shadow-md rounded-lg">
        <p><strong>CPF:</strong> {{ $student->cpf }}</p>
        <p><strong>Nome:</strong> {{ $student->name }}</p>
        <p><strong>Data de Nascimento:</strong> {{ $student->date_of_birth }}</p>
    </div>
@endsection
