<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Chi Siamo!</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

</head>

<body>
<nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Chi Siamo!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav" style="width: 100%;" >
                    <div style="display: flex; align-items: center; justify-content: space-evenly; width: 100%;">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                    <a class="nav-link" href="/contatti">Contatti</a>
                    <a class="nav-link" href="/sito_web">Sito Web</a>
                    <a class="nav-link" href="/altro">Altro</a>
                </div>
                </div>
            </div>
        </div>
    </nav>
    <div>
        <h1 class="text-center">{{ $siamo }}</h1>
        <h1 class="text-center">{{ $group }}</h1>
    </div>
    <div class="img-row" style="width: 100%;">
    <div class="img-col text-center">
        <img class="object-fit-xxl-contain border rounded" src="https://i1.wp.com/www.cremonanews.it/wp-content/uploads/2019/06/lavori-in-corso.jpg?fit=770%2C470&ssl=1" alt="W.i.P">
    </div>
</div>
</body>

</html>