<html>
<head>
<title>adminlogin</title>
<style>
	label{
	margin-left:8%;
}
input{
	height:15%; width:85%;
	font-size:2.5rem;
	border:2px solid black;
	margin-left:8%;
	margin-top:2%;
}
a{
	background-color:blue;
	color:white;
	font-size:3rem;
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
<div id="whiteBg" style="width:80%; height:45%; font-size:3.5rem; background-color:white; margin-left:12%; box-shadow: 3px 2px 30px gray, 3px 2px 12px gray; margin-top:30%">
	<form name="form1" method="post" action="./includes/adminlogin.php">
	<br><h3 style="text-align:center">Admin Login ..</h3>
	<label  for="password">Password</label><br>
	<input id="pass" type="password" name="password" placeholder="Enter password"/><br><br>
	<a href="./adminhome.php" <button onclick="CheckPassword()" style="width:40%;" type="submit" >Submit</button><br>
	<div id="wrong"></div>
	</form>
</div>
</body>
<script>
	function CheckPassword()
	{
	var passw=1234;
	var myInput = document.getElementById("pass").value;
	if(myInput == passw)
	{
	alert('Correct')
	return true;
	}
	else
	{
	alert('Wrong...!')
	return false;
	}
	}
</script>
</html>
