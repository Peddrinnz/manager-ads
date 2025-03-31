@extends('layouts.app')

@section('content')
    <h1>Bem-vindo ao Gerenciamento de Estudantes - Curso ADS</h1>
    <ul>
        <li><a href="{{ route('students.index') }}">Mostrar Estudantes</a></li>
        <li><a href="{{ route('classrooms.index') }}">Mostrar Turmas</a></li>
    </ul>
@endsection
