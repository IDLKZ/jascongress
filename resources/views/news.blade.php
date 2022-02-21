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
                <h1>{{__('front.our_news')}}</h1>
                <ul class="breadcrumbs">
                    <li><a href="{{route('main')}}">{{__('front.main')}}</a></li>
{{--                    <li class="active">{{\App\Models\Language::getLg() ? $post->title_kz : $post->title}}</li>--}}
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub banner end -->

    <!-- Blog section start -->
    <div class="blog-section content-area-7">
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-4">
                        <div class="blog-1">
                            <div class="blog-photo" style='width: 100%;height: 250px;background: url("{{$post->getImage()}}") no-repeat center;background-size: cover'>
                                {{--                                    <img src="{{$post->getImage()}}" alt="blog-1" class="img-fluid">--}}
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
                                    <a href="{{route('single', $post->id)}}">{{$lang ? \Illuminate\Support\Str::limit($post->title_kz, 20) : \Illuminate\Support\Str::limit($post->title, 20)}}</a>
                                </h3>
                                <p>{!! $lang ? \Illuminate\Support\Str::limit($post->content_kz, 75) : \Illuminate\Support\Str::limit($post->content, 75) !!}</p>
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
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
    <!-- Blog section end -->
@endsection
