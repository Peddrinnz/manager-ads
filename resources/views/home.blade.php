@extends('layouts.app')

@section('title', 'Início')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="bg-white rounded-lg shadow-xl overflow-hidden">
        <div class="bg-gradient-to-r from-blue-500 to-blue-700 p-8 text-white text-center">
            <h1 class="text-4xl font-bold mb-4">Bem-vindo ao Gerenciamento de Estudantes</h1>
            <p class="text-xl opacity-90">Sistema de gestão para o curso de Análise e Desenvolvimento de Sistemas</p>
        </div>
        
        <div class="p-8">
            <div class="grid md:grid-cols-2 gap-8">
                <a href="{{ route('students.index') }}" class="group">
                    <div class="bg-white border-2 border-blue-500 rounded-lg p-6 hover:bg-blue-50 transition-all duration-300 shadow-md group-hover:shadow-lg">
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                                <i class="fas fa-users text-blue-600 text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Estudantes</h3>
                            <p class="text-gray-600">Gerencie os estudantes do curso</p>
                            <button class="mt-4 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">Acessar</button>
                        </div>
                    </div>
                </a>
                
                <a href="{{ route('classrooms.index') }}" class="group">
                    <div class="bg-white border-2 border-green-500 rounded-lg p-6 hover:bg-green-50 transition-all duration-300 shadow-md group-hover:shadow-lg">
                        <div class="text-center">
                            <div class="bg-green-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                                <i class="fas fa-chalkboard-teacher text-green-600 text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Turmas</h3>
                            <p class="text-gray-600">Gerencie as turmas do curso</p>
                            <button class="mt-4 bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition-colors">Acessar</button>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection