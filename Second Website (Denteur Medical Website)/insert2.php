<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Denteur</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="StyleSheet.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row" style="height:50px;">
      <div style="background-color:#0088ff;color:white;font-weight:bold;text-align:right;padding-right:20px;padding-top:13px;" class="col-3"><span style="padding-right:10px;" class="glyphicon glyphicon-earphone"></span>Phone: +1 800 722 8987</div>
      <div style="background-color:#546473;color:white;font-weight:bold;text-align:right;padding-right:90px;padding-top:13px;" class="col-9"><span style="padding-right:10px;"class="glyphicon glyphicon-envelope"></span>info@denteur.com |
      <a style="color:white;" href=""><i style="padding-right:5px;padding-left:5px;" class="fa fa-facebook"></i></a>
      <a style="color:white;" href=""><i style="padding-right:5px;padding-left:5px;" class="fa fa-twitter"></i></a>
      <a style="color:white;" href=""><i style="padding-left:5px;" class="fa fa-linkedin"></i></a>
    </div>
    </div>
  </div>
  <center>
  <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
  <p>
      <a href="reset-password.php" class="btn btn-danger ml-3">Reset Your Password</a>
      <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>

  </p>
  </center>
  
<nav>
        <div style="color:white;" id="logo"><img style="padding-left:95px;" src="Logo.jpg"></div>

        <label for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop" />
            <ul style="margin-top:35px;padding-right:78px;font-weight:bold;" class="menu">
            <li><a href="HomePage.php">HOME</a></li>
                <li>
                    <a href="#">PAGES</a>
                    <input type="checkbox" id="drop-1"/>
                    <ul>
                        <li><a href="AboutUs.php">About Us</a></li>
                        <li><a href="Gallery.php">Gallery</a></li>
                        <li><a href="Doctors.php">Doctors</a></li>
                        <li><a href="ErrorPage.php">Error Page</a></li>
                        <li><a href="FAQ.php">FAQ</a></li>
                    </ul>

                </li>
                <li><a href="Services.php">SERVICES</a></li>
                <li>

                <label for="drop-3" class="toggle">DEPARTMENTS</label>
                <a href="">DEPARTMENTS</a>
                <input type="checkbox" id="drop-2"/>
                <ul>
                    <li><a href="Endotonic.php">Endotonic</a></li>
                    <li><a href="FD.php">Family Dentistry</a></li>
                    <li><a href="OD.php">Orthodontic</a></li>
                    <li><a href="SD.php">Surgery</a></li>
                    <li><a href="Prosthodontics.php">Prosthodontics</a></li>
                </ul>
                </li>

                <li><a href="Blogs.php">BLOGS</a></li>
                <li><a href="ContactUs.php">CONTACT US</a></li>
            </ul>
        </nav>
<br>
<br>
<br>
<br>
<div id="slider">
  <a href="#" class="control_next">></a>
  <a href="#" class="control_prev"><</a>
  <ul>
    <li><img style="width:100%;opacity:0.85;" src="image1.jfif">
    <li><img style="width:100%;opacity:0.85;" src="Dentist1.jfif"></li>
    <li><img style="width:100%;opacity:0.85;" src="image2.jfif"></li>
    <li><img style="width:100%;opacity:0.85;" src="image3.jfif"></li>
    <li><img style="width:100%;opacity:0.85;" src="image4.jfif"></li>
    <li><img style="width:100%;opacity:0.85;" src="image5.jfif"></li>
  </ul>

</div>

<br>

<div class="row1">
  <div class="column">
    <div class="card">
      <img style="height:350px;opacity:0.75;" src = "image6.jfif"><div class="bottom-leftgrid"><br>Get in Touch<br> +1 800 722 8987</div>
    </div>
  </div>

  <div class="column">
    <div class="card1">
      <p style="font-weight:bold;font-size:20px;padding-top:30px;padding-right:115px;">Opening Hours</p>
      <p style="font-weight:bold;font-size:15px;padding-top:30px;padding-bottom:15px;">Mon To Fri &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 9:00AM-5:00PM</p>
      <hr style="width:75%;border:1px solid black;">
      <p style="font-weight:bold;font-size:15px;padding-top:15px;padding-bottom:15px;">Saturday &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  9:00AM-4:00PM</p>
      <hr style="width:75%;border:1px solid black;">
      <p style="font-weight:bold;font-size:15px;padding-top:15px;padding-bottom:46px;">Sunday &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 9:00AM-1:00PM</p>
    </div>
  </div>

  <div class="column">
    <div class="card2">
      <p style="font-weight:bold;color:white;font-size:20px;padding-top:30px;padding-right:150px;">Book a Visit</p>
      <br>
      <br>
  <?php

  $conn = mysqli_connect("localhost", "root", "", "denteur");

  if($conn === false){
      die("ERROR: Could not connect. "
          . mysqli_connect_error());
  }

  $Name =  $_REQUEST['Name'];
  $phonenum = $_REQUEST['phonenum'];
  $email = $_REQUEST['email'];


  $sql = "INSERT INTO appointment VALUES ('$Name','$phonenum','$email')";

  if(mysqli_query($conn, $sql)){
      echo '<div style="font-size:15px;color:black;font-weight:bold;text-align:left;padding-left:30px;padding-right:30px;padding-bottom:30px;">Your information has been stored and we have confirmed your Appointment';

      echo nl2br("\nName: $Name\n Number: $phonenum\n "
          . "Email: $email");
  } else{
      echo "ERROR: Hush! Sorry $sql. "
          . mysqli_error($conn);
  }

  mysqli_close($conn);
  ?>

</div>

<form action="HomePage.php">
    <input type="submit" style="color:white;font-size:15px;background-color:black;" value="Book Another Appointment" />
</form>
<br>
<br>
<br>

</div>
</div>
</div>

<br>

<div class="row2">
<div class="column2">
  <h1 style="padding-left:155px;font-weight:bold;">Welcome To Dental Care <br> Denteur</h1>
  <p style= "padding-left:155px;padding-top:25px;padding-right:40px;font-size:16px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
     It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
     <h3 style="padding-left:155px;padding-top:30px;font-weight:bold;">Nutrition Special Features</h3>
    <div class="row4">
      <div class="column3">
        <p style="padding-left:145px;font-size:16px;">&#10004; Anti-Wrinkle Treatment.</p>
        <p style="padding-left:145px;font-size:16px;">&#10004; Varicose Vein Treatment.</p>
        <p style="padding-left:145px;font-size:16px;">&#10004; Manual Handling Treatment.</p>
      </div>
      <div class="column3">
        <p style="padding-left:145px;font-size:16px;">&#10004; Anti-Wrinkle Treatment.</p>
        <p style="padding-left:145px;font-size:16px;">&#10004; Varicose Vein Treatment.</p>
        <p style="padding-left:145px;font-size:16px;">&#10004; Manual Handling Treatment.</p>
      </div>
    </div>
</div>
<div class="column3" style="padding-top:35px;padding-right:100px;">
  <iframe width="100%" height="500" src="https://www.youtube.com/embed/09jAjZLK1LM"></iframe>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<center>
<img src="image14.jpg" width="40%">
</center>
<div class="full-width">
<div class="container3" style="height:250px;margin-left:0px;background-color:#0088ff">
<div class="container">
  <div class="row21">
      <div class="col-sm-3">
          <div class="card21" style="padding-left:43px;">
              <div class="card-block">
                <img src="tooth.png" width="40%">
                  <p class="card-text"><span style="color:white;font-size:25px;font-weight:bold" class="Count">12001</span></p>
                  <p class="card-text" style="color:white;font-size:25px;font-weight:bold" >SAVED TEETH</p>
              </div>
          </div>
      </div>
      <div class="col-sm-3">
          <div class="card21" style="padding-left:85px;">
              <div class="card-block">
                <img src="doctor.png" width="40%">
                  <p class="card-text"><span style="color:white;font-size:25px;font-weight:bold" class="Count">8433</span></p>
                  <p class="card-text" style="color:white;font-size:25px;font-weight:bold" >SPECIALIST DOCTORS</p>
              </div>
          </div>
      </div>
      <div class="col-sm-3">
          <div class="card21" style="padding-left:85px;">
              <div class="card-block">
                <img src="smile.png" width="40%">
                  <p class="card-text"><span style="color:white;font-size:25px;font-weight:bold" class="Count">2911</span></p>
                  <p class="card-text" style="color:white;font-size:25px;font-weight:bold" >HAPPY CUSTOMERS</p>
              </div>
          </div>
      </div>
      <div class="col-sm-3">
          <div class="card21" style="padding-left:115px;">
              <div class="card-block">
                <img src="docbog.png" width="50
                %">
                  <p class="card-text"><span style="color:white;font-size:25px;font-weight:bold" class="Count">11233</span></p>
                  <p class="card-text" style="color:white;font-size:25px;font-weight:bold" >CLINICS</p>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
</div>


<br>
<br>

<div class="text-center">
<p style="font-weight:bold;font-size:35px;">Our Services</p>
<hr style="height:3px;width:10%;border-top:4px solid navy">
<p style="font-size:20px;">We specialise in intelligent & effective search, belieiving in the power of <br> to grow business.</p>

</div>

<br>
<br>

<div class="row6">
<div class="column6">
  <div class="card6">
    <a href=""><img src="Grid1.jpg"></a>
    <h3 style="font-weight:bold;padding-top:35px;">Orthodontic</h3>
    <p style="font-size:18px;padding-top:20px;">Measures of poor oral health in<br>the study includied painful.</p>
    <a href = "" style="color:blue;font-size:20px;font-weight:bold;">Read More</a>
  </div>
</div>

<div class="column6">
  <div class="card6">
    <a href=""><img src="Grid2.jpg"></a>
    <h3 style="font-weight:bold;padding-top:35px;">Endodontic</h3>
    <p style="font-size:18px;padding-top:20px;">Measures of poor oral health in<br>the study includied painful.</p>
    <a href = "" style="color:blue;font-size:20px;font-weight:bold;">Read More</a>
  </div>
</div>

<div class="column6">
  <div class="card6">
    <a href=""><img src="Grid3.jpg"></a>
    <h3 style="font-weight:bold;padding-top:38px;">Family Dentistry</h3>
    <p style="font-size:18px;padding-top:20px;">Measures of poor oral health in<br>the study includied painful.</p>
    <a href = "" style="color:blue;font-size:20px;font-weight:bold;">Read More</a>
  </div>
</div>

</div>

<br>
<br>
<br>

<div class="container-class1">
<div class="container">
<p style="font-style:italic;color:white;font-weight:bold;font-size:20px;padding-top:50px;">What our customers are saying</p>

<p style="font-weight:bold;color:white;font-size:40px;padding-top:20px;">Testimonials</p>
<hr style="width:10%;border:2px solid black;margin-top:20px;margin-left:5px;">
<p style="font-style:italic;font-weight:bold;color:white;font-size:15px;padding-top:175px;padding-right:750px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
<p style="font-size:15px;padding-top:7px;color:white;padding-right:750px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
</div>
</div>

<br>
<br>

<div class="row2">
<div class="column2">
  <h1 style="padding-left:110px;font-weight:bold;">Simply Better Dentistry</h1>
  <p style= "padding-left:110px;padding-top:25px;padding-right:20px;font-size:18px;font-style:italic;font-weight:bold">All practicing at Denteur have earned either three or more years of undergraduate, The most common misuse for our teeth is tearing Sellotape.</p>
  <p style= "padding-left:110px;padding-top:15px;padding-right:20px;font-size:18px;color:gray">A general dentist is your primary care dental provider. This dentist diagnoses, treats, and manages your overall oral health care needs, including gum care, root canals, fillings, crowns, veneers, bridges, and preventive education.</p>
  <br>
  <button class="collapsible">How can I contact you?</button>
  <div class="content">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </div>
  <button class="collapsible">What is your payment method?</button>
  <div class="content">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </div>
  <button class="collapsible">What are gas solutions?</button>
  <div class="content">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </div>
</div>
<div class="column3" style="padding-top:35px;padding-right:100px;">
  <img width="100%" height="500" src="image9.jfif">
</div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="container-class20">
<div class="row20">
  <div class="column20">
    <div class="card20">
      <h3 style="font-weight:bold;">Care For Your Smile</h3>
      <p style="font-size:18px;padding-bottom:15px;padding-top:15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elia.</p>
        <a href="#" style="color:black;font-size:20px;font-weight:bold;background-color:orange;" class="btn btn-info" role="button">Learn More</a>
    </div>
  </div>
</div>
</div>

<br>
<br>

<div class="text-center">
<p style="font-weight:bold;font-size:50px;">Latest News</h1>
<hr style="height:3px;width:10%;border-top:4px solid navy">
<p style="font-size:20px;">We specialise in intelligent & effective search, belieiving in the power of <br> to grow business.</p>
</div>

<br>

<div class="container">
  <div class="card-deck">
      <div class="card text-center">
          <div class="card-block" >
              <a href=""><img src="image12.jfif" width="100%" height="250px;"/></a>
              <p class="card-text" >
                <div class="w3-container" style="background-color:white;">
                  <div class='square-box'>
                    <div class='square-content'><div><span>25 <br> May</span></div></div>
                  </div>
                  <a href="" style="font-weight:bold;font-size:20px;color:black;text-align:left;">Causes and treatment of Gengivitis </a>
                  <br><br>
                  <p>The ground-breaking research took 11 years to complete and is the longest study.</p>
                </div>

              </p>
              <div class="card-footer">
              <p style="float:left;"><span style="padding-right:10px;color:blue" class="glyphicon glyphicon-user"></span>John Anderson</p>
              <p><span style="padding-left:100px;padding-right:10px;color:blue" class="glyphicon glyphicon-comment"></span>314</p>
              </div>
          </div>
      </div>

      <div class="card text-center">
          <div class="card-block">
              <a href=""><img src="image11.jfif" width="100%" height="250px;"/></a>
              <p class="card-text">
                <div class="w3-container" style="background-color:white;">
                  <div class='square-box'>
                    <div class='square-content'><div><span>12 <br> May</span></div></div>
                  </div>
                  <a href="" style="font-weight:bold;font-size:20px;color:black;text-align:left;">Oral Health Foundation Green Paper </a>
                  <br><br>
                  <p>Scientists found that people who use an electric toothbrush have healthier gums.</p>
                </div>
              </p>
              <div class="card-footer">
              <p style="float:left;"><span style="padding-right:10px;color:blue" class="glyphicon glyphicon-user"></span>Sara Smith</p>
              <p><span style="padding-left:100px;padding-right:10px;color:blue" class="glyphicon glyphicon-comment"></span>433</p>
              </div>
          </div>
      </div>

      <div class="card text-center">
          <div class="card-block">
              <a><img src="image13.jfif" width="100%" height="250px;"/></a>
              <p class="card-text">
                <div class="w3-container" style="background-color:white;">
                  <div class='square-box'>
                    <div class='square-content'><div><span>23 <br> May</span></div></div>
                  </div>
                  <a href="" style="font-weight:bold;font-size:20px;color:black;text-align:left;">Share a smile winners announced</a>
                  <br><br>
                  <p>Having undertaken a comprehensive review of existing guidance for best use of denture.</p>
                </div>
              </p>
              <div class="card-footer">
              <p style="float:left;"><span style="padding-right:10px;color:blue" class="glyphicon glyphicon-user"></span>Lisa Johns</p>
              <p><span style="padding-left:100px;padding-right:10px;color:blue" class="glyphicon glyphicon-comment"></span>245</p>
              </div>
          </div>
      </div>
  </div>
</div>
<br>
<br>

<footer style="background-color:#001eff">

  <div class="container p-4">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <a href="HomePage.php"><img src="Logo.jpg"></a>

        <ul class="list-unstyled mb-0">
          <li><br>
            <h4 style="color:white;font-weight:bold;">Denteur care about dental promote dental health through organized.</h4>
          </li>
          <br>
          <li>
            <p style="color:white;font-weight:bold;"><span style="padding-right:10px;" class="glyphicon glyphicon-map-marker"></span>PO BOX 33195 NW 56th ST Miami, Florida</p>
          </li>
          <li>
            <p style="color:white;font-weight:bold;"><span style="padding-right:10px;" class="glyphicon glyphicon-earphone"></span>Call US: + 1 800 722 8987</p>
          </li>
          <li>
            <p style="color:white;font-weight:bold;"><span style="padding-right:10px;" class="glyphicon glyphicon-envelope"></span>info@denteur.com</p>
          </li>
        </ul>
      </div>

      <div style="padding-left:37px;" class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h2 style="color:white;font-weight;bold;">RECENT POSTS</h2>
        <hr style="border: 2px solid yellow;margin-left:0px;" width="35%">

        <ul class="list-unstyled">
          <li>
            <div><a href=""><p style="float: left;padding-right:20px;"><img src="footer1.jpg" height="75px" width="75px"></p></a>
              <a style="color:white;font-weight:bold;" href="">WHAT CAUSES PERIOCORONITIS<br>24 July 2019</a>
            </div>
          </li>
          <br>
          <hr style="border: 1px solid gray;">
          <li>
            <div><a href=""><p style="float: left;padding-right:20px;"><img src="footer2.jpg" height="75px" width="75px"></p></a>
              <a style="color:white;font-weight:bold;" href="">GINGIVITIS CAUSES AND TREATMENT<br>22 July 2019</a>
            </div>
          </li>
        </ul>
      </div>

      <div style="padding-left:75px;" class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h2 class="text-uppercase" style="color:white;font-weight;bold;">TAGS</h2>
        <hr style="border: 2px solid yellow;margin-left:0px;" width="35%">

        <ul class="list-unstyled mb-0" style="color:white;list-style-type:square;padding-left:15px;">
          <li>
            <a href="AboutUs.php" class="text-light" style="font-weight:bold;font-size:18px;">About us</a>
          </li>
          <li>
            <a href="Blogs.php" class="text-light" style="font-weight:bold;font-size:18px;">Blogs and News</a>
          </li>
          <li>
            <a href="ContactUs.php" class="text-light" style="font-weight:bold;font-size:18px;">Contact Us</a>
          </li>
          <li>
            <a href="Services.php" class="text-light" style="font-weight:bold;font-size:18px;">Our Services</a>
          </li>
          <li>
            <a href="Gallery.php" class="text-light" style="font-weight:bold;font-size:18px;">Gallery</a>
          </li>
        </ul>
      </div>

    <div style="padding-left:px;" class="col-lg-3 col-md-6 mb-4 mb-md-0">
      <h3 class="text-uppercase" style="color:white;font-weight;bold;">INSTAGRAM POSTS</h3>
      <hr style="border: 2px solid yellow;margin-left:0px;" width="35%">

      <div class="row">
<div class="col-md-4">
  <div class="thumbnail">
      <img src="footer3.jpg" alt="Lights" style="width:100%;">
  </div>
</div>
<div class="col-md-4">
  <div class="thumbnail">
    <a href="">
      <img src="footer4.jpg" alt="Lights" style="width:100%;">
    </a>
  </div>
</div>
<div class="col-md-4">
  <div class="thumbnail">
    <a href="">
      <img src="footer5.jpg" alt="Lights" style="width:100%;">
    </a>
  </div>
</div>
</div>

<div class="row">
<div class="col-md-4">
  <div class="thumbnail">
    <a href="">
      <img src="footer6.jpg" alt="Lights" style="width:100%;">
    </a>
  </div>
</div>
<div class="col-md-4">
  <div class="thumbnail">
    <a href="">
      <img src="footer7.jpg" alt="Lights" style="width:100%;">
    </a>
  </div>
</div>
<div class="col-md-4">
  <div class="thumbnail">
    <a href="">
      <img src="footer8.jpg" alt="Lights" style="width:100%;">
    </a>
  </div>
</div>
</div>

    </div>

  </div>
  <hr style="border: 2px solid yellow;" width="100%">
  <p style="font-size:20px;font-weight:bold;color:white;float:left">&#169; 2019 Denteur</p>
  <a style="margin-left:805px;" href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-linkedin"></a>
  <a href="#" class="fa fa-instagram"></a>
</div>
</footer>

<script>
jQuery(document).ready(function ($) {

$('#checkbox').change(function(){
  setInterval(function () {
      moveRight();
  }, 3000);
});

var slideCount = $('#slider ul li').length;
var slideWidth = $('#slider ul li').width();
var slideHeight = $('#slider ul li').height();

var sliderUlWidth = slideCount * slideWidth;

$('#slider').css({ width: slideWidth, height: slideHeight });

$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

  $('#slider ul li:last-child').prependTo('#slider ul');

  function moveLeft() {
      $('#slider ul').animate({
          left: + slideWidth
      }, 200, function () {
          $('#slider ul li:last-child').prependTo('#slider ul');
          $('#slider ul').css('left', '');
      });
  };

  function moveRight() {
      $('#slider ul').animate({
          left: - slideWidth
      }, 200, function () {
          $('#slider ul li:first-child').appendTo('#slider ul');
          $('#slider ul').css('left', '');
      });
  };

  $('a.control_prev').click(function () {
      moveLeft(); return false;
  });

  $('a.control_next').click(function () {
      moveRight(); return false;
  });

});

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
coll[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var content = this.nextElementSibling;
  if (content.style.maxHeight){
    content.style.maxHeight = null;
  } else {
    content.style.maxHeight = content.scrollHeight + "px";
  }
});
}

$('.Count').each(function () {
  $(this).prop('Counter',0).animate({
      Counter: $(this).text()
  }, {
      duration: 1000,
      speed:100000,
      easing: 'swing',
      step: function (now) {
          $(this).text(Math.ceil(now));
      }
  });
});


img = document.getElementById("img1");
   function enlargeImg() {

     img.style.transform = "scale(1.5)";
     img.style.transition = "transform 0.25s ease";
   }


</script>

</body>
</html>
