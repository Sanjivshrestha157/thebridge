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
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Donate
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="donate.php">Food</a>
          <a class="dropdown-item" href="donate.php">Clothes</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="donate.php">Financial</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signUp.php">Join us</a>
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
</div> 
<!--container end.//-->
<!-- form for donating food -->
<div class="container">
<form action="donate_insert.php" class="was-validated" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="uname">Username:</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
  <label for="user">User type:</label>
  <select class="form-control" id="user" name="user" required>
    <option value="individual">Individual</option>
    <option value="organization">Organization</option>
  </select>
</div>
<div class="form-group">
  <label for="user">Donation type:</label>
  <select class="form-control" id="user" name="donate" required>
    <option value="food">food</option>
    <option value="clothes">clothes</option>
    <option value="money">money</option>
  </select>
</div>

  <div class="form-group">
      <label for="file">Upload your file:</label>
      <input type="file" class="form-control-file border" class="form-control" id="file" placeholder="Choose" name="file" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
    <label for="comment">Comment:</label>
    <textarea class="form-control" rows="5" id="comment" placeholder="Enter comment" name="comment" required></textarea>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
    </div>
  <!-- <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Check this checkbox to continue.</div>
    </label>
  </div> -->
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
  
</div>

<br><br>
<article class="bg-secondary mb-3">  
  <footer>
<div class="card-body text-center">
    <h3 class="text-white mt-3">@copyright 2020</h3>
<p class="h5 text-white">The Bridge</p>   <br>
 
 <i class="fa fa-window-restore "></i></a></p>
</div>
</footer>