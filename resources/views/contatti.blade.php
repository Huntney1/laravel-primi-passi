<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Contatti</title>

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

<nav class="navbar navbar-expand-lg bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Contatti!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav" style="width: 100%;" >
                    <div style="display: flex; align-items: center; justify-content: space-evenly; width: 100%;">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                    <a class="nav-link" href="/chi_siamo">Chi Siamo</a>
                    <a class="nav-link" href="/sito_web">Sito Web</a>
                    <a class="nav-link" href="/altro">Altro</a>
                </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="text-center mt-4">
        <h2>{{ $benve }}</h2>
        <h2>{{ $cont }}</h2>
    </div>
    <div>
        <img class="object-fit-xxl-contain " src="https://th.bing.com/th/id/R.4ab5b8aabe2458710f24f4231b505e4a?rik=tFE%2feOJ%2fWo3roA&pid=ImgRaw&r=0" alt="W.i.P">
    </div>
</body>

</html>