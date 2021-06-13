@extends('layout')
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
            <h1><span class="main-color">НАШИ</span>  ПРОЕКТЫ</h1>
            <p>Список наших проектов</p>
        </div>
        <div class="row">
            <div class="col-md-12 project-container">
                <div class="swiper-container mySwiper">
                    <div class="swiper-wrapper  ">
                        <div class="swiper-slide my-bg-white">
                            <div class="project-thumb d-flex justify-content-center align-items-center">
                                <div class="text-center">
                                    <i class="fas fa-trophy"></i>
                                    <p>Jas Qalam</p>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide  my-bg-white">
                            <div class="project-thumb d-flex justify-content-center align-items-center">
                                <div class="text-center">
                                    <i class="fas fa-trophy"></i>
                                    <p>Жаңа жағдайдағ...</p>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide my-bg-white">
                            <div class="project-thumb d-flex justify-content-center align-items-center">
                                <div class="text-center">
                                    <i class="fas fa-trophy"></i>
                                    <p>Jascongress university</p>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide my-bg-white">
                            <div class="project-thumb d-flex justify-content-center align-items-center">
                                <div class="text-center">
                                    <i class="fas fa-trophy"></i>
                                    <p>Дни КМК</p>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide my-bg-white">
                            <div class="project-thumb d-flex justify-content-center align-items-center">
                                <div class="text-center">
                                    <i class="fas fa-trophy"></i>
                                    <p>Qazaqsha Tour 2020</p>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide my-bg-white">
                            <div class="project-thumb d-flex justify-content-center align-items-center">
                                <div class="text-center">
                                    <i class="fas fa-trophy"></i>
                                    <p>Jas Qalam2</p>
                                </div>

                            </div>
                        </div>


                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <!-- Slider main container -->
            <!-- Swiper -->
            <div class="col-md-12 ">
                <div class="swiper-container mySwiperProject">
                    <div class="swiper-wrapper py-4">
                        <div class="swiper-slide py-5">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-md-6 project-background">
                                    <img src="/img/1.jpg" alt="">
                                </div>
                                <div class="col-md-6">
                                    <div class="main-title text-left">
                                        <h1><span class="main-color">ПРОЕКТ</span> «Jas Qalam»</h1>
                                    </div>
                                    <p>
                                        Ежегодный проект, который нацелен на развитие молодежной
                                        журналистики. 4 направления обучения: тележурналистика, печатная журналистика и интернет-блоггинг, PR и личный
                                    </p>
                                    <a href="" class="links">Подробнее</a>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide py-5">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-md-6 project-background">
                                    <img src="/img/1.jpg" alt="">
                                </div>
                                <div class="col-md-6">
                                    <div class="main-title text-left">
                                        <h1>Жаңа жағдайдағ</h1>
                                    </div>
                                    <p>
                                        Ежегодный проект, который нацелен на развитие молодежной
                                        журналистики. 4 направления обучения: тележурналистика, печатная журналистика и интернет-блоггинг, PR и личный
                                    </p>
                                    <a href="" class="links">Подробнее</a>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide py-5">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-md-6 project-background">
                                    <img src="/img/1.jpg" alt="">
                                </div>
                                <div class="col-md-6">
                                    <div class="main-title text-left">
                                        <h1>Jascongress univer...</h1>
                                    </div>
                                    <p>
                                        Ежегодный проект, который нацелен на развитие молодежной
                                        журналистики. 4 направления обучения: тележурналистика, печатная журналистика и интернет-блоггинг, PR и личный
                                    </p>
                                    <a href="" class="links">Подробнее</a>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide py-5">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-md-6 project-background">
                                    <img src="/img/1.jpg" alt="">
                                </div>
                                <div class="col-md-6">
                                    <div class="main-title text-left">
                                        <h1>Дни КМК</h1>
                                    </div>
                                    <p>
                                        Ежегодный проект, который нацелен на развитие молодежной
                                        журналистики. 4 направления обучения: тележурналистика, печатная журналистика и интернет-блоггинг, PR и личный
                                    </p>
                                    <a href="" class="links">Подробнее</a>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide py-5">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-md-6 project-background">
                                    <img src="/img/1.jpg" alt="">
                                </div>
                                <div class="col-md-6">
                                    <div class="main-title text-left">
                                        <h1>Qazaqsha Tour 2020</h1>
                                    </div>
                                    <p>
                                        Ежегодный проект, который нацелен на развитие молодежной
                                        журналистики. 4 направления обучения: тележурналистика, печатная журналистика и интернет-блоггинг, PR и личный
                                    </p>
                                    <a href="" class="links">Подробнее</a>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide py-5">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-md-6 project-background">
                                    <img src="/img/1.jpg" alt="">
                                </div>
                                <div class="col-md-6">
                                    <div class="main-title text-left">
                                        <h1>ПРОЕКТ «Jas Qalam»6</h1>
                                    </div>
                                    <p>
                                        Ежегодный проект, который нацелен на развитие молодежной
                                        журналистики. 4 направления обучения: тележурналистика, печатная журналистика и интернет-блоггинг, PR и личный
                                    </p>
                                    <a href="" class="links">Подробнее</a>
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
                <h1><span class="main-color">ВСТУПЛЕНИЕ</span> В КОНГРЕСС</h1>
                <p>Отправляйте заявки</p>
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
                <h1><span class="main-color">НАША</span> КОМАНДА</h1>
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
                <h1><span class="main-color">НАШИ</span> ПАРТНЕРЫ</h1>
                <p>Отправляйте заявки</p>
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
                                        <a href="blog-single-sidebar-right.html">{{$lang ? $post->title_kz : $post->title}}</a>
                                    </h3>
                                    <p>{!! $lang ? \Illuminate\Support\Str::limit($post->content_kz, 100) : \Illuminate\Support\Str::limit($post->content, 100) !!}</p>
                                    <div class="blog-footer clearfix">
                                        <div class="float-left">
                                            <p class="date"><i class="flaticon-calendar"></i> 17 Feb, 2020</p>
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

@endsection
@push('scripts')
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop:false,
            freeMode: false,
            slideToClickedSlide:true,
            simulateTouch:false,
            allowTouchMove:false,

            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 5,
                    pagination: {
                        el: '.swiper-pagination',
                        type: 'bullets',
                    },
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 2,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                },
            }
        });
        var swiper_project = new Swiper(".mySwiperProject", {
            spaceBetween: 10,
            slidesPerView: 1,
            freeMode: false,
            simulateTouch:false,
            allowTouchMove:false,
        });

        swiper.on("click",function (el) {

            swiper.slideTo(el.clickedIndex,1200);
            swiper_project.slideTo(el.realIndex,1200);
        })
        swiper.on('slideChange', function (el) {
            swiper_project.slideTo(el.realIndex,1200);
        });

        var swiper_partner = new Swiper(".swiperPartner",{

            freeMode: false,
            slideToClickedSlide:true,
            centerMode:true,
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 2,
                },
            }
        })


    </script>
@endpush
