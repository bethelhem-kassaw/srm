<?php
// $servername = "localhost";
// $username = "root";
// $password = "";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=studentresult", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   // echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }
?>


<?php

$host="localhost";
$user="root";
$password="";
$db="studentresult";
  // session_start();
$conn=mysqli_connect($host,$user,$password,$db);
if($conn==false){
  die("connection error");
}


?>