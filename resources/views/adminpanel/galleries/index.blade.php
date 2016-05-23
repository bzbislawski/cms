@extends('app')

@section('content')
<style>
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
    vertical-align: middle;
    text-align: center;
}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			
			@if(Session::has('flash_gallery_positive'))
				<div class="alert alert-success">{{ Session::get('flash_gallery_positive') }}</div>
			@endif
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="btn-block">
						{!! Form::label('galleries', trans('adminpanel.galleries'), array('class' => 'btn btn-lg')) !!}
						<a href="{{ action('Admin\GalleryController@create') }}">{!! Form::button(trans('adminpanel.add'), ['class' => 'btn btn-primary btn-md pull-right']) !!}</a>
					</div>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-hover table-condensed table-bordered">
					    <thead>
					      <tr>
					        <th>{{ trans('adminpanel.title') }}</th>
					        <th class="col-sm-2">{{ trans('adminpanel.updated_at') }}</th>
					        <th class="col-sm-1">{{ trans('adminpanel.edit') }}</th>
					        <th class="col-sm-1">{{ trans('adminpanel.delete') }}</th>
					      </tr>
					    </thead>
					    <tbody>
					    @foreach($galleries as $gallery)
					      <tr>
					        <td>{{ $gallery->title}}</td>
					        <td>{{ $gallery->updated_at->diffForHumans()}}</td>
					        <td>
					        	<a href="galleries/{{ $gallery->id }}"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-list-alt"></span></button></a>
					        </td>
					        <td>
						        {!! Form::open(array('method' => 'DELETE', 'action' => ['Admin\GalleryController@destroy', $gallery->id])) !!}
									<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
					       		{!! Form::close() !!}
							</td>
					      </tr>
					    </tbody>
					    @endforeach
						</table>
					</div>
					<div class="form-group text-center">{!! $galleries->render() !!}</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
