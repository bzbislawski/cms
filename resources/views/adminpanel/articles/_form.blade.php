<div class="form-group">
	{!! Form::label('title', trans('adminpanel.title') . ':') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('body', trans('adminpanel.body') . ':') !!}
	{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('is_published', trans('adminpanel.publish') . ':') !!}
	{!! Form::select('is_published', array(true=>trans('adminpanel.publish'), false=>trans('adminpanel.hide')), null,['class' => 'form-control']) !!}
</div>

@if($bladeName == 'create')
<div class="form-group">
	{!! Form::label('published_at', trans('adminpanel.published_at') . ':') !!}
	{!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>
@elseif($bladeName == 'edit')
<div class="form-group">
	{!! Form::label('published_at', trans('adminpanel.published_at') . ':') !!}
	{!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>
@endif

<div class="form-group text-center">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
	{!! Html::link(action('Admin\ArticleController@index'), trans('adminpanel.back'), ['class' => 'btn btn-primary']) !!}
</div>