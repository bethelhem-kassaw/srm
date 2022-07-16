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
     <?php       
if(isset($_POST['update'])){
        $user_id = $_POST['user_id'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $rollid=$_POST['rollid'];
        $gender=$_POST['gender'];
        $class=$_POST['class'];
        $section=$_POST['section'];




        $query= "UPDATE `student` SET `fname`='$fname',`lname`='$lname',`roll_id`='$rollid',`gender`='$gender',`class`='$class',`date_updated`=NOW(),`section`='$section' WHERE id=$user_id";



        $query_run = mysqli_query($conn,$query);

        if($query_run){
            ?>
    <div class="alert alert-success alert-dismissible">
    <a  class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>successfully updated</strong> 
    
  </div>
    <?php
        }else{
            ?>
    <div class="alert alert-danger alert-dismissible">
    <a  class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Sorry not successfully updated</strong>
     
    
  </div>
    <?php
        }
}

?>




















                <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>UPDATE STUDENTS</h2>
                           </div>
                        </div>
                     </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="full graph_head">
                                    <div class="heading1 margin_0">
                                        <h2>UPDATE the form</h2>
                                    </div>
                                 </div>
<?php
if(isset($_GET['id']))
{
    $user_id= $_GET['id'];
    $users = "SELECT * FROM student WHERE id='$user_id'";
    $users_run= mysqli_query($conn,$users);
    if(mysqli_num_rows($users_run)>0){
        foreach($users_run as $user){
            ?>
            








                                <form class="form-horizontal" method="post">
                                    <input type="hidden" name = "user_id" value="<?=$user['id'];?>"/>
                                             <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">First Name</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" value="<?=$user['fname'];?>" name="fname" class="form-control" id="fname" required="required" autocomplete="off">
                                                    </div>
                                                </div>



                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">Last Name</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" value="<?=$user['lname'];?>" name="lname" class="form-control" id="lname" required="required" autocomplete="off">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">Roll Id</label>
                                                    <div class="col-sm-6">
                                                        <input type="text"value="<?=$user['roll_id'];?>" name="rollid" class="form-control" id="rollid"  required="required" autocomplete="off">
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
                                                        <input type="radio" name="gender" value="Male"<?=$user['gender']=='Male'?'checked':'';?> required="required" >Male 
                                                        <input type="radio" name="gender" value="Female"<?=$user['gender']=='Female'?'checked':'';?> required="required">Female 
                                                        <!-- <input type="radio" name="gender" value="Other" required="required">Other -->
                                                    </div>
                                                </div>






                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">Class</label>
                                                    <div class="col-sm-6">
                                                        <select name="class" class="form-control" id="default" required="required">
                                                            <!-- <option value="">Select Class</option> -->
<?php
$query1="SELECT * FROM `class`";
$result=mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result)):;
?>
                                                            <option 
                                                                value=" <?php echo $row1[1];?>">  <?php echo $row1[1];?>
                                                            </option>
                                                            <?php endwhile;?>
                                                            
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">Section</label>
                                                    <div class="col-sm-6">
                                                        <select name="section" class="form-control" id="default" required="required">
                                                            <!-- <option value="" selected></option> -->
<?php
$query1="SELECT * FROM `class`";
$result=mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result)):;
?>
                                                            <option 
                                                                value="<?php echo $row1[3];?>" >  <?php echo $row1[3];?>
                                                            </option>
                                                            <?php endwhile;?>
                                                            
                                                        </select>
                                                    </div>
                                                </div>



                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" name="update" class="btn btn-primary">UPDATE</button>
                                                    </div>
                                                </div>

                                </form>
                                <?php
        }
    }else{
        ?>
        <h4>No Record found</h4>
        <?php
    }
}


?>
                                
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