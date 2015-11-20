@if (count($errors) > 0)
	<div class="alert alert-danger">
		<strong>{{ trans('adminpanel.errorText1') }}</strong> {{ trans('adminpanel.errorText2') }}<br><br>
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif	