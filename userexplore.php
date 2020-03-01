<?php 
session_start();
include './includes/connect.php';

?>

<html>
<head>
<title>userexplore</title>
<style>
.navbar {
  overflow: hidden;
  position: fixed;
  top: 0;
  width: 100%;
  background-color:black;
  opacity:1;
  height:23%;
  margin-left:0;
  margin-bottom:20%;
}
.content{
	margin-top:50%
}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 50%; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 10%;
  border: 1px solid #888;
  width: 50%;
  font-size:4rem;

}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 3rem;
  font-weight: bold;
 
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body style="background-color:aqua">
<div >
	<figure class="navbar">
		<img src="./images/maleicon1.jpg" height="350" width="350" style="border-radius:50%; margin-top:2%; float:left; position:fixed; box-shadow:0 0 16px yellow,0 0 10px blue; "></img>
		<figcaption style="font-size:4.5rem; background-color:white; color:blue; width:50%; margin-left:45%; margin-top:12%; text-align:center; border-radius:25px; box-shadow:0 0 16px yellow,0 0 10px blue "><?php echo $_SESSION['username'];?></figcaption>
	</figure>
</div><br>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$sql = "SELECT * FROM `blogs`;";


$result = $conn->query($sql) or die($conn->error);

$row = $result->fetch_assoc();
while($row = $result->fetch_assoc())
{
$authorname = $row['blog_author'];
$authordisease = $row['authorDisease'];
$content = $row['blog_content'];
$posttype = $row['blog_type'];
	
$bgcolor = $row['blog_bgcolor'];
$textcolor = $row['blog_textcolor'];	
?>
<div class="content">

<div style="background-color:white; width:90%; height:54%; margin-left:5%; border-radius:20px; margin-top:2%; box-shadow:0 0 5px red,0 0 13px yellow, 0 0 8px yellow">
<div id="username" style="font-size:4rem; padding-left:5%; padding-top:3%"><b><?=$authorname?></b></div><hr>
<div style="height:63%; background-color:<?=$bgcolor?>; color:<?=$textcolor?>;">
<div id="posttype" style="font-size:3rem"><?=$posttype?></div><br>
<div id="postdisease" style="font-size:3rem"><?=$authordisease?></div><br>
<div id="postcontent" style="font-size:3rem"><?=$content?></div>
</div><hr>
<button style="background-color:white; border:none; margin-left:3%" type="button" onclick="document.getElementById('heart').src='./images/heart1.png'"><img src="./images/heart2.png" id="heart" width="85" height="85"/></button>
<button style="background-color:white; border:none; margin-left:4%" id="myBtn" type="button" ><img src="./images/comment.png" id="heart" width="100" height="100"/></button><br>
<div id="likes" style="font-size:2rem; margin-left:2%">* 112 likes<br>* 10 comments</div>
</div>
</div>
	
	
<?php
}

?>






<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Enter comment..</p>
	<form method="post" action="">
	<input type="text" name="comment" style="width:85%; height:10%"/><br><br>
	<input type="submit" style="width:40%; font-size:2.5rem; background-color:blue; color:white; height:5%; border:1px solid black"/>
	</form>
  </div>

</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>
