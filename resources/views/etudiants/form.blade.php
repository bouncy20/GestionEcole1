<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Form</title>
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
        <h1>Student Form</h1>

        @if(isset($etudiant))
            <form action="{{ route('etudiants.update', $etudiant->id) }}" method="POST">
                @method('PUT')
                <input type="hidden" name="id" value="{{ $etudiant->id }}">
        @else
            <form action="{{ route('etudiants.store') }}" method="POST">
        @endif
                @csrf

                <!-- Student fields -->
                <div class="mb-3">
                    <label for="nom" class="form-label">Last Name:</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="{{ isset($etudiant) ? $etudiant->nom : '' }}">
                </div>

                <div class="mb-3">
                    <label for="prenom" class="form-label">First Name:</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" value="{{ isset($etudiant) ? $etudiant->prenom : '' }}">
                </div>

                <div class="mb-3">
                    <label for="sexe" class="form-label">Gender:</label>
                    <select class="form-select" id="sexe" name="sexe">
                        <option value="homme" {{ isset($etudiant) && $etudiant->sexe === 'homme' ? 'selected' : '' }}>Male</option>
                        <option value="femme" {{ isset($etudiant) && $etudiant->sexe === 'femme' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="filiere_id" class="form-label">Major:</label>
                    <select class="form-select" name="filiere_id" id="filiere_id">
                        @foreach($filieres as $filiere)
                            <option value="{{ $filiere->id }}" @if(isset($etudiant) && $etudiant->filiere_id == $filiere->id) selected @endif>{{ $filiere->nom }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="user[name]" class="form-label">Username:</label>
                    <input type="text" class="form-control" id="user[name]" name="user[name]" value="{{ isset($etudiant->user) ? $etudiant->user->name : '' }}" placeholder="Username">
                </div>

                <div class="mb-3">
                    <label for="user[email]" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="user[email]" name="user[email]" value="{{ isset($etudiant->user) ? $etudiant->user->email : '' }}" placeholder="Email">
                </div>

                <div class="mb-3">
                    <label for="user[password]" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="user[password]" name="user[password]" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary">{{ isset($etudiant) ? 'Update' : 'Add' }}</button>
            </form>

        <a href="{{ route('etudiants.index') }}" class="btn btn-secondary mt-3">Back to the list of Students</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
