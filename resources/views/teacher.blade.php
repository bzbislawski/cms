@extends('index')

@section('content')

	<!-- ================================ -->
	<!-- ========== STARTING TEACHERS  ========== -->
	<!-- ================================ -->
	<section class="teachers sectionPadding" > 
		<div class="container">
			@foreach($teachers as $teacher)	  
			  <div class="col-sm-6 col-md-3">
			    <div class="thumbnail ">
			      <figure>
			      	<figcaption>
			      		<a href="#"><i class="fa fa-facebook-square"></i></a>
			      		<a href="#"><i class="fa fa-twitter"></i></a>
			      	</figcaption>
			      	<img src="{{ url('images/teachers/'.$teacher->image) }}" alt="...">
			      </figure>
			      <div class="caption">
			        <h3>{{$teacher->name}}</h3>
			        <p>{{substr($teacher->about, 0, 100)}}</p>
			        <p>{{ $teacher->contact }}</p>
			        <p><a href="{{ url('teachers/'.$teacher->id) }}" class="btn btn-primary" role="button">Know me</a> 
			      </div><!--end caption -->
			    </div><!--end thumbnail -->
			  </div><!--end col -->
			@endforeach
		</div><!--end container -->
	</section>
	<!-- ================================ -->
	<!-- ========== END TEACHERS  ========== -->
	<!-- ================================ -->



@endsection

@section('footer')
@include('partials._footer')
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/main.js"></script>

	<!--[if lte IE 9 ]>
		<script src="assets/js/placeholder.js"></script>
		<script>
			jQuery(function() {
				jQuery('input, textarea').placeholder();
			});
		</script>
	<![endif]-->
@endsection