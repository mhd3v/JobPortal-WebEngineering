<?php

if(session_status() == PHP_SESSION_NONE) 
session_start();

if(isset($_SESSION['user'])){

$user = $_SESSION['user'];

$query = "select * from resume where CandidateId = '{$user}'";
$con = mysqli_connect('localhost', 'root', '', 'jobportal');
$res = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($res);

include('header.php');

?>

        <div class="container">
          <div class="text-center logo"> <a href="index.php"><img src="assets/theme/images/logo.png" alt=""></a></div>
        </div>

      </header><!-- end main-header -->


      <!-- body-content -->
      <div class="body-content clearfix" >

        <div class="bg-color2 block-section line-bottom">
          <div class="container">
            <h1 class="text-center no-margin">My Resume</h1>
          </div>
        </div>

        <div class="bg-color1 block-section line-bottom">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">

                <!-- form post a job -->
                <form id="resumeform" method="POST">
                  <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="fullname" class="form-control "  placeholder="Enter Full Name" value="<?php if(isset($row))echo $row['FullName']?>" required>
                  </div>
                  <div class="form-group">
                    <label>Title</label>
                    <input name="title" type="text" class="form-control "  placeholder="Example: Student, Developer at XYZ company"  value="<?php if(isset($row))echo $row['Title']?>" required>
                  </div>

                  <div class="form-group">
                    <label>Education</label>

                    <div class="color-white-mute"><small>Name of your BS degree</small></div>
                    <input name="degree" type="text" class="form-control "  placeholder="Enter your BS degree name, for example Bachelor in Computer Science" 
                    value="<?php if(isset($row))echo $row['Degree']?>"
                    required>

                    <div class="color-white-mute"><small>Name of College/University you have/are attending</small></div>
                    <input name="university" type="text" class="form-control "  placeholder="Enter you college/university name" 
                    value="<?php if(isset($row))echo $row['University']?>" required>

                    <div class="color-white-mute"><small>Your CGPA</small></div>
                    <input name="cgpa" type="text" class="form-control "  placeholder="Enter your CGPA" 
                    value="<?php if(isset($row))echo $row['Cgpa']?>" required>
                    
                  </div>

                  <div class="form-group">
                    <label>Work Experience (optional)</label>
                    <div class="color-white-mute"><small>Describe your work experience</small></div>
                    <textarea  name="workexp" class="form-control" rows="6" placeholder="Enter Work Experience Description"><?php if(isset($row))echo $row['WorkExperience']?></textarea>
                    <small class="color-white-mute">Formatting Options:    ##heading      *bold*          _italic_          * bulleted list</small>
                  </div>

                  <div class="form-group">
                    <label>Additional Information (optional)</label>
                    <div class="color-white-mute"><small>You skills, hobbies, etc</small></div>
                    <textarea  name="additionalinfo" class="form-control" rows="6" placeholder="Enter Additional Information about yourself"><?php if(isset($row))echo $row['AdditionalInformation']?></textarea>
                    <small class="color-white-mute">Formatting Options:    ##heading      *bold*          _italic_          * bulleted list</small>
                  </div>

                  <div class="form-group">
                    <label>Location (optional)</label>
                    <input name="location" type="text" class="form-control"  value="<?php if(isset($row))echo $row['Location']?>" placeholder="Enter Location">
                  </div>

                  <div class="form-group ">
                    <input type="submit" class="btn btn-t-primary btn-theme" value="Update">
                  </div>


                </form> <!-- end form post a job -->
                
                <!-- modal success -->
                <div class="modal fade" id="modal-success">
                  <div class="modal-dialog modal-md">
                    <div class="modal-content">

                      <div class="modal-header text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" >Your resume was updated successfully</h4>
                      </div>
                      <div class="modal-footer text-center">
                        <a href="dashboard.php" class="btn btn-default btn-theme" >Go to dashboard</a>
                        
                      </div>

                    </div>
                  </div>
                </div><!-- end modal success -->

                
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
    <!-- <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script> 
    <script src="assets/plugins/gmap3.min.js"></script> -->
    <!-- maps single marker -->
    <!-- <script src="assets/theme/js/map-detail.js"></script> -->

    <script>

     $(document).ready(function(){

      $(function () {

        $('#resumeform').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'insert/insert_resume.php',
            data: $('form').serialize(),
            success: function (data) {
              $('#modal-success').modal('show');

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