<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body>
    {{-- Navbar --}}
    @include('partials.navbar')

    <div class="d-flex">
        {{-- Sidebar --}}
        @include('partials.sidebar')

        {{-- Contenu principal --}}
        <main class="flex-fill p-3">
            @yield('content')
        </main>
    </div>

    {{-- Footer --}}
    @include('partials.footer')
</body>
</html>