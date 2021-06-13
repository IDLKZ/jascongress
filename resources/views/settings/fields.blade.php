<!-- Logo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logo', 'Logo:') !!}
    {!! Form::file('logo', null, ['class' => 'form-control']) !!}
</div>

<div class="row">
    <!-- Address Field -->
    <div class="form-group col-sm-6 col-md-6">
        {!! Form::label('address', 'Address:') !!}
        {!! Form::text('address', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
    </div>
    <!-- Address Field -->
    <div class="form-group col-sm-6 col-md-6">
        {!! Form::label('address', 'Address_kz:') !!}
        {!! Form::text('address_kz', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
    </div>
</div>

<div class="row">
    <!-- Phone Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('phone', 'Phone:') !!}
        {!! Form::text('phone', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
    </div>

    <!-- Email Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::select('email', [], null, ['class' => 'form-control select2',"multiple"=>"multiple","name"=>"email[]"]) !!}
    </div>
</div>


<div class="row">
    <!-- Time Field -->
    <div class="form-group col-sm-6 col-md-6">
        {!! Form::label('time', 'Time:') !!}
        {!! Form::text('time', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
    </div>
    <!-- Time Field -->
    <div class="form-group col-sm-6 col-md-6">
        {!! Form::label('time', 'Time_kz:') !!}
        {!! Form::text('time_kz', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
    </div>
</div>


<!-- Instagram Field -->
<div class="form-group col-sm-6">
    {!! Form::label('instagram', 'Instagram:') !!}
    {!! Form::text('instagram', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Twitter Field -->
<div class="form-group col-sm-6">
    {!! Form::label('twitter', 'Twitter:') !!}
    {!! Form::text('twitter', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Facebook Field -->
<div class="form-group col-sm-6">
    {!! Form::label('facebook', 'Facebook:') !!}
    {!! Form::text('facebook', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Telegram Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telegram', 'Telegram:') !!}
    {!! Form::text('telegram', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Whatsapp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('whatsapp', 'Whatsapp:') !!}
    {!! Form::text('whatsapp', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('settings.index') }}" class="btn btn-secondary">Cancel</a>
</div>
