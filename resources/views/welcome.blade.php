@extends('layout')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/tabs.css')}}">
@endpush
@section('content')

    <!-- Banner start -->
    <div class="banner" id="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-lg-6"></div>
                <div class="col-md-6 col-lg-6 bg-image">
                    <div class="py-5">
                        <div id="typed-strings">
                            <p>{{$lang ? $banner->title_kz : $banner->title}}</p>
                        </div>
                        <h1 class="typed-text">
                            <span id="typed"></span>
                        </h1>
                        <p class="text-p" data-animation="animated fadeInUp delay-10s">
                            {!! $lang ? $banner->content_kz : $banner->content !!}
                        </p>
                        <div class="row">
                            <div class="col-6">
                                <span class="font-weight-bold yellow-line text-white">{{$lang ? $banner->experience_kz : $banner->experience}}</span>
                                <p>{{$lang ? $banner->experience_content_kz : $banner->experience_content}}</p>
                            </div>
                            <div class="col-6">
                                <span class="font-weight-bold yellow-line text-white">{{$lang ? $banner->organization_kz : $banner->organization}}</span>
                                <p>{{$lang ? $banner->organization_content_kz : $banner->organization_content}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!--Slider start-->
    <div id="projects" class="container my-5">
        <div class="main-title">
            <h1>{!! __('front.our_pr') !!}</h1>
            <p>{{__('front.our_list_pr')}}</p>
        </div>
        <div class="row justify-content-center">
            <div class="tab">

                <!-- Tabs -->
                <div class="tab__button">
                    <div class="slider">
                        <ul class="list">
                            <li class="js-tab-trigger item is-current" data-tab-list="tabGroup1" data-tab-info="tab01">
                                <button class="button" type="button">
                                    <i class="fa fa-trophy"></i>
                                    <div>
                                        Jas Qalam
                                    </div>
                                </button>
                            </li>
                            <li class="js-tab-trigger item" data-tab-list="tabGroup1" data-tab-info="tab02">
                                <button class="button" type="button">
                                    <i class="fa fa-trophy"></i>
                                    <div>
                                        Жаңа жағдайдағы
                                    </div>
                                </button>
                            </li>
                            <li class="js-tab-trigger item" data-tab-list="tabGroup1" data-tab-info="tab03">
                                <button class="button" type="button">
                                    <i class="fa fa-trophy"></i>
                                    <div>
                                        Jascongress univercity
                                    </div>
                                </button>
                            </li>
                            <li class="js-tab-trigger item" data-tab-list="tabGroup1" data-tab-info="tab04">
                                <button class="button" type="button">
                                    <i class="fa fa-trophy"></i>
                                    <div>
                                        Дни КМК
                                    </div>
                                </button>
                            </li>
                            <li class="js-tab-trigger item" data-tab-list="tabGroup1" data-tab-info="tab05">
                                <button class="button" type="button">
                                    <i class="fa fa-trophy"></i>
                                    <div>
                                        Jastar Sinergiiasy
                                    </div>
                                </button>
                            </li>
                            <li class="js-tab-trigger item" data-tab-list="tabGroup1" data-tab-info="tab06">
                                <button class="button" type="button">
                                    <i class="fa fa-trophy"></i>
                                    <div>
                                        Jascongress University
                                    </div>
                                </button>
                            </li>
                            <li class="js-tab-trigger item" data-tab-list="tabGroup1" data-tab-info="tab07">
                                <button class="button" type="button">
                                    <i class="fa fa-trophy"></i>
                                    <div>
                                        Qazaqsha Tour 2020
                                    </div>
                                </button>
                            </li>
                        </ul>
                    </div>

                    <a href="#" class="slider-arrow sa-left">&lt;</a>
                    <a href="#" class="slider-arrow sa-right">&gt;</a>

                </div>

                <!-- Tab Content -->
                <div class="tab__content">
                    <div class="js-tab-content content is-current" data-tab-list="tabGroup1" data-tab-info="tab01">

                        <div class="box">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                        </ol>
                                        <div class="carousel-inner">

                                            <div class="carousel-item active">
                                                <img src="{{asset('img/projects/jasqalam/5.png')}}" class="d-block w-75 m-auto" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset('img/projects/jasqalam/3.jpg')}}" class="d-block w-75  m-auto" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset('img/projects/jasqalam/1.jpg')}}" class="d-block w-75  m-auto" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset('img/projects/jasqalam/2.jpg')}}" class="d-block w-75  m-auto" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset('img/projects/jasqalam/4.jpg')}}" class="d-block w-75  m-auto" alt="...">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <h1><span class="main-color">ПРОЕКТ</span>  JasQalam</h1>
                                        <p class="text">
                                            Ежегодный проект, который нацелен на развитие молодежной журналистики. 4 направления обучения: тележурналистика, печатная журналистика и интернет-блоггинг, PR и личный бренд
                                        </p>
                                    <a data-toggle="collapse" id="btn1_1" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Подробнее
                                    </a>
                                        <div class="collapse" id="collapseExample">
                                            <div class="card-body pt-0 pl-0">
                                                <p>В офлайн формате проект был реализован в 9 городах Казахстана с общим охватом более 2000 человек. В онлайн формате участие приняло около 1500 молодых людей со всех регионов Казахстана.</p>
                                                <a data-toggle="collapse" id="btn1_2" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                    Закрыть
                                                </a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-tab-content content" style="display: none;" data-tab-list="tabGroup1" data-tab-info="tab02">

                        <div class="box">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                                            <li data-target="#carouselExampleIndicators2" data-slide-to="3"></li>
                                        </ol>
                                        <div class="carousel-inner">

                                            <div class="carousel-item active">
                                                <img src="{{asset('img/projects/JanaJagday/1.jpg')}}" class="d-block w-75 m-auto" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset('img/projects/JanaJagday/2.jpg')}}" class="d-block w-75  m-auto" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset('img/projects/JanaJagday/3.jpg')}}" class="d-block w-75  m-auto" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset('img/projects/JanaJagday/4.jpg')}}" class="d-block w-75  m-auto" alt="...">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <h2><span class="main-color">ПРОЕКТ</span>  ЖАҢА ЖАҒДАЙДАҒЫ ЖАСТАР: ІС-ҚИМЫЛ КЕЗЕҢІ</h2>
                                    <p class="text">
                                        Реализован при поддержке Министерства информации и общественного развития Республики Казахстан и является продолжением Республиканского образовательного молодежного летнего лагеря «Зерен».
                                    </p>
                                    <a data-toggle="collapse" id="btn2_1" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                                        Подробнее
                                    </a>
                                    <div class="collapse" id="collapseExample2">
                                        <div class="card-body pt-0 pl-0">
                                            <p>Цель проекта – всесторонняя консолидация молодежи в новых реалиях, создающих условия для саморазвития, реализация идеи «слышащего государства» через призму мнения молодого поколения, обсуждение проекта Комплексного плана по поддержке молодежи Республики Казахстан на 2021-2025 годы.
                                                <br> В проекте приняло участие около 3000 молодых людей.
                                            </p>
                                            <a data-toggle="collapse" id="btn2_2" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                                                Закрыть
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-tab-content content" style="display: none;" data-tab-list="tabGroup1" data-tab-info="tab03">

                        <div class="box">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                                        </ol>
                                        <div class="carousel-inner">

                                            <div class="carousel-item active">
                                                <img src="{{asset('img/projects/JastarKeryeni/1.jpg')}}" class="d-block w-75 m-auto" alt="...">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <h1><span class="main-color">ПРОЕКТ</span>  «Jastar Keryeni»</h1>
                                    <p class="text">
                                        Целью проекта является развитие внутреннего туризма и интеграционных процессов среди молодежи для содействия установления контакта между регионами Казахстана.
                                    </p>
                                    <a data-toggle="collapse" id="btn3_1" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Подробнее
                                    </a>
                                    <div class="collapse" id="collapseExample3">
                                        <div class="card-body pt-0 pl-0">
                                            <p>Участниками проекта стали 690 активных молодых людей, которые отправились в караван по сакральным и туристическим местам по 7 направлениям Казахстана (Акмолинская область, Карагандинская область, Туркестанская область/города Шымкент и Тараз, Алматинская область, Западно-Казахстанская область, Восточно-Казахстанская область, Павлодарская область).</p>
                                            <a data-toggle="collapse" id="btn3_2" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
                                                Закрыть
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-tab-content content" style="display: none;" data-tab-list="tabGroup1" data-tab-info="tab04">

                        <div class="box">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators4" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators4" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators4" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">

                                            <div class="carousel-item active">
                                                <img src="{{asset('img/projects/DaysKMK/1.jpg')}}" class="d-block w-75 m-auto" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset('img/projects/DaysKMK/2.jpg')}}" class="d-block w-75 m-auto" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset('img/projects/DaysKMK/3.jpg')}}" class="d-block w-75 m-auto" alt="...">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <h2><span class="main-color">ПРОЕКТ</span> Дни Конгресса молодежи Казахстана</h2>
                                    <p class="text">
                                        Проект нацелен на консолидацию молодежных неправительственных организаций в обсуждении, решении вопросов и проблем общества, инициатив и предложений молодежи.
                                    </p>
                                    <a data-toggle="collapse" id="btn4_1" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
                                        Подробнее
                                    </a>
                                    <div class="collapse" id="collapseExample4">
                                        <div class="card-body pt-0 pl-0">
                                            <p>Кроме того, Дни КМК является площадкой для сбора членов Ассоциации для обучения по PR, HR, проектному менеджменту, а также презентации деятельности Республиканских молодежных организаций.</p>
                                            <a data-toggle="collapse" id="btn4_2" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
                                                Закрыть
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-tab-content content" style="display: none;" data-tab-list="tabGroup1" data-tab-info="tab05">

                        <div class="box">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div id="carouselExampleIndicators5" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators5" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators5" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators5" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">

                                            <div class="carousel-item active">
                                                <img src="{{asset('img/projects/Sinergy/1.png')}}" class="d-block w-75 m-auto" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset('img/projects/Sinergy/2.jpg')}}" class="d-block w-75 m-auto" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset('img/projects/Sinergy/2.jpg')}}" class="d-block w-75 m-auto" alt="...">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <h2><span class="main-color">ПРОЕКТ</span>  «СИНЕРГИЯ МОЛОДЕЖИ АНК»</h2>
                                    <p class="text">
                                        Проект направлен на развитие IT отрасли через обучение молодежи разных этнических групп в Казахстане по специальностям информационных технологий.
                                    </p>
                                    <a data-toggle="collapse" id="btn5_1" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5">
                                        Подробнее
                                    </a>
                                    <div class="collapse" id="collapseExample5">
                                        <div class="card-body pt-0 pl-0">
                                            <p>Более 300 человек прошли обучение по темам: веб дизайн, кибербезопасность, онлайн обслуживание, smart city, привлечение инвесторов и разработка сайта. Также в 16 регионах Казахстана прошли региональные аллеи, где было презентовано более 200 IT-проектов.
                                                <br> На Республиканском форуме «Синергия молодежи АНК» были определены победители IT-проектов. Призовой фонд за І место составил 1 000 000 тенге, ІІ место 700 000 тенге, ІІІ место 500 000 тенге.
                                            </p>
                                            <a data-toggle="collapse" id="btn5_2" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5">
                                                Закрыть
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-tab-content content" style="display: none;" data-tab-list="tabGroup1" data-tab-info="tab06">

                        <div class="box">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div id="carouselExampleIndicators6" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators6" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators6" data-slide-to="1"></li>
                                        </ol>
                                        <div class="carousel-inner">

                                            <div class="carousel-item active">
                                                <img src="{{asset('img/projects/Jcuniver/1.jpg')}}" class="d-block w-75 m-auto" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset('img/projects/Jcuniver/2.jpeg')}}" class="d-block w-75 m-auto" alt="...">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <h2><span class="main-color">ПРОЕКТ</span> «JASCONGRESS UNIVERSITY»</h2>
                                    <p class="text">
                                        Образовательная онлайн-площадка, нацеленная на повышение квалификации работников молодежных НПО, волонтеров, активистов по приобретению новых лидерских и стратегических компетенций для создания молодежных экосистем.
                                    </p>
                                    <a data-toggle="collapse" id="btn6_1" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample6">
                                        Подробнее
                                    </a>
                                    <div class="collapse" id="collapseExample6">
                                        <div class="card-body pt-0 pl-0">
                                            <p>На сегодняшний день прошло 4 потока обучения с общим количеством выпускников – 500 человек. Заявки на обучение подали более 2 500 человек.</p>
                                            <a data-toggle="collapse" id="btn6_2" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample6">
                                                Закрыть
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-tab-content content" style="display: none;" data-tab-list="tabGroup1" data-tab-info="tab07">

                        <div class="box">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div id="carouselExampleIndicators7" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators7" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators7" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators7" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">

                                            <div class="carousel-item active">
                                                <img src="{{asset('img/projects/QazaqshaTour/1.jpg')}}" class="d-block w-75 m-auto" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset('img/projects/QazaqshaTour/2.jpg')}}" class="d-block w-75 m-auto" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset('img/projects/QazaqshaTour/3.jpg')}}" class="d-block w-75 m-auto" alt="...">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <h2><span class="main-color">ПРОЕКТ</span> «QAZAQSHA TOUR 2020»</h2>
                                    <p class="text">
                                        В марте 2020 года в городах Актау, Нур-Султан, Шымкент, Алматы, Тараз совместно с блогерами команды TJokers и казахстанским певцом Мирас Жугунусов и молодежной группой «Alzabi» была организована мотивационная площадка по развитию казахского контента в интернет-сети с концертной программой для молодежи.
                                    </p>
                                    <a data-toggle="collapse" id="btn7_1" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample7">
                                        Подробнее
                                    </a>
                                    <div class="collapse" id="collapseExample7">
                                        <div class="card-body pt-0 pl-0">
                                            <p>В каждом городе охват молодежи составил свыше 1500 человек, прямой охват по итогу проекта составил более 7500 человек.</p>
                                            <a data-toggle="collapse" id="btn7_2" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample7">
                                                Закрыть
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!--Slider end-->

    {{--Вступление в конгресс--}}
    <div id="join" class="blog content-area-2 my-bg-white">
        <div class="container">
            <div class="main-title">
                <h1>{!! __('front.join_in_congress') !!}</h1>
                <p>{{__('front.join_in_congress_content')}}</p>
            </div>
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <a class="btn-lg my-btn ml-2" href="" data-toggle="modal" data-target="#association">АССОЦИАЦИЯ</a>
                    <a class="btn-lg my-btn ml-2" href="" data-toggle="modal" data-target="#team">КОМАНДА</a>

                </div>
            </div>
        </div>
    </div>

    {{--Вступление в конгресс--}}
    <div id="teams" class="blog content-area-2 bg-white">
        <div class="container">
            <div class="main-title">
                <h1>{!! __('front.our_team') !!}</h1>
            </div>
            <div class="slick-slider-area">
                <div class="row slick-carousel wow fadeInUp delay-04s" data-slick='{"slidesToShow": 3,"dots":true, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                    @foreach($teams as $team)
                        <div class="slick-slide-item">
                            <div class="blog-1">
                                <div class="blog-photo">
                                    <img src="{{$team->getImage()}}" alt="blog-1" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{--Наши партнеры--}}

    <div id="partners" class="blog content-area-2 my-bg-white">
        <div class="container">
            <div class="main-title">
                <h1>{!! __('front.our_partn') !!}</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="swiper-container swiperPartner">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide text-center">
                                <img src="/img/partner1.png" height="75px">
                            </div>
                            <div class="swiper-slide text-center">
                                <img src="/img/partner2.png" height="75px">
                            </div>
                            <div class="swiper-slide text-center">
                                <img src="/img/partner3.png" height="75px">
                            </div>
                            <div class="swiper-slide text-center">
                                <img src="/img/partner4.png" height="75px">
                            </div>

                        </div>
                        <br>
                        <!-- If we need pagination -->
                        <div class="d-none d-sm-block">
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--Наши партнеры--}}

    <!-- Blog start -->
    <div id="blog" class="blog content-area-2">
        <div class="container">
            <div class="main-title">
                <h1>{{__('front.our_news')}}</h1>
            </div>
            <div class="slick-slider-area">
                <div class="row slick-carousel wow fadeInUp delay-04s" data-slick='{"slidesToShow": 3,"dots":true, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                    @foreach($posts as $post)
                        <div class="slick-slide-item">
                            <div class="blog-1">
                                <div class="blog-photo">
                                    <img src="{{$post->getImage()}}" alt="blog-1" class="img-fluid">
                                    <div class="user">
                                        {{--                                <div class="avatar">--}}
                                        {{--                                    <img src="http://placehold.it/30x30" alt="avatar" class="img-fluid rounded-circle">--}}
                                        {{--                                </div>--}}
                                        {{--                                <div class="name">--}}
                                        {{--                                    <h5>Brandon Miller</h5>--}}
                                        {{--                                </div>--}}
                                    </div>
                                </div>
                                <div class="detail">
                                    <h3>
                                        <a href="{{route('single', $post->id)}}">{{$lang ? $post->title_kz : $post->title}}</a>
                                    </h3>
                                    <p>{!! $lang ? \Illuminate\Support\Str::limit($post->content_kz, 100) : \Illuminate\Support\Str::limit($post->content, 100) !!}</p>
                                    <div class="blog-footer clearfix">
                                        <div class="float-left">
                                            <p class="date"><i class="fa fa-calendar"></i>{{$post->created_at->format('d-m-y')}}</p>
                                        </div>
                                        <div class="float-right">
                                            <a href="{{route('single', $post->id)}}">Read more..</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Blog end -->


    <!-- Modal -->
    <div class="modal fade" id="association" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="modal-body">
                        <div class="main-title">
                            <h1>Ассоциация</h1>
                            <p>{{__('front.modal_content1')}}
                                <br><span class="main-color">jascongress2002@gmail.com</span></p>
                            <div class="my-2 pt-2">

                                <a class="btn w-50 a-btn my-2 font-weight-bold" href="{{asset('resume.docx')}}" download>
                                    <span class="row">
                                        <span class="col-4 d-flex justify-content-center align-items-center"><i class="fas fa-download main-color download-icon"></i></span>
                                        <span class="col-8">
                                            <div class="text-left">
                                                {{__('front.download')}} <br>
                                                <small>Заявление.doc</small>
                                            </div>
                                        </span>
                                    </span>
                                </a>
                            </div>

                            <p>*{{__('front.modal_content2')}}</p>


                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="team" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="main-title">
                        <h1>Команда</h1>
                        <p>
                            {{__('front.modal_content3')}}
                            <span class="main-color">jascongress2002@gmail.com</span>
                        </p><br>
                        <p>*{{__('front.modal_content4')}}</p>



                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@push('scripts')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{asset('js/jquery.lbslider.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
@endpush
