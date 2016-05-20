@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">	
			@include('errors.list')
			<div class="panel panel-default">
				<div class="panel-heading">{{ trans('adminpanel.add') }}</div>
				<div class="panel-body">
					{!! Form::open(array('action' => array('Admin\TeacherController@store'),'files'=>true)) !!}
					
			    	@include('adminpanel.teachers._form', ['submitButtonText' => trans('adminpanel.add'), 'bladeName' => 'create'])

       				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
