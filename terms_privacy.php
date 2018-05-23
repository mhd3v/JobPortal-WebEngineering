<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jobplanet - Responsive Job Board HTML Template </title>

    <!--favicon-->
    <link rel="apple-touch-icon" href="assets/theme/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/theme/images/favicon.ico" type="image/x-icon">

    <!-- bootstrap -->
    <link href="assets/plugins/bootstrap-3.3.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="assets/plugins/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- lightbox -->
    <link href="assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">


    <!-- Themes styles-->
    <link href="assets/theme/css/theme.css" rel="stylesheet">  
    <!-- Your custom css -->
    <link href="assets/theme/css/theme-custom.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>  
  <body>
    <!-- wrapper page -->
    <div class="wrapper">
      <!-- main-header -->
      <header class="main-header">


        <!-- main navbar -->
        <nav class="navbar navbar-default main-navbar hidden-sm hidden-xs">
          <div class="container">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

              <ul class="nav navbar-nav">
                <li class=""><a href="job_list.php"><strong>Find a Job</strong></a></li>
                <li class=""><a href="resume_list.php"><strong>Find Resumes</strong></a></li>
                <li  class=""><a href="job_post_1.php"><strong>Post a Job</strong></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Pages <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="blog.php">Articles &amp; Blog</a></li>
                    <li><a href="terms_privacy.php">Terms &amp; Privacy</a></li>
                    <li><a href="error_404.php">Error 404</a></li>
                    <li><a href="shortcode.php">Short Code</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Features <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="job_list.php">Find a Job</a></li>
                    <li><a href="job_details.php">Job Details</a></li>
                    <li><a href="resume_list.php">Find Resumes</a></li>
                    <li><a href="resume_details.php">Resume Details</a></li>
                    <li><a href="job_post_2.php">Post a Job</a></li>
                    <li><a href="company_page.php">Company Profile</a></li>
                  </ul>
                </li>
              </ul>      
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="link-profile dropdown-toggle"  data-toggle="dropdown" >
                    <img src="assets/theme/images/people/4.jpg" alt="" class="img-profile"> &nbsp; Jhon <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="my_alerts.php"> My Alerts </a></li>
                    <li><a href="my_notifications.php"> Notifications <span class="badge ">5</span></a></li>
                    <li><a href="change_password.php"> Change Password</a></li>
                  </ul>
                </li>
                <li class="link-btn"><a href="index.php"><span class="btn btn-theme  btn-pill btn-xs btn-line">Logout</span></a></li>
              </ul>
            </div>
          </div>
        </nav><!-- end main navbar -->

        <!-- mobile navbar -->
        <div class="container">
          <nav class="mobile-nav hidden-md hidden-lg">

            <ul class="nav navbar-nav nav-block-left">
              <li class="dropdown">
                <a href="#" class="link-profile dropdown-toggle"  data-toggle="dropdown" >
                  <img src="assets/theme/images/people/4.jpg" alt="" class="img-profile"> &nbsp; Jhon <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="my_alerts.php"> My Alerts </a></li>
                  <li><a href="my_notifications.php"> Notifications <span class="badge ">5</span></a></li>
                  <li><a href="change_password.php"> Change Password</a></li>
                  <li><a href="index.php"> Logout</a></li>
                </ul>
              </li>
            </ul>


            <a href="#" class="btn-nav-toogle first">
              <span class="bars"></span>
              Menu
            </a>
            <div class="mobile-nav-block">
              <h4>Navigation</h4>
              <a href="#" class="btn-nav-toogle">
                <span class="barsclose"></span>
                Close
              </a> 

              <ul class="nav navbar-nav">
                <li class=""><a href="job_list.php"><strong>Find a Job</strong></a></li>
                <li class=""><a href="resume_list.php"><strong>Find Resumes</strong></a></li>
                <li  class=""><a href="job_post_1.php"><strong>Post a Job</strong></a></li>
                <li><a href="login.php"><strong>Login</strong></a></li>
                <li><a href="register.php"><strong>Register</strong></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Pages <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="blog.php">Articles &amp; Blog</a></li>
                    <li><a href="terms_privacy.php">Terms &amp; Privacy</a></li>
                    <li><a href="error_404.php">Error 404</a></li>
                    <li><a href="shortcode.php">Short Code</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Features <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="job_list.php">Find a Job</a></li>
                    <li><a href="job_details.php">Job Details</a></li>
                    <li><a href="resume_list.php">Find Resumes</a></li>
                    <li><a href="resume_details.php">Resume Details</a></li>
                    <li><a href="job_post_2.php">Post a Job</a></li>
                    <li><a href="company_page.php">Company Profile</a></li>
                  </ul>
                </li>
              </ul>      
            </div>
          </nav>
        </div><!-- mobile navbar -->


        <div class="container">
          <div class="text-center logo no-margin-bottom"> <a href="index.php"><img src="assets/theme/images/logo.png" alt=""></a></div>
          <h3 class="color-white text-center ">Terms &amp; Privacy</h3>
          <div class="white-space-50"></div>
        </div>
      </header><!-- end main-header -->


      <!-- body-content -->
      <div class="body-content clearfix" >

        <div class="bg-color2 block-section line-bottom">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <h2 class="text-center">Please review our terms and privacy <br/><small>Sub Heading Here</small></h2>
                <div class="white-space-20"></div>
                <hr/>
                <br/>
                <h4 >Heading Text</h4>
                <p>Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                <ol>
                  <li>Ut adipiscing elit magna sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet. Et harum quidem rerum facilis fusce condimentum eleifend enim a feugiat.</li>
                  <li>Lusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</li>
                  <li>Praesentium voluptatum deleniti atque corrupti quos</li>
                  <li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</li>
                  <li>Mentum eleifend enim a feugiat distinctio lor</li>
                </ol><br>

                <h4 >Lorem ipsum dolor integer sed arcu</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non <a href="#">libero consectetur adipiscing</a> elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                <p><strong>Iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non sit amet, consectetur adipiscing elit. Ut adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque lorem ipsum dolor sit amet. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat <a href="#">consectetur adipiscing elit</a>.</strong></p><br>

                <h4 >Molestias excepturi sint</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                <ul>
                  <li>Ut adipiscing elit magna sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet. Et harum quidem rerum facilis fusce condimentum eleifend enim a feugiat.</li>
                  <li>Lusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</li>
                  <li>Praesentium voluptatum deleniti atque corrupti quos</li>
                  <li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</li>
                  <li>Mentum eleifend enim a feugiat distinctio lor</li>
                  <li>Ut adipiscing elit magna sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet. Et harum quidem rerum facilis fusce condimentum eleifend enim a feugiat.</li>
                  <li>Lusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</li>
                  <li>Praesentium voluptatum deleniti atque corrupti quos</li>
                  <li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</li>
                  <li>Mentum eleifend enim a feugiat distinctio lor</li>
                </ul>
                <p><em>Praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non ipsum dolor sit amet. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non ipsum dolor sit amet. Ut non libero magna. Sed et quam lacus usce condimentum eleifend enim a feugiat <a href="#">consectetur adipiscing elit</a>.</em></p><br>

                <h4>Vehicula sem ut volutpat</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non sit amet, consectetur adipiscing elit. Ut adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non <a href="#">libero consectetur adipiscing</a> elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                <p>Iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non ipsum dolor sit amet. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat <a href="#">consectetur adipiscing elit</a>.</p><br>

                <h4><em>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</em></h4>
                <ul>
                  <li>Ut adipiscing elit magna sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat.</li>
                  <li>Lusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</li>
                  <li>Praesentium voluptatum deleniti atque corrupti quos</li>
                </ul>
                <p>Iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non ipsum dolor sit amet. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat <a href="#">consectetur adipiscing elit</a>.</p>
              </div>
            </div>
          </div>
        </div>        
      </div><!--end body-content -->


      <!-- main-footer -->
      <footer class="main-footer">


        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <ul class="list-inline link-footer text-center-xs">
                <li><a href="index.php">Home</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
              </ul>
            </div>
            <div class="col-sm-6 ">
              <p class="text-center-xs hidden-lg hidden-md hidden-sm">Stay Connect</p>
              <div class="socials text-right text-center-xs">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </footer><!-- end main-footer -->

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