@extends('layouts.app')

@section('title', 'Criar Nova Turma')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Criar Nova Turma</h1>
        <a href="{{ route('classrooms.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg flex items-center">
            <i class="fas fa-arrow-left mr-2"></i> Voltar
        </a>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <form action="{{ route('classrooms.store') }}" method="POST">
            @csrf
            
            <div class="p-6 space-y-6">
                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <label for="num_class" class="block text-sm font-medium text-gray-700">Número da Turma</label>
                        <input type="text" name="num_class" id="num_class" value="{{ old('num_class') }}"
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500"
                               required>
                        @error('num_class')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="semester" class="block text-sm font-medium text-gray-700">Semestre</label>
                        <input type="text" name="semester" id="semester" value="{{ old('semester') }}"
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500"
                               required>
                        @error('semester')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="period_day" class="block text-sm font-medium text-gray-700">Período</label>
                        <select name="period_day" id="period_day" 
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500"
                                required>
                            <option value="">Selecione...</option>
                            <option value="Manhã" {{ old('period_day') == 'Manhã' ? 'selected' : '' }}>Manhã</option>
                            <option value="Tarde" {{ old('period_day') == 'Tarde' ? 'selected' : '' }}>Tarde</option>
                            <option value="Noite" {{ old('period_day') == 'Noite' ? 'selected' : '' }}>Noite</option>
                        </select>
                        @error('period_day')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-50 px-6 py-4 flex justify-end">
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg flex items-center">
                    <i class="fas fa-save mr-2"></i> Salvar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection