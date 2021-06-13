<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>JasCongress</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <script src="https://use.fontawesome.com/62b3f3a22e.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @stack('styles')
</head>
<body id="top" class="index-body">

<div class="page_loader"></div>

<!-- Top header start -->
<header class="top-header top-header-bg" id="top-header-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-7 d-flex align-items-center">
                <div class="list-inline">
                    <a href="tel:{{$footer->phone}}"><i class="fa fa-phone"></i>{{$footer->phone}}</a>
                    @foreach(json_decode($footer->email) as $email)
                        <a href="mailto:{{$email}}"><i class="fa fa-envelope"></i>{{$email}}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-5">
                <ul class="top-social-media pull-right list-inline">
                    <a href="#" class="mr-0"><i class="fa fa-map"></i>{{\App\Models\Language::getLg() ? $footer->address_kz : $footer->address}}</a>
                    {{--                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>--}}
                    {{--                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>--}}
                    {{--                    <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>--}}
                    {{--                    <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>--}}
                    @if ($footer->instagram)
                        <li><a href="#" class="linkedin"><i class="fa fa-instagram"></i></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Top header end -->

<!-- main header start -->
<header class="main-header do-sticky" id="main-header-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light rounded">
                    <a class="navbar-brand logo-2" href="{{route('main')}}">
                        <img src="{{$footer->getImage()}}" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="navbar-collapse collapse w-100" id="navbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold" href="{{route('main')}}#banner">
                                    {{__('front.about_congress')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold" href="{{route('main')}}#projects">
                                    {{__('front.our_projects')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold" href="{{route('main')}}#join">
                                    {{__('front.join_congress')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold" href="{{route('main')}}#partners">
                                    {{__('front.our_partners')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold" href="{{route('main')}}#blog">
                                    {{__('front.our_news')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold" href="{{route('main')}}#contact">
                                    {{__('front.our_contact')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-round bg-jk font-weight-bold" href="#">
                                    Проект Janaru
                                </a>
                            </li>
                            <li class="nav-item dropdown fs-14 text-dark">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{ "/". LaravelLocalization::getCurrentLocale() . ".png" }}" alt="..." class="rounded-circle lang-circle"> {{ LaravelLocalization::getCurrentLocaleNative() }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown text-dark">
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <a rel="alternate" class="dropdown-item" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            <img src="{{ "/". $localeCode . ".png" }}" alt="..." class="rounded-circle lang-circle">
                                            {{ $properties['native'] }}</a>

                                    @endforeach
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- main header end -->

@yield('content')

<!-- Footer start -->
<footer id="contact" class="footer my-footer">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item">
                    <div class="logo-sitebar mb-2 pb-2">
                        @if ($footer->logo)
                            <img src="{{$footer->getImage()}}" alt="logo">
                        @else
                            <img src="img/logos/logo.png" alt="logo">
                        @endif

                    </div>
                    <ul class="contact-info">
                        <li>
                            <i class="fas fa-map"></i>
                            @if (\App\Models\Language::getLg())
                                {{$footer->address_kz}}
                            @else
                                {{$footer->address}}
                            @endif
                        </li>

                        <li>
                            <i class="fa fa-phone"></i><a href="tel:+55-417-634-7071">
                                {{$footer->phone}}
                            </a>
                            <br>
                            <small>
                                @if (\App\Models\Language::getLg())
                                    {{$footer->time_kz}}
                                @else
                                    {{$footer->time}}
                                @endif
                            </small>
                        </li>
                        @foreach(json_decode($footer->email) as $email)
                            <li>
                                <i class="fa fa-envelope"></i><a
                                    href="mailto:{{$email}}">{{$email}}</a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>
                        Ссылки
                    </h4>
                    <ul class="links">
                        <li>
                            <a href="#">{{__('front.about_congress')}}</a>
                        </li>
                        <li>
                            <a href="#">{{__('front.our_projects')}}</a>
                        </li>
                        <li>
                            <a href="#">{{__('front.join_congress')}}</a>
                        </li>
                        <li>
                            <a href="#">{{__('front.our_partners')}}</a>
                        </li>
                        <li>
                            <a href="#">{{__('front.our_news')}}</a>
                        </li>
                        <li>
                            <a href="#">{{__('front.our_contact')}}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>Карта</h4>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2503.8280814069894!2d71.42498976575614!3d51.130079079574806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z0KDQtdGB0L_Rg9Cx0LvQuNC60LAg0JrQsNC30LDRhdGB0YLQsNC9LCAwMTAwMDAsINCzLiDQndGD0YAt0KHRg9C70YLQsNC9LCDRg9C7LiDQmtGD0L3QsNC10LLQsCwgMTIvMQ!5e0!3m2!1sru!2skz!4v1622720548836!5m2!1sru!2skz" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <p class="copy">© Jascongress. Все права защищены 2020.</p>
                </div>
                <div class="col-lg-4 col-md-12">
                    <ul class="social-list clearfix">
                        <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->
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
                    <p>Подписанное заявление необходимо подписать и заверить печатью, отсканировать и отправить на электронный адрес jascongress2002@gmail.com</p>
                    <div class="my-2 pt-2">

                        <a class="btn-lg a-btn my-2 font-weight-bold">
                            <i class="fas fa-download main-color"></i>
                            Скачать
                        </a>
                    </div>


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
                        Высылать резюме на электронный адрес
                        jascongress2002@gmail.com                    </p>



                </div>
            </div>
        </div>
    </div>
</div>


<!-- External JS libraries -->

<script src="{{asset('js/app.js')}}"></script>
@stack('scripts')

</body>
</html>
