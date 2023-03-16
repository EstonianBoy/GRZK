<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GRZK</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="font.css">

    @yield('kapibara-cript')
</head>

<body class="d-flex h-100 text-center" STYLE="background-color: wheat">

<div class="cover-container d-flex w-100 h-100 mx-auto flex-column">

    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 fixed-top" style="background-color: mediumseagreen">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <img src="image.png" alt="Logo" width="45" height="40" class="d-inline-block align-text-top">
            <H4 STYLE="color: white">GRZK</H4>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            @yield('navbarLinks')
        </ul>

        <div class="col-md-3 text-end">
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Список грызунов
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/dikobraz">Дикобраз</a></li>
                    <li><a class="dropdown-item" href="/shinshilla">Шиншилла</a></li>
                    <li><a class="dropdown-item" href="/kapibara">Капибара</a></li>
                    <li><a class="dropdown-item" href="/peschanka">Песчанка</a></li>
                    <li><a class="dropdown-item" href="/surok">Сурок</a></li>
                    <li><a class="dropdown-item disabled" href="#">Другие</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main class="container flex-shrink-0 px-3 py-5">
        @yield('main')
    </main>

    <footer class="footer  mt-auto py-3" style="background-color: #d7c197">
        <div class="d-flex ">
            <H5>Авторы постов:</H5>
            <ul class="list-group list-group-flush">
                <li type="none">Юлдашев А.В.</li>
                <li type="none">Елизаров К</li>
                <li type="none">Костин А</li>
                <li type="none">Стафоров М</li>
                <li type="none">Федоров Д</li>
            </ul>
            <span style="color: mediumseagreen">2023 © GRZK</span>
        </div>
    </footer>
</div>

</body>
</html>
