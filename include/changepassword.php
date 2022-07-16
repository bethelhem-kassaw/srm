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
            <?php

// include('sidbar.php');




?>       
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <?php

// include('topbar.php');




?>
                <!-- end topbar -->
            













<?php


                if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $rollid=$_POST['rollid'];
    $gender=$_POST['gender'];
    $class=$_POST['class'];
    $section=$_POST['section'];
    // $date_added=date("Y-m-d");
    
    
    $query = "INSERT INTO student(`fname`,`lname`,`roll_id`,`gender`,`class`,`date_added`,`section`) VALUE ('$fname','$lname','$rollid','$gender','$class',NOW(),'$section')";
    $query_run=mysqli_query($conn,$query);
   if ($query_run){
    // die('success');
    ?>
    <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>successfully Added</strong> 
  </div>
    <?php

   }else{
    // die('not success');
    ?>
    <div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Sorry not successfully Added</strong> 
  </div>
    <?php
   }
    
}

?>










                <div class="cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-6">
                           <div class="page_title">
                              <h2>Change Password</h2>
                           </div>
                        </div>
                     </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- <div class="full graph_head">
                                    <div class="heading1 margin_0">
                                        <h2>Fill the form</h2>
                                    </div>
                                 </div> -->









                                <form class="form-horizontal" method="post">
                                             <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">First Name</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="fname" class="form-control" id="fname" required="required" autocomplete="off">
                                                    </div>
                                                </div>



                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">Last Name</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="lname" class="form-control" id="lname" required="required" autocomplete="off">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">Roll Id</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="rollid" class="form-control" id="rollid"  required="required" autocomplete="off">
                                                    </div>
                                                </div>
                                                
                                                

                                                <!-- <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">Email id</label>
                                                    <div class="col-sm-6">
                                                        <input type="email" name="emailid" class="form-control" id="email" required="required" autocomplete="off">
                                                    </div>
                                                </div> -->





                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">Gender</label>
                                                    <div class="col-sm-6">
                                                        <input type="radio" name="gender" value="Male" required="required" checked="">Male <input type="radio" name="gender" value="Female" required="required">Female <input type="radio" name="gender" value="Other" required="required">Other
                                                    </div>
                                                </div>






                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">Class</label>
                                                    <div class="col-sm-6">
                                                        <select name="class" class="form-control" id="default" required="required">
                                                            <option value="">Select Class</option>
<?php
$query1="SELECT * FROM `class`";
$result=mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result)):;
?>
                                                            <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
                                                            <?php endwhile;?>
                                                            
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">Section</label>
                                                    <div class="col-sm-6">
                                                        <select name="section" class="form-control" id="default" required="required">
                                                            <option value="">Select section</option>
<?php
$query1="SELECT * FROM `class`";
$result=mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result)):;
?>
                                                            <option value="<?php echo $row1[3];?>"><?php echo $row1[3];?></option>
                                                            <?php endwhile;?>
                                                            
                                                        </select>
                                                    </div>
                                                </div>


                                                <!-- <div class="form-group">
                                                    <label for="date" class="col-sm-2 control-label">DOB</label>
                                                    <div class="col-sm-6">
                                                        <input type="date" name="dob" class="form-control" id="date">
                                                    </div>
                                                </div> -->


                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" name="submit" class="btn btn-primary">Add</button>
                                                    </div>
                                                </div>

                                </form>
                                
                            </div>

                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                    
            </div>
            <!-- /.content-wrapper -->
        </div>
    </div>
















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