<?php

if(session_status() == PHP_SESSION_NONE) 
session_start();

if(isset($_SESSION['user'])){

    $count;
    $user = $_SESSION['user'];
    $query = "select * from job_listing AS T1 INNER JOIN (select * from job_application where CandidateUserName = '{$user}') AS T2 ON T1.ListingId=T2.ListingId";

    if(isset($_GET['sortby']))
      $query = $query.' ORDER BY ListingTime';

    $con = mysqli_connect('localhost', 'root', '', 'jobportal');
    $res = mysqli_query($con, $query);

    include('header.php');

?>


        <!-- form search area-->
        <div class="container">
          <div class="row">

            <div class="col-md-4">
              <div class="logo text-center-sm inline"> <a href="index.php">
                  <img src="assets/theme/images/logo.png" alt=""> 
                  <div class="label-add">My applications</div>
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
                      <p><strong class="color-black">All your applications</strong></p>
                    </div>
                    
                    <div class="col-xs-4">
                      <p class="text-right">
                        <strong>Sort by: </strong>
                        <a href="my_applications.php" class="<?php if(!(isset($_GET['sortby'])))echo 'link-black'; else echo'color-white-mute'?>"><strong>Relevance</strong></a>
                        - 
                        <a href="my_applications.php?sortby=date" class="<?php if(isset($_GET['sortby']))echo 'link-black'; else echo'color-white-mute'?>"><strong>Date</strong></a>
                      </p>
                    </div>
                    <div class="col-sm-2">
                      <p class="text-right">
                        <?php $count = mysqli_num_rows($res); 
                              echo $count.' jobs you&apos;ve applied to';
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
                          <h3 class="no-margin-top"><a href="job_details.php?lid=<?=$row['ListingId']?>" class=""> <?=$row['JobTitle'] ?> <i class="fa fa-link color-white-mute font-1x"></i></a></h3>
                          <h5><span class="color-black"> <?=$row['Company'] ?> </span> - <span class="color-white-mute"><?=$row['Location'] ?></span></h5>
                          <p class="text-truncate "><?=$row['JobDescription'] ?></p>
                          <div>
                            <span class="color-white-mute"><?=$row['ListingTimeString']?></span> - 
                            <a href="#modal-delete" data-toggle="modal" data-value="<?=$row['ApplicationId']?>" class="btn btn-xs btn-theme btn-default deletebutton">Delete</a>
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
                          <h3 class="no-margin-top">No applications found<i class=" color-white-mute font-1x"></i></a></h3>
                          <h5><span class="color-black"> Try applying to some jobs</span></h5>
                        </div>
                      </div>
                    </div><!-- end item list -->
                  </div>
              
                  <?php }?>

              </div>

                    <!-- modal delete -->
                <div class="modal fade" id="modal-delete">
                  <div class="modal-dialog ">
                    <div class="modal-content">

                      <form id="deleteform" method="post">
                        <div class="modal-header ">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" >Are you sure you want to delete this application?</h4>
                        </div>
                        
                          <input type="checkbox" class="appid" name="appid" style="display:none" checked="true">
                          
                          <div id="applyerror" class="alert alert-danger" style="display: none"></div>
                        

                        <div class="modal-footer">
                          <button type="button" class="btn btn-default btn-theme" data-dismiss="modal">Cancel</button>
                          <button type="submit" class="btn btn-success btn-theme">Yes</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div><!-- end modal  apply -->    

                <!-- modal success -->
                <div class="modal fade" id="modal-success">
                        <div class="modal-dialog modal-md">
                          <div class="modal-content">

                            <div class="modal-header text-center">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" >Application deleted!</h4>
                            </div>
                            <div class="modal-footer text-center">
                              <a href="my_applications.php" class="btn btn-default btn-theme" >Okay</a>
                            </div>

                          </div>
                        </div>
                </div><!-- end modal success -->
          
            </div>
          </div>
        </div>


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


    $(function (){
      $('.deletebutton').on('click', function (e) {
        var applicationid =  $(this).data("value");
        $(".appid").val(applicationid);
        
      });
    });

    $(function () {

      $('#deleteform').on('submit', function (e) {

        e.preventDefault();

        $.ajax({
          type: 'post',
          url: 'delete/delete_application.php',
          data: $('#deleteform').serialize(),
          success: function (data) {

            if(data == "success"){
              $("#modal-delete").modal('hide');
              $("#modal-success").modal('show');
            }

              
            else{
              $("#applyerror").show();
              $("#applyerror").html(data);              
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

else include('error_not_loggedin.php');

?>