<div class="form-group">
	{!! Form::label('title', trans('adminpanel.title') . ':') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

 <div class="form-group">
	{!! Form::label('image', trans('adminpanel.image')) !!}
	{!! Form::file('image', ['class' => 'form-control', 'name' => 'image[]', 'multiple' => true ]) !!}
</div>

<div class="form-group text-center">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
	{!! Html::link(action('Admin\GalleryController@index'), trans('adminpanel.back'), ['class' => 'btn btn-primary']) !!}
</div>