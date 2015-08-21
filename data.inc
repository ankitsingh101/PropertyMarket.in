<?php 
	$con=mysqli_connect("localhost","root","") or die("Unable to connect mysql");
	$db=mysqli_select_db($con,"propertymarket") or die("Unable to connect property market Database");
    session_start();
//	$con=mysqli_connect("localhost","ipkankit_ankit","devesh123.0") or die("Unable to connect mysql");
//	$db=mysqli_select_db($con,"ipkankit_prop") or die("Unable to connect property market Database");


?>