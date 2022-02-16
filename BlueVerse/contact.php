<?php
	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$to = "hr@blueversesystems.com";
	$subject = "Blueverse Systems Contact Us Form Details";
	$message = "\r\n Name :" .$username.
			   "\r\n Email :" .$email.
			   "\r\n Subject :" .$subject.
			   "\r\n Message :" .$message;
	$header = "From:" .$email;
	mail($to, $subject, $message, $header);
	header("Location:index.html");
	
?>