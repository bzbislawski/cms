 @extends('index')



@section('content')   



	<!-- ================================ -->
	<!-- ========== GALLERY SECTION ========== -->
	<!-- ================================ -->
	<section class="gallery" style="margin-bottom:12rem;margin-top:-2rem;" > 
		<div class="gallerySection" style="background:none!important;border:none">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 titleGallery">
						<h1>Gallery from our Kindergarten</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacus nibh, vulputate eu diam non, sodales tincidunt ligula.<br> 
						Pellentesque molestie nisl in dolor gravida commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>

						<div class="categories">
							<ul class="clearfix" data-option-key="filter">
								<li> <a href="#" class="selected" data-option-value="*">All</a></li>
								<li> <a href="#" data-option-value=".drawing">Drawing</a></li>
								<li> <a href="#" data-option-value=".excursions">Excursions</a></li>
								<li> <a href="#" data-option-value=".courses">Courses</a></li>
								<li> <a href="#" data-option-value=".playtime">Play time</a></li>
							</ul>
						</div><!--end categories -->
					</div><!--end titleGallery -->
					
					<div class="col-sm-12">				
						<div class="contentGallery row">
							<ul class="clearfix">
								@foreach($collection as $col)
								<li class="courses col-sm-4" >
									<div class="wrapper-article galleryPopup1">
										<a href="assets/img/Images/photodune-4736450-smart-schoolboy-l.jpg">
											<img src="{{ url('images/photos/'.$col->image) }}" alt="" class="img-responsive">
											<h3>Michael on the lesson hour <i class="fa fa-picture-o"></i></h3>
										</a>
									</div><!--end wrapper-article -->
								</li>
								@endforeach
								

							</ul>
						</div>
					</div><!--end contentGallery -->
				</div><!--end row -->
			</div><!--end container -->
		</div><!--end gallerySection -->
	</section>
	<!-- ================================ -->
	<!-- ========== END GALLERY SECTION ========== -->
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