@extends('layouts.app')

@section('content')
    <h1>Turmas</h1>
    <table>
        <thead>
            <tr>
                <th>Numero da Turma</th>
                <th>Semestre</th>
                <th>Período do Dia</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classrooms as $classroom)
            <tr>
                <td>{{ $classroom->num_class }}</td>
                <td>{{ $classroom->semester }}</td>
                <td>{{ $classroom->period_day }}</td>
                <td>
                    <a href="{{ route('classroom.show', $classroom->id) }}">Detalhes</a>
                    <a href="#">Alterar</a>
                    <a href="#">Remover</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $classrooms->links() }}
@endsection
