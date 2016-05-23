@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">

			@if(Session::has('flash_home_positive'))
				<div class="alert alert-success">{{ Session::get('flash_home_positive') }}</div>
			@endif		
			<div class="panel panel-default">
				<div class="panel-heading">Strona główna</div>
				<div class="panel-body">
					<div class="col-sm-12 text-center">
					<h3><strong>Witamy w panelu administracyjnym!</strong></h3>
					</div>
					<div class="col-sm-6">
						<div class="panel panel-default" style="margin-top:100px">
		    				<div class="panel-body">
								Masz problem? Zgłoś go! Wyślij wiadomość e-mail za pomocą formularza obok. Dane kontaktowe z administratorem:
								<br/>
								E-mail: {!! Html::mailto(env('SITE_ADMIN_MAIL')) !!}
								<br/>
								Telefon: <u>{!! env('SITE_ADMIN_PHONE') !!}</u>.
							</div>
						</div>
					</div>

					<div class="col-sm-6">
						{!! Form::open(array('action' => array('Admin\AdminController@send'))) !!}
						<div class="form-group">
				        	{!! Form::label('title', 'Tytuł:') !!}
				        	{!! Form::text('title', 'Zgłoszenie ze strony ' .env('SITE_NAME'), ['class' => 'form-control', 'readonly' => 'readonly']) !!}
				        </div>
				        <div class="form-group">
				        	{!! Form::label('text', 'Wiadomość:') !!}
				        	{!! Form::textarea('text', null, ['class' => 'form-control']) !!}
				        </div>

			        	<div class="form-group">
			        		{!! Form::checkbox('sendCC', null, null) !!}
			        		
				        	{!! Form::label('isPublished', 'Wyślij kopię wiadomości na adres: ' . env('SITE_MAIL')) !!} 
				        </div>

				        <div class="form-group text-center">
				        	{!! Form::submit('Wyślij', ['class' => 'btn btn-primary btn-md']) !!}
				        </div>

	       				{!! Form::close() !!}
	       			</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
