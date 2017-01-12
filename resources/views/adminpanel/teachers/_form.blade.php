 <div class="form-group">
	{!! Form::label('name', 'First and Lastname' . ':') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('contact', trans('adminpanel.contact') .':') !!}
	{!! Form::text('contact', null, ['class' => 'form-control']) !!}
</div>

 <div class="form-group">
	{!! Form::label('about', trans('adminpanel.description') . ':') !!}
	{!! Form::textarea('about', null, ['class' => 'form-control']) !!}
</div>

@if($bladeName == 'update' && $teacher->image != "")
<div class="form-group">
	<img src="{{url('/images/teachers/') }}/{!! $teacher->image !!}" class="img-thumbnail" alt="Photo" width="10%" height="10%"><br/>
	{!! Form::submit(trans('adminpanel.deleteImage'), ['class' => 'btn btn-primary btn-sm', 'name' => 'delete']) !!}
</div>
@else
 <div class="form-group">
	{!! Form::label('image', trans('adminpanel.image')) !!}
	{!! Form::file('image', ['class' => 'form-control', 'name' => 'image' ]) !!}
</div>
@endif

<div class="form-group">
	{!! Form::label('is_published', trans('adminpanel.publish') . ':') !!}
	{!! Form::select('is_published', array(true=>trans('adminpanel.publish'), false=>trans('adminpanel.hide')),null,['class' => 'form-control']) !!}
</div>

<div class="form-group text-center">
	{!! Form::submit('Submit', ['class' => 'btn btn-primary', 'name' => $submitButtonText]) !!}
	{!! Html::link(action('Admin\TeacherController@index'), trans('adminpanel.back'), ['class' => 'btn btn-primary']) !!}
</div>