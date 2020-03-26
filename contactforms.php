<html>
<body>
<?php
	header("Location: http://pallas.networking-lab.usm.maine.edu/~aaron.howard/contact.html");
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$formcontent=" From: $name \n Phone: $phone \n Call Back: $call \n Website: $website \n Priority: $priority \n Type: $type \n Message: $message";
	$recipient = "aaron.howard@maine.edu";
	$subject = "Contact Form";
	$mailheader = "From: $email \r\n";
	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	echo "oops!";
?>
</body>
</html>