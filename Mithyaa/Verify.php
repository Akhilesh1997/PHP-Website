<?php
      include("connect.php");
      $conn = mysqli_connect("localhost", "Akhilesh", "Akhilesh");
	mysqli_select_db($conn, "newones");
      $sql = "insert into new values('".$_POST["about"]."', '".$_POST["category"]."', '".$_POST["myth"]."', '".$_POST["fact"]."', '".$_SESSION["username"]."') ;";
      $result = mysqli_query($conn, $sql);
      mysqli_close($conn);
 ?>
