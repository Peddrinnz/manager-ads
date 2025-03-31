<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <nav class="bg-blue-600 p-4 text-white">
        <div class="container mx-auto flex justify-between">
            <a href="{{ route('home') }}" class="font-bold">Home</a>
            <div>
                <a href="{{ route('students.index') }}" class="mr-4">Estudantes</a>
                <a href="{{ route('classrooms.index') }}">Turmas</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-6">
        @yield('content')
    </div>

    <footer class="bg-gray-800 text-white text-center py-3 mt-6">
        <p>&copy; {{ date('Y') }} Gerenciamento de Estudantes</p>
    </footer>

</body>
</html>
