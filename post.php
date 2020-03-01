<?php
session_start();
$usernames = $_SESSION['username'];
$emails = $_SESSION['email'];
?>﻿
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    $("#BoxColor").change(function(){

        var selectedColor = $(this).children("option:selected").val();

         if(selectedColor=="none")
         {
           $("#content").css("background-color", "transparent");
         }
         else {
           $("#content").css("background-color", selectedColor);
         }
    });

    $("#FontColor").change(function(){

        var selectedFont = $(this).children("option:selected").val();
        $("#content").css("color", selectedFont);
    });
});
  </script>

    <meta charset="utf-8" />
    <title>Comment Box</title>
    <link rel="stylesheet" type="text/css" href="smart-forms.css">

	<link href="buttons.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="smart-wrap">
        <div style="height: 60%; max-width:88%;"  class="smart-forms smart-container wrap-3">

            <div  style="font-size: 440%;"  class="form-header header-blue">
                <h4><i></i> Add Post </h4>
            </div><!-- end .form-header section -->

            <form method="post" action="./includes/blogpost.php?u=<?php echo $usernames;?>&e=<?php echo $emails;?>" id="comment2">
                <div class="form-body theme-blue">
                    <div class="section">
                        <table>
                            <span style="font-size: 300%;" >Post As:</span>
                            <tr>
                                <td><input type="radio" name="aliaseChoose" value="1" checked="true"></input>
                                </td>
                                <td>
                                    <span style="font-size: 205%"  id="real" name ="real"><?php echo $usernames; ?></span>
                                </td>
                            </tr>
                            <tr>

                                <td><input type="radio" name="aliaseChoose" value="2"></input>
                                </td>
                                <td>
                                    <span style="font-size: 205%" id="anon" name="anon">Anonymous</span>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="aliaseChoose" value="3"></input>
                                </td>
                                <td>
                                    <span style="font-size: 205%" id="nickName"><input type="text" id="nickInput" placeholder="Nick Name" name="nickInput"/></span>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="section">


							<select style="font-size: 205%;height: 7%;width:100%;" class="gui-input" id="selectDisease" name="selectDisease">
							  <option value="1">..Select Disease..</option>
							  <option value="Anxiety">Anxiety</option>
							  <option value="Psoriasis">Psoriasis</option>
							  <option value="Alzheimers">Alzheimers</option>
							  <option value="Obesity">Obesity</option>
							  <option value="Food Allergies">Food Allergies</option>
							  <option value="Epilepsy">Epilepsy</option>
							</select>
                    </div><!-- end section -->
					<div class="section">


							<select style="font-size: 205%;height: 7%;width:100%;" class="gui-input" id="postType"  name="postType">
							  <option>Please select type of blog</option>
							  <option  >none</option>
							  <option value="Symptoms" >Symptoms</option>
							   <option value="Medicines" >Medicines</option>
							    <option value="Diet_Change" >Diet Change</option>


							</select>
                    </div><!-- end section -->
					<div class="section">


							<select style="font-size: 205%;height: 7%;width:100%;" class="gui-input" id="BoxColor"  name="BoxColor">
							  <option>..Select Background color..</option>
							  <option  >none</option>
							  <option style="background-color:red; color:white" value="Red" >Red</option>
							   <option style="background-color:blue;color:white" value="blue" >blue</option>
							    <option style="background-color:black;color:white" value="black" >black</option>


							</select>
                    </div><!-- end section -->
					<div class="section">


							<select style="font-size: 205%;height: 7%;width:100%;" class="gui-input" id="FontColor" name="FontColor">
							  <option>..Select Font color..</option>
							   <option style=" color:red" value="Red">Red</option>
							   <option style="color:blue" value="blue">blue</option>
							   <option style="color:yellow" value="yellow">yellow</option>
							   <option style="color:black" value="black">black</option>
							   <option style="color:white" value="white">white</option>
							</select>
                    </div><!-- end section -->



                    <div class="section">
                        <label>
                            <textarea style="font-size: 221%;" class="gui-textarea" id="content" name="content" placeholder="Enter post..."></textarea>
                            <span><i class="fa fa-comments"></i></span>

                        </label>
                    </div><!-- end section -->



                </div><!-- end .form-body section -->
                <div class="form-footer">
                    <button style="height: 6%;width: 36%;font-size: 308%;" name="submit" class="btn btn-primary" type="submit" >Post</button>
                </div><!-- end .form-footer section -->
            </form>

        </div><!-- end .smart-forms section -->
    </div><!-- end .smart-wrap section -->

    <div></div><!-- end section -->

</body>
<script>
	var bkcolor=document.getElementById("BoxColor");
	if(bkcolor==1){
		document.getElementById('text').css("background-color","red");

    }


</script>



</html>
