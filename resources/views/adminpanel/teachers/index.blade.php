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
						{!! Form::btnLink('<span class="icon-c-crown-plus"></span>'.trans('adminpanel.add'), action('TeacherController@create'), null, array('class'=>'btn btn-primary btn-md pull-right')) !!}
					</div>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-hover table-condensed table-bordered">
					    <thead>
					      <tr>
					      	<th class="col-sm-1">ID</th>
					        <th>{{ trans('adminpanel.fullName') }}</th>
					        <th>{{ trans('adminpanel.isPublished') }}</th>
					        <th class="col-sm-1">{{ trans('adminpanel.edit') }}</th>
					        <th class="col-sm-1">{{ trans('adminpanel.delete') }}</th>
					      </tr>
					    </thead>
					    <tbody>
					    @foreach($teachers as $teacher)
					      <tr>
					      	<td>{{ $teacher->id}}</td>
					        <td>{{ $teacher->name}}</td>
					        <td>{{ $teacher->isPublished ? 'TAK' : 'NIE'}}</td>
					        <td>
						        {!! Form::btnLink('<span class="glyphicon glyphicon-edit"></span>', 'teachers/'. $teacher->id.'/edit', null, array('class'=>'btn btn-warning btn-sm'), '') !!}
					        </td>
					        <td>
					        {!! Form::open(array('method' => 'DELETE', 'action' => ['TeacherController@destroy', $teacher->id])) !!}
		       				{!! Form::btnLink('<span class="glyphicon glyphicon-remove"></span>', '', null, array('class'=>'btn btn-danger btn-sm'), '') !!}
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
