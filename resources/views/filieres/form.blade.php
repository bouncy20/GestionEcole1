<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulaire de Filière</title>
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
        <h1>Formulaire de Filière</h1>

        @if(isset($filiere))
            <form action="{{ route('filiere.update', $filiere->id) }}" method="POST">
                @method('PUT')
                <input type="hidden" name="id" value="{{ $filiere->id }}">
        @else
            <form action="{{ route('filiere.store') }}" method="POST">
        @endif
                @csrf
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom de la Filière:</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="{{ isset($filiere) ? $filiere->nom : '' }}">
                </div>

                <button type="submit" class="btn btn-primary">{{ isset($filiere) ? 'Mettre à jour' : 'Ajouter' }}</button>
            </form>

        <a href="{{ route('filiere.index') }}" class="btn btn-secondary mt-3">Retour à la liste des Filières</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
