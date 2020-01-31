<?php
	session_start();
  $server="localhost";
  $username="root";
  $password="";
  $dbname="thebridge";

  $conn=mysqli_connect($server,$username,$password,$dbname);
  if(!$conn)
  {
    echo ("Connection Failed".mysqli_connect_error($conn));
  }
  if(isset($_POST["login"]))
  {
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=mysqli_real_escape_string($conn,$_POST['psw']);
    $remember=mysqli_real_escape_string($_POST['remember']);

    $sql="SELECT email,password from users WHERE email='$email' AND password='$password'";
    $query=mysqli_query($conn,$sql);
    if($query) {
    	$_SESSION['email']=$email;
    	$_SESSION['password']=$password;
    	if(isset($remember)) {
      	$user_email=$email;
      	$user_password=$password;
      	setcookie($user_email,$user_password,time() + (86400 * 30), "/");
      // echo "cookie has been set";
      	header("location: dashboard.php");
      	exit();}
      else 
      {
        header("location: dashboard.php");
        exit();
      }
      			}
     else{
          print_r($_SESSION['email']);
          header("location: dashboard.php");
          exit();
      	}
    
    }

?>