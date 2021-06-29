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
           <h3 style="font-weight:bold;color:white;font-size:35px;padding-left:100px;">Department<br>Family Dentistry<h3>
           <p style="color:white;font-size:20px;padding-left:100px;padding-bottom:75px;"> Departments > Family Dentistry</p>
           </div>
         </div>

 <br>

 <div class="row2">
   <div class="column2">
     <img style="padding-left:155px;padding-top:25px;" src="FD1.jfif" width="100%">
     <h2 style="padding-left:155px;font-weight:bold;">Family Dentistry</h2>
     <p style= "padding-left:155px;padding-top:25px;padding-right:40px;font-size:16px;color:gray;font-weight:bold;">Manufacturing industry became a key sector of production and labour in European and North American countries during the Industrial Revolution, upsetting previous mercantile and feudal economies. The Industrial Revolution, which took place from the 18th to 19th centuries.
<br><br>
The Industrial Revolution, which took place from the 18th to 19th centuries, was a period during which predominantly agrarian, rural societies in Europe and America became industrial and urban. Prior to the Industrial Revolution, which began in Britain in the late 1700s, manufacturing was often done in people’s homes, using hand tools or basic machines</p>

<br>
<h2 style="padding-left:155px;font-weight:bold;">A reason to smile</h2>
<p style= "padding-left:155px;padding-top:25px;padding-right:40px;font-size:16px;color:gray;font-weight:bold;">Manufacturing industry became a key sector of production and labour in European and North American countries during the Industrial Revolution, upsetting previous mercantile and feudal economies. The Industrial Revolution, which took place from the 18th to 19th centuries.</p>
<br>
       <div class="row4">
         <div class="column3">
           <p style="padding-left:145px;font-size:16px;">&#10004; Anti-Wrinkle Treatment.</p>
           <p style="padding-left:145px;font-size:16px;">&#10004; Varicose Vein Treatment.</p>
           <p style="padding-left:145px;font-size:16px;">&#10004; Manual Handling Treatment.</p>
           <p style="padding-left:145px;font-size:16px;">&#10004; Injection treatment for chronic.</p>
         </div>
         <div class="column3">
           <img src="FD2.jfif" width="100%">
         </div>

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
   </div>
   <div class="column3" style="padding-top:35px;padding-right:100px;">
     <a href="Endotonic.php"><button style="align-text:center;" class="collapsible1">Endotonic Department</button></a>
     <a href="OD.php"><button style="align-text:center;" class="collapsible1">Orthodontic Department</button></a>
     <a href="FD.php"><button style="align-text:center;" class="collapsible1">Family Dentistry</button></a>
     <a href="SD.php"><button style="align-text:center;" class="collapsible1">Surgery Department</button></a>
     <a href="Prosthodontics.php"><button style="align-text:center;" class="collapsible1">Prosthodontics Department</button></a>
     <br>
     <br>
     <img src="denteurimage.jfif">
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
</script>
</body>
</html>
