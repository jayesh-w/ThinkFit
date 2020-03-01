<?php

session_start();


include './script.php';
$room = $_GET['m'];
$username = $_GET['d'];
$email = $_SESSION['doctoremail'];
 if($room == "Obesity")
{
    $_SESSION['table'] = 'comment-obesity';
    $sql = "SELECT * FROM `chatusers` WHERE `email` = '$email' ; " ;
    $search = searchWhere($sql);
    if($search != "Nullify")
    {
        $_SESSION['uname'] = $search['chatuser'];
        header("location: ../Chat/chat.php");
    }
    else
    {
         $sql = "INSERT INTO  `chatusers`(`chatuser`,`email`,`disease`) VALUES ('$username' ,'$email','Anxiety' ) ; " ;
           $sq = insertintoSql($sql);
        if($sq == True)
        {
             $_SESSION['uname'] = $username;
            header("location: ../Chat/chat.php");
        }
        else
        {
            header("location: ../doctorhome.php");
        }

    }
}




?>
