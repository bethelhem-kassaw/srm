<?php
session_start();
include('../include/config.php');




?>





<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta l="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>SRMS</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <!-- <link rel="icon" href="images/fevicon.png" type="image/png" /> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- site css -->
    <link rel="stylesheet" href="style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- color css -->
    <link rel="stylesheet" href="css/colors.css" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="css/bootstrap-select.css" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="css/perfect-scrollbar.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="css/custom.css" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <?php

include('../sidbar.php');




?>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <?php

include('../include/topbar.php');




?>
                <!-- end topbar -->
            
























                <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Courses</h2>
                           </div>
                        </div>
                     </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="full graph_head">
                                    <div class="heading1 margin_0">
                                        <!-- <h2>Manage Students</h2> -->
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Manage Course</h2>
                                 </div>
                              </div>

                              








                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table">
                                    <?php
                $query = "SELECT * FROM course";
                $query_run = mysqli_query($conn,$query);
                $cnt=0;
                if(mysqli_num_rows($query_run)>0) {
                  ?>
                                       <thead>
                                          <tr>
                                             <th>#</th>
                                             <th>Course Name</th>
                                             <th>Course Code</th>
                                             
                                             <th>Department</th>
                                             <th>reg date</th>
                                             <th>Action</th>
                                             
                                          </tr>
                                       </thead>
                                       <tbody>

                                       <?php
                                      
                      while ($row= mysqli_fetch_assoc($query_run))
                       {
                        $cnt++;
                        ?>
                                          <tr>
                                             <td><?php echo $cnt?></td>
                                             <td><?php echo $row['coursename']?></td>
                                             <td><?php echo $row['coursecode']?></td>
                                             
                                             <td><?php echo $row['department']?></td>
                                             
                                             <td><?php echo $row['currentdate']?></td>
                                             <td>
                                             <a href="editsubject.php?id=<?=$row['id'];?>"><i class="fa fa-edit" title="Edit Record"></i> </a>
                                             </td>
                                             
                                          </tr>
                                          
                                          <?php
                                       
                      }
                      
                      ?>
                                       </tbody>
                                    </table>
                                    <?php
          }else{echo "no record found";}
        ?>
                                 </div>
                              </div>
                           </div>
                        </div>








                                
                                
                            </div>

                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                    
            </div>
            <!-- /.content-wrapper -->
        </div>
    </div>
















        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- wow animation -->
        <script src="js/animate.js"></script>
        <!-- select country -->
        <script src="js/bootstrap-select.js"></script>
        <!-- owl carousel -->
        <script src="js/owl.carousel.js"></script>
        <!-- chart js -->
        <script src="js/Chart.min.js"></script>
        <script src="js/Chart.bundle.min.js"></script>
        <script src="js/utils.js"></script>
        <script src="js/analyser.js"></script>
        <!-- nice scrollbar -->
        <script src="js/perfect-scrollbar.min.js"></script>
        <script>
            var ps = new PerfectScrollbar('#sidebar');
        </script>
         <!-- fancy box js -->
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/jquery.fancybox.min.js"></script>
        <!-- custom js -->
        <script src="js/custom.js"></script>
        <script src="js/chart_custom_style1.js"></script>
</body>

</html>