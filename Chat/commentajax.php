<?php
session_start();
$table = $_SESSION['table'];
$sn="localhost";
	$un="aaqib";
	$pswd= "aaqib";
	$dbn= "thinkfit";

	$conn=new mysqli($sn, $un, $pswd, $dbn);

if(isset($_POST['user_comm']) && isset($_POST['user_name']))
{
  $comment=$_POST['user_comm'];
  $name=$_POST['user_name'];
  $sql = "INSERT INTO `comment-obesity`(`name`, `comment`, `post_time`) VALUES('$name','$comment',CURRENT_TIMESTAMP);";
  $conn->query($sql) ;
}
?>
