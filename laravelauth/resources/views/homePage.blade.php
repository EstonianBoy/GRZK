@extends('layout')



@section('main')
    <main class="container px-3 py-5">
        <h1>Пассивно-агрессивная энциклопедия по грызунам</h1>
        <p class="lead">Наша энциклопедическая база предоставляет людям абсолютный массив информации про всеразличные виды (и подвиды) зубастых, ушастых, игластых и опасных грызунов</p>
        <BR><BR>
        <H3>Бестиарий:</H3>
        <div class="container">

                <a class="btn btn-default" href="/dikobraz">
                    <div class="container">
                        <img src="dikobrazButton.png" width="200">
                        <div class="link link-success">Дикобраз</div>
                    </div>
                </a>

                <a class="btn btn-default" href="/shinshilla">
                    <div class="container">
                        <img src="shinshillaButton.png" width="200">
                        <div class="link link-success">Шиншилла</div>
                    </div>
                </a>

                <a class="btn btn-default" href="/kapibara">
                    <div class="container">
                        <img src="kapibaraButton.png" width="200">
                        <div class="link link-success">Капибара</div>
                    </div>
                </a>

                <a class="btn btn-default" href="/peschanka">
                    <div class="container">
                        <img src="peschankaButton.png" width="200">
                        <div class="link link-success">Песчанка</div>
                    </div>
                </a>

                <a class="btn btn-default" href="/surok">
                    <div class="container">
                        <img src="surokButton.png" width="200">
                        <div class="link link-success">Surok</div>
                    </div>
                </a>
        </div>

    </main>
@endsection


