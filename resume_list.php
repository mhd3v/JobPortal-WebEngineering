<?php

if(session_status() == PHP_SESSION_NONE) 
session_start();

if(isset($_SESSION['user'])){

$query = "select * from resume";


if(isset($_GET['sortby']))
    $query = $query." ORDER BY ListingTime";

$con = mysqli_connect('localhost', 'root', '', 'jobportal');
                  
$res = mysqli_query($con, $query);

$page = "findresumes";
include('header.php');

?>
        <!-- form search area-->
        <div class="container">
          <div class="row">
          
            <div class="col-md-4">
              <!-- logo -->
              <div class="logo text-center-sm"> <a href="index.php"><img src="assets/theme/images/logo.png" alt=""></a></div>
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

        <div class="bg-color2">
          <div class="container">
            <div class="row">
              <div class="col-md-12">

                <!-- box listing -->
                <div class="block-section-sm box-list-area">

                  <!-- desc top -->
                  <div class="row hidden-xs">
                    <div class="col-sm-6  ">
                      <p><strong class="color-black">All resumes</strong></p>
                    </div>
                    
                    <div class="col-xs-4">
                      <p class="text-right">
                        <strong>Sort by: </strong>
                        <a href="resume_list.php" class="<?php if(!(isset($_GET['sortby'])))echo 'link-black'; else echo'color-white-mute'?>"><strong>Relevance</strong></a>
                        - 
                        <a href="resume_list.php?sortby=date" class="<?php if(isset($_GET['sortby']))echo 'link-black'; else echo'color-white-mute'?>"><strong>Date</strong></a>
                      </p>
                    </div>
                    <div class="col-sm-2">
                      <p class="text-right">
                        <?php $count = mysqli_num_rows($res); 
                              echo $count.' resumes posted';
                        ?>
                      </p>
                    </div>
                  </div><!-- end desc top -->

                   <?php 

                   if(mysqli_num_rows($res) > 0){

                    while($row = mysqli_fetch_assoc($res)){

                   ?>
                   <!-- item list -->  
                   <div class="box-list">
                    <div class="item">
                      <div class="row">
                        <div class="col-md-1 hidden-sm hidden-xs"><div class="img-item"><img src="./assets/theme/images/company-logo/1.jpg" alt=""></div></div>
                        <div class="col-md-11">
                          <h3 class="no-margin-top"><a href="resume_details.php?lid=<?=$row['ResumeId']?>"> <?=$row['FullName'] ?> <i class="fa fa-link color-white-mute font-1x"></i></a></h3>
                          <h5><span class="color-black"><?=$row['Location'] ?></span></h5>
                          <p class="text-truncate "><?=$row['Title'] ?></p>
                          <p class="text-truncate "><?=$row['Degree'] ?> - <span class="color-white-mute"> <?=$row['University'] ?> </span></p>
                          <div>
                            <span class="color-white-mute"><?='Updated at: '.$row['ListingTimeString']?></span>
                          </div>
                        </div>
                      </div>
                    </div><!-- end item list -->
                  </div>

                    <?php }
                  }

                  else{ ?>

                  <div class="box-list">
                    <div class="item">
                      <div class="row">
                        
                        <div class="col-md-12" style="text-align:center">
                          <h3 class="no-margin-top">No results found<i class=" color-white-mute font-1x"></i></a></h3>
                          <h5><span class="color-black"> Try refining your query</span></h5>
                        </div>
                      </div>
                    </div><!-- end item list -->
                  </div>
              
                  <?php }?>

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
include('error_not_loggedin.php');
?>