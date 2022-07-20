<?php
session_start();
// echo 'welcome'.$_SESSION['user_fname']. $_SESSION['user_lname'];
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
                            <!-- <a href="index.html"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png" alt="#" /></a> -->
                        </div>
                    </div>
                    <div class="sidebar_user_info">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side">
                            <!-- <div class="user_img"><img class="img-responsive" src="images/layout_img/user_img.jpg" alt="#" /></div> -->
                            <div class="user_info">
                                <h6><?php echo 'welcome' . "  " . $_SESSION['auth_user']['user_fname'] . "  " . $_SESSION['auth_user']['user_lname']; ?></h6>
                                <!-- <p><span class="online_animation"></span> Online</p> -->
                            </div>
                        </div>
                    </div>
                </div>

            </nav>



            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <?php

                // include('../include/topbar.php');




                ?>
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <!-- <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button> -->
                            <div class="logo_section">
                                <a>
                                    <h1>ONLINE STUDENT RESULT MANAGEMENT SYSTEM</h1>
                                </a>
                            </div>

                        </div>
                    </nav>
                </div>
                <!-- end topbar -->











                <?php
                $userid= $_SESSION['auth_user']['user_id'];
                $fuser = $_SESSION['auth_user']['user_fname'];
                $luser = $_SESSION['auth_user']['user_lname'];
                $query = "SELECT * FROM result INNER JOIN adminteacher on result.teacherid=adminteacher.atid 
INNER JOIN student on result.studentid=student.id INNER JOIN course on result.subjectid=course.id 
INNER JOIN class on result.classid=class.id INNER JOIN semister on result.semisterid=semister.id WHERE result.Studentid=$userid";
                $result = mysqli_query($conn, $query);
               
                
                if(mysqli_num_rows($result)>0) {

               
                    $data = mysqli_fetch_assoc($result);

                    $lengths=mysqli_fetch_lengths($result);

                ?>













                    <div class="midde_cont">
                        <div class="container-fluid">
                            <?php
                   
                            ?>

                            <!--  -->


                            <!-- <div>
                            <button type="button" class="btn btn-secondary btn-lg btn-block"><?php echo $data['coursename'] ?></button>
                            </div> -->

                            <!-- /.row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="full graph_head">
                                        <div class="heading1 margin_0">
                                            <!-- <h2>Manage Students</h2> -->
                                        </div>
                                    </div>

                                    <?php
                $userid= $_SESSION['auth_user']['user_id'];
                $fuser = $_SESSION['auth_user']['user_fname'];
                $luser = $_SESSION['auth_user']['user_lname'];
                $query = "SELECT * FROM result INNER JOIN adminteacher on result.teacherid=adminteacher.atid 
INNER JOIN student on result.studentid=student.id INNER JOIN course on result.subjectid=course.id 
INNER JOIN class on result.classid=class.id INNER JOIN semister on result.semisterid=semister.id WHERE result.Studentid=$userid";
                $result = mysqli_query($conn, $query);
               
                
                if(mysqli_num_rows($result)>0) {

               
                    

                    $cnt=0;

                ?>

                                    
                                    <div id="displaydata"></div>
                                        <div class="col-md-12" id="resultdisplay">
                                            <div class="white_shd full margin_bottom_30">
                                                <div class="full graph_head">
                                                    <div class="heading1 margin_0">
                                                        <h2>All Results</h2>
                                                    </div>
                                                </div>








                                                
                                                <div class="table_section padding_infor_info">
                                                    <div class="table-responsive-sm">
                                                    <table class="table">
                                    
                                       <thead>
                                          <tr>
                                             <th>#</th>
                                             <th>Course Name</th>
                                             <th>Semister</th>
                                             <th>classwork</th>
                                             
                                             <th>project</th>
                                             <th>Mid exam</th>
                                             <th>test</th>
                                             <th>Assignment</th>
                                             <th>Final Exam</th>
                                             <th>total</th>
                                             <th>Grade</th>
                                          </tr>
                                       </thead>
                                       <tbody>

                                       <?php
                                      
                      while ($data= mysqli_fetch_assoc($result))
                       {
                        $cnt++;
                        ?>
                                          <tr>
                                             <td><?php echo $cnt?></td>
                                             <td><?php echo $data['coursename']?></td>
                                             <td><?php echo $data['semister']?></td>
                                             <td><?php echo $data['assignment1']?></td>
                                             
                                             <td><?php echo $data['assignment2']?></td>
                                             
                                             <td><?php echo $data['assignment3']?></td>
                                             <td>
                                             <?php echo $data['assignment4']?>
                                             </td>
                                             <td><?php echo $data['assignment5']?></td>
                                             <td><?php echo $data['assignment6']?></td>
                                             <td><?php echo $data['total']?></td>
                                             <td><?php echo $data['grade']?></td>
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


    <?php

                }


?>









<script type="">

    $(document).ready(function(){
    $('#showresult').click(function(e){
        e.priventDefault();

        $.ajax({
            method:"post",
            url:"#",
            data:$('#displaydata').serialize(),
            datatype:"html",
            success:function(response){
                $('#messagedisplay').text(response);
            }
            
        })

    })
});




</script>



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
<!-- fancy box js -->
<script src="../admin/js/jquery-3.3.1.min.js"></script>
<script src="../admin/js/jquery.fancybox.min.js"></script>
<!-- custom js -->
<script src="../admin/js/custom.js"></script>
<script src="../admin/js/chart_custom_style1.js"></script>
</body>

</html>