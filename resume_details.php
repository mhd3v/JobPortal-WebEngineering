<?php

if(session_status() == PHP_SESSION_NONE) 
session_start();

if(isset($_SESSION['user'])){

$user = $_SESSION['user'];
$rid = $_GET['rid'];

$query = "select * from resume where ResumeId = '{$rid}'";
$con = mysqli_connect('localhost', 'root', '', 'jobportal');
$res = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($res);

include('header.php');

?>


        <!-- form search area-->
        <div class="container">
          <div class="row">

            <div class="col-md-4">
              <div class="logo text-center-sm inline"> <a href="index.php">
                  <img src="assets/theme/images/logo.png" alt=""> 
                  <div class="label-add">Resume</div>
                </a>
              </div>

            </div>

            <div class="col-md-8">
              <!-- form search -->
              <form class="form-search-list" action="job_list.php">
                <div class="row">
                  <div class="col-sm-5 col-xs-6 ">
                    <div class="form-group">
                      <label class="color-white">What</label>
                      <input name="keyword" class="form-control" placeholder="job title, keywords or company name" >
                    </div>
                  </div>
                  <div class="col-sm-5 col-xs-6 ">
                    <div class="form-group">
                      <label class="color-white">Where</label>
                      <input name="location" class="form-control" placeholder="city, province, or region">
                    </div>
                  </div>
                  <div class="col-sm-2 col-xs-12 ">
                    <div class="form-group">
                      <label class="hidden-xs">&nbsp;</label>
                      <button class="btn btn-block btn-theme  btn-success">Search</button>
                    </div>
                  </div>
                </div>
              </form>  <!-- form search -->
            </div>

          </div>


        </div><!-- end form search area-->

      </header><!-- end main-header -->


      <!-- body-content -->
      <div class="body-content clearfix" >

        <!-- link top -->
        <div class="bg-color2 block-section-xs line-bottom">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 hidden-xs">
                <div>Resume details :</div>
              </div>
              <div class="col-sm-6">
                <div class="text-right"><a href="#">&laquo; Go back to resume listings</a></div>
              </div>
            </div>
          </div>
        </div><!-- end link top -->

        <div class="bg-color2">
          <div class="container">
            <div class="row">
              <div class="col-md-9">

                <!-- box item details -->
                <div class="block-section box-item-details">
                  <div class="resume-block">
                    <div class="img-profile"><img src="./assets/theme/images/people/7.jpg" alt=""></div>
                    <div class="desc">
                      <h2><?=$row['FullName']?></h2>
                      <h4><?=$row['Title']?></h4>
                      <p><?=$row['Location']?></p>

                      <h3 class="resume-sub-title"><span>Work Experience</span></h3>
                      <h4><?= $row['WorkExperience']?></h4>

                      <h3 class="resume-sub-title"><span>Education</span></h3>
                      <h4><?=$row['Degree']?></h4>
                      <h5><?=$row['University']?><span class="color-white-mute"> - CGPA: <?= $row['Cgpa']?></span></h5>

                      <h3  class="resume-sub-title"><span>Additional Information</span></h3>
                      <h4><?= $row['AdditionalInformation']?></h4>
                      
                    </div>
                  </div>
                </div><!-- end box item details -->


              </div>
              <div class="col-md-3">

                <!-- box affix right -->
                <div class="block-section " id="affix-box">
                  <div class="text-right">
                    <p><a href="#" class="btn btn-theme btn-line dark btn-block-xs">Save Resume</a></p>
                    <p>Updated: <?= $row['ListingTimeString']?></p>
                    
                  </div>
                </div><!-- box affix right -->

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

  </body>
</html>

<?php } 

else
include ('error_not_loggedin.php');

?>