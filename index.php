<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script src="js/jquery-1.9.1.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
     <link rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
      <script>
    $(document).ready(function() {
            $('.carousel').carousel({
                interval: 1000
            });
        });
    </script>
    <style>
    #navbar:hover
        {
         transform: scale(1.05);
        }
        #navbar
        {
            margin-top: 13px;margin-left: 250px;
        }
        .write
        {
          cursor: pointer; margin-left: 60px;margin-top: 12px;  
        }
    </style>
</head>
<body>
<div class="container-fluid bg-secondary">
    <div class="row" style="height: 70px;">
       
        <div class="write">
        <h2><i class="fa fa-heartbeat"></i>KhoonDAAN.COM</h2>
        </div>    

<div class="nav" id="navbar">
  <li class="nav-item">
    <a class="nav-link active text-white" href="index.php" >Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="bloodfacts.php">Blood Facts</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="session-front.php">Login</a>
  </li>
  <li class="nav-item">
      <a class="nav-link text-white" href="signup-front.php">Sign-Up</a>
  </li>
  <li class="nav-item">
      <a class="nav-link text-white" href="#">Privacy Policy</a>
  </li>
  <li class="nav-item">
      <a class="nav-link text-white" href="#">Contact Us</a>
    </li>
</div>
    </div>
    </div>
    
    <div id="box">
        <div class="row">
            <div class="col-md-10 offset-1">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../Project/photos/blood-donors-clipart-13.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../Project/photos/needy2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../Project/photos/needy1.jpg" alt="Third slide">
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
 
            </div>
        </div>
    </div>
    
    
</body>
</html>