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
			
			@if(Session::has('flash_banner_positive'))
				<div class="alert alert-success">{{ Session::get('flash_banner_positive') }}</div>
			@endif
			
			<div class="panel panel-default">
			<div class="panel-heading">
				<div class="btn-block">
					{!! Form::label('banner', trans('adminpanel.banners'), array('class' => 'btn btn-lg')) !!}
					<a href="{{ action('Admin\BannerController@create') }}">{!! Form::button(trans('adminpanel.add'), ['class' => 'btn btn-primary btn-md pull-right']) !!}</a>
				</div>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-hover table-condensed table-bordered">
				    <thead>
				      <tr>
				      	<th class="col-sm-1">ID</th>
				        <th>{{ trans('adminpanel.title') }}</th>
					    <th>{{ trans('adminpanel.url') }}</th>
				        <th>{{ trans('adminpanel.is_published') }}</th>
					    <th class="col-sm-1">{{ trans('adminpanel.edit') }}</th>
					    <th class="col-sm-1">{{ trans('adminpanel.delete') }}</th>
				      </tr>
				    </thead>
				    <tbody>
				    @foreach($banners as $banner)
				      <tr>
				      	<td>{{ $banner->id}}</td>
				        <td>{{ $banner->title}}</td>
				        <td>{{ $banner->link}}</td>
				        <td>{{ $banner->is_published ? trans('adminpanel.yes') : trans('adminpanel.no') }}</td>
				        <td>
					        <a href="banners/{{ $banner->id }}/edit"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button></a>
				        </td>
				        <td>
				        {!! Form::open(array('method' => 'DELETE', 'action' => ['Admin\BannerController@destroy', $banner->id])) !!}
	       					<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
	       				{!! Form::close() !!}
						</td>
				      </tr>
				    </tbody>
				    @endforeach
					</table>
				</div>
				<div class="form-group text-center">
					{!! str_replace('/?', '?', $banners->render()) !!}
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
