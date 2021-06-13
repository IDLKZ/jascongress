@extends('layout')
@push('styles')
    <style>
        .sub-banner {
            background: rgba(0, 0, 0, 0.04) url('/img/img-3.jpg');
            background-position-x: left;
            background-position-y: top;
            background-repeat: repeat;
            background-size: auto;
            background-size: cover;
            height: 400px;
            background-position: center center;
            position: relative;
        }
    </style>
@endpush
@section('content')
    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>{{\App\Models\Language::getLg() ? $post->title_kz : $post->title}}</h1>
                <ul class="breadcrumbs">
                    <li><a href="{{route('main')}}">{{__('front.main')}}</a></li>
                    <li class="active">{{\App\Models\Language::getLg() ? $post->title_kz : $post->title}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub banner end -->

    <!-- Blog section start -->
    <div class="blog-section content-area-7">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Blog grid box start -->
                    <div class="blog-1 mb-50">
                        <div class="blog-photo">
                            <img src="{{$post->getImage()}}" alt="blog" class="img-fluid">
                            <div class="user">
{{--                                <div class="avatar">--}}
{{--                                    <img src="http://placehold.it/30x30" alt="avatar" class="img-fluid rounded-circle">--}}
{{--                                </div>--}}
{{--                                <div class="name">--}}
{{--                                    <h5>John Doe</h5>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                        <div class="detail">
                            <h2>
                                <a href="javascript:void (0)">{{\App\Models\Language::getLg() ? $post->title_kz : $post->title}}</a>
                            </h2>
                            {!! \App\Models\Language::getLg() ? $post->content_kz : $post->content !!}
                            <div class="row clearfix tags-socal-box">
                                <div class="col-lg-7 col-md-7 col-sm-7">

                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5">
                                    <div class="social-list">
                                        <h2>Share</h2>
                                        <!-- uSocial -->
                                        <script async src="https://usocial.pro/usocial/usocial.js?uid=5c6ab12d94f60735&v=6.1.5" data-script="usocial" charset="utf-8"></script>
                                        <div class="uSocial-Share" data-pid="e673e016065082a4f94985ee6d0fb816" data-type="share" data-options="round-rect,style1,default,absolute,horizontal,size48,eachCounter0,counter0,mobile_position_right" data-social="vk,fb,wa,telegram,twi,ok,lin"></div>
                                        <!-- /uSocial -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog section end -->
@endsection
