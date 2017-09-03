<?php
      error_reporting(0);
      include("connect.php");
	$conn = mysqli_connect("localhost", "Akhilesh", "Akhilesh");
      mysqli_select_db($conn, "search");
      $category = trim($_POST["search"]);
      $result = mysqli_query($conn, "select Link from searchtable where Category regexp '(".$category.")';");
?>

<html>
      <head>
            <link href = "StyleSheet.css" rel = "stylesheet"/>
            <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type = "text/javascript"></script>
      </head>

      <body>
            <div id = "container">
                  <div class = "header" style = "background-color: transparent;">
                        <img src = "Gallery/HeaderImage1.png" alt = "No!" style = " position: fixed; min-width: 100%; min-height: 25%; left: 0%; top: 0%;"/>
                        <div id = "img"> <img src = "Gallery/Logo.png" alt="Stil looking for it!"/></div>

                  <?php
                     if(isset($_SESSION['username']) == NULL){
                         header("Location:Login.php");
                         die();
                        }
                        else{
                           $username = $_SESSION['username'];
                        }
                  ?>
                  <div id = "User">
                     Hello! <?php echo $username; ?>..
                  </div>

                    <center>
                          <form action = "Search.php" method = "post" style = "width: 25%; height: auto; position: absolute; left: 23.5%; top: 72%; background-color: transparent; border: transparent 0px solid;">
                                <input type="text" name="search" placeholder="Search By CategoryName only.." style = "padding: 7px 7px 7px 7px; font-size: 15px; font-weight: bold; width: 75%;border: 2px black ridge;background-color: teal; color: white;  box-shadow: 2px 2px 3px 3px white; float:left;"/>
                                <input type="submit" name="button" placeholder="Search.." style = "padding: 7px 7px 7px 7px; font-size: 15px; font-weight: bold; width: 5%;border: 2px black ridge;background-color: teal; color: white; float: left; text-align: center; position: absolute; left: 76%; width: 20%; box-shadow: 2px 2px 3px 3px white; float:left;"/>
                          </form>
                    </center>

                  <ul id="menu">
                    <li id = "Mithya" onmouseover="AudioPlay()"> <center>  <a href="Mithya.php" />  M<sup>i</sup>THYAA..  </center> </a> </li>

                    <li id = "Categorized" onmouseover ="AudioPlay()" ><center>CATEGORIZED</center>
                     <center>
                        <div id = "panel" style = "display: none; border-left: 2px black inset; border-right: 2px black inset; border-bottom: 2px black inset; z-index: 3; opacity: 1; background-color: whitesmoke; width: 100%;">
                          <br/><a href = "Space.php"  class = "options"> SPACE..</a><br/><br/>
                          <a href = "Technology.php"  class = "options"> TECHNOLOGY..</a><br/><br/>
                          <a href = "HumanRace.php"  class = "options"> HUMAN RACE..</a><br/><br/>
                        </div>
                    </center>
                    </li>

                    <li id = "Feedback" onmouseover="AudioPlay()">
                     <center>
                        <a href="TellMe.php" >TELL<sup>ME!</sup></a>
                     </center>
                    </li>
                  </ul>
              </div>


            <div style = "position:absolute; background-color: white; width: 90%; height: 80%; box-shadow: 2px 2px 2px 2px white;left:5%; top: 25%;">
                  <?php
                        $link = Array();
                        while($data = mysqli_fetch_array($result, MYSQL_ASSOC)){
                              $link[] = $data['Link'];
                        }

                        if(!($data = mysqli_fetch_array($result, MYSQL_ASSOC))){
                              echo '<span style = "font-size: 1.75em; color: red; font-family: arial; position:absolute;
                              left: 25%; top: 30%;">SORRY! YOUR SEARCH YIELDED NO RESULTS!!</span>';
                        }
                              // echo '<div><a href = "'.$link[0].'" style = "width: 100%; height: 100%; position:relative; left: 0%; top:5%;">'.$$link[0].'</a></div>';
                        header("Location:".$link[0]."")
                  ?>
            </div>

        </body>
              <script>

                  $(document).ready(function(){
                    $("#Categorized").hover(function(){
                     $("#panel").slideToggle("slow");
                     $("#panel").animate({diplay: "block"}, "slow");
                    });
                  });

                  $("#User").hover(function(){
                     $("#User").toggle("slide");
                  });
            </script>

      </html>
