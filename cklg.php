<?php

include('include/config.php');


function check_login($conn){

    if (isset($_SESSION['atid'])){
        $id=$_SESSION['atid'];
        // $username=$_SESSION['username'];
        $query= "SELECT * FROM adminteacher WHERE atid='$id' ";

        $result = mysqli_query($conn,$query);
        if ($result && mysqli_num_rows($result)>0){

            $user_data = mysqli_fetch_array($result);

            return $user_data;

        }

    }else{
    // $title= basename($_SERVER['PHP_SELF']);
    // if ($title=="index.php")
    // {
    //     header("location: index.php");
    // }
    // else {
    //   header("location: login-full.php");
    //   die;
    //   }
    header("location: index.php");}
      

    // redirect to login

}



 ?>