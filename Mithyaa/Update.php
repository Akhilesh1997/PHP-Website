<?php
	include("connect.php");
	$username = $_POST['username'];
	$password = $_POST['password'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];

	$sql = "update mylog set Username = '".$username."', Password = '".$password."', Contact = ".$contact.", Email = '".$email."' where Username = '".$username."';";
	mysqli_query($connect,$sql);
	mysqli_close($connect); 

?>
