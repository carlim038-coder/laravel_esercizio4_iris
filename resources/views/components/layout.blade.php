<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Il mio Blog' }}</title>
    
    <!-- Direttiva Vite per Bootstrap -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <!-- Includiamo il componente della Navbar -->
    <x-navbar />

    <!-- Contenuto dinamico delle pagine -->
    <main>
        {{ $slot }}
    </main> 
</body>
</html>