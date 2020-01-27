<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">The Bridge</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Donate
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="food.php">Food</a>
          <a class="dropdown-item" href="clothes.php">Clothes</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="finance.php">Financial</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Join us</a>
      <li class="nav-item">
        <a class="nav-link" href="inventory.php">Inventory</a>
        <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact us</a>
      </li>
    </ul>
    
  </div>
</nav>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<form method="POST" action="validate.php">
<div class="container">






<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
  <h4 class="card-title mt-3 text-center">Create Account</h4>
  <p class="text-center">Get started with your free account</p>
  <p>
    <a href="http://facebook.com/login" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
    <a href="http://twitter.com/login" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
  </p>
  <p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
  <div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
     </div>
        <input name="fname" class="form-control" placeholder="Full name" type="text" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
     </div>
        <input name="email" class="form-control" placeholder="Email address" type="email" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
    </div>
    <select class="custom-select" style="max-width: 120px;">
        <option selected="0">+971</option>
        <option value="1">+972</option>
        <option value="2">+198</option>
        <option value="3">+701</option>
    </select>
      <input name="phone" class="form-control" placeholder="Phone number" type="text" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-building"></i> </span>
    </div>
    <select class="form-control" name="type">
      <option selected="type"> Select </option>
      <option>Organization</option>
      <option>individual</option>
      
    </select>
  </div> <!-- form-group end.// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    </div>
        <input class="form-control" placeholder="Create password" type="password"  name='psw'required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    </div>
        <input class="form-control" placeholder="Repeat password" type="password" name="psw">
    </div> <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" name="click"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="login.php">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br>
<article class="bg-secondary mb-3">  
<div class="card-body text-center">
    <h3 class="text-white mt-3">@copyright 2020</h3>
<p class="h5 text-white">The Bridge</p>   <br>
 
 <i class="fa fa-window-restore "></i></a></p>
</div>
<br><br>
</article>
</body>
</html>