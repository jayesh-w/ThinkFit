<?php
session_start();
$table = $_SESSION['table'];
$sn="remotemysql.com";
	$un="6MYYpFUn4B";
	$pswd= "ru7XABTn0d";
	$dbn= "6MYYpFUn4B";

	$conn=new mysqli($sn, $un, $pswd, $dbn);

if(isset($_POST['user_comm']) && isset($_POST['user_name']))
{
  $comment=$_POST['user_comm'];
  $name=$_POST['user_name'];
  $sql = "INSERT INTO `comment-obesity`(`name`, `comment`, `post_time`) VALUES('$name','$comment',CURRENT_TIMESTAMP);";
  $conn->query($sql) ;
}
?>
