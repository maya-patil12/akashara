<?php include "link.php"?>
<style>
 .topnav {
    overflow: hidden;
  }
  .topnav a {
    float: left;
    display: block;
    color: blue;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }
  .topnav a:hover {
    background: transparent;
    color: black;
  }
  .topnav a.active {
    color: white;
    background:transparent;
  }
  .topnav .icon {
    display: none;
  }
  @media screen and (max-width: 600px) {
    .topnav a:not(:first-child) {display: none;}
    .topnav a.icon {
      float: right;
      display: block;
    }
  }
  
  @media screen and (max-width: 600px) {
    .topnav.responsive {position: relative;}
    .topnav.responsive .icon {
      position: absolute;
      right: 0;
      top: 0;
    }
    .topnav.responsive a {
      float: none;
      display: block;
      text-align: left;
    }
  }
:focus{
    outline: 0px solid transparent !important;
}

</style>


<div class="container-fluid header-container laptop">
    <div style="margin:0px;padding:0px" class="row">
            <div class="col-md-4">
                <p class="header-content"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp Ist Floor Kalashree Building,Belgaum</p>
            </div>
            <div class="col-md-3">
                <p class="header-content"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp 0831-4203339 / 9611303339</p>
            </div>
            <div class="col-md-3">
                <p><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp aksharabgm@gmail.com</p>
            </div>
            <!-- <div class="col-md-1"></div> -->
            <div class="col-md-2 text-right">
                <p><a class="social-link" href="https://www.facebook.com/Akshara-coaching-Belagavi-109184897374736/"><i style="margin:5px 10px" class="fa fa-facebook" aria-hidden="true"></i></a><i style="margin:5px 10px" class="fa fa-instagram" aria-hidden="true"></i></p>
            </div>
    </div>
</div>
<!-- <nav class="navbar navbar-expand-sm laptop sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="images/logo.png" width="130"> 
        </a> 
         
            <button id="toggle" class="btn navbar-toggler" data-toggle="collapse" data-target="#nevigation"  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Menu
                <span class="navbar-toggler-icon"></span>
            </button>
            
        <ul class="navbar-nav d-flex justify-content-end collapse navbar-collapse" id="nevigation">
            <li class="nav-item">
            <a id="home" class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a id="course" class="nav-link" id="aboutus1" href="index.php#aboutus">About Us</a>
            </li>
            <li class="nav-item">
            <a id="contact" class="nav-link" href="courses.php">Courses</a>
            </li>
            <li class="nav-item">
            <a id="facility" class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
            <a id="gallery" class="nav-link" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
            <a id="aboutus" class="nav-link" href="#">Contact Us</a>
            </li>
           
        </ul>
    </div>
</nav> -->

<nav class="navbar navbar-expand-md sticky-top laptop">
    <div class="container">
        <a class="nav-brad brand1" href="index.html" >
       <img style="width:130px" class="img-fluid" src="images/logo.png"/>
       </a>
       <button class="btn navbar-toggler" data-toggle="collapse" data-target="#nevigation"  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
       </button>
       
       <div class="collapse navbar-collapse" id="nevigation">
           <ul class="navbar-nav ml-auto navlist">
            <li class="nav-item nav-list active">
                <a class="nav-link" href="index.php">Home</a>
            </li> 
             <li class="nav-list active">
                    <a class="nav-link" href="index.php#aboutus">About us</a>
            </li>
            <li class="nav-list active">
                     <a class="nav-link" href="courses.php">Courses</a>
            </li>
            <li class="nav-list active">
                     <a class="nav-link" href="index.php#features">Features</a>
            </li>
            <li class="nav-list active">
                     <a class="nav-link" href="index.php#gallery">Gallery</a>
            </li>
             <li class="nav-list active">
                    <a class="nav-link" href="index.php#contact">Contact Us</a>
            </li>
            
        </ul>
       </div>
      </div>
  </nav>
   

<div class="mobile">
  
  <div style="background-color:#AE7400;" class="topnav mobile" id="myTopnav">
    <div>
        <a href="index.php" class="active">
          <img src="images/logo.png" width="130"> 
          <!-- <h1>Akshara</h1> -->
          <!-- <img style="width:65px;height:65px;" class="img-fluid" src="images/Logo-2.png">  -->
          <!-- <p>From where the success<br/>story begins...</p> -->
        </a>
    </div>
    <a id="gallery2" style="color:white" class="nav-link" href="index.php#aboutus">About Us</a>
    <a id="reservation2" style="color:white" class="nav-link" href="courses.php">Courses</a>
    <a id="events2" style="color:white" class="nav-link" href="index.php#features">Features</a>
    <a id="about2" style="color:white" class="nav-link" href="index.php#gallery">Gallery</a>
    <a id="menu2" style="color:white" class="nav-link" href="index.php#contact">Contact Us</a>
    <!-- <a id="gallery2" class="nav-link" href="gallery.php">Gallery</a>
     -->
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <button style="background-color:white;color:#AE7400;border:1px solid #AE7400;" class="btn" type="button"><i class="fa fa-2x fa-bars"></i></button>
    </a>
    
  </div>
</div>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

</script>
