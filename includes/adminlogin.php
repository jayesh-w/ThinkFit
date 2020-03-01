<?php
include './script.php';


$pass = $_POST['password'];

$sql = " SELECT * FROM `admin` WHERE  `password` = '$pass';";
$search = searchWhere($sql);
if($search == "Nullify")
{
  header("location: ../adminlogin.php?m=Incorrect Password");
}
else {
  // code...

  header("location: ../adminhome.php");
  

}






 ?>
