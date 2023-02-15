<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Home</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        .c-red {
            background-color: red;
            border: 1px solid black;
        }



    </style>

</head>

<body class="bg-danger">
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">HOME!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav" style="width: 100%;" >
                    <div style="display: flex; align-items: center; justify-content: space-evenly; width: 100%;">
                    <a class="nav-link" href="chi_siamo">Chi Siamo</a>
                    <a class="nav-link" href="/contatti">Contatti</a>
                    <a class="nav-link" href="/sito_web">Sito Web</a>
                    <a class="nav-link" href="/altro">Altro</a>
                </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="text-center p-1 c-red">
        <h1 class=".text-warning">{{ $word }}</h1>
    </div>
    <div class="text-center bg-danger mt-4">
        <img src="https://freesvg.org/img/work-in-progress-woman_at_work-o-f-daisy.png" alt="W.i.P">
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>


</html>