<?php
	include("connect.php");
	$pass = $_REQUEST["password"];
	$repass = $_REQUEST["repassword"];

	$username = trim($_REQUEST["username"]);
	$contact = trim($_REQUEST["contact"]);
	$email = trim($_REQUEST["email"]);

	if(!preg_match("/^[A-Za-z0-9`~!@#$%^&*()_+-={}[]|\:;?>.<,]{3,21}$/", $username))
		die("USERNAME LENGTH MUST BE LESS THAN 22 CHARACTERS!");

	if(!preg_match("/^[0-9]{9}$/", $contact))
		die("CONTACT MUST CONSIST OF DIGITS ONLY!");

	if(!preg_match("/^[A-Za-z0-9.]@[A-Za-z0-9].[A-Za-z.]{2,5}$/", $email))
		// die("INVALID EMAIL!");

	if($pass != $repass){
		echo 'PASSWORDS DO NOT MATCH!';
		header("Location:Register.php");
	}
    $sql = "insert into mylog values ('".$_REQUEST["username"]."','".$_REQUEST["password"]."',".$_REQUEST["contact"].",'".$_REQUEST["email"]."');";
    mysqli_query($connect,$sql);
  ?>
<html>
	<head>
		<title>
			SUCCESSFUL!!
		</title>
	</head>

	<body bgcolor="black">
		<div style = "position: fixed; left: 40%; top:45%; font-size: 2.5em; font-family: arial; color: white; height: 45%; width: 55%; background-color: red; border: 5px white ridge;" >Registration successful!! Login to see your profile...
		</div>
	</body>
</hmtl>
  <?php
    mysqli_close($connect);
    header("Location:Login.php");
?>
