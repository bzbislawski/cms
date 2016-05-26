 @extends('index')



@section('content')   

    <!-- ================================ -->
    <!-- ==========  CONTACT ========== -->
    <!-- ================================ -->
    <!-- ================================ -->
    <section class="contact sectionPadding" >
        <div class="container">
            <div class="row">
                <div class="col-sm-7" style="padding:0;">
                    <h3>contact page</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in dapibus massa, et posuere arcume
                    pellentesque habitant morbi senectus et netus et malesuada fames ac turpis egestas proin comr
                    dui ligula, sit amet consequat arcu consectetur vel conectetur vestirum.
                    </p>

                    
                    
                    <div class=" accountList benefits">
                            <ul class="clearfix" >
                                <li class="col-sm-12">
                                    <span class="envelope">
                                    <img src="assets/img/content/envelope.png" alt="envelope">
                                    <img src="assets/img/content/envelopeHover.png" alt="envelope">
                                    <a href="#">contact@kindergarten.com</a>
                                    
                                    </span>
                                    <p>You will be receive answer in
                                    only 24 hours, love you friends</p>
                                </li>
                                <li class="col-sm-12">
                                    <span class="phone">
                                    <img src="assets/img/content/mobile.png" alt="envelope">
                                    <img src="assets/img/content/mobileHover.png" alt="envelope">
                                    <a href="#">+ 07 43 466 757</a>
                                
                                    </span>
                                    <p>This it‘s the number where you
                                    can contact our kindergarten</p>
                                </li>
                            </ul>
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
                <div class="col-sm-5">
                    <div id="map-canvas" class="google-map" data-lat="53.403003" data-long="-2.979987" data-img="assets/img/contact/marker.png"></div>
                </div><!--end col-sm-5 -->
            </div><!--end row -->
        </div><!--end container -->
    </section>
    <!-- ==========     END CONTACT ========== -->
    <!-- ================================ -->

@endsection

@section('footer')

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/map.js"></script>
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