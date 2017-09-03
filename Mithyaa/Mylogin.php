<?php
	include("connect.php");
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "select Password from mylog where Username ='".$username."';";
    $result = mysqli_query($connect,$sql);

    if($row = mysqli_fetch_array($result))
    {
        if($row[0] == $password){
            $_SESSION['username'] = $username;
            echo '<script> alert("To the profile yo!")</script>';
            mysqli_close($connect);
            header("Location:Mithya.php");
        }
       else
            echo '<div style = "width: 100%; height: 100%; padding: 10px 10px 10px 10px; background-color: gold; color: white; position: fixed; left: 0%; top: 0%;">
                    <div style = "width:30%; height: 40%; background-color: darkred; color: white; position: absolute; left:35%; top:30%; box-shadow: 2px 2px 3px 3px black; text-align: center;">
                            <span style = "position:relative; top: 40%; font-size: 3em;">Invalid password!</span>
                    </div>
                </div>';
    }
    else
    {
        echo '<div style = "width: 100%; height: 100%; background-color: gold; color: white; position: fixed; left: 0%; top: 0%;">
                <div style = "width:30%; height: 40%; background-color: darkred; color: white; position: absolute; left:35%; top:30%; box-shadow: 2px 2px 3px 3px black; text-align: center;">
                            <span style = "position:relative; top: 35%; font-size: 3em;">Nobody by that name boss!</span>
                </div>
            </div>';
    }

?>
