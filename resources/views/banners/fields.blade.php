<div class="row">
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
    <div class="form-group col-sm-6 col-lg-6">
        {!! Form::label('content', 'Content:') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control content']) !!}
    </div>

    <!-- Content Kz Field -->
    <div class="form-group col-sm-6 col-lg-6">
        {!! Form::label('content_kz', 'Content Kz:') !!}
        {!! Form::textarea('content_kz', null, ['class' => 'form-control content_kz']) !!}
    </div>

    <!-- Experience Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('experience', 'Experience:') !!}
        {!! Form::text('experience', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
    </div>

    <!-- Experience Kz Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('experience_kz', 'Experience Kz:') !!}
        {!! Form::text('experience_kz', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
    </div>

    <!-- Experience Content Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('experience_content', 'Experience Content:') !!}
        {!! Form::text('experience_content', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
    </div>

    <!-- Experience Content Kz Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('experience_content_kz', 'Experience Content Kz:') !!}
        {!! Form::text('experience_content_kz', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
    </div>

    <!-- Organization Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('organization', 'Organization:') !!}
        {!! Form::text('organization', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
    </div>

    <!-- Organization Kz Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('organization_kz', 'Organization Kz:') !!}
        {!! Form::text('organization_kz', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
    </div>

    <!-- Organization Content Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('organization_content', 'Organization Content:') !!}
        {!! Form::text('organization_content', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
    </div>

    <!-- Organization Content Kz Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('organization_content_kz', 'Organization Content Kz:') !!}
        {!! Form::text('organization_content_kz', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
    </div>
</div><!-- Title Field -->


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
{{--    <a href="{{ route('banners.index') }}" class="btn btn-secondary">Cancel</a>--}}
</div>
