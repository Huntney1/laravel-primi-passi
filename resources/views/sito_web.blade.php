<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Sito Web</title>

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

    <nav class="navbar navbar-expand-lg bg-secondary ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sito Web!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav" style="width: 100%;">
                    <div style="display: flex; align-items: center; justify-content: space-evenly; width: 100%;">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                        <a class="nav-link" href="/chi_siamo">Chi Siamo</a>
                        <a class="nav-link" href="/contatti">Contatti</a>
                        <a class="nav-link" href="/altro">Altro</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="text-center mt-4">
        <h2>{{ $ben }}</h2>
        <h2>{{ $web }}</h2>
    </div>
    <div class="img-col text-center mt-5">
        <img class="object-fit-xxl-contain" src="https://th.bing.com/th/id/R.b4c908ee05b09add2da06a7afffe3f82?rik=9t4%2f%2be4jc2nmhg&riu=http%3a%2f%2fwww.benstone.ch%2fwp-content%2fuploads%2f2018%2f02%2fwork_in_progress_anim.gif&ehk=IQlEsgl5OV6kg4qptUTG%2faIKuREcqg601GYmstWTwvk%3d&risl=&pid=ImgRaw&r=0" alt="W.i.P">
    </div>


    <!-- CDN JavaScript Boolstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>