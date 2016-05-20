@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">	
		@include('errors.list')
			@if(Session::has('flash_page_positive'))
				<div class="alert alert-success">{{ Session::get('flash_page_positive') }}</div>
			@endif
			<div class="panel panel-default">
				<div class="panel-heading">{{ trans('adminpanel.edit') }}</div>
				<div class="panel-body">
					{!! Form::model($page, array('method' => 'PATCH', 'action' => ['Admin\PageController@update', $page->id])) !!}

					@include('adminpanel.pages._form', ['submitButtonText' => trans('adminpanel.save')])

       				{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
