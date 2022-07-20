<?php
session_start();

include('../include/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Result Management System</title>
    <link rel="stylesheet" href="../forlogin/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="../forlogin/css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="../forlogin/css/animate-css/animate.min.css" media="screen">
    <link rel="stylesheet" href="../forlogin/css/icheck/skins/flat/blue.css">
    <link rel="stylesheet" href="../forlogin/css/main.css" media="screen">
    <script src="../forlogin/js/modernizr/modernizr.min.js"></script>
</head>
<?php

// if (isset($_POST['login'])){
//                     $rollid = $_POST['rollid'];
//                     $sfname= $_POST['sfname'];
//                     $slname= $_POST['slname'];
                   
//                     $query = "SELECT * FROM student WHERE fname='$sfname'AND lname='$slname' AND roll_id='$rollid'";
                    
                   
//                     $data= mysqli_query($conn, $query);
//                     $total=mysqli_num_rows($data);
    
    
//                     if($total>0){
//                         // $result=mysqli_fetch_array($data);
//                         $_SESSION['user_fname']=$sfname;
//                         $_SESSION['user_lname']=$slname;
                
                        
//                         header('location:studentshowresult.php');
    
    
//                     }
//     }
    if(isset($_POST['login'])){
        $rollid=mysqli_real_escape_string($conn,$_POST['rollid']);
        $sfname=mysqli_real_escape_string($conn,$_POST['sfname']);
        $slname=mysqli_real_escape_string($conn,$_POST['slname']);
        $login_query="SELECT * FROM student WHERE fname='$sfname'AND lname='$slname' AND roll_id='$rollid'";
        $login_query_run=mysqli_query($conn,$login_query);
        if(mysqli_num_rows($login_query_run)>0){
            foreach ($login_query_run as $data){
            $user_id=$data['id'];
            $user_fname = $data['fname'];
            $user_lname=$data['lname'];
            // $role=$data['role'];
            }
            
            
            
            $_SESSION['auth']=true;
            // $_SESSION['auth_role']="$role";
             $_SESSION['auth_user']=[
                'user_id'=>$user_id,
                'user_fname'=>$user_fname,
                'user_lname'=>$user_lname
             ];
             header("location: studentshowresult.php");
             
        }else{
            // $_SESSION['message'] = "Invalid username or Password";
            // header("Location : login.php");
                // exit (0);
                echo 'incorrect login credentials';
        }
    
    }





?>
<body class="">
    <div class="main-wrapper">

        <div class="login-bg-color bg-black-300">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel login-box">
                        <div class="panel-heading">
                            <div class="panel-title text-center">
                                <h4>Student Result Management System</h4>
                            </div>
                        </div>
                        <div class="panel-body p-20">



                            <form  method="post">

                                <div class="form-group">
                                    <label for="rollid">Enter your Roll Id</label>
                                    <input type="text" name="rollid" class="form-control" id="rollid" placeholder="Enter Your Roll Id" autocomplete="off" name="rollid">
                                </div>
                                <div class="form-group">
                                    <label for="rollid">Student First Name</label>
                                    <input type="text" name="sfname" class="form-control" id="rollid" placeholder="Student First Name" autocomplete="off" name="rollid">
                                </div>
                                <div class="form-group">
                                    <label for="rollid">Student Last Name</label>
                                    <input type="text" name="slname" class="form-control" id="rollid" placeholder="Student Last Name" autocomplete="off" name="rollid">
                                </div>
                                


                                <div class="form-group mt-20">
                                    <div class="">

                                        <button type="submit" name="login" class="btn btn-success btn-labeled pull-right">login<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <a href="../index.php">Back to Home</a>
                                </div>
                            </form>

                            <hr>

                        </div>
                    </div>
                    <!-- /.panel -->
                    <!-- <p class="text-muted text-center"><small>Copyright © 2020 SRMS</small></p> -->
                </div>
                <!-- /.col-md-6 col-md-offset-3 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /. -->

    </div>
    <!-- /.main-wrapper -->

    <!-- ========== COMMON JS FILES ========== -->
    <script src="../forlogin/js/jquery/jquery-2.2.4.min.js"></script>
    <script src="../forlogin/js/jquery-ui/jquery-ui.min.js"></script>
    <script src="../forlogin/js/bootstrap/bootstrap.min.js"></script>
    <script src="../forlogin/js/pace/pace.min.js"></script>
    <script src="../forlogin/js/lobipanel/lobipanel.min.js"></script>
    <script src="../forlogin/js/iscroll/iscroll.js"></script>

    <!-- ========== PAGE JS FILES ========== -->
    <script src="../forlogin/js/icheck/icheck.min.js"></script>

    <!-- ========== THEME JS ========== -->
    <script src="../forlogin/js/main.js"></script>
    <script>
        $(function() {
            $('input.flat-blue-style').iCheck({
                checkboxClass: 'icheckbox_flat-blue'
            });
        });
    </script>

    <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
</body>

</html>