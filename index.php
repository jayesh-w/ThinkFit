<html>
<head>
<title>Index</title>
<style>
body{
	background-color:aqua;
}
li{

}
.vertical-menu {
  width: 55%;
  font-size:3rem;
  text-align:center;
  margin-left:25%;
  border:1rem solid white;
  border-radius:5%;
}

.vertical-menu a {
  background-color: #eee;
  color: black;
  display: block;
  padding: 8%;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #ccc;
}

.vertical-menu a.active {
  background-color: blue;
  color: white;
  font-size:4rem;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#whiteBg").hide();
	$("#whiteBg").fadeIn(2500);

	$("#welcomeSign").hide();
	$("#welcomeSign").fadeIn(1200);
});
</script>
</head>
<body>
<div style="font-size:8.5rem; color:white; margin-top:5%; text-align:center; text-shadow:0 0 18px blue, 0 0 15px blue, 0 0 10px blue "><b><i>Think Fit !!!</i></b></div>
<div style="margin-top:20%" id="welcomeSign">
	<p style="text-align:center; color:blue; text-shadow:0 0 18px white, 0 0 15px white, 0 0 10px white; font-size:5rem "><b>.....Welcome.....</b></p>
	<div id="whiteBg" class="vertical-menu" >
		<a href="#" class="active"><b>Are you a ?</b></a>
		<a href="patientlogin.php">Patient</a>
		<a href="doctorlogin.php">Doctor</a>
		<a href="adminlogin.php">Admin</a>

</div>
</div>
</body>
</html>
