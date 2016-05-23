@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">	
		@include('errors.list')
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="btn-block">
						{!! Form::label('galleries', trans('adminpanel.galleries'), array('class' => 'btn btn-lg')) !!}
						<a href="{{ action('Admin\GalleryController@create') }}">{!! Form::button(trans('adminpanel.add'), ['class' => 'btn btn-primary btn-md pull-right']) !!}</a>
					</div></div>
				<div class="panel-body">
					
			        
						
					    @foreach($photos as $photo)
							<div class="col-sm-4" style="min-height:220px; max-height: 220px">
								<img src="{{url('/images/photos') }}/{{ $photo->image }}" class="img-rounded" alt="Photo" width="100%" height="100%" style="max-height: 170px" data-lity>
								

								{!! Form::open(array('action' => array('Admin\GalleryController@deletePhotography', $photo->id),'files'=>true, 'id' => 'deleteform')) !!}
									<div class="pull-right"><a href="#" onclick="document.getElementById('deleteform').submit();">
										<span class="glyphicon glyphicon-trash"></span>
										{{trans('adminpanel.delete')}}
										</a>
									</div>
								{!! Form::close() !!}
							</div>

						
					    @endforeach
						
					
			        	
       				
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
