<?php 
$email = $_POST['email'];
$from = $_POST['from'];
$subject = $_POST['subject'];
$message = $_POST['message'] 


 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Mail Sending</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
	<div class="container">
	<form class="form-control" method="POST" enctype="">

		<input class="form-control" type="email" name="email" placeholder="Enter recipient email..">
		<input class="form-control" type="email" name="from"  placeholder="Enter From instagram">
		<input class="form-control" type="text" name="subject" placeholder="subject" >
		<textarea  class="form-control" name="message" placeholder="put message here"></textarea>
	</form>
</div>

</body>
</html>