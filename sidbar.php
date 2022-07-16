<?php
// session_start();
include('include/config.php');
// include('../cklg.php');
// $user_data = check_login($conn);

//  $_SESSION['user_name'];
?>

<nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                        <div class="logo_section">
                            <a href="dashboard.php"> OSRMS</a>
                        </div>
                    </div>
                   
                    <div class="sidebar_user_info">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side">
                            <!-- <div class="user_img"><img class="img-responsive" src="images/layout_img/user_img.jpg" alt="#" /></div> -->
                            <div class="user_info">
                                <h6><?php echo 'Hey'.'_'. $_SESSION['auth_user']['user_username']?></h6>
                                
                                
                                
                                <!-- <p><span class="online_animation"></span> Online</p> -->
                            </div>                      </div>
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
                        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                        <!-- <li><a href="widgets.html"><i class="fa fa-clock-o orange_color"></i> <span>Widgets</span></a></li> -->
                        <li>
                            <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-users"></i> <span>Students</span></a>
                            <ul class="collapse list-unstyled" id="element">
                                <li><a href="addstudent.php">> <span>ADD Students</span></a></li>
                                <li><a href="managestudents.php">> <span>Manage students</span></a></li>
                                <!-- <li><a href="icons.html">> <span>Icons</span></a></li>
                           <li><a href="invoice.html">> <span>Invoice</span></a></li> -->
                            </ul>
                        </li>
                        <!-- <li><a href="tables.html"><i class="fa fa-user"></i> <span>Teachers</span></a></li> -->
                        <li>
                            <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-user"></i> <span>Teachers</span></a>
                            <ul class="collapse list-unstyled" id="apps">
                                <li><a href="addteacher.php">> <span>ADD Teachers</span></a></li>
                                <li><a href="manageteacher.php">> <span>Manage Teachers</span></a></li>
                                <!-- <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li> -->
                            </ul>
                        </li>
                        <!-- <li><a href="price.html"><i class="fa fa-briefcase blue1_color"></i> <span>Pricing Tables</span></a></li> -->
                        <!-- <li>
                        <a href="contact.html">
                        <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
                     </li> -->
                        <li class="active">
                            <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>CLASS</span></a>
                            <ul class="collapse list-unstyled" id="additional_page">
                                <li>
                                    <a href="addclass.php">> <span>ADD CLASS</span></a>
                                </li>
                                <li>
                                    <a href="manageclass.php">> <span>Manage CLASS</span></a>
                                </li>
                                <!-- <li>
                              <a href="login.html">> <span>Login</span></a>
                           </li>
                           <li>
                              <a href="404_error.html">> <span>404 Error</span></a>
                           </li> -->
                            </ul>
                        </li>
                        <li>
                            <a href="#subject" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-book"></i> <span>SUBJECT</span></a>
                            <ul class="collapse list-unstyled" id="subject">
                                <li>
                                    <a href="addsubject.php">> <span>ADD subject</span></a>
                                </li>
                                <li>
                                    <a href="managesubject.php">> <span>Manage subject</span></a>
                                </li>
                                <li>
                                    <a href="assignsubject.php">> <span>Assign subject</span></a>
                                </li>

                            </ul>
                        </li>
                        <li><a href="semister.php"><i class="fa fa-map purple_color2"></i> <span>Semester</span></a></li>
                        <li><a href="../changepassword.php"><i class="fa fa-key green_color"></i> <span>change Password</span></a></li>
                        <li><a href="deadline.php"><i class="fa fa-key green_color"></i> <span>add deadline</span></a></li>
                        <li><a href="showresult.php"><i class="fa fa-key green_color"></i> <span>result</span></a></li>
                        <li><a href="../logout.php"><i class="fa fa-sign-out"></i> <span>logout</span></a></li>
                    </ul>
                </div>
            </nav>