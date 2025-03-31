@extends('layouts.app')

@section('content')
    <h1>Estudantes</h1>
    <table>
        <thead>
            <tr>
                <th>CPF</th>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->cpf }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->date_of_birth }}</td>
                <td>
                    <a href="{{ route('students.show', $student->id) }}">Detalhes</a>
                    <a href="#">Alterar</a>
                    <a href="#">Remover</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $students->links() }}
@endsection
