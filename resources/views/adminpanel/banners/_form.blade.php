@if($bladeName == 'edit')
<div class="form-group">
    <img src="{{url('/images/banners/') }}/{!! $banner->image !!}" class="img-thumbnail" alt="Banner" width="100%" height="100%"><br/>
</div>
@endif

<div class="form-group">
    {!! Form::label('title', trans('adminpanel.title').':') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('link', trans('adminpanel.url').':') !!}
    {!! Form::text('link', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('text', trans('adminpanel.firstLine').':') !!}
    {!! Form::text('text', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('text2', trans('adminpanel.secondLine').':') !!}
    {!! Form::text('text2', null, ['class' => 'form-control']) !!}
</div>

@if($bladeName == 'create')
<div class="form-group">
    {!! Form::label('image', trans('adminpanel.image').':') !!}
    {!! Form::file('image', ['class' => 'form-control']) !!}
</div>
@endif

<div class="form-group">
    {!! Form::label('is_published', trans('adminpanel.publish').':') !!}
    {!! Form::select('is_published', array(true=>trans('adminpanel.publish'), false=>trans('adminpanel.hide')), null,['class' => 'form-control']) !!}
</div>

<div class="form-group text-center">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
    {!! Html::link(action('Admin\BannerController@index'), trans('adminpanel.back'), ['class' => 'btn btn-primary']) !!}
</div>
