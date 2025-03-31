@extends('layouts.app')

@section('title', 'Lista de Estudantes')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Lista de Estudantes</h1>
    
    <table class="w-full bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-blue-600 text-white">
            <tr>
                <th class="py-2 px-4">CPF</th>
                <th class="py-2 px-4">Nome</th>
                <th class="py-2 px-4">Data de Nascimento</th>
                <th class="py-2 px-4">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr class="border-b">
                    <td class="py-2 px-4">{{ $student->cpf }}</td>
                    <td class="py-2 px-4">{{ $student->name }}</td>
                    <td class="py-2 px-4">{{ $student->date_of_birth }}</td>
                    <td class="py-2 px-4">
                        <a href="{{ route('students.show', $student->id) }}" class="text-blue-500">Detalhes</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 ml-2">Remover</button>
                        </form>
                        <a href="{{ route('students.edit', $student->id) }}" class="text-yellow-500 ml-2">Alterar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

