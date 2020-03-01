<?php
include("./config.php");
session_start();

$uName = $_POST['username'];
$pWord = $_POST['password'];
$email = $_POST['email'];

$qry = "SELECT * FROM `chatusers` WHERE `email`='$email'; ";
$result = $conn->query($qry);
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $_SESSION['uname']=$row['chatuser'];
    header('location: ./chat.php');
  
} else {
  echo "Nullify";
    echo $uName,$pWord;
}

?>
