
<?php
include 'navbar.php';
    session_start();
    $database_name = "sdproject";
    $con = mysqli_connect("localhost","root","",$database_name);
?>





<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Project</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link href="css/bootstrap.min.css" rel="stylesheet" >
 <link type="text/css" rel="stylesheet" href="MyStyleSheet.css?v=<?php echo time();?>">






</head>
<body>
<!--MENUBAR-->






<!--BANNER-->
	
	   
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/image1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2 class="h2text">HOME INTERIOR IN BANGLADESH</h2>
        <p class="bannertext">Where creative meets living.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/image2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2 class="h2text">HOME INTERIOR IN BANGLADESH</h2>
        <p class="bannertext">A style that makes a statement.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/image3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2 class="h2text">HOME INTERIOR IN BANGLADESH</h2>
        <p class="bannertext">Enhance your home style with us.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--WELCOMETEXT-->
<div class="container">
 <div class="row">
   <div class="col-lg-6 col-md-6 col-12">
     <h1>Welcome!</h1>
      <ul>
          <li>
              Do you have a vision of how your home should look?<br>Allow us to turn that vision into reality.
          </li>
          <br>
          <li>
              Whether it’s a residential or a commercial property that you want to get designed, Imagine Interiors can do it. We also<br> create custom furniture as per your requirement.
          </li>
          <br>
          <li>
              We always stick to deadlines and we never go over budget.
          </li>
          <br>
          <li>
              So, what are you waiting for? Call Imagine Interiors today!
          </li>
      </ul>
     
      
       
   </div>
   <div class="col-lg-6 col-md-6 col-12">
       <h1>The Experience</h1>
      <ul>
          <li>
              We make interior design completely hassle-free.<br> We are fully transparent about costs.
          </li>
          <br>
          <li>
              We deliver on time.
          </li>
          <br>
          <li>
              We allow for environmental conditions and employ advanced technology.
          </li>
          <br>
          <li>
              We will extensively consult with you and ensure the final design is exactly what you wanted.
          </li>
      </ul>
       
       
   </div>
    
</div>
<!--WELCOMEGRID-->
<div>
<h1 style="text-align:center; margin-top:50px; margin-bottom:50px; font-size:60px; ">About Us</h1>
<div class="row">

<div class="col-lg-6 col-md-6 col-12 ">
<img src="images/living1.jpeg" class="img-fluid">
</div>

<div class="col-lg-6 col-md-6 col-12 ">
<h3>Our work process</h3>
<p class="hstext" style="color:black;">We have adopted the 'turnkey process' to design interior,that is, we both do the design and implementation so that you dont need to worry about anything.</p>
<a href="aboutus.php">Learn More</a>
</div>
 
</div>
</div>

  

<!--providegrid	-->
<div>

<h1 style="text-align: center; margin-top: 45px; ">WHAT WE PROVIDE</h1>
<div class="row">
<div class="col-lg-4 col-md-4 col-12">
<div class="servieimg">
<img src="images/gridbedroom.jpeg" style="height:400px; width:400px;" class="img-fluid">

<h5 class="stext" style="text-align:center; color:black; ">BedRoom Design</h5>
</div>

</div>

<div class="col-lg-4 col-md-4 col-12">
<div class="servieimg">
<img src="images/gridliving.jpeg" style="height:400px; width:400px;" class="img-fluid">
<h5 class="stext" style="text-align:center ;color:black;">DrawingRoom Design</h5>

</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
<div class="servieimg">
<img src="images/griddiningroom.jpeg" style="height:400px; width:400px;" class="img-fluid">
<h5 class="stext" style="text-align:center ;color:black;">DiningRoom Design</h5>

</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
<div class="servieimg">
<img src="images/gridveranda.jpg" style="height:400px; width:400px;" class="img-fluid">
<h5 class="stext" style="text-align:center; color:black;">Veranda Design</h5>

</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
<div class="servieimg">
<img src="images/gridkitchen.jpeg" style="height:400px; width:400px;" class="img-fluid">
<h5 class="stext" style="text-align:center; color:black;">Kitchen Design</h5>

</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
<div class="servieimg">
<img src="images/gridwashroom.jpeg"  style="height:400px; width:400px;" class="img-fluid">
<h5 class="stext" style="text-align:center; color:black;">Washroom Design</h5>

</div>
</div>




</div>
</div>



 
 

    </div>

<footer>
    <p class="footerbanner"> Copyright 2021 Home Interior | Developed by Austacademy</p>
</footer>




<script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>