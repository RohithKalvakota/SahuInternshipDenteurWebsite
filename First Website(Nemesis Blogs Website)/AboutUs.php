<!DOCTYPE html>
<html lang="en">
<head>
<title>New</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="main.css">
<?php
session_start();

if(isset($_SESSION["loggedin"])){

echo '<center>
<h1 class="my-5">Hi, <b>'.$_SESSION["username"].'</b>. Welcome to our site.</h1>
<p>
    <a href="reset-password.php" style="font-size:20px;" class="btn btn-danger ml-3">Reset Your Password</a>
    <a href="logout.php" style="font-size:20px;" class="btn btn-danger ml-3">Sign Out of Your Account</a>
      </p>
    </center>';
  }
  ?>
<div class="navbar">
  <a href="New.php"><img src="Logo.jpg"></a>
  <a href="New.php" style="padding-left:5px;padding-right:5px;margin-left:150px;">Home</a>
  <div class="dropdown" style="padding-left:5px;padding-right:5px;">
    <button class="dropbtn">Pages
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="AboutUs.php">About Us</a>
      <a href="ContactUs.php">Contact Us</a>
    </div>
  </div>
  <a href="Sports.php" style="padding-left:5px;padding-right:5px;">Sport</a>
  <a href="Policy.php" style="padding-left:5px;padding-right:5px;">Policy</a>
  <div class="dropdown" style="padding-left:5px;padding-right:5px;">
    <button class="dropbtn">Features
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Design.php">Design</a>
      <a href="Technology.php">Technology</a>
    </div>
  </div>
  <a href="ErrorPage.php" style="padding-left:5px;padding-right:5px;">Error Page</a>
  <a href="Lifestyle.php" style="padding-left:5px;padding-right:5px;">Lifestyle</a>
  <a style="margin-left: 200px;"><span class="glyphicon glyphicon-search"></span></a>
  <a style="margin-left: 10px;"><span class="glyphicon glyphicon-th-list"></span></a>
</div>
</head>
<body>
<br>

<div class="container90">
  <img src="Blog1.jfif" width="75%" style="border-radius:30px;">  <br>
  <div style="color:white;font-size:100px;font-weight:bold;font-family: 'Trebuchet MS', sans-serif;font-size:85px;" class="centered">About Us</div>
</div>
<br>
<div class="container">
  <div style="border:none;padding-right:205px;padding-left:205px;font-family: 'Trebuchet MS', sans-serif;font-size:16px;" class="card">
    <div class="card-body">Donec dolor elit, pellentesque a massa pellentesque, euismod sagittis ipsum. Nullam a diam ac turpis iaculis vulputate. Nunc tellus libero, tempus id luctus eget, fermentum et quam. Aliquam erat volutpat. Donec sit amet nunc vitae justo dapibus dignissim. Vivamus sagittis dignissim massa, auctor aliquam nibh aliquam ut. Nunc accumsan ex ligula, in malesuada sapien consectetur in. Praesent non lectus sed dolor imperdiet mollis a sit amet sem. Vivamus eu commodo ligula. Phasellus in lacus eu urna ullamcorper lacinia. Duis tincidunt fringilla aliquet. Vivamus id luctus tellus. Vestibulum maximus ipsum lacus, tempus suscipit augue fermentum ut. Suspendisse posuere mi lacus, vitae fringilla leo gravida eu. Donec a nisi vel ligula fringilla tempus id vitae nibh. Sed sollicitudin ante ultrices purus auctor auctor. Etiam turpis sem, mattis sit amet purus id, dapibus euismod libero. Donec bibendum urna quis orci molestie sodales. Pellentesque habitant morbi tristique senectus et netus et males posuere mi lacus, vitae fringilla leo gravida eu.
    Donec bibendum urna quis orci molestie sodales. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc id purus vel sapien pretium varius eu id risus. Vivamus sit amet nibh sit amet eros porta iaculis. Ut interdum diam nec imperdiet elementum. Proin condimentum faucibus placerat. Donec massa justo, porttitor tincidunt eros a, vehicula malesuada tortor. Praesent nec sem ut justo efficitur tempus.
</div>
  </div>
</div>

<br>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<footer class="page-footer font-small stylish-color-dark pt-4">
  <div class="down">

  <div class="container text-left text-md-left">

    <div class="row">

      <div class="col-md-4 mx-auto">


        <a style="vertical-align:left;" href="New.php"><img src = "Logo1.jpg" width="175" height="75"></a>
        <br><br>
        <p style="margin:0px;font-size:14px;">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

      </div>


      <div class="col-md-2 mx-auto">

        <h5 style="margin:10px 50px 20px 50px;font-family: 'Trebuchet MS', sans-serif;font-size:16px;" class="font-weight-bold mt-3 mb-4">About</h5>

        <ul class="list-unstyled">
          <li>
            <a style="margin:10px 50px 20px 50px;color:white;font-family: 'Trebuchet MS', sans-serif;font-size:16px;" href="New.php">Home</a>
          </li>
          <li>
            <a style="margin:10px 50px 20px 50px;color:white;font-family: 'Trebuchet MS', sans-serif;font-size:16px;" href="Lifestyle.php">Lifestyle</a>
          </li>
          <li>
            <a style="margin:10px 50px 20px 50px;color:white;font-family: 'Trebuchet MS', sans-serif;font-size:16px;" href="#!">People</a>
          </li>
          <li>
            <a style="margin:10px 50px 20px 50px;color:white;font-family: 'Trebuchet MS', sans-serif;font-size:16px;" href="#!">Slider</a>
          </li>
          <li>
            <a style="margin:10px 50px 50px 50px;color:white;font-family: 'Trebuchet MS', sans-serif;font-size:16px;" href="Sports.php">Sport</a>
          </li>
        </ul>

      </div>

      <div class="col-md-2 mx-auto">

        <h5 style="margin:10px 50px 20px 30px;font-family: 'Trebuchet MS', sans-serif;font-size:16px;" class="font-weight-bold mt-3 mb-4">Categories</h5>

        <ul class="list-unstyled">
          <li>
            <a style="margin:10px 50px 20px 30px;color:white;font-family: 'Trebuchet MS', sans-serif;font-size:16px;" href="#!">Business</a>
          </li>
          <li>
            <a style="margin:10px 50px 20px 30px;color:white;font-family: 'Trebuchet MS', sans-serif;font-size:16px;" href="Design.php">Design</a>
          </li>
          <li>
            <a style="margin:10px 50px 20px 30px;color:white;font-family: 'Trebuchet MS', sans-serif;font-size:16px;" href="Lifestyle.php">Lifestyle</a>
          </li>
          <li>
            <a style="margin:10px 50px 20px 30px;color:white;font-family: 'Trebuchet MS', sans-serif;font-size:16px;" href="Technology.php">Technology</a>
          </li>
          <li>
            <a style="margin:10px 50px 50px 30px;color:white;font-family: 'Trebuchet MS', sans-serif;font-size:16px;" href="#!">Training</a>
          </li>
        </ul>

      </div>

      <div class="col-md-2 mx-auto">

        <h5 style="margin:10px 50px 20px 30px;font-family: 'Trebuchet MS', sans-serif;" class="font-weight-bold mt-3 mb-4">Account</h5>

        <ul class="list-unstyled">
          <li>
            <a style="margin:10px 50px 20px 30px;color:white;font-family: 'Trebuchet MS', sans-serif;font-size:16px;" href="#!">Business</a>
          </li>
          <li>
            <a style="margin:10px 50px 20px 30px;color:white;font-family: 'Trebuchet MS', sans-serif;font-size:16px;" href="Design.php">Design</a>
          </li>
          <li>
            <a style="margin:10px 50px 20px 30px;color:white;font-family: 'Trebuchet MS', sans-serif;font-size:16px;" href="#!">Entertainment</a>
          </li>
          <li>
            <a style="margin:10px 50px 20px 30px;color:white;font-family: 'Trebuchet MS', sans-serif;font-size:16px;" href="#!">Featured</a>
          </li>
          <li>
            <a style="margin:10px 50px 50px 30px;color:white;font-family: 'Trebuchet MS', sans-serif;font-size:16px;" href="Technology.php">Technology</a>
          </li>
        </ul>

      </div>

    </div>
    <br>
  <hr style="height:3px" width="75%" color="gray">
  <div class="footer-copyright text-left py-3" style="font-size:16px;">© 2020 Nemesis.All Rights Reserved
        <a style="margin-left:750px;color:white;" href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a style="color:white" href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a style="color:white" href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a style="color:white" href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a style="color:white" href="" class="me-4 text-reset">
          <i class="fab fa-youtube"></i>
        </a>

  </div>

  </div>
<button onclick="topFunction()" id="myBtn" title="Go to top">☝</button>
</div>
</footer>

<script>
var mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


</script>
</body>
</html>
