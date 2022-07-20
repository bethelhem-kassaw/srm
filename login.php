
<?php
    session_start();
    include('include/config.php');

    $err="";
if(isset($_POST['login'])){
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    
    // $pwd=md5($password);
    $login_query="SELECT * FROM adminteacher WHERE username='$username' AND password='$password'";
    $login_query_run=mysqli_query($conn,$login_query);
    
    
    if(mysqli_num_rows($login_query_run)>0){

        foreach ($login_query_run as $data){
        $user_id=$data['atid'];
        $user_username = $data['username'];
        $user_email=$data['email'];
        $role=$data['role'];
        }
        
        
        
        $_SESSION['auth']=true;
        $_SESSION['auth_role']="$role";
         $_SESSION['auth_user']=[
            'user_id'=>$user_id,
            'user_username'=>$user_username,
            'user_email'=>$user_email
         ];

         if($_SESSION['auth_role']=='admin'){
            echo  'there Admin';
            header("location: admin/dashboard.php");
            // die($_SESSION['auth_user']['username']);
            exit (0);
         }elseif($_SESSION['auth_role']=='teacher'){
            echo   'there teacher';
            header("location: teacher/teacherdashboard.php");
            exit (0);
         }
    }else{
        
        // header("Location : index.php");
        echo 'incorrect login credentials';
       
            // exit (0);
    }

}




// $err="";
//     if ($_SERVER['REQUEST_METHOD'] == "POST") {



//         $username = $_POST['username'];

//         $password = $_POST['password'];
//     //    $pass=md5($password);

//         $sql = "SELECT * FROM adminteacher WHERE username='$username' AND password='$password' ";
//         $result=mysqli_query($conn, $sql);
//             if($result)
//             {
//                 if($result && mysqli_num_rows($result)>0){
//                     $user_data = mysqli_fetch_assoc($result);

//                     if($user_data['password']===$password){
//                         $_SESSION['username']=$user_data['username'];
//                         $_SESSION['role']=$user_data['role'];
//                         $_SESSION['atid']=$user_data['atid'];
//                         if( $user_data['role']=="admin"){
//                             // $user_data['username']=$username;
//                         header("Location:admin/dashboard.php");}
//                         elseif($user_data['role']=="teacher"){
//                             // $user_data['username']=$username;
//                             header("Location:teacher/teacherdashboard.php");
//                         }
//                         die;
//                     }
//                 }
//             }
//             $err = "wrong username or password!";
//         }


// if(isset($_POST['login'])){
//     $username=$_POST['username'];
//     $password=$_POST['password'];

//     $query="SELECT * FROM adminteacher WHERE username='$username' AND password='$password'";
//     $result=mysqli_query($conn,$query);
//     $row=mysqli_num_rows($result);

//     if($row>0){
//         $user_data = mysqli_fetch_assoc($result);
//         // $_SESSION['username']=$username;
// // $_SESSION['password']='password';
//         $_SESSION['role']='role';

// if($_SESSION['role']=='admin'){
//     $_SESSION['username']=$username;
//     header("Location:admin/dashboard.php");
// }elseif($_SESSION['role']=='teacher'){
//     $_SESSION['username']=$username;
//     header("Location:teacher/teacherdashboard.php");
// }else {
//     echo 'unknown role';
// }


//     }else{
// echo 'sorry wrong credentials';
//     }


// }

// if (isset($_POST['login'])){
//                 $username = $_POST['username'];
//                 $pwd= $_POST['password'];
               
//                 $query = "SELECT * FROM adminteacher WHERE username='$username'AND password='$pwd'";
                
               
//                 $data= mysqli_query($conn, $query);
//                 $total=mysqli_num_rows($data);


//                 if($total>0){
//                     $result=mysqli_fetch_array($data);
//                     $_SESSION['user_name']=$username;
                    
//                     $_SESSION['role']='role';
//                     if($result['role']=='admin'){
                    
//                     header('location:admin/dashboard.php');


//                     }elseif($result['role']=='teacher'){
//                         // header('location:teacher/teacherdashboard.php');
//                         header('location:dummy.php');
//                     }
//                 }
// }


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Student Result Management System</title>
        <link rel="stylesheet" href="forlogin/css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="forlogin/css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="forlogin/css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="forlogin/css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="forlogin/css/main.css" media="screen" >
        <script src="forlogin/js/modernizr/modernizr.min.js"></script>
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body class="">
        <div class="main-wrapper">

            <div class="">
           




                <div class="row">
                    <h1 align="center">Online Student Result Management System</h1>
                    <div class="col-lg-6 visible-lg-block">
                        <section class="section">
                            <div class="row mt-40">
                                <div class="col-md-10 col-md-offset-1 pt-50">

                                    <div class="row mt-30 ">
                                        <div class="col-md-11">
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <div class="panel-title text-center">
                                                        <h4>For Students</h4>
                                                    </div>
                                                </div>
                                                <div class="panel-body p-20">

                                                    <div class="section-title">
                                                        <p class="sub-title">Online Student Result Management System</p>
                                                    </div>

                                                    <form class="form-horizontal" method="post">
                                                        <div class="form-group">
                                                            <label for="inputEmail3" class="col-sm-6 control-label">Search your result</label>
                                                            <div class="col-sm-6">
                                                               <a href="student/stulogin.php">click here</a>
                                                            </div>
                                                        </div>

                                                    </form>




                                                </div>
                                            </div>
                                            <!-- /.panel -->

                                        </div>
                                        <!-- /.col-md-11 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </section>
                    </div>
                    <div class="col-lg-6">
                        <section class="section">
                            <div class="row mt-40">
                                <div class="col-md-10 col-md-offset-1 pt-50">

                                    <div class="row mt-30 ">
                                        <div class="col-md-11">
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <div class="panel-title text-center">
                                                        <h4>Admin/Teacher Login</h4>
                                                    </div>
                                                </div>
                                                <div class="panel-body p-20">

                                                    <div class="section-title">
                                                        <p class="sub-title">Student Result Management System</p>
                                                    </div>

                                                    <form class="form-horizontal" method="POST">
                                                    
                                                    	<div class="form-group">
                                                    		<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                                                    		<div class="col-sm-10">
                                                    			<input type="text" name="username" class="form-control" id="inputEmail3" placeholder="UserName">
                                                    		</div>
                                                    	</div>
                                                    	<div class="form-group">
                                                    		<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                                    		<div class="col-sm-10">
                                                    			<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                    		</div>
                                                    	</div>

                                                        <!-- <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">Role</label>
                                                    <div class="col-sm-6">
                                                        <select name="role" class="form-control" id="default" required="required">
                                                            <option value="">Select role</option>

                                                            <option value="admin">admin</option>
                                                            <option value="teacher">teacher</option>
                                                            
                                                        </select>
                                                    </div>
                                                </div> -->
                                                       
                                                        <div class="form-group mt-20">
                                                    		<div class="col-sm-offset-2 col-sm-10">

                                                    			<button type="submit" name="login" class="btn btn-success btn-labeled pull-right">Sign in<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                    		</div>
                                                    	</div>
                                                    </form>
                                                    <div class="form-group mt-20">
                                                    		<div class="col-sm-offset-2 col-sm-10">

                                                    			<a href="forgetpassword.php" name="forgetpass" class="">forget password?<span class=""></span></a>
                                                    		</div>
                                                    	</div>



                                                </div>
                                            </div>
                                            <!-- /.panel -->
                                            <!-- <p class="text-muted text-center"><small>Copyright © 2020 SRMS  </a></small> </p> -->
                                        </div>
                                        <!-- /.col-md-11 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </section>

                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /. -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
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
            $(function(){

            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>