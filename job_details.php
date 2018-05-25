<?php

include('header.php');

$con = mysqli_connect('localhost', 'root', '', 'jobportal');

$user; $applytext; $applied = false;

if(session_status() == PHP_SESSION_NONE) 
session_start();

if(isset($_SESSION['user'])){

  $user = $_SESSION['user'];
  $listingid = (int)$_GET['lid'];

  $query = "select * from job_application where CandidateUserName = '{$user}' and ListingId = {$listingid}";

  $res = mysqli_query($con, $query);

  if(mysqli_num_rows($res) == 0)
  $applytext  = "Apply for this job";
  else{
    $applied = true;
    $applytext  = "Already Applied";
  }
}

else
$applytext = "Login to apply!";

?>


        <!-- form search area-->
        <div class="container">
          <div class="row">

            <div class="col-md-4">
              <div class="logo text-center-sm inline"> <a href="index.php">
                  <img src="assets/theme/images/logo.png" alt=""> 
                  <div class="label-add">Job</div>
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

      <?php 
      
      $con = mysqli_connect('localhost', 'root', '', 'jobportal');

      $query = "select * from job_listing where ListingId = '".$_GET['lid']."';";

      $res = mysqli_query($con, $query);

      if(mysqli_num_rows($res) == 1){

        $row = mysqli_fetch_assoc($res); 

      ?>

        <!-- link top -->
        <div class="bg-color2 block-section-xs line-bottom">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 hidden-xs">
                <div>Job details :</div>
              </div>
              <div class="col-sm-6">
                <div class="text-right"><a href="job_list.php">&laquo; Go back to job listings</a></div>
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
                  <div class="row">
                    <div class="col-md-8">
                      <!-- <a href="company_page.html"><img src="./assets/theme/images/patner/4.png" alt=""></a> -->
                      <h4><span class="color-black"> <?=$row['Company'] ?> </span> <span class="color-white-mute"><?=$row['Location'] ?></span></h4>
                      <h5><span class="color-black"> Posted by: <span class="color-white-mute"><?=$row['PosterId'] ?></span> </span></h5>
                    </div>
                    
                  </div>

                  <h2 class="title"><a href="#"><?php echo $row['JobTitle']?></a></h2>
                  <div class="job-meta">
                    <ul class="list-inline">
                      <li><i class="fa fa-briefcase"></i> Contract Full-Time</li>
                      <li><i class="fa fa-map-marker"></i> <?= $row['Location']?></li>
                      <li><i class="fa fa-money">
                      <?php   
                      if($row['Salary']!=null)
                        echo $row['Salary']." ".$row['SalaryType'];
                      else 
                        echo "Salary Not defined" ?></i></li>
                    </ul>
                  </div>
                  
                  <?php echo $row['JobDescription']?>

                </div><!-- end box item details -->

      <?php }?>

              </div>
              <div class="col-md-3">

                <!-- box affix right -->
                <div class="block-section " id="affix-box">
                  <div class="text-right">
                    
                    <p><a 
                    
                    href="<?php  

                    if($applied)
                      echo '#already-applied';

                    else if(isset($user) && !($applied))
                      echo '#modal-apply';

                    else if(!(isset($user)))
                      echo '#modal-login';
                    
                    ?>"
                    
                    data-toggle="modal" class="btn btn-theme btn-t-primary btn-block-xs" id="applybutton"><?php echo $applytext?></a></p>
                    
                   
                  </div>
                </div><!-- box affix right -->

              </div>
            </div>
          </div>
        </div>



        <!-- modal apply -->
        <div class="modal fade" id="modal-apply">
          <div class="modal-dialog ">
            <div class="modal-content">
              <form id="applicationform" method="post">
                <div class="modal-header ">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" >Apply</h4>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label>Full name</label>
                    <input name="fullname" type="text" class="form-control "  placeholder="Enter Fullname">
                  </div>
                  <div class="form-group">
                    <label>Email address</label>
                    <input name="email" type="email" class="form-control "  placeholder="Enter Email">
                    <input name="listingid" type="checkbox" checked="true" value = "<?php echo $_GET['lid']?>" class="form-control " style="display:none">
                  </div>
                  <div class="form-group">
                    <label>Tell us why you're better?</label>
                    <textarea name="reason" class="form-control" rows="6" placeholder="Something Comment"></textarea>
                  </div>

                  <div id="applyerror" class="alert alert-danger" style="display: none"></div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-theme" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-success btn-theme">Send Application</button>
                </div>
              </form>
            </div>
          </div>
        </div><!-- end modal  apply -->      
        
        <!-- modal need login -->
        <div class="modal fade" id="modal-login">
          <div class="modal-dialog modal-md">
            <div class="modal-content">

              <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" >You must login to apply</h4>
              </div>
              <div class="modal-footer text-center">
                <a href="login.php" class="btn btn-default btn-theme" >Login</a>
                <a href="register.php" class="btn btn-success btn-theme">Create account (it's free)</a>
              </div>

            </div>
          </div>
        </div><!-- end modal  need login -->


        <!-- modal already applied -->
        <div class="modal fade" id="already-applied">
          <div class="modal-dialog modal-md">
            <div class="modal-content">

              <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" >You've already applied for this job</h4>
              </div>

            </div>
          </div>
        </div><!-- end modal already applied -->

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
    
    $("#applyerror").hide();

    $(function () {

      $('#applicationform').on('submit', function (e) {

        e.preventDefault();

        $.ajax({
          type: 'post',
          url: 'insert/insert_application.php',
          data: $('form').serialize(),
          success: function (data) {

            if(data == "success"){
              $("#modal-apply").modal('hide');
              $("#applybutton").html("Successfully Applied");
              $("#applybutton").attr('class',"btn btn-success btn-block-xs")
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