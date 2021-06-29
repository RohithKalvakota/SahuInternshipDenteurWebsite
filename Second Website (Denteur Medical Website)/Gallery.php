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
<nav>
        <div style="color:white;" id="logo"><img style="padding-left:95px;" src="Logo.jpg"></div>

        <label for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop" />
            <ul style="margin-top:35px;padding-right:78px;font-weight:bold;" class="menu">
            <li><a href="Homepage.php">HOME</a></li>
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

       <div class="forimage">
          <div class="container-fluid">
          <p><br><br><br><br><br><br><br></p>
          <h3 style="font-weight:bold;color:white;font-size:35px;padding-left:100px;">Denteur<br>Gallery<h3>
          <p style="color:white;font-size:20px;padding-left:100px;padding-bottom:75px;"> Pages > Gallery</p>
          </div>
        </div>

<br>

<div class="text-center">
    <p style="font-weight:bold;font-size:35px;">Photo Gallery</p>
    <hr style="height:3px;width:10%;border-top:4px solid navy">
    <p style="font-size:20px;">We specialise in intelligent & effective search, belieiving in the power of <br> to grow business.</p>
</div>

<br>
<br>

<div class="row45">
  <div class="column45">
    <img src="gal1.jpg" style="margin-left:175px; width:100%" alt="Cars" onclick="myFunction(this);">
  </div>
  <div class="column45">
    <img src="gal2.jpg" style="margin-left:175px;width:100%" onclick="myFunction(this);">
  </div>
  <div class="column45">
    <img src="gal3.jpg" style="margin-left:175px;width:100%" onclick="myFunction(this);">
  </div>
</div>

<div class="row45">
  <div class="column45">
    <img src="gal7.jpg" style="margin-left:175px; width:100%" onclick="myFunction(this);">
  </div>
  <div class="column45">
    <img src="gal8.jpg" style="margin-left:175px;width:100%" onclick="myFunction(this);">
  </div>
  <div class="column45">
    <img src="gal9.jpg" style="margin-left:175px;width:100%" onclick="myFunction(this);">
  </div>
</div>

<div class="row45">
  <div class="column45">
    <img src="gal4.jpg" style="margin-left:175px; width:100%" onclick="myFunction(this);">
  </div>
  <div class="column45">
    <img src="gal5.jpg" style="margin-left:175px;width:100%" onclick="myFunction(this);">
  </div>
  <div class="column45">
    <img src="gal6.jpg" style="margin-left:175px;width:100%" onclick="myFunction(this);">
  </div>
</div>

<div class="container45">
  <span onclick="this.parentElement.style.display='none'" class="closebtn45">&times;</span>
  <img id="expandedImg" style="width:50%">
  <div id="imgtext45"></div>
</div>

<script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext45");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";

}
</script>

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



</body>
</html>
