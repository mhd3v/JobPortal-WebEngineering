<?php

$search;$location ="";$keyword="";

if(isset($_GET['keyword']) && $_GET['keyword'] != "" && isset($_GET['location']) && $_GET['location'] !=""){
  
  $keyword = $_GET['keyword'];
  $location = $_GET['location'];
  $search = $keyword." listings in ".$location;
  
  $query = "select * from job_listing where (JobTitle LIKE '%{$keyword}%' OR Company LIKE '%{$keyword}%') AND Location LIKE '%{$location}%'";
}
  
else if(isset($_GET['keyword']) && $_GET['keyword'] != ""){

  $keyword = $_GET['keyword'];
  $search = $keyword." listings Worldwide";

  $query = "select * from job_listing where JobTitle LIKE '%{$keyword}%' OR Company LIKE '%{$keyword}%'";
}

else if(isset($_GET['location']) && $_GET['location'] != ""){

  $location = $_GET['location'];
  $search = "All listings in ".$location;

  $query = "select * from job_listing where Location LIKE '%{$location}%'";
}

else{
  $search = "Since your query was empty, showing all available jobs";
  $query = "Select * from job_listing";
}

if(isset($_GET['sortby']))
    $query = $query." ORDER BY ListingTime";

$con = mysqli_connect('localhost', 'root', '', 'jobportal');
                  
$res = mysqli_query($con, $query);

$page = "findjob";
include('header.php');

?>
        <!-- form search area-->
        <div class="container">
          <div class="row">
          
            <div class="col-md-4">
              <div class="logo text-center-sm inline"> <a href="index.php">
                  <img src="assets/theme/images/logo.png" alt=""> 
                  <div class="label-add">Jobs</div>
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

        <div class="bg-color2">
          <div class="container">
            <div class="row">
              <div class="col-md-12">

                <!-- box listing -->
                <div class="block-section-sm box-list-area">

                  <!-- desc top -->
                  <div class="row hidden-xs">
                    <div class="col-sm-6  ">
                      <p><strong class="color-black"><?php echo $search ?></strong></p>
                    </div>
                    
                    <div class="col-xs-4">
                      <p class="text-right">
                        <strong>Sort by: </strong>
                        <a href="<?php echo 'job_list.php?keyword='.$keyword.'&location='.$location?>" class="<?php if(!(isset($_GET['sortby'])))echo 'link-black'; else echo'color-white-mute'?>"><strong>Relevance</strong></a>
                        - 
                        <a href="<?php echo 'job_list.php?keyword='.$keyword.'&location='.$location.'&sortby=date' ?>" class="<?php if(isset($_GET['sortby']))echo 'link-black'; else echo'color-white-mute'?>"><strong>Date</strong></a>
                      </p>
                    </div>
                    <div class="col-sm-2">
                      <p class="text-right">
                        <?php $count = mysqli_num_rows($res); 
                              echo $count.' jobs available';
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
                          <h3 class="no-margin-top"><a href="job_details.php?lid=<?=$row['ListingId']?>"> <?=$row['JobTitle'] ?> <i class="fa fa-link color-white-mute font-1x"></i></a></h3>
                          <h5><span class="color-black"> <?=$row['Company'] ?> </span> - <span class="color-white-mute"><?=$row['Location'] ?></span></h5>
                          <p class="text-truncate "><?=$row['JobDescription'] ?></p>
                          <div>
                            <span class="color-white-mute"><?='Listed at: '.$row['ListingTimeString']?></span>
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