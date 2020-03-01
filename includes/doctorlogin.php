<?php
include './script.php';

$email = $_POST['email'];
$pass = $_POST['password'];

$sql = " SELECT * FROM `doctor` WHERE `email` = '$email' AND `password` = '$pass';";
$search = searchWhere($sql);
if($search == "Nullify")
{
  header("location: ../doctorlogin.php?m=CheckCredentials");
}
else {
  // code...
  $_SESSION['doctoremail'] = $email;
  $_SESSION['drname'] = $search['fn'];
  $_SESSION['specialization'] = $search['speciality'];

  header("location: ../doctorhome.php");

}




 ?>
