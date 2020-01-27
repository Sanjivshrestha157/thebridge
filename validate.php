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
if(isset($_POST['click']))
{
	$fname=$_POST['fname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$psw=$_POST['psw'];
	$sql="INSERT INTO users (user_name,email,password) VALUES ('$name','$email','$password')";
	$query=mysqli_query($conn,$sql);
	if($query)
	{
		header("location:login.php");
	}
	else echo "Failed to insert values";

	}

 ?>