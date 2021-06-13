<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Title Kz Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_kz', 'Title Kz:') !!}
    {!! Form::text('title_kz', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<!-- Content Kz Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content_kz', 'Content Kz:') !!}
    {!! Form::textarea('content_kz', null, ['class' => 'form-control']) !!}
</div>

<!-- Img Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img', 'Img:') !!}
    {!! Form::file('img', null, ['class' => 'form-control']) !!}
</div>

<!-- Seo Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('seo_title', 'Seo Title:') !!}
    {!! Form::text('seo_title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Seo Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('seo_description', 'Seo Description:') !!}
    {!! Form::text('seo_description', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Cancel</a>
</div>
