<html>
<head>
<title>adminexplore</title>
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



<div class="content">
	
	<div id="p1" style="background-color:white; width:90%; height:54%; margin-left:5%; border-radius:20px; margin-top:-25%; box-shadow:0 0 5px red,0 0 13px yellow, 0 0 8px yellow">
		<div id="username" style="font-size:4rem; padding-left:5%; padding-top:3%"><b>Anonymous</b><img id="imge" style="margin-left:50%" src="./images/delt.png" height="65" width="65"></div><hr>
		<div id="post" style="height:63%; font-size:3rem">Hey, guyzzzzz</div><hr>
		<button style="background-color:white; border:none; margin-left:3%" type="button" onclick="document.getElementById('heart').src='./images/heart1.png'"><img src="./images/heart2.png" id="heart" width="85" height="85"/></button>
		<button   style="background-color:white; border:none; margin-left:4%" type="button" ><img src="./images/comment.png" id="heart" width="100" height="100"/></button><br>
		<div id="likes" style="font-size:2rem; margin-left:2%">* 112 likes<br>* 10 comments</div>
	</div><br>
	<div id="p2" style="background-color:white; width:90%; height:54%; margin-left:5%; border-radius:20px; margin-top:2%; box-shadow:0 0 5px red,0 0 13px yellow, 0 0 8px yellow">
		<div id="username" style="font-size:4rem; padding-left:5%; padding-top:3%"><b>Anonymous</b><img id="imge" style="margin-left:50%" src="./images/delt.png" height="65" width="65"></div><hr>
		<div id="post" style="height:63%; font-size:3rem">Hey, guyzzzzz</div><hr>
		<button style="background-color:white; border:none; margin-left:3%" type="button" onclick="document.getElementById('heart1').src='./images/heart1.png'"><img src="./images/heart2.png" id="heart1" width="85" height="85"/></button>
		<button    style="background-color:white; border:none; margin-left:4%" type="button" ><img src="./images/comment.png" id="heart" width="100" height="100"/></button><br>
		<div id="likes" style="font-size:2rem; margin-left:2%">* 112 likes<br>* 10 comments</div>
	</div>
</div>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Delete Post ?</p>
	
	<button onclick="delete1()" type="button" style="width:40%; font-size:2.5rem; background-color:blue; color:white; height:5%; border:1px solid black">Delete</button>
	
  </div>

</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("imge");

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
<script>
	function delete1()
	{
		document.getElementById("p1").style.display = "none";
	}
	function delete2()
	{
		document.getElementById("p2").style.display = "none";
	}
</script>
</body>
</html>