<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<html>
<head>
   <title>Localhost/GamaTechno</title>
	<style>
		.button {
			background-color: #4CAF50;
			border-radius: 12px;
			border: none;
			color: white;
			padding: 10px 20px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
		}		
	</style>
   
</head>

<body>
	<div>
		<div style="text-align:center; margin-top:20px">
			<h3>Let’s Make Something Awesome Together</h3>

			<p>Drop us a message, give us a heads up if you’r interested in our product, service or just want to know more about us</p>

			<p><strong>We’d love to hear from you!</strong>
			</p>
		</div>
	</div>
	
	<div class="container">
		<h2>Contact Form</h2>


		<form action="/action_page.php">
			<div class="form-group">
				<label for="email">Name:</label> <input class="form-control" id="name" name="name" placeholder="Your Name" type="name">
			</div>

			<div class="form-group">
				<label for="email">Email:</label> <input class="form-control" id="email" name="email" placeholder="Your Email" type="email">
			</div>

			<div class="form-group">
				<label for="pwd">Message:</label> <textarea class="form-control" id="msg" rows="4" placeholder="Your Message" ></textarea>
			</div>

			<button class="button btn-default" type="submit" style="margin-bottom:50px;">Submit</button>
		</form>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
	
