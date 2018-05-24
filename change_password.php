<?php

if(session_status() == PHP_SESSION_NONE) 
session_start();

if(isset($_SESSION['user'])){

$user = $_SESSION['user'];

include('header.php');

?>
      </header><!-- end main-header -->


      <!-- body-content -->
      <div class="body-content clearfix" >

        <div class="bg-color2">
          <div class="container">
            <div class="col-md-3 col-sm-3">

              <div class="block-section text-center ">
                <img src="./assets/theme/images/people/4.jpg" class="img-rounded" alt="">
                <div class="white-space-20"></div>
                <h4><?= $user?></h4>
                <div class="white-space-20"></div>
                <ul class="list-unstyled">
                  <li><a href="my_listings.php"> My Listings</a></li>
                  <li><a href="my_applications.php"> My Applications</a></li>
                  <li><a href="change_password.php"> Change Password</a></li>
                  <li><a href="application_requests.php"> Application Requests </a></li>
                </ul>
                <div class="white-space-20"></div>
                <a href="job_post_2.php" class="btn  btn-line soft btn-theme btn-pill btn-block">Post a Job</a>
                <a href="job_list.php" class="btn  btn-line soft  btn-theme btn-pill btn-block">Build Resume</a>
              </div>    </div>
            <div class="col-md-9 col-sm-9">
              <!-- Block side right -->
              <div class="block-section box-side-account">
                <h3 class="no-margin-top">Change Password</h3>
                <hr/>
                <div class="row">
                  <div class="col-md-7">

                    <form id="changepass-form" method="POST">
                      <div class="form-group">
                        <label>Old Password</label>
                        <input name="oldpass" type="password" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>New Password</label>
                        <input name="newpass" type="password" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Re-type New Password</label>
                        <input name="cnewpass" type="password" class="form-control">
                      </div>

                      <div id="error" style="display:none" class="form-group alert alert-danger">
                      </div>
          
                      <div class="form-group">
                        <button type="submit" class="btn btn-theme btn-t-primary">Change Password</button>
                      </div>

                    </form>
                  </div>
                </div>

                <!-- modal need success -->
                <div class="modal fade" id="modal-success">
                  <div class="modal-dialog modal-md">
                    <div class="modal-content">

                      <div class="modal-header text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" >Your password was updated successfully</h4>
                      </div>
                      <div class="modal-footer text-center">
                        <a href="dashboard.php" class="btn btn-default btn-theme" >Go to dashboard</a>
                      </div>

                    </div>
                  </div>
                </div><!-- end modal  need success -->

              </div><!-- end Block side right -->
            </div>
          </div>
        </div>        
      </div><!--end body-content -->


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

    <script>

      $(document).ready(function(){

      $(function () {

        $('#changepass-form').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'insert/insert_newpass.php',
            data: $('#changepass-form').serialize(),
            success: function (data) {

              if(data == 'success')
                $('#modal-success').modal('show');
              
              else{
                $("#error").html(data);
                $("#error").show();
              }
              



            }
          });

        });

      });

      });


    </script>

  </body>
</html>

<?php } 

else
include ('error_not_loggedin.php');

?>