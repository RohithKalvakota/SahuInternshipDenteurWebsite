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


<div class="container90">
  <img src="Sports.jfif" width="75%" height="650px" style="border-radius:30px;">  <br>
  <div style="color:white;font-size:100px;font-weight:bold;font-family: 'Trebuchet MS', sans-serif;font-size:85px;" class="centered">Sports</div>
</div>
<div class="container p-5">

    <div class="row p-5">
        <div class="col-lg-4 pb-5">
        <div class="background15 card-radius text-light">
            <div class="text-desc-odd">
              <a style="color:white;font-weight:bold;" href="Sports1.php">
                  Lorem ipsum dolor sit amet,consectetur adipiscing elit
              </a>
            <p class="pt-2" style="font-weight:bold;">FB TEMPLATES / March 28,2017</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
            </div>
        </div>
        </div>
        <div class="col-lg-4 pb-5">
        <div class="background16 card-radius text-light">
            <div class="text-desc-even">
              <a style="color:white;font-weight:bold;" href="Sports2.php">
                  Lorem ipsum dolor sit amet,consectetur adipiscing elit
              </a>
            <p class="pt-2" style="font-weight:bold;">FB TEMPLATES / March 28,2017</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
            </div>
        </div>
        </div>
        <div class="col-lg-4 pb-5">
        <div class="background17 card-radius text-light">
            <div class="text-desc-odd">
              <a style="color:white;font-weight:bold;" href="Sports3.php">
                  Lorem ipsum dolor sit amet,consectetur adipiscing elit
              </a>
            <p class="pt-2" style="font-weight:bold;">FB TEMPLATES / March 28,2017</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
            </div>
        </div>
        </div>
        <div class="col-lg-4 pb-5">
        <div class="background18 card-radius text-light">
            <div class="text-desc-even">
            <a style="color:white;font-weight:bold;" href="Sports4.php">
                Lorem ipsum dolor sit amet,consectetur adipiscing elit
            </a>
            <p class="pt-2" style="font-weight:bold;">FB TEMPLATES / March 28,2017</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
            </div>
        </div>
        </div>
        <div class="col-lg-4 pb-5">
        <div class="background19 card-radius text-light">
            <div class="text-desc-odd">
              <a style="color:white;font-weight:bold;" href="Sports5.php">
                  Lorem ipsum dolor sit amet,consectetur adipiscing elit
              </a>
            <p class="pt-2" style="font-weight:bold;">FB TEMPLATES / March 28,2017</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
            </div>
          </div>
      </div>
</div>
</div>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<br>
<br>
<br>
<br>
<center>
<form action="imagesupload.php">
<input type="submit" value="Click here to upload photos and have a chance to get your pictures featured in the blogs." style="font-weight:bold;background-color:black;color:white;font-size:24px;">
</form>
</center>


<br><br><br>

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
  if (document.body.scrollTop > 1600 || document.documentElement.scrollTop > 1600) {
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
