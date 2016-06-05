 @extends('index')

 @section('content')
	<!-- ================================ -->
	<!-- ========== SLIDER REVOLUTION  ========== -->
	<!-- ================================ -->
		<div class="tp-banner-container fadeInIn">
			<div id="slider" class="tp-banner" >
				<ul>
					@foreach($banners as $banner)
					<!-- ================================ -->
					<!-- ========== SLIDE 1  ========== -->
					<!-- ================================ -->
					<li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="off" >
						<!-- MAIN IMAGE -->
						<img src="assets/img/slide/dummy.png"  alt="seabg1" data-lazyload="assets/img/slide/bgk1.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
						<!-- LAYERS -->
						<!-- LAYER 1 -->
						<div class="tp-caption lfb rs-parallaxlevel-10"
							data-x="-180" 
							data-y="50" 
							data-speed="2000"
							data-start="1000"
							data-easing="Power4.easeOut"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							data-endspeed="500"
							style="z-index: 2;">
								<div class=" rs-pulse"  data-easing="Power4.easeInOut" data-speed="1" data-zoomstart="1" data-zoomend="1.1"><img src="assets/img/slide/dummy.png" alt="" data-lazyload="assets/img/Icons/set1.png">
								</div>
						</div><!--end tp=caption -->

						<div class="tp-caption lfb rs-parallaxlevel-10"
							data-x="650" 
							data-y="50" 
							data-speed="2000"
							data-start="1000"
							data-easing="Power4.easeOut"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							data-endspeed="500"
							style="z-index: 2;">
								<div class=" rs-pulse"  data-easing="Power4.easeInOut" data-speed="1" data-zoomstart="1" data-zoomend="1.1"><img src="assets/img/slide/dummy.png" alt="" data-lazyload="assets/img/Icons/set2.png">
								</div>
						</div><!--end tp=caption -->

						
						<div class="tp-caption bannerSlider1 customin tp-resizeme rs-parallaxlevel-0"
							data-x="-2"
							data-y="180" 
							data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-speed="500"
							data-start="2350"
							data-easing="Back.easeOut"
							data-splitin="none"
							data-splitout="none"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">{{$banner->title}}
						</div>

						<div class="tp-caption bannerSlider2 customin tp-resizeme rs-parallaxlevel-0"
							data-x="40"
							data-y="240" 
							data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-speed="500"
							data-start="2350"
							data-easing="Back.easeOut"
							data-splitin="none"
							data-splitout="none"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">{{$banner->text}}
						</div>

						<div class="tp-caption bannerSlider2 customin tp-resizeme rs-parallaxlevel-0"
							data-x="75"
							data-y="288" 
							data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-speed="500"
							data-start="2350"
							data-easing="Back.easeOut"
							data-splitin="none"
							data-splitout="none"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">
						</div>

						<div class="tp-caption bannerSlider3 customin tp-resizeme rs-parallaxlevel-0"
							data-x="70"
							data-y="304" 
							data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-speed="500"
							data-start="2350"
							data-easing="Back.easeOut"
							data-splitin="none"
							data-splitout="none"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">
							<a href="#">{{$banner->text2}}</a>
						</div>
	
						<div class="tp-caption customin tp-resizeme rs-parallaxlevel-0"
							data-x="90"
							data-y="405" 
							data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-speed="500"
							data-start="2350"
							data-easing="Back.easeOut"
							data-splitin="none"
							data-splitout="none"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;"><div class="rs-pendulum"  data-easing="Power1.easeInOut" data-startdeg="-6" data-enddeg="6" data-speed="2" data-origin="50% 75%"><img src="assets/img/slide/dummy.png" alt="" data-lazyload="assets/img/Icons/ic1.png">
								</div>	
						</div>

						<div class="tp-caption customin tp-resizeme rs-parallaxlevel-0"
							data-x="210"
							data-y="405" 
							data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-speed="500"
							data-start="2350"
							data-easing="Back.easeOut"
							data-splitin="none"
							data-splitout="none"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;"><div class="rs-pendulum"  data-easing="Power1.easeInOut" data-startdeg="-6" data-enddeg="6" data-speed="2" data-origin="50% 75%"  ><img src="assets/img/slide/dummy.png" alt="" data-lazyload="assets/img/Icons/ic2.png">
								</div>	
						</div>

						<div class="tp-caption customin tp-resizeme rs-parallaxlevel-0"
							data-x="330"
							data-y="405" 
							data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-speed="500"
							data-start="2350"
							data-easing="Back.easeOut"
							data-splitin="none"
							data-splitout="none"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;"><div class="rs-pendulum"  data-easing="Power1.easeInOut" data-startdeg="-6" data-enddeg="6" data-speed="2" data-origin="50% 75%"  ><img src="assets/img/slide/dummy.png" alt="" data-lazyload="assets/img/Icons/ic3.png">
								</div>	
						</div>

						<div class="tp-caption customin tp-resizeme rs-parallaxlevel-0"
							data-x="450"
							data-y="405" 
							data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-speed="500"
							data-start="2350"
							data-easing="Back.easeOut"
							data-splitin="none"
							data-splitout="none"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;"><div class="rs-pendulum"  data-easing="Power1.easeInOut" data-startdeg="-6" data-enddeg="6" data-speed="2" data-origin="50% 75%"  ><img src="assets/img/slide/dummy.png" alt="" data-lazyload="assets/img/Icons/ic4.png">
								</div>	
						</div>

						<div class="tp-caption childTxt customin tp-resizeme rs-parallaxlevel-0"
							data-x="85"
							data-y="470" 
							data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-speed="500"
							data-start="2350"
							data-easing="Back.easeOut"
							data-splitin="none"
							data-splitout="none"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">Happy Child
						</div>

						<div class="tp-caption childTxt customin tp-resizeme rs-parallaxlevel-0"
							data-x="213"
							data-y="470" 
							data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-speed="500"
							data-start="2350"
							data-easing="Back.easeOut"
							data-splitin="none"
							data-splitout="none"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">Learning
						</div>

						<div class="tp-caption childTxt customin tp-resizeme rs-parallaxlevel-0"
							data-x="328"
							data-y="470" 
							data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-speed="500"
							data-start="2350"
							data-easing="Back.easeOut"
							data-splitin="none"
							data-splitout="none"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">Wall Clock
						</div>

						<div class="tp-caption childTxt customin tp-resizeme rs-parallaxlevel-0"
							data-x="450"
							data-y="470" 
							data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-speed="500"
							data-start="2350"
							data-easing="Back.easeOut"
							data-splitin="none"
							data-splitout="none"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">Love Math
						</div>

						<div class="tp-caption customin tp-resizeme rs-parallaxlevel-0"
							data-x="600"
							data-y="180" 
							data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-speed="500"
							data-start="2350"
							data-easing="Back.easeOut"
							data-splitin="none"
							data-splitout="none"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;"><div class=""  data-easing="Power4.easeInOut" data-speed="1" data-zoomstart="1" data-zoomend="1.1"><img src="assets/img/slide/dummy.png" alt="" data-lazyload="{{url('images/banners/'.$banner->image)}}">
								</div>	
						</div>
					</li>
					@endforeach
					<!-- ================================ -->
					<!-- ==========  END SLIDE 1 ========== -->
					<!-- ================================ -->

				</ul>
				<div class="tp-bannertimer"></div>	
			</div><!-- end slider -->
		</div><!--end container -->
	<!-- ================================ -->
	<!-- ==========  END SLIDER REVOLUTION ========== -->
	<!-- ================================ -->
	


	<!-- ================================ -->
	<!-- ==========  PURCHASE ========== -->
	<!-- ================================ -->
	<section>
		<div class="purchaseSection clearfix fadeInUp">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="information">
							<h2>Everything You Need For A Quality Website</h2>
							<p>Lorem ipsum veniam adipisicing cupidatat dolor commodo</p>
						</div><!--end information -->
					</div><!--end col-8 -->
					
					<div class="col-lg-4">
						<div class="purchaseButton">
							<button class="btn btn-purchase" >purchase now</button>
						</div><!--end purchaseButton -->
					</div><!--end col-lg-4 -->
				</div><!--end row -->
			</div><!--end container -->
		</div><!--end purchaSection -->
	</section>
	<!-- ================================ -->
	<!-- ========== END PURCHASE  ========== -->
	<!-- ================================ -->
	<!-- ================================ -->
	<!-- ========== BEGIN PRESENTATION  ========== -->
	<!-- ================================ -->
	<section class="presentation" >
		<div class="container">
			<div class="row">
				<ul class="list-small-features clearfix">
						<li class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
							<img src="assets/img/Icons/Compas.png" alt="">
							<h3>Learn With Best Teachers</h3>
							
							<p>Lorem ipsum dolor sit amet, 
							consectetur adipiscing elit. Ut vitae
							ipsum nibh. Nunc eget.</p>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-6 col-xs-12  ">
							<img src="assets/img/Icons/Infinity-Loop.png" alt="">
							<h3>Playing With Hids</h3>
							
							<p>Lorem ipsum dolor sit amet, 
							consectetur adipiscing elit. Ut vitae
							ipsum nibh. Nunc eget.</p>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
							<img src="assets/img/Icons/Pensils.png" alt="">
							<h3>We Love Math & Drawing</h3>
							
							<p>Lorem ipsum dolor sit amet, 
							consectetur adipiscing elit. Ut vitae
							ipsum nibh. Nunc eget.</p>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
							<img src="assets/img/Icons/Chat.png" alt="">
							<h3>Happy Social Group</h3>
							
							<p>Lorem ipsum dolor sit amet, 
							consectetur adipiscing elit. Ut vitae
							ipsum nibh. Nunc eget.</p>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
							<img src="assets/img/Icons/Mail.png" alt="">
							<h3>Do Your Homework</h3>
							
							<p>Lorem ipsum dolor sit amet, 
							consectetur adipiscing elit. Ut vitae
							ipsum nibh. Nunc eget.</p>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
							<img src="assets/img/Icons/Watches.png" alt="">
							<h3>Time For Recreation</h3>
							
							<p>Lorem ipsum dolor sit amet, 
							consectetur adipiscing elit. Ut vitae
							ipsum nibh. Nunc eget.</p>
						</li>
					</ul>
				
				</div> <!-- end row -->
			</div><!--end row -->
			
	</section>
	<!-- ================================ -->
	<!-- ==========  END OF PRESENTATION  ========== -->
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
