<?php

include('header.php');

?>



        <div class="container">
          <div class="text-center logo"> <a href="index.html"><img src="assets/theme/images/logo.png" alt=""></a></div>
        </div>

      </header><!-- end main-header -->


      <!-- body-content -->
      <div class="body-content clearfix" >

        <div class="bg-color1">
          <div class="container">
            <div class="col-md-3 col-sm-3">

              <div class="block-section text-center ">
                <img src="./assets/theme/images/people/4.jpg" class="img-rounded" alt="">
                <div class="white-space-20"></div>
                <h4>Jhone Doe</h4>
                <div class="white-space-20"></div>
                <ul class="list-unstyled">
                  <li><a href="my_alerts.php"> My Alerts </a></li>
                  <li><a href="my_notifications.php"> Notifications (5)</a></li>
                  <li><a href="change_password.php"> Change Password</a></li>

                </ul>
                <div class="white-space-20"></div>
                <a href="#" class="btn  btn-line soft btn-theme btn-pill btn-block">Post a Job</a>
                <a href="#" class="btn  btn-line soft  btn-theme btn-pill btn-block">Build Resume</a>
              </div>    </div>
            <div class="col-md-9 col-sm-9">
              <div class="block-section box-side-account">
                <h3 class="no-margin-top">My Alerts</h3>
                <hr/>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Job Title</th>
                        <th>Location</th>
                        <th class="text-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Php Developer</td>
                        <td>United States</td>
                        <td class="text-right"><a href="#" class="btn btn-theme btn-xs btn-default">Remove</a></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Web Design</td>
                        <td>United States</td>
                        <td class="text-right"><a href="#" class="btn btn-theme btn-xs btn-default">Remove</a></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>SEO Analytics</td>
                        <td>United States</td>
                        <td class="text-right"><a href="#" class="btn btn-theme btn-xs btn-default">Remove</a></td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Project Manager</td>
                        <td>United States</td>
                        <td class="text-right"><a href="#" class="btn btn-theme btn-xs btn-default">Remove</a></td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>Ruby on Rails</td>
                        <td>United States</td>
                        <td class="text-right"><a href="#" class="btn btn-theme btn-xs btn-default">Remove</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <!-- pagination -->
                <nav >
                  <ul class="pagination pagination-theme  ">
                    <li>
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&larr;</span>
                      </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">&rarr;</span>
                      </a>
                    </li>
                  </ul>
                </nav><!-- pagination -->

              </div>
            </div>
          </div>
        </div>        
      </div><!--end body-content -->


      <!-- main-footer -->
      <footer class="main-footer">

    <?php include('footer.php'); ?>

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