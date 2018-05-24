<?php

if(session_status() == PHP_SESSION_NONE) 
session_start();

if(isset($_SESSION['user'])){
  
  $count;
  $user = $_SESSION['user'];
  
  $query = "select * from job_application where ListingId in (select ListingId from job_listing where PosterId = '{$user}')";
  
  $con = mysqli_connect('localhost', 'root', '', 'jobportal');
  $res = mysqli_query($con, $query);
  
  include('header.php');
  
  ?>
  
  
  
  <div class="container">
    <div class="text-center logo"> <a href="index.php"><img src="assets/theme/images/logo.png" alt=""></a></div>
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
          <h4><?= $user ?></h4>
          <div class="white-space-20"></div>
          <ul class="list-unstyled">
            <li><a href="my_listings.php"> My Listings</a></li>
            <li><a href="my_applications.php"> My Applications</a></li>
            <li><a href="change_password.php"> Change Password</a></li>
            <li><a href="application_requests.php"> Application Requests </a></li>
          </ul>
          <div class="white-space-20"></div>
          <a href="job_post_2.php" class="btn  btn-line soft btn-theme btn-pill btn-block">Post a Job</a>
          <a href="resume_post.php" class="btn  btn-line soft  btn-theme btn-pill btn-block">Build Resume</a>
        </div>    </div>
        
        <div class="col-md-9 col-sm-9">
          
          <div class="block-section box-side-account">
            <h3 class="no-margin-top">Application Requests</h3>
            <hr/>
            
            <?php if(mysqli_num_rows($res) > 0){ ?>
              
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Applicant Username</th>
                      <th>Applicant Full Name</th>
                      <th>Applied For</th>
                      <th class="text-right">Actions</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    
                    <?php 
                    $count = 1; 
                    while($row = mysqli_fetch_assoc($res)){?>
                      
                      <?php 
                      $cand = $row['CandidateUserName'];
                      $query2 = "select ResumeId from resume where CandidateId = '{$cand}'";
                      $res2 = mysqli_query($con, $query2);
                      $row2 = mysqli_fetch_assoc($res2);
                      ?>
                      
                      <tr>
                        <th scope="row"><?= $count; $count++;?></th>
                        
                        <td>
                          <a href="
                          <?php if(mysqli_num_rows($res2) == 1)echo 'resume_details?rid='.$row2['ResumeId']?>">
                          <?=$row['CandidateUserName']?>
                          </a>
                        </td>
                      
                        <td>
                          <a href="
                          <?php if(mysqli_num_rows($res2) == 1)echo 'resume_details?rid='.$row2['ResumeId']?>">
                          <?=$row['FullName']?>
                          </a>
                      </td>
                    
                      <td>
                        <?php 
                        $query1 =  "Select JobTitle from job_listing where ListingId = {$row['ListingId']}";
                        $res1 = mysqli_query($con, $query1);
                        $row1 = mysqli_fetch_assoc($res1);
                        echo $row1['JobTitle'];
                        ?>
                        
                      </td>
                      
                      <?php 
                      
                      $query3 = "Select * from interview where EmployerId= '{$user}' and CandidateId = '{$cand}'";
                      $res3 = mysqli_query($con, $query3);
                      if(mysqli_num_rows($res3) == 0){ ?>

                      <td class="text-right"><a href="#modal-invite" data-toggle="modal" data-value="<?=$row['CandidateUserName']?>" class="btn btn-theme btn-xs btn-default actionbutton">Invite for Interview</a></td>
                      
                      <?php }

                      else {?>
                      <td class="text-right">Already Invited</td>
                      <?php }?>
                    </tr>
                  
                  <?php } ?>
                  
                </tbody>
              </table>
            </div>
            
            <?php }
            else echo 'No requests found!';
            ?>
            
            
          </div>
        </div>

        <!-- modal apply -->
        <div class="modal fade" id="modal-invite">
            <div class="modal-dialog ">
              <div class="modal-content">

                <form id="applicationform" method="post">
                  <div class="modal-header ">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" >Are you sure you want to send an interview call to this candidate?</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Full name</label>
                      <input type="checkbox" class="candidateusername" name="candidateusername" style="display:none" checked="true">
                      <input name="fullname" type="text" class="form-control "  placeholder="Enter Fullname" required>
                    </div>
                    <div class="form-group">
                        <label>Company Name</label>
                        <input name="cname" type="text" class="form-control "  placeholder="Enter Fullname" required>
                    </div>
                    
                  <div class="form-group">
                    <label>Message (option)</label>
                    <textarea name="message" class="form-control" rows="6" placeholder="Write you message here"></textarea>
                  </div>

                    <div id="applyerror" class="alert alert-danger" style="display: none"></div>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-theme" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success btn-theme">Yes</button>
                  </div>
                </form>
              </div>
            </div>
          </div><!-- end modal  apply -->    

          <!-- modal need success -->
          <div class="modal fade" id="modal-success">
                  <div class="modal-dialog modal-md">
                    <div class="modal-content">

                      <div class="modal-header text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" >Invite sent!</h4>
                      </div>
                      <div class="modal-footer text-center">
                        <a href="application_requests.php" class="btn btn-default btn-theme" >Okay</a>
                      </div>

                    </div>
                  </div>
          </div><!-- end modal  need success -->

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
    
    $("#applyerror").hide();

    $(function (){
      $('.actionbutton').on('click', function (e) {
        var candidateId =  $(this).data("value");
        $(".candidateusername").val(candidateId);
        
      });
    });

    $(function () {

      $('#applicationform').on('submit', function (e) {

        e.preventDefault();

        $.ajax({
          type: 'post',
          url: 'insert/insert_interview.php',
          data: $('form').serialize(),
          success: function (data) {

            if(data == "success"){
              $("#modal-invite").modal('hide');
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