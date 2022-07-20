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
                <?php

$query= "SELECT * FROM `deadline` ";
$result=mysqli_query($conn,$query);
$data=mysqli_fetch_array($result);

$sem=$data['semister'];
$sdate=$data['startdate'];
$edate =$data['enddate'];
$today = date("y-m-d");

// echo $today;
// echo $data['startdate'];


?>


<?php


   if(isset($_POST['submit'])){
    $rid=$_POST['rid'];
    $tid=$_POST['tid'];
    $sid=$_POST['sid'];
    $semid=$_POST['semid'];
    $subid=$_POST['subid'];
   //  $gender=$_POST['gender'];
    $class=$_POST['class'];
    $ass1=$_POST['ass1'];
    $ass2=$_POST['ass2'];
    $ass3=$_POST['ass3'];
    $ass4=$_POST['ass4'];
    $ass5=$_POST['ass5'];
    $ass6=$_POST['ass6'];
    $total=$ass1+$ass2+$ass3+$ass4+$ass5+$ass6;
   //  echo $ass6;
   //  echo $total;
   //  $date_added=date("Y-m-d ");
    
   $query= "UPDATE `result` SET `teacherid`='$tid',`studentid`='$sid',`semisterid`='$semid',`classid`='$class',`subjectid`='$subid',`assignment1`=$ass1, `assignment2`='$ass2',`assignment3`='$ass3',`assignment4`='$ass4',`assignment5`='$ass5',`assignment6`='$ass6',`total`='$total' WHERE rid=$rid";
    // $query  = "INSERT INTO result(`teacherid`,`studentid`,`semisterid`,`classid`,`subjectid`,`assignment1`,`assignment2`,`assignment3`,`assignment4`,`assignment5`,`assignment6`,`total`,`date_added`) VALUE ('$tid','$sid','$semid','$class','$subid','$ass1','$ass2','$ass3','$ass4','$ass5','$ass6','$total',NOW())";
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


<?php
if(isset($_GET['rid']))
{
$user_id = $_GET['rid'];
$users = "SELECT * FROM result WHERE rid='$user_id'";
$users_run= mysqli_query($conn,$users);
    if(mysqli_num_rows($users_run)>0){
        foreach($users_run as $user){
            ?>






                        <div class="midde_cont">
                            <div class="container-fluid">
                                <div class="row column_title">
                                    <div class="col-md-12">
                                    <div class="page_title">
                                        <h2>Edit result</h2>
                                    </div>
                                    </div>
                                </div>
                                    <!-- /.row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="full graph_head">
                                                <div class="heading1 margin_0">
                                                    <h2>Fill the form</h2>
                                                </div>
                                            </div>




            <?php

            if($sdate==$today||$sdate<=$edate){

            ?>





                                            <form class="form-horizontal" method="post">
                                            <input type="hidden" name = "tid" value="<?=$_SESSION['auth_user']['user_id'];?>"/>
                                            <input type="hidden" name = "rid" value="<?=$user['rid'];?>"/>
                                            <div class="form-group">
                                                                <label for="default" class="col-sm-2 control-label">Student Name</label>
                                                                <div class="col-sm-6">
                                                                    <select name="sid" class="form-control" id="default" required="required">
                                                                        <option value="">Select Student</option>
            <?php
            $query1="SELECT * FROM `student`";
            $result=mysqli_query($conn,$query1);
            while($row1=mysqli_fetch_array($result)):;
            ?>
                                                                        <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
                                                                        <?php endwhile;?>
                                                                        
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                            <label for="default" class="col-sm-2 control-label">Semister</label>
                                                                <div class="col-sm-6">
                                                                    <select name="semid" class="form-control" id="default" required="required">
                                                                        <option value="">Select Semister</option>
            <?php
            $query1="SELECT * FROM `semister`";
            $result=mysqli_query($conn,$query1);
            while($row1=mysqli_fetch_array($result)):;
            ?>
                                                                        <option value="<?php echo $row1[0];?>"><?php echo $row1[2];?></option>
                                                                        <?php endwhile;?>
                                                                        
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="default" class="col-sm-2 control-label">subject</label>
                                                                <div class="col-sm-6">
                                                                    <select name="subid" class="form-control" id="default" required="required">
                                                                        <option value="">Select Subject</option>
            <?php
            $query1="SELECT * FROM `course`";
            $result=mysqli_query($conn,$query1);
            while($row1=mysqli_fetch_array($result)):;
            ?>
                                                                        <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
                                                                        <?php endwhile;?>
                                                                        
                                                                    </select>
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
                                                                        <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
                                                                        <?php endwhile;?>
                                                                        
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <!-- <div class="form-group">
                                                                <label for="default" class="col-sm-2 control-label">class Work</label>
                                                                <div class="col-sm-3">
                                                                    <input type="number" name="rollid" class="form-control" id="default"  required="required" autocomplete="off" placeholder="/5">
                                                                </div>
                                                            </div> -->
                                                            <div class="form-group">
                                                                <label for="default" class="col-sm-2 control-label">class Work</label>
                                                                <div class="col-sm-6">
                                                                    <input type="number" name="ass1" value="<?=$user['assignment1'];?>"class="form-control" id="default"  required="required" autocomplete="off" placeholder="/5">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="default" class="col-sm-2 control-label">project</label>
                                                                <div class="col-sm-6">
                                                                    <input type="number" name="ass2"value="<?=$user['assignment2'];?>"class="form-control" id="default"  required="required" autocomplete="off" placeholder="/10">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="default" class="col-sm-2 control-label">Mid-exam</label>
                                                                <div class="col-sm-6">
                                                                    <input type="number" name="ass3" value="<?=$user['assignment3'];?>"class="form-control" id="default"  required="required" autocomplete="off" placeholder="/10">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="default" class="col-sm-2 control-label">test</label>
                                                                <div class="col-sm-6">
                                                                    <input type="number" name="ass4" value="<?=$user['assignment4'];?>"class="form-control" id="default"  required="required" autocomplete="off" placeholder="/10">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="default" class="col-sm-2 control-label">Assignment</label>
                                                                <div class="col-sm-6">
                                                                    <input type="number" name="ass5"value="<?=$user['assignment5'];?>" class="form-control" id="default"  required="required" autocomplete="off" placeholder="/5">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="default" class="col-sm-2 control-label">Final</label>
                                                                <div class="col-sm-6">
                                                                    <input type="number" name="ass6"value="<?=$user['assignment6'];?>"class="form-control" id="default"  required="required" autocomplete="off" placeholder="/50">
                                                                </div>
                                                            </div>
                                                            
                                                            <!-- <input type="hidden" name = "total" value=""/> -->

                                                            <!-- <div class="form-group">
                                                                <label for="default" class="col-sm-2 control-label">Email id</label>
                                                                <div class="col-sm-6">
                                                                    <input type="email" name="emailid" class="form-control" id="email" required="required" autocomplete="off">
                                                                </div>
                                                            </div> -->





                                                            <!-- <div class="form-group">
                                                                <label for="default" class="col-sm-2 control-label">Gender</label>
                                                                <div class="col-sm-6">
                                                                    <input type="radio" name="gender" value="Male" required="required" checked="">Male <input type="radio" name="gender" value="Female" required="required">Female <input type="radio" name="gender" value="Other" required="required">Other
                                                                </div>
                                                            </div> -->






                                                            


                                                            <!-- <div class="form-group">
                                                                <label for="date" class="col-sm-2 control-label">DOB</label>
                                                                <div class="col-sm-6">
                                                                    <input type="date" name="dob" class="form-control" id="date">
                                                                </div>
                                                            </div> -->


                                                            <div class="form-group">
                                                                <div class="col-sm-offset-2 col-sm-10">
                                                                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
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

            <?php

            }else{
                        echo "this form is not available for the ".$sem ."semister";
            }

            ?>

<?php

}
}
}
?>


 




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




