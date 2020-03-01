<?php

session_start();

?>

<html>
<head>
<style>
 
#Anxiety
{
	background-color:#aaadfa;
}
#Psoriasis
{
	background-color:#f1faaa;
}
#Alzheimers
{
	background-color:#b5faaa;
}
#Obesity
{
	background-color:#f7aafa;
}
#Allergies
{
	background-color:#faaaaa;
}
#Epilepsy
{
	background-color:#aafaf7;
}
.tile
{
  background-color:silver;
  display: inline-block;
  height: 0;
  border-radius: 15%;
  margin:3%;

  padding-bottom: 43.5%;
  width: 43.5%;
  font-size: 9vw;
}
.tx
{
    width:100%;        // +1 to @RonM
    position: absolute;
    text-align: center;
    padding-top:100%;
    -webkit-transform: translateY(-50%); /* child now centers itself relative to the midline based on own contents */
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    -ms-filter: 'progid:DXImageTransform.Microsoft.Matrix(Dx=0,Dy=0)'; /*IE8 */
    filter: progid:DXImageTransform.Microsoft.Matrix(Dx=0,Dy=0); /*IE6, IE7*/
    transform: translateY(-50%);
}
</style>
</head>
<body>
  <center>
    <a href="./includes/chatroom.php?r=Anxiety">
        <div class="tile" id="Anxiety"><div class="tx">Anxiety</div>
        </div>
    </a>
    <a href="./includes/chatroom.php?r=Psoriasis">
        <div class="tile" id="Psoriasis"><div class="tx">Psoriasis</div>
        </div>
</a>
<a href="./includes/chatroom.php?r=Alzheimers">>
    <div class="tile" id="Alzheimers"><div class="tx">Alzheimers</div>
    </div>
</a>
<a href="./includes/chatroom.php?r=Obesity">
    <div class="tile" id="Obesity"><div class="tx">Obesity</div>
    </div>
</a>
<a href="./include/chatroom.php?r=Allergies">
    <div class="tile" id="Allergies"><div class="tx">Allergies</div>
    </div>
</a>
<a href="./include/chatroom.php?r=Epilepsy">
    <div class="tile" id="Epilepsy"><div class="tx">Epilepsy</div>
    </div>
</a>
  </center>
</body>
</html>
