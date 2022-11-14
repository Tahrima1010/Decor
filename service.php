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
<link type="text/css" rel="stylesheet" href="MyStyleSheet.css?v=<?php echo time();?>">
<link href="css/bootstrap.min.css" rel="stylesheet" >
 

</head>
<body>


<div class="container">


<h1 style="text-align: center; margin-top: 45px; ">WHAT WE PROVIDE</h1>
<div class="row">
<div class="col-lg-4 col-md-4 col-12">
<a class="nav-link" href="bedroompage.php"><div class="servieimg">
<img src="images/gridbedroom.jpeg" style="height:400px; width:400px;" class="img-fluid">

<h5 class="stext" style="text-align:center; color:black; ">BedRoom Design</h5>
</div></a>

</div>

<div class="col-lg-4 col-md-4 col-12">
<a class="nav-link" href="drawingpage.php"><div class="servieimg">
<img src="images/gridliving.jpeg" style="height:400px; width:400px;" class="img-fluid">
<h5 class="stext" style="text-align:center ;color:black;">DrawingRoom Design</h5>

</div></a>


</div>
<div class="col-lg-4 col-md-4 col-12">
<a class="nav-link" href="diningpage.php"><div class="servieimg">
<img src="images/griddiningroom.jpeg" style="height:400px; width:400px;" class="img-fluid">
<h5 class="stext" style="text-align:center ;color:black;">DiningRoom Design</h5>

</div></a>
</div>
<div class="col-lg-4 col-md-4 col-12">
<a class="nav-link" href="verandapage.php"><div class="servieimg">
<img src="images/gridveranda.jpg" style="height:400px; width:400px;" class="img-fluid">
<h5 class="stext" style="text-align:center; color:black;">Veranda Design</h5>

</div></a>
</div>
<div class="col-lg-4 col-md-4 col-12">
<a class="nav-link" href="kitchenpage.php"><div class="servieimg">
<img src="images/gridkitchen.jpeg" style="height:400px; width:400px;" class="img-fluid">
<h5 class="stext" style="text-align:center; color:black;">Kitchen Design</h5>

</div></a>
</div>
<div class="col-lg-4 col-md-4 col-12">
<a class="nav-link" href="washroompage.php"><div class="servieimg">
<img src="images/gridwashroom.jpeg"  style="height:400px; width:400px;" class="img-fluid">
<h5 class="stext" style="text-align:center; color:black;">Washroom Design</h5>

</div></a>
</div>




</div>




           
					
          


</div>


   
  
    
    <footer>
    <p class="footerbanner"> Copyright 2021 Home Interior | Developed by Austacademy</p>
</footer>  




<script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>