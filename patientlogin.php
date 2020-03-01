<html>
<head>
<title>patientlogin</title>
<style>
body{
	background-repeat:no-repeat;
  background-size: cover;
}
label{
	margin-left:8%;
}
input{
	height:11%; width:85%;
	font-size:2.5rem;
	border:2px solid black;
	margin-left:8%;
	margin-top:2%;
}
button{
	background-color:blue;
	color:white;
	font-size:3rem;
	padding:3%;
	border-radius:25px;
	width:85%;
	margin-left:8%;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#whiteBg").hide();
	$("#whiteBg").fadeIn(1200);
});
</script>
</head>
<body style="background-color:aqua">
<div style="font-size:8.5rem; color:white; margin-top:5%; text-align:center; text-shadow:0 0 18px blue, 0 0 15px blue, 0 0 10px blue "><b><i>Think Fit !!!</i></b></div>
<div style="font-size:3.2rem; text-align:center; margin-top:20%; color:white; text-shadow:0 0 10px blue">New user ? <a href="patientsignup.php">Sign up ....</a></div><br><br>
<div id="whiteBg" style="width:80%; height:45%; font-size:3.5rem; background-color:white; margin-left:12%; box-shadow: 3px 2px 30px gray, 3px 2px 12px gray">
	<form method="post" action="./includes/login.php">


	<br><label for="email">Email</label><br>
	<input type="text" name="email" placeholder="Your Email" style=""/><br><br>
	<label for="password">Password</label><br>
	<input type="password" name="password" placeholder="Enter password"/><br><br>
	<button type="submit" style="">Submit</button><br>
	<p style="font-size:3.2rem; color:blue; text-align:center">Forgot password ?</p>
	</form>
</div>
</body>
</html>
