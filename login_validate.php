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
    $email=$_POST['email'];
    $password=$_POST['psw'];
    $remember=$_POST['remember'];

    $sql="SELECT email,password from users WHERE email='$email' AND password='$password'";
    $query=mysqli_query($conn,$sql);
    if(isset($remember)) {
      $user_email=$email;
      $user_password=$password;
      setcookie($user_email,$user_password,time() + (86400 * 30), "/");
      // echo "cookie has been set";
      header("location:home.php");
      // else 
      // {
      //   die("id or password invalid");
      // }
      }
      else{
          header("location:home.php");
      }
    }
    $_SESSION['email']=$password;
    $_SESSION['password']=$password;
?>