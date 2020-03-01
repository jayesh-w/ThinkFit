<?php
session_start();
 ?>
<html>
<head>
<title>patient Home</title>
<style>
body{
	background-repeat:no-repeat;
  background-size: cover;
}

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
<div style="font-size:8.5rem; color:white; margin-top:5%; text-align:center; text-shadow:0 0 18px blue, 0 0 15px blue, 0 0 10px blue;"><b><i>Think Fit !!!</i></b></div>
<div id="navbar">

	<a class="active" href="#">Home</a>
	<a href="./post.php">Portal</a>
	<a href="./userexplore.php">Explore</a>
	<a href="./roomSelect.php">Room</a>
</div>



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
<figure style="float:left; position:absolute">
	<img src="./images/maleicon2.jpg" height="350" width="350" style="border-radius:50%; margin-top:2%">
	<figcaption style="color:white; width:88%; height:10%; font-size:2.5rem; text-align:center; background-color:indigo; padding:3%"><?php echo $_SESSION['username']; ?></figcaption>
</figure>
<div style="background-color:white; font-size: 2.5rem; color:black; width:50%; height:18%; position:relative; margin-left:45%; margin-top:4%; box-shadow:13px 12px gray">
	<br>&nbsp&nbsp<b>Content :</b><i> <?php echo $_SESSION['disease']; ?> </i><br>
	&nbsp&nbsp<b>City :</b><i> Mumbai</i><br>
	&nbsp&nbsp<b>Followers :</b><i>20</i><br>
	&nbsp&nbsp<b>Rating :</b><i> * * * * *</i><br>
</div><br><br><br><br><br>
<figure style="margin-top:9%;  margin-left:6%; float:left ">
	<img src="./images/icon1.png" height="330" width="400" style="border-radius:20px; box-shadow:3px 2px 20px gray, 3px 2px 2px gray"/>
	<figcaption style="font-size:3.3rem; color:blue "><b>Disease</b>	</figcaption>
</figure>
<figure style="margin-top:9%; margin-left:5%">
	<img src="./images/icon4.png" height="330" width="400" style="border-radius:20px; box-shadow:3px 2px 20px gray, 3px 2px 2px gray"/>
	<figcaption style="font-size:3.3rem; color:blue "><b>Symptoms</b>	</figcaption>
</figure><br><br><br>
<figure style=" margin-left:6%; float:left ">
	<img src="./images/icon3.png" height="330" width="400" style="border-radius:20px; box-shadow:3px 2px 20px gray, 3px 2px 2px gray"/>
	<figcaption style="font-size:3.3rem; color:blue"><b>Medicine</b>	</figcaption>
</figure>
<figure style=" margin-left:5%">
	<img src="./images/icon5.jpg" height="330" width="400" style="border-radius:20px; box-shadow:3px 2px 20px gray, 3px 2px 2px gray"/>
	<figcaption style="font-size:3.3rem; color:blue "><b>Suggestions</b>	</figcaption>
</figure><br><br><br>

</body>
</html>
