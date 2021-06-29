<!DOCTYPE html>
<html lang="en">
<head>
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
<link rel="stylesheet" href="main.css">
</head>
<body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<br>
<br>
<div class="text-center">
<div style="margin-bottom:50px;padding-right:190px;padding-left:190px;font-family: 'Trebuchet MS', sans-serif;font-size:20px;font-style:oblique;border-radius:" class="container">
  <div style="border-radius:15px;padding-right:40px;padding-left:50px;padding-top:50px;padding-bottom:50px;" class="card bg-light text-black">
    <div style="font-weight:bold;font-size:75px;"class="card-body">Oooooh!!! Error 404!!!</div>
    <div style="font-size:20px;"class="card-body">Sorry! The page you were looking for, could not be found...</div><br>
    <a href="New.php"><button class="button2">Go To Home Page</button></a>
</body>
</html>
