<?php
session_start();
include('include/config.php');

if(isset($_POST['change'])){
    // $emails= $_SESSION['email'];
    // $user = $_POST['user'];
    $npassword=md5($_POST['npassword']);
    $cpassword=md5($_POST['cpassword']);

    // if ( $_SESSION['auth_user']['user_username']==$user) {
    //     # code...
    // } else {
    //     # code...
    // }
    
    
    if($_POST['npassword']!= $_POST['cpassword']){
        $errors['password_error']='password not matched';
       
    }else{
       $email=$_SESSION['auth_user']['user_email'];
       $username= $_SESSION['auth_user']['user_username'];
       $updatepassword = "UPDATE adminteacher SET password='$npassword' WHERE email = '$email' AND username='$username'";
       $updatepass=mysqli_query($conn,$updatepassword);
       
       echo 'successfully changed';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Result Management System</title>
    <link rel="stylesheet" href="forlogin/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="forlogin/css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="forlogin/css/animate-css/animate.min.css" media="screen">
    <link rel="stylesheet" href="forlogin/css/prism/prism.css" media="screen"> <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
    <link rel="stylesheet" href="forlogin/css/main.css" media="screen">
    <script src="forlogin/js/modernizr/modernizr.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body class="">
    <div class="main-wrapper">
    <div class="row mt-30 ">
            <div class="col-md-6">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title text-center">
                            <h4>Recover password</h4>
                            
                        </div>
                    </div>
                    <div class="panel-body p-20">

                        <div class="section-title">
                            <p class="sub-title">Student Result Management System</p>
                        </div>

                        <form class="form-horizontal" method="POST">
                        
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">New password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="npassword" class="form-control" id="inputEmail3" placeholder="new password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">comfirm password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="cpassword" class="form-control" id="inputEmail3" placeholder="repeat password">
                                </div>
                            </div>

                            <div class="form-group mt-20">
                                <div class="col-sm-offset-2 col-sm-10">

                                    <button type="submit" name="change" class="btn btn-success btn-labeled pull-right">change password<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                </div>
                            </div>
                        </form>
                        <!-- <div class="form-group mt-20">
                                                    		<div class="col-sm-offset-2 col-sm-10">

                                                    			<a href="forgetpassword.php" name="forgetpass" class="">forget password?<span class=""></span></a>
                                                    		</div>
                                                    	</div> -->



                    </div>
                </div>
                <!-- /.panel -->
                <!-- <p class="text-muted text-center"><small>Copyright © 2020 SRMS  </a></small> </p> -->
            </div>
            <!-- /.col-md-11 -->
        </div>
    </div>
    <script src="forlogin/js/jquery/jquery-2.2.4.min.js"></script>
    <script src="forlogin/js/jquery-ui/jquery-ui.min.js"></script>
    <script src="forloginjs/bootstrap/bootstrap.min.js"></script>
    <script src="forlogin/js/pace/pace.min.js"></script>
    <script src="forlogin/js/lobipanel/lobipanel.min.js"></script>
    <script src="forlogin/js/iscroll/iscroll.js"></script>

    <!-- ========== PAGE JS FILES ========== -->

    <!-- ========== THEME JS ========== -->
    <script src="forlogin/js/main.js"></script>
    <script>
        $(function() {

        });
    </script>

    <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
</body>

</html>