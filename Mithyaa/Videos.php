<html>
  <head>
    <title>Mithyaa!</title>
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" media="screen" />
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type = "text/javascript"></script>

  </head>


 <body style = "background-color: black;">


    <!--   <div id = "big">
          <div id = "small" align="center"> </div>
      </div> -->

      <!-- HEADER -->
    <div id = "container">
          <div class = "header" style = "background-color: transparent;">

          <img src = "Gallery/HeaderImage1.png" alt = "No!" style = " position: fixed; min-width: 100%; min-height: 25%; left: 0%; top: 0%;"/>

          <div id = "img"> <img src = "Gallery/Logo.png" alt="Stil looking for it!"/></div>
          <?php
            include("connect.php");

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

          <form id = "logoutform" action = "Logout.php" method = "post">
                <button type="submit" id = "logout" style = "background-color: transparent;">Logout?</button>
          </form>

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
                  <a href = "HumanRace.php"  class = "options"> HUMAN RACE..</a><br/><br/>
                  <a href = "Technology.php"  class = "options"> TECHNOLOGY..</a><br/><br/>
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

            <div id = "videobox" style = "top:25.5%; left:15%; position: absolute; height: auto; width: 70%; background-color: inherit;">
                  <iframe id = "one" width="40%" height="60%" src="https://www.youtube.com/watch_popup?v=QHY3CoE_5wc" frameborder="0" allowfullscreen style="border: 3px white ridge; margin-top: 5%; margin-left:0.5%;"></iframe>
                  <iframe id = "two" width="40%" height="60%" src="https://www.youtube.com/embed/DfgkAJmp9-A" frameborder="0" allowfullscreen style="border:3px white ridge; margin-top: 5%; margin-left:15%;"></iframe>
                  <iframe id = "three" width="40%" height="60%" src="https://www.youtube.com/embed/EVN3WEgHJHI" frameborder="0" allowfullscreen style="border: 3px white ridge; margin-top: 2.5%; margin-left:0.5%;"></iframe>
                  <iframe id = "four" width="40%" height="60%" src="https://www.youtube.com/embed/o0r510LMa4I" frameborder="0" allowfullscreen style="border: 3px white ridge; margin-top: 2.5%; margin-left:15%;"></iframe>
                  <iframe id = "five" width="40%" height="60%" src="https://www.youtube.com/embed/hEca1MiE4GA" frameborder="0" allowfullscreen style="border: 3px white ridge; margin-top: 2.5%; margin-left:0.5%;"></iframe>
                  <iframe id = "six" width="40%" height="60%" src="https://www.youtube.com/embed/oRWYMQFddT0" frameborder="0" allowfullscreen style="border: 3px white ridge; margin-top: 2.5%; margin-left:15%;"></iframe>
            </div>
      </div>
      </body>
      <script type="text/javascript">

            $(document).ready(function(){
                  $("#Categorized").hover(function(){
                        $("#panel").slideToggle("slow");
                        $("#panel").animate({diplay: "block"}, "slow");
                  });
            });

            $("#User").hover(function(){
                  $("#User").toggle('slide');
            });
      </script>
</html>
