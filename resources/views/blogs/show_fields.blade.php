<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $blog->title }}</p>
</div>

<!-- Title Kz Field -->
<div class="form-group">
    {!! Form::label('title_kz', 'Title Kz:') !!}
    <p>{{ $blog->title_kz }}</p>
</div>

<!-- Content Field -->
<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    <p>{!! $blog->content !!}</p>
</div>

<!-- Content Kz Field -->
<div class="form-group">
    {!! Form::label('content_kz', 'Content Kz:') !!}
    <p>{!! $blog->content_kz !!}</p>
</div>

<!-- Img Field -->
<div class="form-group">
    {!! Form::label('img', 'Img:') !!}
    <p><img src="{{ $blog->getImage() }}"></p>
</div>

<!-- Seo Title Field -->
<div class="form-group">
    {!! Form::label('seo_title', 'Seo Title:') !!}
    <p>{{ $blog->seo_title }}</p>
</div>

<!-- Seo Description Field -->
<div class="form-group">
    {!! Form::label('seo_description', 'Seo Description:') !!}
    <p>{{ $blog->seo_description }}</p>
</div>

