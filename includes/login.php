<?php
include './script.php';

$email = $_POST['email'];
$pass = $_POST['password'];

$sql = " SELECT * FROM `user` WHERE `emailid` = '$email' AND `password` = '$pass';";
$search = searchWhere($sql);
if($search == "Nullify")
{
  header("location: ../patientlogin.php?m=".$email.$pass);
}
else {
  // code...
  $_SESSION['email'] = $email;
  $_SESSION['username'] = $search['fn'];
  $_SESSION['city'] = $search['city'];
  $_SESSION['disease'] = "obesity"  ;
  header("location: ../patienthome.php");

}




 ?>
