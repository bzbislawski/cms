@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">	
		@include('errors.list')
			@if(Session::has('flash_teacher_positive'))
				<div class="alert alert-success">{{ Session::get('flash_teacher_positive') }}</div>
			@endif
			<div class="panel panel-default">
				<div class="panel-heading">{{ trans('adminpanel.edit') }}</div>
				<div class="panel-body">
					{!! Form::model($teacher, array('method' => 'PATCH', 'action' => ['Admin\TeacherController@update', $teacher->id],'files'=>true)) !!}

					@include('adminpanel.teachers._form', ['submitButtonText' => trans('adminpanel.save'), 'bladeName' => 'update'])


       				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('footer')

@endsection
