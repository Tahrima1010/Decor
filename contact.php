<?php 

include 'config.php';
include 'navbar.php';
error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; 
	$phone = $_POST['phone'];// Get Email from form
	$comment = $_POST['comment']; // Get Comment from form

	$sql = "INSERT INTO ccc (name, email, phone , comment)
			VALUES ('$name', '$email', '$phone','$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>sdproject</title>
</head>
<body style=" background-image:url('living1.jpeg');
	no-repeat top;
    background-size:cover;" >

 <section class="contact" >
<div class="content">
       <h2 class="contacth2text">SPEAK WITH US TODAY!</h2>
       <p class="ptext">We would love to hear from you.Give us a call or send us message.</p>
       </div>
	   
	 <div class="contactinfo">
             <div class="box">		
                <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>			 
                   <div class="text">
				     <h3>Address</h3>
					  <p>DHAKA,<br>Bangladesh<br>1200</p>
                      </div>
					  </div>
					  
					 <div class="box">		
                <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>			 
                   <div class="text">
				     <h3>Phone</h3>
					  <p>01799788025</p>
                      </div>
					  </div>
					  
					  <div class="box">		
                <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>			 
                   <div class="text">
				     <h3>Email</h3>
					  <p>180104057@aust.edu</p>
                      </div>
					  </div>  
                    </div> 
					
	   
	 
	   
	<div class="wrapper">
		<form action="" method="POST" class="form">
			<div class="row">
				<div class="input-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" placeholder="Enter your Name" required>
				</div>
				<div class="input-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" placeholder="Enter your Email" required>
				</div>
				<div class="input-group">
					<label for="email">Phone</label>
					<input type="number" name="phone" id="phone" placeholder="Enter your number" required>
				</div>
			</div>
			<div class="input-group textarea">
				<label for="comment">Message</label>
				<textarea id="comment" name="comment" placeholder="Enter your Message" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">SEND</button>
			</div>
		</form>
		
	</div>
	
</section>	
<footer>
    <p class="footerbanner1"> Copyright 2021 Home Interior | Developed by Austacademy</p>
</footer>

</body>

</html>