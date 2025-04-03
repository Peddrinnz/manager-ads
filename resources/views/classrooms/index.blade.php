@extends('layouts.app')

@section('title', 'Lista de Turmas')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Lista de Turmas</h1>
    
    <table class="w-full bg-white shadow-md rounded-lg overflow-hidden border border-gray-200">
        <thead class="bg-green-600 text-white">
            <tr>
                <th class="py-3 px-4">Número da Turma</th>
                <th class="py-3 px-4">Semestre</th>
                <th class="py-3 px-4">Período do Dia</th>
                <th class="py-3 px-4">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classrooms as $classroom)
                <tr class="border-b hover:bg-gray-100 transition">
                    <td class="py-3 px-4">{{ $classroom->num_class }}</td>
                    <td class="py-3 px-4">{{ $classroom->semester }}</td>
                    <td class="py-3 px-4">{{ $classroom->period_day }}</td>
                    <td class="py-3 px-4 flex space-x-2">
                        <a href="{{ route('classrooms.show', $classroom->id) }}" class="text-blue-500 hover:underline">Detalhes</a>
                        <a href="{{ route('classrooms.edit', $classroom->id) }}" class="text-yellow-500 hover:underline">Alterar</a>
                        <form action="{{ route('classrooms.destroy', $classroom->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Remover</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection