@extends('layouts.app')

@section('title', 'Lista de Turmas')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Lista de Turmas</h1>

    <table class="w-full bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-green-600 text-white">
            <tr>
                <th class="py-2 px-4">Número da Turma</th>
                <th class="py-2 px-4">Semestre</th>
                <th class="py-2 px-4">Período do Dia</th>
                <th class="py-2 px-4">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classrooms as $classroom)
                <tr class="border-b">
                    <td class="py-2 px-4">{{ $classroom->num_class }}</td>
                    <td class="py-2 px-4">{{ $classroom->semester }}</td>
                    <td class="py-2 px-4">{{ $classroom->period_day }}</td>
                    <td class="py-2 px-4">
                        <a href="{{ route('classrooms.show', $classroom->id) }}" class="text-blue-500">Detalhes</a>
                        <form action="{{ route('classrooms.destroy', $classroom->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 ml-2">Remover</button>
                        </form>
                        <a href="{{ route('classrooms.edit', $classroom->id) }}" class="text-yellow-500 ml-2">Alterar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

