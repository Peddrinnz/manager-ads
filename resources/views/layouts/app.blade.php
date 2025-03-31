<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Estudantes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Início</a></li>
            <li><a href="{{ route('students.index') }}">Mostrar Estudantes</a></li>
            <li><a href="{{ route('classrooms.index') }}">Mostrar Turmas</a></li>
        </ul>
    </nav>
    @yield('content')
    <footer>
        <p>&copy; 2025 Gerenciamento de Estudantes - ADS</p>
    </footer>
</body>
</html>
