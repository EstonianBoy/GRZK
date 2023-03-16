@extends('layout')

@section('navbarLinks')
    <li><a href="#header" class="nav-link px-2 link-light">ШИН</a></li>
    <li><a href="#firstSentence" class="nav-link px-2 link-light">ШИЛ</a></li>
    <li><a href="#thirdSentence" class="nav-link px-2 link-light">ЛЫ</a></li>
@endsection

@section('main')

    <div class="container py-4" id="header"></div>
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Шиншилла</h1>
            <p class="lead text-dark">Маленький грызун, названный в честь не менее маленького племени</p>
        </div>
    </section>

    <div class="album py-5">
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow" id="firstSentence">
                        <img class="card-img" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="https://homkin.ru/wp-content/uploads/2018/06/Chinchilla-1-678x381.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">Шиншиллы - забавные представители рода грызунов, обладатели мягкой шерстки и дружелюбного характера</p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="https://upload.wikimedia.org/wikipedia/commons/e/e8/Chinchilla_lanigera1.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">Название шиншилл происходит от названия перуанской провинции Чинча (Перу)</p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="https://www.cmzoo.org/wp-content/uploads/2chinchillas.png" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text"> В дикой природе шиншилл осталось очень мало, зато они популярны в качестве домашних любимцев</p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow" id="secondSentence">
                        <img class="card-img" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="https://www.thesprucepets.com/thmb/hJBOVKRogIdrFTaqQ0P5UYSxELk=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/tanya-kusova-chinchilla-unsplash-4a07d4039bf54aea8ff9f1a9d701b22a.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">шиншиллы не очень любят идти на контакт с человеком, предпочитая созерцания со стороны</p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="https://cdn.shopify.com/s/files/1/0702/9579/articles/236600117_6282123431828562_4937046662918360305_n.jpg?v=1631294443" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">В этом есть свой плюс - они идеальный питомец для занятых людей!</p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="https://woodgreen.org.uk/wp-content/uploads/2022/03/rescue_chinchilla_at_woodgreen.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">Основу рациона их составляет сено - оно необходимо для поддержания работы желудка и зубов.</p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow" id="thirdSentence">
                        <img class="card-img" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="https://www.dudleyzoo.org.uk/wp-content/uploads/DZG_Baby_Chinchilla_3-1200x824.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">Шиншиллы относятся к разряду питомцев, аллергия на которых возникает редко</p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="https://oir.mobi/uploads/posts/2021-05/1621529857_31-oir_mobi-p-shinshilla-pushistaya-zhivotnie-krasivo-fo-32.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text"> Если грызуна схватил хищник, для защиты шиншилла может … сбросить мех!</p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="https://www.marriottsvillevet.com/wp-content/uploads/2022/06/Chinchilla-Care-101.png" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">Иногда зверьки спят вниз головой, прямо как их известные собратья - летучие мыши</p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
