<?php
	$server="localhost";
	$username="root";
	$password="";
	$dbname="thebridge";

	$conn=mysqli_connect($server,$username,$password,$dbname);
	if(!$conn)
	{
		echo ("Connection Failed".mysqli_connect_error($conn));
	}
?>