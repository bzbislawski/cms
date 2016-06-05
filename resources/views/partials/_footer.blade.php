<!-- ================================ -->
<!-- ========== START FOOTER  ========== -->
<!-- ================================ -->
<section class="sectionPadding footer" style="background:#f9f9f9;" >
    <footer  >
        <div class="footerContent">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="widget aboutUs">
                            <h3>About Us</h3>
                            <div class="textWidget">        
                                <p>Fusce sed nibh porttitor, scelerisque elit id, pret
                                justo. Integer venenatis tempus nisi non varius. </p>
                                <p>Sed dui enim, lobortis et tempor sed, varius quis.
                                pellentesque ligula tellus, elementum sit amet 
                                purus at, pharetra faucibus erat. Sed fermentum 
                                accumsan ipsum, non vestibulum nulla iaculis in.</p>
                                <div class="childTxt col-sm-8">
                                    <p><span>Your child happy:</span> enroll your
                                    child right now to my kindergarten</p>
                                    <p><span>Ideal for Pre-School</span> this theme it’s
                                    ideal and perfect for pre-schools</p>
                                </div><!--end childTxt -->
                                <img src="assets/img/content/footericon.png" alt="">
                            </div><!--end textWidget -->
                        </div><!--end widget -->
                    </div><!--end col-sm-4 -->
                    
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="widget galleryWidget galleryPopup">
                            <h3>Gallery Photos</h3> 
                            <ul>
                                @foreach($photos as $photo)
                                <li><a href="{{url('images/photos/'.$photo->image)}}"><img src="{{url('images/photos/'.$photo->image)}}" alt=""></a></li>
                                @endforeach
                            </ul>
                        </div><!--end widget -->
                    </div><!--end col-sm-4 -->
                    
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="widget">        
                                <h3>Tag CLoud</h3>
                                <div class="tagcloud">
                                    <a href="#">web-design</a>
                                    <a href="#">music</a>
                                    <a href="#">photography</a>
                                    <a href="#">blog</a>
                                    <a href="#">photography</a>
                                    <a href="#">web-design</a>
                                    <a href="#">blog</a>
                                    <a href="#">web-design</a>
                                    <a href="#">music</a>
                                    <a href="#">photography</a>
                                    <a href="#">blog</a>
                                    <a href="#">themes wordpress</a>
                                    <a href="#">audio</a>
                                    <a href="#">audio player</a>
                                    <a href="#">photography</a>
                                    <a href="#">web-design</a>
                                    <a href="#">blog</a>
                                    <a href="#">music</a>
                                    <a href="#">photography</a>
                                    <a href="#">blog</a>
                                    <a href="#">web-design</a>
                                    <a href="#">music</a>
                                    <a href="#">photography</a>
                                </div><!--tagCloud -->
                        </div><!--end widget -->
                    </div><!--end col-sm-4 -->
                </div><!--end row -->
            </div><!--end container -->
        </div><!--end footerContent -->
    </footer>
</section>

<div id="" style="background-color: #fa6f57;padding: 20px 0;color: #fff;">
<div class="container" >
    <div class="col-md-6">
        <span class="pull-left">Copyright © 2016 Name of Company. All rights reserved.
        <br>Design and implementation: <a href="mailto:bzbislawski@gmail.com" style="color:#FFFFFF">Bartosz Zbislawski</a></span>
    </div>
    <div class="col-md-6">
        <span class="pull-right">CMS - content management system</span><br/>
        <span class="pull-right"><a href="#header" style="color:#FFFFFF">GO TOP</a></span>
    </div>
</div>
</div>