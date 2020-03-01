
<?php

	$sn="localhost";
	$un="aaqib";
	$pswd= "aaqib";
	$dbn= "thinkfit";

	$conn=new mysqli($sn, $un, $pswd, $dbn);


	if($conn->connect_error)
	{
		die("connection failed:". $conn->connect_error);

	}


?>
