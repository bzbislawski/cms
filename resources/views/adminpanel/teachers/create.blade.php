@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">	
			@include('errors.list')
			<div class="panel panel-default">
				<div class="panel-heading">Stwórz profil nauczyciela</div>
				<div class="panel-body">
					{!! Form::open(array('action' => array('TeacherController@store'),'files'=>true)) !!}
					
			    	@include('adminpanel.teachers._form', ['submitButtonText' => 'Dodaj', 'bladeName' => 'create'])

       				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
