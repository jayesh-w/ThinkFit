<?php

$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];

if($pass != $pass2)
{
  header("location: ../patientlogin.php?m=checkpassword");
}

include './script.php';
$fn = $_POST['fn'];
$ln = $_POST['ln'];
$dob = $_POST['dob'];
$city = $_POST['city'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['contact'];

$sql = "INSERT INTO `user`(`fn`, `ln`, `birthdate`, `city`, `gender`, `emailid`, `phone` , `password`) VALUES ('$fn','$ln','$dob','$city','$gender','$email','$phone','$pass2');";
$qry = insertintoSql($sql);
if($qry)
{
  session_start();
  $_SESSION['username'] = $fn." ".$ln;
  $_SESSION['city'] = $city;
  $_SESSION['disease'] = "Obesity" ;


  header("location: ../patienthome.php");
}
else {
  header("location: ../patientlogin.php?m=error");
}

 ?>
