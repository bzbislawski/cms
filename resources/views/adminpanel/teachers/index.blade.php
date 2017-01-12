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
			
			@if(Session::has('flash_teacher_positive'))
				<div class="alert alert-success">{{ Session::get('flash_teacher_positive') }}</div>
			@endif

			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="btn-block">
						{!! Form::label('teachers', trans('adminpanel.teachers'), array('class' => 'btn btn-lg')) !!}
							<a href="{{ action('Admin\TeacherController@create') }}">{!! Form::button(trans('adminpanel.add'), ['class' => 'btn btn-primary btn-md pull-right']) !!}</a>
					</div>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-hover table-condensed table-bordered">
					    <thead>
					      <tr>
					      	<th class="col-sm-1">ID</th>
					        <th>{{ trans('adminpanel.fullName') }}</th>
					        <th>{{ trans('adminpanel.is_published') }}</th>
					        <th class="col-sm-1">{{ trans('adminpanel.edit') }}</th>
					        <th class="col-sm-1">Delete</th>
					      </tr>
					    </thead>
					    <tbody>
					    @foreach($teachers as $teacher)
					      <tr>
					      	<td>{{ $teacher->id}}</td>
					        <td>{{ $teacher->name}}</td>
					        <td>{{ $teacher->is_published ? trans('adminpanel.yes') : trans('adminpanel.no')}}</td>
					        <td>
						        <a href="teachers/{{ $teacher->id }}/edit"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button></a>
					        </td>
					        <td>
					        {!! Form::open(array('method' => 'DELETE', 'action' => ['Admin\TeacherController@destroy', $teacher->id])) !!}
		       						<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
		       				{!! Form::close() !!}
							</td>
					      </tr>
					    </tbody>
					    @endforeach
						</table>
						<div class="form-group text-center">
							{!! $teachers->render() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
