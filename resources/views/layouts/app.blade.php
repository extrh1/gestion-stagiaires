<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Laravel Bootstrap</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class="container mt-5">
    @yield('content')
</div>

</body>
</html>