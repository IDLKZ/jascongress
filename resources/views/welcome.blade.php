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
                                    <div class="imageWrap"><img class="image" src="/img/1.jpg" alt="image alt"></div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <h1><span class="main-color">ПРОЕКТ</span>  JasQalam</h1>
                                        <p class="text">
                                            Ежегодный проект, который нацелен на развитие молодежной
                                            журналистики. 4 направления обучения: тележурналистика, печатная журналистика и интернет-блоггинг, PR и личный
                                        </p>
                                    <a data-toggle="collapse" id="btn" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Подробнее
                                    </a>
                                        <div class="collapse" id="collapseExample">
                                            <div class="card-body pt-0 pl-0">
                                                <p>Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.</p>
                                                <a data-toggle="collapse" id="btn2" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
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
                                    <div class="imageWrap"><img class="image" src="/img/1.jpg" alt="image alt"></div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <h1><span class="main-color">ПРОЕКТ</span>  JasQalam2</h1>
                                    <p class="text">
                                        Ежегодный проект, который нацелен на развитие молодежной
                                        журналистики. 4 направления обучения: тележурналистика, печатная журналистика и интернет-блоггинг, PR и личный
                                    </p>
                                    <a data-toggle="collapse" id="btn" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Подробнее
                                    </a>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card-body pt-0 pl-0">
                                            <p>Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.</p>
                                            <a data-toggle="collapse" id="btn2" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
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
                                    <div class="imageWrap"><img class="image" src="/img/1.jpg" alt="image alt"></div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <h1><span class="main-color">ПРОЕКТ</span>  JasQalam3</h1>
                                    <p class="text">
                                        Ежегодный проект, который нацелен на развитие молодежной
                                        журналистики. 4 направления обучения: тележурналистика, печатная журналистика и интернет-блоггинг, PR и личный
                                    </p>
                                    <a data-toggle="collapse" id="btn" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Подробнее
                                    </a>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card-body pt-0 pl-0">
                                            <p>Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.</p>
                                            <a data-toggle="collapse" id="btn2" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
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
                                    <div class="imageWrap"><img class="image" src="/img/1.jpg" alt="image alt"></div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <h1><span class="main-color">ПРОЕКТ</span>  JasQalam</h1>
                                    <p class="text">
                                        Ежегодный проект, который нацелен на развитие молодежной
                                        журналистики. 4 направления обучения: тележурналистика, печатная журналистика и интернет-блоггинг, PR и личный
                                    </p>
                                    <a data-toggle="collapse" id="btn" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Подробнее
                                    </a>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card-body pt-0 pl-0">
                                            <p>Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.</p>
                                            <a data-toggle="collapse" id="btn2" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
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
                                    <div class="imageWrap"><img class="image" src="/img/1.jpg" alt="image alt"></div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <h1><span class="main-color">ПРОЕКТ</span>  JasQalam</h1>
                                    <p class="text">
                                        Ежегодный проект, который нацелен на развитие молодежной
                                        журналистики. 4 направления обучения: тележурналистика, печатная журналистика и интернет-блоггинг, PR и личный
                                    </p>
                                    <a data-toggle="collapse" id="btn" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Подробнее
                                    </a>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card-body pt-0 pl-0">
                                            <p>Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.</p>
                                            <a data-toggle="collapse" id="btn2" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
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

                            <a class="btn w-50 a-btn my-2 font-weight-bold">
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
