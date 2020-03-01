<?php
session_start();
$sp = $_SESSION['specialization'];
$dr = $_SESSION['drname'];
$dr = "Dr.".$dr;
?>

<html>
<head>
<title>doctorhome</title>
<style>
#navbar {
  overflow: hidden;
  background-color: #333;

}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 2rem 3rem;
  text-decoration: none;
  font-size: 3rem;

}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: gray;
  color: white;
}


.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}
</style>
</head>
<body style="background-color:aqua">
<div style="font-size:8.5rem; color:white; margin-top:5%; text-align:center; text-shadow:0 0 18px blue, 0 0 15px blue, 0 0 10px blue "><b><i>Think Fit !!!</i></b></div><hr><br>
<figure>
	<img src="./images/doctorf.png" width="250" height="250" style="border-radius:50%; margin-left:5%"/>
	<figcaption style="position:relative; background-color:white; font-size:2.5rem; width:30%; margin-left:5%; margin-top:3%; text-align:center; height:3%"><?php echo $dr ; ?></figcaption>
</figure>
<div style="background-color:white; font-size: 2.5rem; color:black; width:50%; height:18%;box-shadow:13px 12px gray; margin-left:40%; margin-top:-35%">
	<br>&nbsp&nbsp<b>Experience :</b><i> 6 yrs</i><br>
	&nbsp&nbsp<b>City :</b><i> Mumbai</i><br>
	&nbsp&nbsp<b>Speciality :</b><i> Anxiety</i><br>
	&nbsp&nbsp<b>Rating :</b><i> * * * * *</i><br>
</div><br><br>
<div id="navbar">

	<a class="active" href="javascript:void(0)">Home</a>
	<a href="./includes/drchatroom.php?m=<?php echo $sp;?>&d=<?php echo $dr;?>">Room</a>
	<a href="javascript:void(0)">Settings</a>
	<a href="javascript:void(0)">Log Out</a>
</div><br>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
  
</script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php
	include './includes/connect.php';
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



	 <div style="height:584px;margin-top:627px" class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
	  	 <!-- msg to be display on pop up -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="font-size:71px" class="modal-title">Enter Comment:</h4>
        </div>
		<form style="font-size:113px">
			<!-- Input field to enter username-->
			<input  style="font-size:48px; height:259px;width:598px" class="form-control" type="text" style="width:450;center;" placeholder="Enter Comment">
			<div class="modal-footer">
			<!--submit bun to go coin's page.-->
			<button style="font-size:53px; height:87px;width:200px" onclick="window.location.href = '';" type="submit" value="Submit" class="btn btn-primary mb-2">Submit</button>
			<button  style="font-size:53px; height:87px;width:200px" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</form>
      </div>

    </div>
	</div>





</body>
</html>
