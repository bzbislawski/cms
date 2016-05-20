@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">	
		@include('errors.list')
			@if(Session::has('flash_article_positive'))
				<div class="alert alert-success">{{ Session::get('flash_article_positive') }}</div>
			@endif
			<div class="panel panel-default">
				<div class="panel-heading">{{ trans('adminpanel.edit') }}</div>
				<div class="panel-body">
					{!! Form::model($article, array('method' => 'PATCH', 'action' => ['Admin\ArticleController@update', $article->id])) !!}

					@include('adminpanel.articles._form', ['submitButtonText' => trans('adminpanel.save'), 'bladeName' => 'edit'])

       				{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
