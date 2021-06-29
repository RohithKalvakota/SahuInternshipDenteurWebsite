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

<br>

<div class="forimage">
  <div class="container-fluid">
  <p><br><br><br><br><br><br><br></p>
  <h3 style="font-weight:bold;color:white;font-size:35px;padding-left:100px;">Denteur<br>About Us<h3>
  <p style="color:white;font-size:20px;padding-left:100px;padding-bottom:75px;"> Pages > About Us</p>
  </div>
</div>

<br>
<div class="row2">
  <div class="column2">
    <h1 style="padding-left:155px;font-weight:bold;">Caring For All Your Family’s Dental Needs</h1>
    <p style= "padding-left:155px;padding-top:25px;padding-right:40px;font-size:16px;font-style:italic">All practicing at Denteur have earned either three or more years of undergraduate .</p>
    <p style= "color:gray;padding-left:155px;padding-right:40px;font-size:16px;">A general dentist is your primary care dental provider. This dentist diagnoses, treats, and manages your overall oral health care needs, including gum care, root canals, fillings, crowns, veneers, bridges, and preventive education.</p>
    <a href="#" style="margin-left:155px;margin-top:25px;color:black;font-size:20px;font-weight:bold;background-color:orange;" class="btn btn-info" role="button">Learn More</a>
  </div>
  <div class="column3" style="padding-top:35px;padding-right:75px;">
    <img width="100%" height="325px" src="AboutUs.jfif"></img>
  </div>
</div>


<br>
<br>
<br>
<br><br>
<br>

<div class="row11">
  <div class="column11">
    <div class="card11">
      <a href="Prosthodontics.php"><img src="Grid2.jpg"></a>
      <h3 style="font-weight:bold;padding-top:20px;">Prosthodontics</h3>
      <p style="font-size:18px;padding-top:20px;">Measures of poor oral health in the study includied painful.</p>
    </div>
  </div>

  <div class="column11">
    <div class="card11">
      <a href="OD.php"><img src="Grid1.jpg"></a>
      <h3 style="font-weight:bold;padding-top:20px;">Orthodontic</h3>
      <p style="font-size:18px;padding-top:20px;">Getting into a simple routine that includes adequate care teeth.</p>
    </div>
  </div>

  <div class="column11">
    <div class="card11">
      <a href="Endotonic.php"><img src="Grid2.jpg"></a>
      <h3 style="font-weight:bold;padding-top:20px;">Endodontic</h3>
      <p style="font-size:18px;padding-top:20px;">Sometimes a little effort goes a long way and in this benefits.</p>
    </div>
  </div>

  <div class="column11">
    <div class="card11">
      <a href="FD.php"><img src="Grid3.jpg"></a>
      <h3 style="font-weight:bold;padding-top:20px;">Family Dentistry</h3>
      <p style="font-size:18px;padding-top:20px;">Balanced diet and visiting the dentist often they recommend.</p>
    </div>
  </div>

</div>

<br><br>
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
    <p style="font-weight:bold;font-size:35px;">Our Team</p>
    <hr style="height:3px;width:10%;border-top:4px solid navy">
    <p style="font-size:20px;">We specialise in intelligent & effective search, belieiving in the power of <br> to grow business.</p>
</div>

<div style="position: relative" class="card200">
  <img src="doctor1.jfif" alt="Avatar" style="width:100%">
  <div class="container200">
    <div class="text-center">
    <p style="font-size:30px;font-weight:bold;padding-top:20px;"><b>John Doe</b></>
    <p style="color:navy;font-size:20px;font-weight:bold;">Orthopedic</p>
    <p>There are many variations of passages of Lorem Ipsum available but the majority.</p>
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-linkedin"></a>
    <a href="#" class="fa fa-skype"></a>
     </div>
  </div>
</div>

<div style="position: relative" class="card200">
  <img src="doctor2.jfif" alt="Avatar" style="width:100%">
  <div class="container200">
    <div class="text-center">
    <p style="font-size:30px;font-weight:bold;padding-top:20px;"><b>Jessica Lee</b></>
    <p style="color:navy;font-size:20px;font-weight:bold;">Orthodontist</p>
    <p>There are many variations of passages of Lorem Ipsum available but the majority.</p>
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-linkedin"></a>
    <a href="#" class="fa fa-skype"></a>
     </div>
  </div>
</div>

<div style="position: relative" class="card200">
  <img src="doctor3.jfif" alt="Avatar" style="width:100%">
  <div class="container200">
    <div class="text-center">
    <p style="font-size:30px;font-weight:bold;padding-top:20px;"><b>Sara Jones</b></>
    <p style="color:navy;font-size:20px;font-weight:bold;">Orthopedic</p>
    <p>There are many variations of passages of Lorem Ipsum available but the majority.</p>
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-linkedin"></a>
    <a href="#" class="fa fa-skype"></a>
     </div>
  </div>
</div>



<br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br><br>
<br><br>
<br><br>
<br><br><br>
<br><br>

<div class="container-class1">

<br>
<br>
<br>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="row6">

    <div class="card6" style="background:transparent;color:black;box-shadow:none;margin-right:150px;">
      <p style="font-style:italic;font-weight:bold;font-size:24px;">What our customers are saying</p>

      <p style="font-weight:bold;font-size:40px;">Testimonials</p>
      <hr style="width:10%;border:2px solid black;">
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <p style="font-style:italic;font-weight:bold;font-size:20px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <p style="font-size:18px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    </div>


  <div class="column6" style="margin-top:75px;">
    <div class="card6">
      <h4 style="font-weight:bold;">Really Good Job.</h4>
      <br>
      <img src="Testimonial1.jpg">
      <p style="font-size:18px;">Sara Jones (Lawyer) </p>
    </div>
  </div>

  <div class="column6" style="margin-top:75px;">
    <div class="card6">
      <h4 style="font-weight:bold;">Job well done.</h4>
      <br>
      <img src="Testimonial2.jpg">
      <p style="font-size:18px;">Tim Cook (Docter) </p>
    </div>
  </div>


</div>
</div>


<br>
<br>



<div class="text-center">
    <p style="font-weight:bold;font-size:35px;">Latest News</p>
    <hr style="height:3px;width:10%;border-top:4px solid navy">
    <p style="font-size:20px;">We specialise in intelligent & effective search, belieiving in the power of <br> to grow business.</p>
</div>

<br><br>

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


</body>
</html>
