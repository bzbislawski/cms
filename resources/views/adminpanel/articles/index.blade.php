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
			
			@if(Session::has('flash_article_positive'))
				<div class="alert alert-success">{{ Session::get('flash_article_positive') }}</div>
			@endif
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="btn-block">
						{!! Form::label('Artykuły', 'Artykuły', array('class' => 'btn btn-lg')) !!}
						<a href="../home/articles/create">{!! Form::button('Dodaj Artykuł', ['class' => 'btn btn-primary btn-md pull-right']) !!}</a>
					</div>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-hover table-condensed table-bordered">
					    <thead>
					      <tr>
					        <th>Tytuł</th>
					        <th>Data publikacji</th>
					        <th>Aktualizacja</th>
					        <th>Opublikowano</th>
					        <th class="col-sm-1">Edytuj</th>
					        <th class="col-sm-1">Usuń</th>
					      </tr>
					    </thead>
					    <tbody>
					    @foreach($articles as $article)
					      <tr>
					        <td>{{ $article->title}}</td>
					        <td>{{ $article->published_at->format('d.m.Y H:i:s')}}</td>
					        <td>{{ $article->updated_at->diffForHumans()}}</td>
					        <td>{{ $article->isPublished ? 'TAK' : 'NIE'}}</td>
					        <td>
					        	{!! Form::btnLink('<span class="glyphicon glyphicon-edit"></span>', 'articles/'. $article->id.'/edit', null, array('class'=>'btn btn-warning btn-sm'), '') !!}
					        </td>
					        <td>
						        {!! Form::open(array('method' => 'DELETE', 'action' => ['ArticleController@destroy', $article->id])) !!}
								{!! Form::hidden('id', $article->id) !!}
								{!! Form::btnLink('<span class="glyphicon glyphicon-remove"></span>', '', null, array('class'=>'btn btn-danger btn-sm'), '') !!}
					       		{!! Form::close() !!}
							</td>
					      </tr>
					    </tbody>
					    @endforeach
						</table>
					</div>
					<div class="form-group text-center">{!! $articles->render() !!}</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection