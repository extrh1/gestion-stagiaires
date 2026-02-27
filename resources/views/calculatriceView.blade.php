<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Calculatrice Laravel</h2>

    <form method="POST" action="/calculer">
        @csrf

        <div class="mb-3">
            <label>Nombre 1</label>
            <input type="number" name="a" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Opération</label>
            <select name="operation" class="form-select">
                <option value="+">Addition (+)</option>
                <option value="-">Soustraction (-)</option>
                <option value="*">Multiplication (*)</option>
                <option value="/">Division (/)</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Nombre 2</label>
            <input type="number" name="b" class="form-control" required>
        </div>

        <button class="btn btn-primary">ok</button>
    </form>

    @if(isset($result))
        <div class="alert alert-success mt-4">
            Le Résultat : <strong>{{ $result }}</strong>
        </div>
    @endif
</div>

</body>
</html>