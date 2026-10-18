<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#292923">
    <meta name="description" content="Portofolio dan E-CV {{ $portfolio['profile']['name'] }}, mahasiswa Sistem Informasi UBSI.">
    <title>{{ $portfolio['profile']['name'] }} — E-CV &amp; Portofolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <a class="skip-link" href="#main-content">Langsung ke konten</a>
    @yield('content')
</body>
</html>
