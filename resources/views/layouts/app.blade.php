<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Gerenciamento ADS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-600 text-white shadow-lg">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <a href="{{ route('home') }}" class="text-xl font-bold">Gestão ADS</a>
                <div class="space-x-4">
                    <a href="{{ route('students.index') }}" class="hover:bg-blue-700 px-3 py-2 rounded">Estudantes</a>
                    <a href="{{ route('classrooms.index') }}" class="hover:bg-blue-700 px-3 py-2 rounded">Turmas</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-6 mt-10">
        <div class="container mx-auto px-4 text-center">
            <p>Sistema de Gerenciamento de Estudantes - Curso ADS &copy; {{ date('Y') }}</p>
            <p class="mt-2 text-gray-400 text-sm">Desenvolvido por Pedro Ernesto com Laravel e Tailwind CSS</p>
        </div>
    </footer>

    <script>
        document.querySelectorAll('form[method="POST"]').forEach(form => {
            form.addEventListener('submit', function(e) {
                if (!confirm('Tem certeza que deseja executar esta ação?')) {
                    e.preventDefault();
                }
            });
        });
    </script>
</body>
</html>