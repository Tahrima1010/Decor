<?php
include 'config.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>

   <title>Profile</title>
   
  <link rel="stylesheet" type="text/css" href="css/profile.css?v=<?php echo time();?>">
 
   </head>
   
<body style="background-image:url('diningroom4.jpeg'); no-repeat top; background-size:cover;">

<?php include 'navbar.php';?>

<form action="" method="POST">
  </form>
  
  <div class="wrapper">
  <?php
  $cusername=$_SESSION['username'];
  $q=mysqli_query($conn,"SELECT * FROM users where username='$cusername';");
 
 ?>
  <h2 style="color:black ;text-align: center; padding-top:50px;">My Profile</h2>
  <?php
  $row=mysqli_fetch_assoc($q);
  ?>
  <div  style="text-align: center;"><b>Welcome</b>
  <h4>
  <?php
  echo $cusername;
  
  ?>
  </h4>
  </div>
  <?php
  echo "<b>";
  echo "<table class='table'>";
   echo "<tr>";
   
   echo "<td>";
     echo "<b> User Name   : </b>";
   echo "</td>";
   
    echo "<td>";
	echo $row['username'];
   echo "</td>";
   
   echo "</tr>";
   
    echo "<tr>";
	
	 echo "<td>";
	 echo "<b> Email     : </b>";
   echo "</td>";
   
    echo "<td>";
	echo $row['email'];
   echo "</td>";
   
   echo "</tr>";
   
    echo "<tr>";
	
	 echo "<td>";
	echo "<b> Phone     : </b>";
   echo "</td>";
  
    echo "<td>";
	 echo $row['phone'];
   echo "</td>";
   
   echo "</tr>";
   echo "<tr>";
	
	 echo "<td>";
	 echo "<b> Password   : </b>";
   echo "</td>";
   
    echo "<td>";
	echo $row['password'];
   echo "</td>";
   
   echo "</tr>";
   echo "</table>";
   echo "</b>";
   
  ?>

   

</body>
</html>


