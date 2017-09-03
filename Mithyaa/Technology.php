<?php
      include("connect.php");
?>

<html>
  <head>
    <title>Mithyaa!</title>
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" media="screen" />
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type = "text/javascript"></script>

  </head>


 <body onload="blank()" style = "background-color: black;">


    <!--   <div id = "big">
          <div id = "small" align="center"> </div>
      </div> -->

      <!-- HEADER -->
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


            <div id="blank">
                  <span style="position:absolute; left:2%; top:10%; font-size:2.75em; color: darkred; font-family: myfont1;">THE MYTHS AND FACTS OF TECHNOLOGY!</span>
                  <span style = "text-align:center; position:relative; left: 30%; top: 30%; font-size:2.5em; color:darkred; font-family:myfont1;">Page under construction!</span>
                  <div id = "big">
                        <div id = "small" align="center"> </div>
                    </div>
            </div>
      </div>

      <script type="text/javascript">
          var ob1 = document.getElementById("container");
          // var ob2 = document.getElementById("big");
          var url;

        function blank(){
              // ob2.style.display = 'block';
              ob1.style.display = 'none';
              setTimeout("fadeIn(ob1)", 500);
          }

        function fadeOut(ob){
              var opacity = 1;
              var timer = setInterval(function(){
                  if(opacity <= 0.1){
                      clearInterval(timer);
                      ob.style.display = 'none';
                  }

                  ob.style.opacity = opacity;
                  ob.style.filter = 'alpha(opacity=' + opacity * 100 + ")";
                  opacity -= opacity * 0.1;
              }, 50);
              setTimeout("fadeIn(ob1)", 1000);
          }


      function fadeIn(o1){

          // ob2.style.display='none';
          var opacity2 = 0.1;

          var timer2 = setInterval(function(){
              o1.style.display = 'block';
              if (opacity2 >= 1){
                  clearInterval(timer2);
              }
              o1.style.opacity = opacity2;
              o1.style.filter = 'alpha(opacity=' + opacity2 * 10 + ")";
              opacity2 += opacity2 * 0.1;
          }, 50);
      }

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
</body>
</html>
