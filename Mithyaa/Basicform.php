<?php
	include("connect.php");
	$conn = mysqli_connect("localhost", "Akhilesh", "Akhilesh");
	mysqli_select_db($conn, "updates");
	$sql = "insert into updatetable values ('".$_REQUEST['name']."', ".$_REQUEST['age'].", '".$_REQUEST['gender']."', '".$_REQUEST['suggestions']."', '".$_REQUEST['comments']."', ".$_REQUEST['rating']." where Username = '".$_SESSION['username']."'; ";
	mysqli_query($conn, $sql);
	mysqli_close($conn);
	header("Location:Mithya.php");
?>
