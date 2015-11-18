@if($bladeName == 'edit')
<div class="form-group">
    <img src="..\..\..\gallery\banner\{!! $banner->image !!}" class="img-thumbnail" alt="Banner" width="100%" height="100%"><br/>
</div>
@endif

<div class="form-group">
    {!! Form::label('title', 'Tytuł:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('link', 'Link:') !!}
    {!! Form::text('link', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('text', 'Pierwsza linia tekstu:') !!}
    {!! Form::text('text', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('text2', 'Druga linia tekstu:') !!}
    {!! Form::text('text2', null, ['class' => 'form-control']) !!}
</div>

@if($bladeName == 'create')
<div class="form-group">
    {!! Form::label('image', 'Zdjęcie:') !!}
    {!! Form::file('image', ['class' => 'form-control']) !!}
</div>
@endif

<div class="form-group">
    {!! Form::label('isPublished', 'Publikuj:') !!}
    {!! Form::select('isPublished', array(true=>'Publikuj', false=>'Ukryj'), null,['class' => 'form-control']) !!}
</div>

<div class="form-group text-center">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
    {!! Html::link('/home/banners', 'Wyjdź', ['class' => 'btn btn-primary']) !!}
</div>
