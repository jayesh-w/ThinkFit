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
	height:46px;
	font-size:43px;
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
		<li id="explore">Explore</li>
		<li id="remDoc">Remove doctor</li>
	</ul>
</div>
<div id="functions"></div>
<form style="font-size:300%;margin-top:-131px;padding:196px; display:none" id="doctreg">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-group">
    <label for="inputName">Name</label>
    <input type="text" class="form-control" id="inputName" placeholder="Enter Name..">
  </div>
  <div class="form-group">
    <label for="inputAddress">Clinic Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="clinic address">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>

    <div class="form-group col-md-2">
      <label for="inputExp">Experience</label>
      <input type="text" class="form-control" id="inputExp">
    </div>
  </div>

  <button style="height:51px;width:137px;background-color:blue;color:white;font-size:41px;" type="submit" class="btn btn-primary">Done</button>
</form>



<form style="font-size:300%;margin-top:-131px;padding:196px; display:none" id="removeuser">

  <div class="form-group">
    <label for="removeUserName">User Name: </label>
    <input type="text" class="form-control" id="removeUserName" placeholder="Enter Name..">
  </div>
  <div class="form-group">
    <label for="rmvUserEmail">User Email:</label>
    <input type="text" class="form-control" id="rmvUserEmail" placeholder="emailId...">
  </div>


  <button style="height:89px;width:230px;background-color:blue;color:white;font-size:41px;" type="submit" class="btn btn-primary">Delete User</button>
</form>

<form style="font-size:300%;margin-top:-131px;padding:196px; display:none" id="removedoct">

  <div class="form-group">
    <label for="removeDoctName">Doctor Name: </label>
    <input type="text" class="form-control" id="removeDoctName" placeholder="Enter Name..">
  </div>
  <div class="form-group">
    <label for="rmvDoctEmail">Doctor Email:</label>
    <input type="text" class="form-control" id="rmvDoctEmail" placeholder="emailId...">
  </div>


  <button style="height:89px;width:230px;background-color:blue;color:white;font-size:41px;" type="submit" class="btn btn-primary">Delete User</button>
</form>

</body>
</html>
