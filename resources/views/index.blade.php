<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Page Accueil</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="accueil/css/bootstrap.css" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="container-fluid ">
          <nav class="navbar navbar-expand-lg custom_nav-container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="" >
              <ul class="">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('index')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('etudiants.index')}}">List Etudiants</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('filiere.index')}}">List Filieres</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('logout')}}">Deconnect</a>
                </li>
              </ul>
            </div>
           
          </nav>
        </div>
      </header>


  </div>


  <script src="accueil/js/jquery-3.4.1.min.js"></script>
  <script src="accueil/js/bootstrap.js"></script>
  <script src="accueil/js/custom.js"></script>


</body>

</body>
</html>
