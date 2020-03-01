<?php
session_start();
include './connect.php';
$username = $_SESSION['username'];

//	date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s');

$answer = $_POST['aliaseChoose'];
if ($answer == "1")
{
    $author = $username ;

}
elseif($answer == "2")
{
    $author = "Anonymous";
}
elseif ($answer == "3")
{
    $author = $_POST['nickInput'];
}

$authorEmail = $_SESSION['email'];
$disease = $_POST['selectDisease'];
$bgcolor = $_POST['BoxColor'];
$textcolor = $_POST['FontColor'];
$content = $_POST['content'];
$postType = $_POST['postType'];


$sql = "INSERT INTO blogs (authorEmail, blog_author, authorDisease, blog_bgcolor, blog_textcolor,blog_content,blog_time, blog_type) VALUES ('$authorEmail','$author', '$disease', '$bgcolor', '$textcolor', '$content', '$date', '$postType')";


if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
   // echo "Error: " . $sql . "<br>" . $conn->error;
}
header("location: ../post.php");

$conn->close();

?>
