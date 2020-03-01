<html>
<head>
<title>doctorlogin</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

	var docRegFlag=0;
  $("#docReg").click(function(){
		if (docRegFlag ==1)
		{
			docRegFlag=0;
			$("#doctreg").hide();
			$(this).removeClass("liHoverClass");
		}
		else{
			resetButtons();
			docRegFlag=1;
			$(this).addClass("liHoverClass");
			$("#doctreg").show();

		}
  });

	var remUserFlag=0;
	$("#remUser").click(function(){
		if (remUserFlag ==1)
		{
			remUserFlag=0;
			$("#removeuser").hide();
			$(this).removeClass("liHoverClass");
		}
		else{
			resetButtons();
			remUserFlag=1;
			$(this).addClass("liHoverClass");
			$("#removeuser").show();
		}
  });

/*
	var exploreFlag=0;
	$("#explore").click(function(){
		if (exploreFlag ==1)
		{
			exploreFlag=0;
			$("#doctreg").hide();
			$(this).removeClass("liHoverClass");
		}
		else{
			resetButtons();
			exploreFlag=1;
			$(this).addClass("liHoverClass");
			$("#doctreg").show();
		}
	});
*/

	var remDocFlag=0;
	$("#remDoc").click(function(){
		if (remDocFlag ==1)
		{
			remDocFlag=0;
			$("#removedoct").hide();
			$(this).removeClass("liHoverClass");
		}
		else{
			resetButtons();
			remDocFlag=1;
			$(this).addClass("liHoverClass");
			$("#removedoct").show();
		}
	});
	function resetButtons()
	{
		//alert("Hello");
		docRegFlag=0;
		$("#doctreg").hide();
		$("#docReg").removeClass("liHoverClass");

		remUserFlag=0;
		$("#removeuser").hide();
		$("#remUser").removeClass("liHoverClass");

		remDocFlag=0;
		$("#removedoct").hide();
		$("#remDoc").removeClass("liHoverClass");
	}
});


</script>
<style>
.liHoverClass{
	font-size:4.5rem;
	color:blue;
}
input{
	height:4%;
	font-size:43px;
	width:80%;
	margin-left:10%;
}
label{
	margin-left:10%;
}
</style>
<script>/*
function doctreg(){
	document.getElementById('doctreg').style.display="block";
}
function rmvuser(){
	document.getElementById('removeuser').style.display="block";
}
function rmvpost(){
	document.getElementById('').style.display="block";
}
function rmvdoct(){
	document.getElementById('removedoct').style.display="block";
}*/
</script>
</head>
<body style="background-color:aqua">
<div style="font-size:8.5rem; color:white; margin-top:5%; text-align:center; text-shadow:0 0 18px blue, 0 0 15px blue, 0 0 10px blue "><b><i>Think Fit !!!</i></b></div>
<div style="width:93%; height:20%; font-size:3.5rem; background-color:white; margin-left:3%; box-shadow: 3px 2px 30px gray, 3px 2px 12px gray; margin-top:7%">
	<ul style="margin-left:5%; padding-top:4%" type="none">
		<li id="docReg">Doctor registration</li>
		<li id="remUser">Remove user</li>
		<li id="explore"><a href="./adminexplore.php" style="text-decoration:none;color:black;">Explore</a></li>
		<li id="remDoc">Remove doctor</li>
	</ul>
</div>
<div id="functions"></div>
<form style="font-size:3rem; display:none; margin-left:5%; margin-top:3%; width:90%" id="doctreg">
		<fieldset>
      <br><label for="inputEmail4">Email</label><br>
      <input type="email" class="form-control" id="inputEmail4"><br><br>
  
   
      <label for="inputPassword4">Password</label><br>
      <input type="password" class="form-control" id="inputPassword4"><br><br>
   
  
    <label for="inputName">Name</label><br>
    <input type="text" class="form-control" id="inputName" placeholder="Enter Name.."><br><br>
  
      <label for="inputCity">City</label><br>
      <input type="text" class="form-control" id="inputCity"><br><br>
  
      <label for="inputExp">Experience</label><br>
      <input type="text" class="form-control" id="inputExp"><br><br>
   
  <button style="height:6%;width:20%;background-color:blue;color:white;font-size:41px;margin-left:10%;padding:3%" type="submit" class="btn btn-primary">Done</button>
	</fieldset>
</form>



<form style="font-size:3rem; display:none; margin-left:5%; margin-top:3%; width:90%" id="removeuser">

  <fieldset>
    <label for="removeUserName">User Name: </label><br>
    <input type="text" class="form-control" id="removeUserName" placeholder="Enter Name.."><br><br>
  
    <label for="rmvUserEmail">User Email:</label><br>
    <input type="text" class="form-control" id="rmvUserEmail" placeholder="emailId..."><br><br>
  

  <button style="height:6%;width:60%;background-color:blue;color:white;font-size:41px;margin-left:10%;padding:3%" type="submit" class="btn btn-primary">Delete User</button>
	</fieldset>
</form>

<form style="font-size:3rem; display:none; margin-left:5%; margin-top:3%; width:90%" id="removedoct">

   <fieldset>
    <label for="removeDoctName">Doctor Name: </label><br>
    <input type="text" class="form-control" id="removeDoctName" placeholder="Enter Name.."><br><br>
  
    <label for="rmvDoctEmail">Doctor Email:</label><br>
    <input type="text" class="form-control" id="rmvDoctEmail" placeholder="emailId..."><br><br>
 


  <button style="height:6%;width:60%;background-color:blue;color:white;font-size:41px;margin-left:10%;padding:3%" type="submit" class="btn btn-primary">Delete User</button>
 </fieldset>
</form>

</body>
</html>
