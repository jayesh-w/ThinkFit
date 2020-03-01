<html>
<head>
<title>patientsignup</title>
<style>
.inp{
	font-size:2.5rem;
	border:1px solid black;
	width:40%;
	margin-top:1%;
	padding:1%;
}
</style>
</head>
<body style="background-color:aqua">
<div style="font-size:8.5rem; color:white; margin-top:5%; text-align:center; text-shadow:0 0 18px blue, 0 0 15px blue, 0 0 10px blue "><b><i>Think Fit !!!</i></b></div>
<fieldset style="margin-top:3%">
<form style="background-color:white; font-size:3rem" method="POST" action="./includes/register.php">
	<h3 style="text-align:center">Personal details</h3>
	<label for="fn" style="margin-left:6%">First name</label>
	<label for="fn" style="padding-left:25%">Last name</label><br>
	<input id="fn" class="inp" type="text" name="fn" placeholder="First name" style="margin-left:6%"/>
	<input id="ln" class="inp" type="text" name="ln" placeholder="Last name" style="margin-left:8%"/><br><br>


	<label for="fn" style="margin-left:6%">Password </label><br>
	<input type="password" name="pass" placeholder="*********" style="margin-left:6%; height:4%; margin-top:1%; font-size:2.5rem; padding:1%; border:1px solid black; width:80%"/><br><br>
	<label for="fn" style="margin-left:6%">Confirm Password</label><br>
	<input type="password" name="pass2" style="margin-left:10%; margin-left:6%; height:4%; margin-top:1%; font-size:2.5rem; padding:1%; border:1px solid black; width:80%" placeholder="*********"/><br><br>




	<label for="fn" style="margin-left:6%">Birth date</label>
	<label for="fn" style="padding-left:27%">City</label><br>
	<input id="dob" class="inp" type="date" name="dob" placeholder="Birth date" style="margin-left:6%"/>
	<input id="city" class="inp" type="text" name="city" placeholder="City" style="margin-left:8%"/><br><br>
	<label style="margin-left:6%">Gender : &nbsp&nbsp</label>

	<input id="male" type="radio" name="gender" value="male" style="width:2%; height:2%"/>&nbsp&nbspMale


	<input id="female" type="radio" name="gender" value="female" style="width:2%; height:2%; margin-left:5%"/>&nbsp&nbspFemale<br>

	<h3 style="text-align:center">Contact details</h3>
	<label for="fn" style="margin-left:6%">Email Id :</label><br>
	<input type="email" name="email" placeholder="email" style="margin-left:6%; height:4%; margin-top:1%; font-size:2.5rem; padding:1%; border:1px solid black; width:80%"/><br><br>
	<label for="fn" style="margin-left:6%">Phone :</label><br>
	<input type="tel" name="contact" style="margin-left:10%; margin-left:6%; height:4%; margin-top:1%; font-size:2.5rem; padding:1%; border:1px solid black; width:80%" placeholder="Contact no."/><br><br>
	<label for="fn" style="margin-left:6%">Disease</label><br>
	<input type="text" name="disease" style="margin-left:10%; margin-left:6%; height:4%; margin-top:1%; font-size:2.5rem; padding:1%; border:1px solid black; width:80%" placeholder="Disease"/><br><br>
	
	<button type="reset" style="font-size:2.5rem; background-color:blue; color:white; height:4.5%; width:25%; border-radius:10px; margin-left:6%" >Clear</button>
	<button type="submit" style="font-size:2.5rem; background-color:green; color:white; height:4.5%; width:25%; border-radius:10px; margin-left:3%" >Confirm</button><br><br>
</form>
</fieldset>
</body>
</html>
