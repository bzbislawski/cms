@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			@include('errors.list')
			@if(Session::has('flash_banner_positive'))
				<div class="alert alert-success">{{ Session::get('flash_banner_positive') }}</div>
			@endif
			<div class="panel panel-default">
				<div class="panel-heading">Stwórz baner</div>
				<div class="panel-body">
				{!! Form::model($banner, array('method' => 'PATCH', 'action' => ['BannerController@update', $banner->id],'files'=>true)) !!}

					@include('adminpanel.banners._form', ['submitButtonText' => 'Zapisz', 'bladeName' => 'edit'])
				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection