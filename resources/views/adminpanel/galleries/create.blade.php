@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">	
		@include('errors.list')
			<div class="panel panel-default">
				<div class="panel-heading">{{ trans('adminpanel.add') }}</div>
				<div class="panel-body">
					{!! Form::open(array('action' => array('Admin\GalleryController@store'),'files'=>true)) !!}
			        
			        @include('adminpanel.galleries._form', ['submitButtonText' => trans('adminpanel.add')])

       				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
