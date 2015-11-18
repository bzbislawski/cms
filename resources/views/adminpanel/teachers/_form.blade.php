 <div class="form-group">
	{!! Form::label('name', 'Imię i nazwisko:') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('contact', 'Kontakt:') !!}
	{!! Form::text('contact', null, ['class' => 'form-control']) !!}
</div>

 <div class="form-group">
	{!! Form::label('about', 'Opis:') !!}
	{!! Form::textarea('about', null, ['class' => 'form-control']) !!}
</div>

@if($bladeName == 'edit' && $teacher->image != "")
<div class="form-group">
	<img src="..\..\..\gallery\teacher\{!! $teacher->image !!}" class="img-thumbnail" alt="Photo" width="10%" height="10%"><br/>
	{!! Form::submit('Usuń zdjęcie', ['class' => 'btn btn-primary btn-sm', 'name' => 'Usuń']) !!}
</div>
@else
 <div class="form-group">
	{!! Form::label('image', 'Zdjęcie:') !!}
	{!! Form::file('image', ['class' => 'form-control']) !!}
</div>
@endif

<div class="form-group">
	{!! Form::label('isPublished', 'Publikuj:') !!}
	{!! Form::select('isPublished', array(true=>'Publikuj', false=>'Ukryj'),null,['class' => 'form-control']) !!}
</div>

<div class="form-group text-center">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary', 'name' => $submitButtonText]) !!}
	{!! Html::link('/home/teachers', 'Wyjdź', ['class' => 'btn btn-primary']) !!}
</div>