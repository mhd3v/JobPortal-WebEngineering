<?php

include('header.php');

?>


        <div class="container">
          <div class="text-center logo"> <a href="index.php"><img src="assets/theme/images/logo.png" alt=""></a></div>
        </div>

      </header><!-- end main-header -->


      <!-- body-content -->
      <div class="body-content clearfix" >

        <div class="block-section bg-color4">
          <div class="container">
            <div class="panel panel-md">
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-12">
                    <!-- buttons top -->
                    <p><a href="#" class="btn btn-primary btn-theme btn-block"><i class="fa fa-facebook pull-left bordered-right"></i> Register with Facebook</a></p>
                    <p><a href="#" class="btn btn-danger btn-theme btn-block"><i class="fa fa-google-plus pull-left bordered-right"></i> Register with Google</a></p>
                    <!-- end buttons top -->

                    <div class="white-space-10"></div>
                    <p class="text-center"><span class="span-line">OR</span></p>

                    <!-- form login -->
                    <form method="POST" id="registerform">
                      <div class="form-group">
                        <label>Username</label>
                        <input name="username" id="username" type="text" class="form-control" placeholder="Username">
                        <div id="usernamemessage" class="alert alert-danger" style="margin-top:10px"></div>
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input name="password" id="password" type="password" class="form-control" placeholder="Your Password">
                      </div>
                      <div class="form-group">
                        <label>Re-type Password</label>
                        <input name="repassword" type="password" id="cpassword" class="form-control" placeholder="Re-type Your Password">
                      </div>
                      <div class="white-space-10"></div>
                      <div class="form-group no-margin">
                        <input type="submit" value="Register" class="btn btn-theme btn-lg btn-t-primary btn-block" />
                        <div class="alert alert-danger" id="signupmessage" style="margin-top:10px"></div>
                      </div>
                    </form><!-- form login -->

                  </div>
                </div>
              </div>
            </div>

            <div class="white-space-20"></div>
            <div class="text-center color-white">By creating an account, you agree to JobPlanet <br/><a href="#" class="link-white"><strong>Terms of Service</strong></a> and consent to our <a href="#" class="link-white"><strong>Privacy Policy</strong></a>.</div>
          </div>
        </div>

        <div class="block-section bg-color2">
          <div class="container text-center">
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <i class="fa fa-question fa-5x box-icon"></i>
                <h2 class=""> Why create an account?</h2>
                <hr/>
                <p><i class="fa fa-check"></i> Manage, create and delete your job alerts</p>
                <p><i class="fa fa-check"></i> Access your saved jobs and notes from any computer</p>

              </div>
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

      $("#signupmessage").hide();
      $("#usernamemessage").hide();

      $(function () {

        $('#username').on('keyup', function (e) {

          if ($(this).val().length == 0) 
            $('#usernamemessage').hide();
          else 
            $('#usernamemessage').show();
          

          $.ajax({
            type: 'post',
            url: 'check/checkusername.php',
            data: $('form').serialize(),

            success: function (data) {

              if(data == "Username available")
                $("#usernamemessage").attr('class', 'alert alert-success');
              else
                $("#usernamemessage").attr('class', 'alert alert-danger');

              $("#usernamemessage").html(data);
            },
            error: function (data) {
              alert("error");
            }
          });

        });

      });

      $(function () {

      $('#registerform').on('submit', function (e) {

            e.preventDefault();

            $.ajax({
              type: 'post',
              url: 'insert/insertuser.php',
              data: $('form').serialize(),
              success: function (data) {
                if(data == "success")
                  $(location).attr('href', 'login.php');
                else{
                  $("#signupmessage").html(data);
                  $("#signupmessage").show();
                }
              },

              error:function (data) {
                $("#signupmessage").html("failed to connect to server");
              }
            }); 

          })
          
        });

        
    });


</script>

  </body>
</html>