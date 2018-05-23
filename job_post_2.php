<?php

$page = "postjob";
$userLoggedIn = false;

if(session_status() == PHP_SESSION_NONE) 
session_start();

if(isset($_SESSION['user']))
$userLoggedIn = true;

if($userLoggedIn){

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
            <h1 class="text-center no-margin">Post a Job</h1>
          </div>
        </div>

        <div class="bg-color1 block-section line-bottom">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">

                <!-- form post a job -->
                <form id="listingform" method="POST">
                  <div class="form-group">
                    <label>Company</label>
                    <input type="text" name="company" class="form-control "  placeholder="Enter Company Name" required>
                  </div>
                  <div class="form-group">
                    <label>Job title</label>
                    <input name="title" type="text" class="form-control "  placeholder="Enter Job Title" required>
                  </div>
                  <div class="form-group">
                    <label>Job description</label>
                    <div class="color-white-mute"><small>Describe the responsibilities of this job, required work experience, skills, or education.</small></div>
                    <textarea  name="description" class="form-control" rows="6" placeholder="Enter Job Description" required></textarea>
                    <small class="color-white-mute">Formatting Options:    ##heading      *bold*          _italic_          * bulleted list</small>
                  </div>
                  <div class="form-group">
                    <label>Locations (optional)</label>
                    <input name="location" type="text" class="form-control"  placeholder="Enter Location">
                  </div>

                  <!-- checkboxs -->
                  <div id= "listingform" class="form-group">
                    <label>Job Categories</label>
                    <div class="row clearfix">
                      <div class="col-md-4">
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox" name="categories[]" value="Accounting"> 
                            <span class="fa fa-check"></span>
                            Accounting
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox" name="categories[]" value="Admin & HR"> 
                            <span class="fa fa-check"></span>
                            Admin & HR
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox" name="categories[]" value="Banking / Finance"> 
                            <span class="fa fa-check"></span>
                            Banking  /  Finance
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox" name="categories[]" value="Beauty Care / Health"> 
                            <span class="fa fa-check"></span>
                            Beauty Care  /  Health
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox" name="categories[]" value="Building & Construction"> 
                            <span class="fa fa-check"></span>
                            Building & Construction
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox" name="categories[]" value="Design"> 
                            <span class="fa fa-check"></span>
                            Design
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox" name="categories[]" value="Education"> 
                            <span class="fa fa-check"></span>
                            Education
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox" name="categories[]" value="Engineering"> 
                            <span class="fa fa-check"></span>
                            Engineering
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox" name="categories[]" value="Hospitality  /  F & B"> 
                            <span class="fa fa-check"></span>
                            Hospitality  /  F & B
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox" name="categories[]" value="Information Technology (IT)"> 
                            <span class="fa fa-check"></span>
                            Information Technology (IT)
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox" name="categories[]" value="Insurance"> 
                            <span class="fa fa-check"></span>
                            Insurance
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox" name="categories[]" value="Management"> 
                            <span class="fa fa-check"></span>
                            Management
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox" name="categories[]" value="Manufacturing"> 
                            <span class="fa fa-check"></span>
                            Manufacturing
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox" name="categories[]" value="Media & Advertising"> 
                            <span class="fa fa-check"></span>
                            Media & Advertising
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox" name="categories[]" value="Property"> 
                            <span class="fa fa-check"></span>
                            Property
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox" name="categories[]" checked="true" value="Others"> 
                            <span class="fa fa-check"></span>
                            Others
                          </label>
                        </div>
                      </div>
                    </div>
                  </div><!-- end checkboxs -->


                  <div class="form-group">
                    <label>Salary (optional)</label>
                    <div class="row clearfix">
                      <div class="col-xs-6">
                        <input name="salary" type="text" class="form-control "  placeholder="Example: 50,000.00">
                      </div>
                      <div class="col-xs-6">
                        <select name="salarytype" class="form-control">
                          <option value="per hour">per hour</option>
                          <option value="per day">per day</option>
                          <option value="per week">per week</option>
                          <option value="per month">per month</option>
                          <option value="per year">per year</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Experience (optional)</label>
                    <div class="row clearfix">
                      <div class="col-xs-6">
                        <input name="experience" type="text" class="form-control "  placeholder="Example: Accounting">
                      </div>
                      <div class="col-xs-6">
                        <select class="form-control">
                          <option>1 year</option>
                          <option>2 years</option>
                          <option>3 years</option>
                          <option>4 years</option>
                          <option>5 years</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <p>Applications will be emailed to: <a href="#">your@email.com</a> – <a href="#">change email</a></p>

                  <div class="form-group ">
                    <input type="submit" class="btn btn-t-primary btn-theme" value="Submit">
                  </div>


                </form> <!-- end form post a job -->
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

        $('#listingform').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'insert/insert_job.php',
            data: $('form').serialize(),
            success: function (data) {
              alert(data);
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