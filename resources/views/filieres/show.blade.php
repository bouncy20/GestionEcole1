<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Détails de la Filière</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @auth
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="#">Welcome, {{ Auth::user()->name }}</a>
        <div class="navbar-collapse collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    @endauth

    <div class="container mt-4">
        <h1>Détails de la Filière</h1>

        <p><strong>Nom:</strong> {{ $filieres->nom }}</p>

        <a href="{{ route('filiere.index') }}" class="btn btn-primary">Retour à la liste des Filières</a>
        <a href="{{ route('filiere.edit', $filieres->id) }}" class="btn btn-warning">Modifier</a>
        <a href="{{ route('filiere.destroy', $filieres->id) }}" class="btn btn-danger">Supprimer</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
