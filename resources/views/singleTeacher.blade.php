@extends('index')

@section('content')

	<!-- ================================ -->
	<!-- ========== STARTING PRESENTATION ========== -->
	<!-- ================================ -->

	<section class="presentaionSection singleteacher sectionPadding">
		<div class="presentationContent">
			<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div class="carouselPresentation row">
							<div class="col-sm-12">
								<img src="{{url('assets/img/slide/sl1.jpg')}}" alt="img">
							</div>
							<div class="col-sm-12">
								<img src="{{url('assets/img/slide/sl2.jpg')}}" alt="img">
							</div>
						</div><!--emd carouselPresentation -->
					</div><!--end col-sm-12 -->

					<div class="col-sm-7">
						<div class="singleTeacher progressBar">
							<h3>{{$teacher->name}} presentation :</h3>	
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in dapibus massa, et posuere arcume
							pellentesque habitant morbi senectus et netus et malesuada fames ac turpis egestas proin comr
							dui ligula, sit amet consequat arcu consectetur vel conectetur vestirum.
							</p>		
							<div class="singleTeacherBar">
								<span>Italian Language</span>
								<span class="percent">47%</span>
								<div class="progress languages middleProgressBar">
							
								  <div class="progress-bar " role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 47%;background:#fbad2f;">
								    <span class="sr-only" >75%</span>
								  </div>
								</div><!--end progress -->
							
								<span>Spanish Language</span>
								<span class="percent">62%</span>
								<div class="progress languages middleProgressBar">
							
								  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 62%;background:#a085c6;">
								    <span class="sr-only">58% </span>
								  </div>
								</div><!--end progress -->
							
								<span>French Language</span>
								<span class="percent">54%</span>
								<div class="progress languages middleProgressBar">
							
								  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 54%;background:#ef7b45;">
								    <span class="sr-only">85%</span>
								  </div>
								</div><!--end progress -->
							</div>		
						</div><!--end progressBar -->

						<div class=" accountList benefits">
							<ul class="clearfix">
								<li class="col-sm-5">
									<i class="fa fa-facebook" ></i>
									<h4>Memories photos</h4>
									<p>You can check my facebook profile and send my a friend request.</p>
								</li>

								<li class="col-sm-5 col-sm-offset-2 ">
									<i class="fa fa-twitter"></i>
									<h4>Dedicated team</h4>
									<p>You can check my facebook profile and send my a friend request.</p>
								</li>
							</ul>
						</div><!--end benefits -->	
					</div><!--end col-sm-7 -->	
				</div><!--end row -->

				<div class="element-title container clearfix" style="padding-top: 50px; padding-bottom: 20px;padding-left:0;">
					<h3>Other skills</h3>
				</div>

				<div class="container" style="padding-left:0;" >
					<div class="statisticBars">
						<div class="row">
							<div class="col-sm-12">
								<div class="progress-container">
									<div class="progress-bg ">
										<div class="progress-max" style="width: 62%;">
											<span class="info">Preschool Education 62%</span>
											<div style="visibility: visible;" class="progress-inner progress-bar-filled"></div>
										</div><!--end progress-max -->
									</div><!--end progress bg -->
								</div><!--end progress container -->

								<div class="progress-container">
									<div class="progress-bg ">
										<div class="progress-max" style="width: 78%;">
											<span class="info">English Language 78%</span>
											<div style="visibility: visible;" class="progress-inner progress-bar-filled"></div>
										</div><!--end progress-max -->
									</div><!--end progress bg -->
								</div><!--end progress container -->

								<div class="progress-container">
									<div class="progress-bg ">
										<div class="progress-max" style="width: 62%;">
											<span class="info">Music & Drawing 62%</span>
											<div style="visibility: visible;" class="progress-inner progress-bar-filled"></div>
										</div><!--end progress-max -->
									</div><!--end progress bg -->
								</div><!--end progress container -->

								<div class="progress-container">
									<div class="progress-bg ">
										<div class="progress-max" style="width: 78%;">
											<span class="info">Art & Sport 78%</span>
											<div style="visibility: visible;" class="progress-inner progress-bar-filled"></div>
										</div><!--end progress-max -->
									</div><!--end progress bg -->
								</div><!--end progress container -->
							</div><!--end col-sm-12 -->
						</div><!--end row -->
					</div><!--end statisticsBars -->
				</div>
			</div><!--end container -->
		</div><!--end presentationContent -->
	</section>
	<!-- ================================ -->
	<!-- ========== END PRESENTATION  ========== -->
	<!-- ================================ -->







@endsection

@section('footer')
@include('partials._footer')
	<script src="{{url('assets/js/jquery.js')}}"></script>
	<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{url('assets/js/plugins.js')}}"></script>
	<script src="{{url('assets/js/main.js')}}"></script>

	<!--[if lte IE 9 ]>
		<script src="assets/js/placeholder.js"></script>
		<script>
			jQuery(function() {
				jQuery('input, textarea').placeholder();
			});
		</script>
	<![endif]-->
@endsection