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
	if(isset($_POST["submit"]))
	{
		$first_name=$_POST['fname'];
		$last_name=$_POST['lname'];
		$email=$_POST['email'];
		$comment=$_POST['comment'];
		
		$sql="INSERT INTO contactor(Id,first_name,last_name,email,comment) VALUES (0,'$first_name','$last_name','$email','$comment');";

		$query=mysqli_query($conn,$sql);
		if($query)
		{
			header("location:contact.php");
		}
		else echo "Failed to insert values";
	}
?>