<?php

$page = "findjob";

include('header.php');

?>

        <div class="hero-header">
          <div class="inner-hero-header">
            <div class="container">
              <div class="text-center logo"> <a href="index.php"><img src="assets/theme/images/logo.png" alt=""></a></div>
              <div class="relative">
                <i class="fa fa-globe ic-fade-globe"></i>
                <!-- form search -->
                <form class="form-search-home" action="job_list.php">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>What</label>
                        <input name="keyword" class="form-control  input-lg" placeholder="job title, keywords or company name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Where</label>
                        <input name="location" class="form-control input-lg" placeholder="city, province, or region">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-t-primary btn-lg btn-theme btn-pill btn-block">Find a Jobs</button>
                  </div>
                  <div class="text-center">
                    <a href="#modal-advanced" data-toggle="modal">Advanced Job Search</a>
                  </div>
                </form> <!-- end form search -->
              </div>
            </div>
          </div>


          <!-- modal Advanced search -->
          <div class="modal fade" id="modal-advanced" >
            <div class="modal-dialog ">
              <div class="modal-content">
                <form>
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Advanced Job Search</h4>
                  </div>
                  <div class="modal-body">
                    <h5>Find Jobs</h5>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>With all of these words</label>
                          <input type="text" class="form-control " name="text" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>With the exact phrase</label>
                          <input type="text" class="form-control " name="text" >
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Show jobs of type</label>
                      <select class="form-control">
                        <option value="all">All job types</option>
                        <option value="fulltime">Full-time</option>
                        <option value="parttime">Part-time</option>
                        <option value="contract">Contract</option>
                        <option value="internship">Internship</option>
                        <option value="temporary">Temporary</option>
                      </select>
                    </div>
                    <div class="white-space-10"></div>
                    <h5>Where and When</h5>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Radius  </label>
                          <select id="radius" class="form-control">
                            <option value="0">only in</option>
                            <option value="5">within 5 kilometers </option>
                            <option value="10">within 10 kilometers </option>
                            <option value="15">within 15 kilometers </option>
                            <option selected="" value="25">within 25 kilometers </option>
                            <option value="50">within 50 kilometers </option>
                            <option value="100">within 100 kilometers </option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Of  </label>
                          <input type="text" class="form-control" maxlength="250" value="United States">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Age - Jobs published  </label>
                          <select class="form-control">
                            <option value="any">anytime</option>
                            <option value="15">within 15 days</option>
                            <option value="7">within 7 days</option>
                            <option value="3">within 3 days</option>
                            <option value="1">since yesterday</option>
                            <option value="last">since my last visit</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Display</label>
                          <select class="form-control">
                            <option selected="" value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="50">50</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-theme" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success btn-theme">Find Jobs</button>
                  </div>
                </form>
              </div>
            </div>
          </div><!-- end modal forgot password -->




        </div>
      </header><!-- end main-header -->


      <?php
      
      $con = mysqli_connect('localhost', 'root', '', 'jobportal');

      if($con){

        $query1 = "select count(DISTINCT Company) as CompanyCount  from job_listing";
        $query2 = "select count(ListingId) as ListingCount  from job_listing";
        $query3 = "select count(UserId) as UserCount  from user";

        $res1 = mysqli_query($con, $query1);
        $res2 = mysqli_query($con, $query2);
        $res3 = mysqli_query($con, $query3);
  
        $row1 = mysqli_fetch_assoc($res1);
        $row2 = mysqli_fetch_assoc($res2);
        $row3 = mysqli_fetch_assoc($res3);
      }

     

      ?>

      <!-- body-content -->
      <div class="body-content clearfix" >

        <!-- box simple static -->
        <div class="block-section bg-color1">
          <div class="container">
            <div class="row text-center">
              <div class="col-md-4">
                <h3 class="font-2x "><?=$row3['UserCount'] ?></h3>
                <h4 class="color-text">Registered Members</h4>
              </div>
              <div class="col-md-4">
                <h3 class="font-2x "><?=$row2['ListingCount']?></h3>
                <h4 class="color-text">Listings Posted</h4>
              </div>
              <div class="col-md-4">
                <h3 class="font-2x "><?=$row1['CompanyCount']?></h3>
                <h4 class="color-text">Awesome Companies</h4>
              </div>
            </div>
          </div>
        </div><!-- end box simple static -->

      </div><!--end body-content -->


      <!-- main-footer -->
      <footer class="main-footer">


        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <ul class="list-inline link-footer text-center-xs">
                <li><a href="index.php">Home</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
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