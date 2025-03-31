@extends('layouts.app')

@section('title', 'Detalhes da Turma')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Detalhes da Turma</h1>

    <div class="bg-white p-6 shadow-md rounded-lg">
        <p><strong>Número da Turma:</strong> {{ $classroom->num_class }}</p>
        <p><strong>Semestre:</strong> {{ $classroom->semester }}</p>
        <p><strong>Período do Dia:</strong> {{ $classroom->period_day }}</p>
    </div>
@endsection
