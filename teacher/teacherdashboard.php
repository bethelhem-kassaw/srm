<?php
session_start();
include('../include/config.php');
// include('../cklg.php');
if (!isset($_SESSION['auth_user'])) header('location:../index.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <!-- <title>Pluto - Responsive Bootstrap Admin Panel Templates</title> -->
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- site icon -->
   <!-- <link rel="icon" href="images/fevicon.png" type="image/png" /> -->
   <!-- bootstrap css -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="../admin/css/bootstrap.min.css" />
   <!-- site css -->
   <link rel="stylesheet" href="../admin/style.css" />
   <!-- responsive css -->
   <link rel="stylesheet" href="../admin/css/responsive.css" />
   <!-- color css -->
   <link rel="stylesheet" href="../admin/css/colors.css" />
   <!-- select bootstrap -->
   <link rel="stylesheet" href="../admin/css/bootstrap-select.css" />
   <!-- scrollbar css -->
   <link rel="stylesheet" href="../admin/css/perfect-scrollbar.css" />
   <!-- custom css -->
   <link rel="stylesheet" href="../admin/css/custom.css" />
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="dashboard dashboard_1">
   <div class="full_container">
      <div class="inner_container">
         <!-- Sidebar  -->
         <nav id="sidebar">
            <div class="sidebar_blog_1">
               <div class="sidebar-header">
                  <div class="logo_section">
                     <a href="teacherdashboard.php"> OSRMS</a>
                  </div>
               </div>
               <div class="sidebar_user_info">
                  <div class="icon_setting"></div>
                  <div class="user_profle_side">
                     <!-- <div class="user_img"><img class="img-responsive" src="images/layout_img/user_img.jpg" alt="#" /></div> -->
                     <div class="user_info">

                        <h6><?php echo 'Hey' . '_' . $_SESSION['auth_user']['user_username'] ?></h6>
                        <!-- <p><span class="online_animation"></span> Online</p> -->
                     </div>
                  </div>
               </div>
            </div>
            <div class="sidebar_blog_2">
               <!-- <h4>General</h4> -->
               <ul class="list-unstyled components">
                  <!-- <li class="active">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                        <ul class="collapse list-unstyled" id="dashboard">
                           <li>
                              <a href="dashboard.html">> <span>Default Dashboard</span></a>
                           </li>
                           <li>
                              <a href="dashboard_2.html">> <span>Dashboard style 2</span></a>
                           </li>
                        </ul>
                     </li> -->
                  <li><a href="teacherdashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                  <!-- <li><a href="widgets.html"><i class="fa fa-clock-o orange_color"></i> <span>Widgets</span></a></li> -->
                  <!-- <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-users"></i> <span>Students</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="addstudent.php">> <span>ADD Students</span></a></li>
                           <li><a href="managestudents.php">> <span>Manage students</span></a></li> -->
                  <!-- <li><a href="icons.html">> <span>Icons</span></a></li>
                           <li><a href="invoice.html">> <span>Invoice</span></a></li> -->
                  <!-- </ul>
                     </li> -->
                  <!-- <li><a href="tables.html"><i class="fa fa-user"></i> <span>Teachers</span></a></li> -->
                  <!-- <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-user"></i> <span>Teachers</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="addteacher.php">> <span>ADD Teachers</span></a></li>
                           <li><a href="manageteacher.php">> <span>Manage Teachers</span></a></li> -->
                  <!-- <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li> -->
                  <!-- </ul>
                     </li> -->
                  <!-- <li><a href="price.html"><i class="fa fa-briefcase blue1_color"></i> <span>Pricing Tables</span></a></li> -->
                  <!-- <li>
                        <a href="contact.html">
                        <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
                     </li> -->
                  <!-- <li class="active">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>CLASS</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                           <li>
                              <a href="addclass.php">> <span>ADD CLASS</span></a>
                           </li>
                           <li>
                              <a href="manageclass.php">> <span>Manage CLASS</span></a>
                           </li> -->
                  <!-- <li>
                              <a href="login.html">> <span>Login</span></a>
                           </li>
                           <li>
                              <a href="404_error.html">> <span>404 Error</span></a>
                           </li> -->
                  <!-- </ul>
                     </li> -->
                  <li>
                     <a href="#subject" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-book"></i> <span>Student</span></a>
                     <ul class="collapse list-unstyled" id="subject">
                        <li>
                           <a href="seestudent.php">> <span>see student</span></a>
                        </li>
                        <li>
                           <a href="manageresult.php">> <span>Manage Result</span></a>
                        </li>

                     </ul>
                  </li>
                  <li><a href="result.php"><i class="fa fa-map purple_color2"></i> <span>Result</span></a></li>
                  <li><a href="../changepassword.php"><i class="fa fa-key green_color"></i> <span>change Password</span></a></li>
                  <li><a href="../logout.php"><i class="fa fa-sign-out"></i> <span>logout</span></a></li>
               </ul>
            </div>
         </nav>
         <!-- end sidebar -->
         <!-- right content -->
         <div id="content">
            <!-- topbar -->
            <div class="topbar">
               <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="full">
                     <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                     <div class="logo_section">
                        <a href="teacherdashboard.php">
                           <h1>ONLINE STUDENT RESULT MANAGEMENT SYSTEM</h1>
                        </a>
                     </div>
                     <!-- <div class="right_topbar">
                           <div class="user">
                              <ul>
                                 <li><a><i class="fa fa-user"></i> Jhon doe</a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown">John David</span></a>
                                     <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.html">My Profile</a>
                                       <a class="dropdown-item" href="settings.html">Settings</a>
                                       <a class="dropdown-item" href="help.html">Help</a>
                                       <a class="dropdown-item" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div> -->
                     <!-- </li> -->
                     <!-- </ul> -->
                     <!-- </div> -->
                     <!-- </div> -->
                  </div>
               </nav>
            </div>
            <!-- end topbar -->
            <? include('../include/message.php'); ?>
            <!-- dashboard inner -->
            <?php

            $result = mysqli_query($conn, "SELECT * FROM student");
            $rows = mysqli_num_rows($result);


            $result1 = mysqli_query($conn, "SELECT * FROM adminteacher");
            $row1 = mysqli_num_rows($result1);


            $result2 = mysqli_query($conn, "SELECT * FROM class");
            $row2 = mysqli_num_rows($result2);


            $result3 = mysqli_query($conn, "SELECT * FROM course");
            $row3 = mysqli_num_rows($result3);
            ?>

            <!-- end topbar -->
            <!-- dashboard inner -->

            <div class="midde_cont">
               <div class="container-fluid">
                  <div class="row column_title">
                     <div class="col-md-12">
                        <div class="page_title">

                           <h2>Dashboard</h2>
                        </div>
                     </div>
                  </div>
                  <div class="row column1">
                     <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30">
                           <div class="couter_icon">
                              <div>
                                 <i class="fa fa-user yellow_color"></i>
                              </div>
                           </div>
                           <div class="counter_no">
                              <div>
                                 <p class="total_no"><?php echo $rows ?></p>
                                 <p class="head_couter">Students</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30">
                           <div class="couter_icon">
                              <div>
                                 <i class="fa fa-user blue1_color"></i>
                              </div>
                           </div>
                           <div class="counter_no">
                              <div>
                                 <p class="total_no"><?php echo $row1 ?></p>
                                 <p class="head_couter">Teachers</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30">
                           <div class="couter_icon">
                              <div>
                                 <i class="fa fa-cloud-download green_color"></i>
                              </div>
                           </div>
                           <div class="counter_no">
                              <div>
                                 <p class="total_no"><?php echo $row2 ?></p>
                                 <p class="head_couter">Class</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30">
                           <div class="couter_icon">
                              <div>
                                 <i class="fa fa-book red_color"></i>
                              </div>
                           </div>
                           <div class="counter_no">
                              <div>
                                 <p class="total_no"><?php echo $row3 ?></p>
                                 <p class="head_couter">courses</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- jQuery -->
   <script src="../admin/js/jquery.min.js"></script>
   <script src="../admin/js/popper.min.js"></script>
   <script src="../admin/js/bootstrap.min.js"></script>
   <!-- wow animation -->
   <script src="../admin/js/animate.js"></script>
   <!-- select country -->
   <script src="../admin/js/bootstrap-select.js"></script>
   <!-- owl carousel -->
   <script src="../admin/js/owl.carousel.js"></script>
   <!-- chart js -->
   <script src="../admin/js/Chart.min.js"></script>
   <script src="../admin/js/Chart.bundle.min.js"></script>
   <script src="../admin/js/utils.js"></script>
   <script src="../admin/js/analyser.js"></script>
   <!-- nice scrollbar -->
   <script src="../admin/js/perfect-scrollbar.min.js"></script>
   <script>
      var ps = new PerfectScrollbar('#sidebar');
   </script>
   <!-- custom js -->
   <script src="../admin/js/custom.js"></script>
   <script src="../admin/js/chart_custom_style1.js"></script>
</body>

</html>