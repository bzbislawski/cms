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
					{!! Form::label('banery', 'Banery', array('class' => 'btn btn-lg')) !!}
					<a href="../home/banners/create">{!! Form::button('Dodaj Baner', ['class' => 'btn btn-primary btn-md pull-right']) !!}</a>
				</div>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-hover table-condensed table-bordered">
				    <thead>
				      <tr>
				      	<th class="col-sm-1">ID</th>
				        <th>Tytuł</th>
				        <th>Link</th>
				        <th>Opublikowano</th>
				        <th class="col-sm-1">Edytuj</th>
				        <th class="col-sm-1">Usuń</th>
				      </tr>
				    </thead>
				    <tbody>
				    @foreach($banners as $banner)
				      <tr>
				      	<td>{{ $banner->id}}</td>
				        <td>{{ $banner->title}}</td>
				        <td>{{ $banner->link}}</td>
				        <td>{{ $banner->isPublished ? 'TAK' : 'NIE'}}</td>
				        <td>
					        {!! Form::btnLink('<span class="glyphicon glyphicon-edit"></span>', 'banners/'. $banner->id.'/edit', null, array('class'=>'btn btn-warning btn-sm'), '') !!}
				        </td>
				        <td>
				        {!! Form::open(array('method' => 'DELETE', 'action' => ['BannerController@destroy', $banner->id])) !!}
				        {!! Form::hidden('id', $banner->id) !!}
	       				{!! Form::btnLink('<span class="glyphicon glyphicon-remove"></span>', '', null, array('class'=>'btn btn-danger btn-sm'), '') !!}
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