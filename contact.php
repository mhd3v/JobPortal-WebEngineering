<?php

include('header.php');

?>


        <div class="container">
          <div class="text-center logo no-margin-bottom"> <a href="index.html"><img src="assets/theme/images/logo.png" alt=""></a></div>
          <h3 class="color-white text-center ">Contact Us</h3>
          <div class="white-space-50"></div>
        </div>
      </header><!-- end main-header -->


      <!-- body-content -->
      <div class="body-content clearfix" >

        <div class="bg-color1 block-section line-bottom">
          <div class="container">
            <h2 class="text-center">We're here to help in any way we can.<br/>
              <small> Please submit your request below and we'll get back to you shortly.</small></h2>
            <div class="white-space-20"></div>
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <!-- form contact -->
                <form>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" value="your@email.com" readonly="readonly">
                  </div>
                  <div class="form-group">
                    <label>Subject</label>
                    <input type="text" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" rows="6"></textarea>
                  </div>
                  <div class="form-group text-center">
                    <div class="white-space-10"></div>
                    <button type="submit" class="btn btn-theme btn-lg btn-long btn-t-primary btn-pill">Send</button>
                  </div>
                </form><!-- end form contact -->

                <div class="white-space-10"></div>
                <p class="text-center"><span class="span-line">OR</span></p>

                <!-- box with icon -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="box-ic-center ">
                      <i class="fa fa-phone ic-box"></i>
                      <h4>Phone</h4>
                      <p>+(62) 1234-123-21</p>
                    </div>

                  </div>
                  <div class="col-md-6">
                    <div class="box-ic-center ">
                      <i class="fa fa-skype ic-box"></i>
                      <h4>Skype</h4>
                      <p>your.username</p>
                    </div>

                  </div>
                </div> <!-- end box with icon -->

              </div>
            </div>
          </div>
        </div>

        <!-- link map toogle -->
        <div class="bg-color2 block-section-xs line-bottom">
          <div class="container text-center">
            <a href="#map-toogle" id="btn-map-toogle" data-toggle="collapse" >Check Our Office</a>
          </div>
        </div> <!-- end link map toogle -->


        <!-- block map -->
        <div class="collapse" id="map-toogle">
          <div class=" bg-color2" id="map-area">
            <div class="container">

              <!-- map description -->
              <div class="marker-description">
                <div class="inner">
                  <h4 class="no-margin-top">Office Location</h4>
                  Central Jakarta No 1234, Jakarta, Indonesia
                </div>
              </div><!-- end map description -->
            </div>
            <div class="map-area-detail">

              <!-- change the data lat and lang here -->
              <div class="box-map-detail" id="map-detail-job" data-lat="48.856318" data-lng="2.351866"></div>
            </div>

          </div>
        </div><!-- end block map -->        
      </div><!--end body-content -->


      <!-- main-footer -->
      <footer class="main-footer">


        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <ul class="list-inline link-footer text-center-xs">
                <li><a href="index.html">Home</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
              </ul>
            </div>
            <div class="col-sm-6 ">
              <p class="text-center-xs hidden-lg hidden-md hidden-sm">Stay Connect</p>
              <div class="socials text-right text-center-xs">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </footer><!-- end main-footer -->

    </div><!-- end wrapper page -->




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/plugins/jquery.js"></script>
    <script src="assets/plugins/jquery.easing-1.3.pack.js"></script>
    <!-- jQuery Bootstrap -->
    <script src="assets/plugins/bootstrap-3.3.2/js/bootstrap.min.js"></script>
    <!-- Lightbox -->
    <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Theme JS -->
    <script src="assets/theme/js/theme.js"></script>

    <!-- maps -->
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script> 
    <script src="assets/plugins/gmap3.min.js"></script>
    <!-- maps single marker -->
    <script src="assets/theme/js/map-detail.js"></script>

  </body>
</html>