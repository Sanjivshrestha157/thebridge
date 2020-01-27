<!DOCTYPE html>
<html>
<head>
	<title>Bridge</title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/sign.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">The Bridge</a>
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
          <a class="dropdown-item" href="food.php">Food</a>
          <a class="dropdown-item" href="clothes.php">Clothes</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="finance.php">Financial</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">Join us</a>
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

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="images/1.jpg" class="d-block w-100" height="650vh" >
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" class="d-block w-100" height="650vh">
    </div>
    <div class="carousel-item">
      <img src="images/1.jpeg" class="d-block w-100" height="650vh">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<section class="my-5">
  <div class="py-3">
  <h1 class="text-center">About Us</h1>
</div>
<div class="container-fluid">
<div class="row">
  <div class="col-lg-6 col-md-6 col-12">
    <img src="images/1.jpeg" class="img-fluid"> 
    
  </div>
  <div class="col-lg-6 col-md-6 col-12">
    <h2 class="text-center" display-4>NOn-Profit-Org</h2>
    <p class="py-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <a href="about.php" class="btn btn-success">Know more</a>
</div>

</div>
</section>

<section class="my-5">
  <div class="py-3">
  <h1 class="text-center">Our Work</h1>
</div>
<div class="container-fluid">
<div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    </div>
    <div class="card-group">
  <div class="card">
    <img src="images/6.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Cloth Sharing</h5>
      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p class="card-text"><small class="text-muted">old fashioned,nah.. </small></p>
    </div>
  </div>
  <div class="card">
    <img src="images/5.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Food Sharing</h5>
      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p class="card-text"><small class="text-muted">waste....nope</small></p>
    </div>
  </div>
  <div class="card">
    <img src="images/7.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Money Donation</h5>
      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p class="card-text"><small class="text-muted">Help...suppport</small></p>
    </div>
  </div>
</div>
</div> 
<!--container end.//-->

<br><br>
<article class="bg-secondary mb-3">  
<div class="card-body text-center">
    <h3 class="text-white mt-3">@copyright 2020</h3>
<p class="h5 text-white">The Bridge</p>   <br>
 
 <i class="fa fa-window-restore "></i></a></p>
</div>






<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</body>
</html>