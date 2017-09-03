<?php
      include("connect.php");
      if(isset($_SESSION["username"])){
            mysqli_close($connect);
            session_destroy();
            header("Location:Login.php");
      }
?>
