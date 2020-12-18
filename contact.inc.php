<?php

if(isset($_POST["submit"])){

	include 'contact_config.php';
	include 'functions.php';


	$name = $_POST['name'];
  $email = $_POST['email'];
	// $subject = stripslashes($_POST['subject']);
	//
	//
	// $message = "Site visitor information:"

if(is_null($name) || $name == ''){
	echo "Please enter your name";
	}
else {
	echo "Your Name is " . $name;
}

if(is_null($email) || $email == ''){
	echo "Please enter your email";
	}
else {
	echo "Your Email is " . $email;
}

}

else {

	echo "There is an error with the code";
}
?>
