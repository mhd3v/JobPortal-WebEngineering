<?php

if(isset($_GET['logout'])){

  if(session_status() == PHP_SESSION_NONE) 
    session_start();

  session_unset($_SESSION['user']);
  session_destroy();
  header('Location: index.php');

}

else{

if(session_status() == PHP_SESSION_NONE) 
    session_start();
}


?>

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
                <li class="<?php if(isset($page))if($page == 'findjob')echo 'active'?>"><a href="index.php"><strong>Find a Job</strong></a></li>
                <li class="<?php if(isset($page))if($page == 'findresumes')echo 'active'?>"><a href="resume_list.php"><strong>Find Resumes</strong></a></li>
                <li class="<?php if(isset($page))if($page == 'postjob')echo 'active'?>"><a href="job_post_2.php"><strong>Post a Job</strong></a></li>
                
               
              </ul>


              <?php if(isset($_SESSION['user'])){ ?>
                
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="link-profile dropdown-toggle"  data-toggle="dropdown" >
                    <img src="assets/theme/images/people/4.jpg" alt="" class="img-profile"> &nbsp; <?php echo $_SESSION['user'] ?> <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="dashboard.php"> Dashboard <span class="badge ">5</span></a></li>
                    <li><a href="change_password.php"> Change Password</a></li>
                  </ul>
                </li>
                <!-- <li class="link-btn"><a href="header.php"><span class="btn btn-theme  btn-pill btn-xs btn-line">Logout</span></a></li> -->
                <li class="link-btn">
                <form action="header.php">
                    <input style="margin-top:17px;"  class="btn btn-theme  btn-pill btn-xs btn-line" name="logout" type="submit" value="Logout" />
                </form>
                </li>

              </ul>

              <?php }
              
              else  {   ?>
              <ul class="nav navbar-nav navbar-right">
                <li class="link-btn"><a href="login.php"><span class="btn btn-theme btn-pill btn-xs btn-line">Login</span></a></li>
                <li class="link-btn"><a href="register.php"><span class="btn btn-theme  btn-pill btn-xs btn-line">Register</span></a></li>
              </ul>
              
              <?php } ?>
            </div>
          </div>
        </nav><!-- end main navbar -->

        <!-- mobile navbar -->
        <div class="container">
          <nav class="mobile-nav hidden-md hidden-lg">
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
                <li class="active"><a href="job_list.php"><strong>Find a Job</strong></a></li>
                <li class=""><a href="resume_list.php"><strong>Find Resumes</strong></a></li>
                <li  class=""><a href="job_post_2.php"><strong>Post a Job</strong></a></li>
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