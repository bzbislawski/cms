<div class="form-group">
	{!! Form::label('title', 'Tytuł:') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('body', 'Treść:') !!}
	{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('isPublished', 'Publikuj:') !!}
	{!! Form::select('isPublished', array(true=>'Publikuj', false=>'Ukryj'), null,['class' => 'form-control']) !!}
</div>

@if($bladeName == 'create')
<div class="form-group">
	{!! Form::label('published_at', 'Data publikacji:') !!}
	{!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>
@elseif($bladeName == 'edit')
<div class="form-group">
	{!! Form::label('published_at', 'Data publikacji:') !!}
	{!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>
@endif

<div class="form-group text-center">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
	{!! Html::link('/home/articles', 'Wyjdź', ['class' => 'btn btn-primary']) !!}
</div>