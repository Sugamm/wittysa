<?php
include 'Mail.php';
require_once "Mail.php";
function spammer($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$name = isset($_POST['name'])?$_POST['name']:'';
$email = isset($_POST['email'])?$_POST['email']:'';
$contact = isset($_POST['contact'])?$_POST['contact']:'';
$message = isset($_POST['message'])?$_POST['message']:'';

// error variable
$namerr = isset($_POST['namerr'])?$_POST['namerr']:'';
$emailerr = isset($_POST['emailerr'])?$_POST['emailerr']:'';
$contacterr = isset($_POST['contacterr'])?$_POST['contacterr']:'';
$messagerr = isset($_POST['messagerr'])?$_POST['messagerr']:''; 

if ($_SERVER['REQUEST_METHOD']=='POST') {

	//name validation
	if (empty($_POST['name'])) {
		$namerr = 'Name is Required';
	}else{
		$name = spammer($name);
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
 			 $nameerr = "Only letters and white space allowed"; 
			}
	}
	//email validation
	if (empty($_POST['email'])) {
		$emailerr = 'Email is Required';
	}else{
		$email = spammer($email);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailerr='Invalid Email';
		}
	}
	//contact validation
	if (empty($_POST['contact'])) {
		$contacterr = 'contact number is Required';
	}else{
		$contact = spammer($contact);
	}
	//message validation 
	if (empty($_POST['message'])) {
		$messagerr = 'Message is Required';
	}
	if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['contact']) && !empty($_POST['message'])) {
		ini_set('SMTP','myserver');
		ini_set('smtp_port',25);
			$message = spammer($message);
			$to = "myselfsugam@gmail.com";
			$subject = "This message is form Wittysa.com";
			$message = "
			<html>
			<body>
				The name of the person is <b>
				".$name . "
				(".$email.")</b><br> 
				Contact number is  ". $contact . "<br>Message is  <p>
				".$message."</p>
			</body>
			</html>";
		   $retval = mai(l$to,$subject,$message,$email);
		   if ($retval) {
			    echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
			}
			else
			{
			    echo "<script type='text/javascript'>alert('Sent message is failed! <br> Please try again.')</script>";
			}
		}
}



 ?>