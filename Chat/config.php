<?php

	$sn="remotemysql.com";
	$un="6MYYpFUn4B";
	$pswd= "ru7XABTn0d";
	$dbn= "6MYYpFUn4B";

	$conn=new mysqli($sn, $un, $pswd, $dbn);


	if($conn->connect_error)
	{
		die("connection failed:". $conn->connect_error);

	}


?>
