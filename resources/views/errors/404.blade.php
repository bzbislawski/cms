 @extends('index')

 @section('content')
	<!-- ================================ -->
	<!-- ========== START BANNER  ========== -->
	<!-- ================================ -->
	<section class="sectionPadding bannerTxt" style="background-image:url(assets/img/content/bgk1.jpg);" >
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1>404</h1>
					<p>page not found</p>
					<p><a href="/">Back</a></p>
							
					
				</div><!--end col-sm-12 -->
			</div><!--row -->
		</div><!--end container -->
	</section>
	<!-- ================================ -->
	<!-- ========== END BANNER  ========== -->
	<!-- ================================ -->

@endsection

@section('footer')
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