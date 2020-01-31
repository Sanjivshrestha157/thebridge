<?php
	 include ('include/db.php');
	// $server="localhost";
	// $username="root";
	// $password="";
	// $dbname="thebridge";

	// $conn=mysqli_connect($server,$username,$password,$dbname);
	// if(!$conn)
	// {
	// 	echo ("Connection Failed".mysqli_connect_error($conn));
	// }
	if(isset($_POST['submit']))
	
	{
		$uname=$_POST['uname'];
		$email=$_POST['email'];
		$currenttime=time();
		$date=strftime("%Y-%m-%d %H:%M:%S",$currenttime);
		print_r($date);
		$user=$_POST['user'];
		$donate=$_POST['donate'];
		$comment=$_POST['comment'];
		$file='uploads/'.$_FILES['file']['name'];
		if(!empty($_FILES['file']))
			{
			    $path ="uploads/";
			    $path =$path.basename( $_FILES['file']['name']);
				    if(move_uploaded_file($_FILES['file']['tmp_name'],$path)) 
				    	{
				      	echo "The file ".  basename( $_FILES['file']['name'])." has been uploaded";
				    	} 
			   		else  echo "There was an error uploading the file, please try again!";
			    
			    $sql="INSERT INTO inventory (donor_name,email,dates,user_type,donation_type,image,comments) VALUES ('$uname','$email','$date','$user','$donate','$file','$comment');";
				$query=mysqli_query($conn,$sql);
				if($query)
				{
					header("location:donate.php");
				}
				else echo "Failed to insert values";
			}

	}
?>