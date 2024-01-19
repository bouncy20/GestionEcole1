<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @auth
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <span class="navbar-brand mb-0 h1">Welcome, {{ Auth::user()->name }}</span>
            <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
        </div>
    </nav>
    @endauth

    <div class="container mt-4">
        <h1 class="mb-4">Student Details</h1>
        <dl class="row">
            <dt class="col-sm-3">Name:</dt>
            <dd class="col-sm-9">{{ $etudiant->nom }}</dd>

            <dt class="col-sm-3">First Name:</dt>
            <dd class="col-sm-9">{{ $etudiant->prenom }}</dd>

            <dt class="col-sm-3">Gender:</dt>
            <dd class="col-sm-9">{{ $etudiant->sexe }}</dd>

            <dt class="col-sm-3">Major:</dt>
            <dd class="col-sm-9">{{ $etudiant->filiere->nom }}</dd>
        </dl>

        <div class="mt-4">
            <a href="{{ route('etudiants.index') }}" class="btn btn-primary">Back to the List of Students</a>
            <a href="{{ route('etudiants.edit', $etudiant->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('etudiants.destroy', $etudiant->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
