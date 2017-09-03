<?php
  include("Hits.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>HumanRace</title>
	<link rel="stylesheet" type="text/css" href="HumanStyle.css"/>
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type = "text/javascript"></script>
</head>
<body>
      <div class = "header" style = "background-color: transparent; z-index: 999;">

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

          <form id = "logform" action = "Logout.php" method = "post" style = " position:fixed; width:5em; height:1.5em; left:85%; top:1%; background-color:white; border:2px darkred ridge; z-index:33;">
              <button type="submit" id = "out" style = "position: relative; width: 110%; height: 135%; left: -6%; top: -20%; color:black; font-size: 1.35em;">Logout?</button>
          </form>


            <center>
                  <form action = "Search.php" method = "post" style = "width: 25%; height: auto; position: absolute; left: 23.5%; top: 72%; background-color: transparent; border: transparent 0px solid;">
                        <input type="text" name="search" placeholder="Search By CategoryName only.." style = "padding: 7px 7px 7px 7px; font-size: 15px; font-weight: bold; width: 75%;border: 2px black ridge;background-color: teal; color: white;  box-shadow: 2px 2px 3px 3px white; float:left;"/>
                        <input type="submit" name="button" placeholder="Search.." style = "padding: 7px 7px 7px 7px; font-size: 15px; font-weight: bold; width: 5%;border: 2px black ridge;background-color: teal; color: white; float: left; text-align: center; position: absolute; left: 76%; width: 20%; box-shadow: 2px 2px 3px 3px white; float:left;"/>
                  </form>
            </center>

          <ul id="menu">
            <li id = "Mithya" onmouseover="AudioPlay()" > <center>  <a href="Mithya.php" />  M<sup>i</sup>THYAA..  </center> </a> </li>
            <li > <center>

           <li id = "Categorized" onmouseover ="AudioPlay()" ><center>CATEGORIZED</center>
              <center>
                <div id = "panel" style = "display: none; z-index: 3; opacity: 1; background-color: whitesmoke; width: 100%;">
                  <br/><a href = "Space.php"  class = "options"> SPACE..</a><br/><br/>
                  <a href = "HumanRace.php"  class = "options"> HUMAN RACE..</a><br/><br/>
                  <a href = "Technology.php"  class = "options"> TECHNOLOGY..</a><br/><br/>
                </div>
            </center>
            </li>
            </select>

            </center> </li>
            <li id = "Feedback" onmouseover="AudioPlay()"> <center> <a href="TellMe.php" >  TELL<sup>ME!</sup>  </center> </a></li>
          </ul>
      </div>

      <div class = "content">
        <h1 style = "font-family: cursive; font-size: 36px; text-align: center; color: ivory; text-decoration: overline;">GREEK MYTHOLOGY AND HUMAN ORIGINS!</h1>

        <img src = "Gallery/GreekGods.jpg" style = "width: 90%; position: relative; left: 5%; top: 5%; height: 50%; box-shadow: 2px 2px 3px 3px black;"/>
        <p style = "margin-top: 60px;">
          Greek mythology begins with the Creation Myth, which is contained within many different sources of ancient Greek texts. The most complete one is Theogony from the Greek poet Hesiod, who lived around the 8th century BCE. Hesiod combines all Greek myths and traditions to create this mythical cosmogony.
        </p>




      </div>

      <div class ="content" style = "top: 130%;">
        <p style = "margin-top: 60px; color:inherit;">
          According to Theogony, in the beginning only chaos and void existed throughout the entire universe (The Greek word chaos does not have the same meaning in which it is used today, but simply meant empty space or a dark void.).
        </p>

        <p>
          Chaos was followed by Gaia (which means earth) and Eros (which is love). It is not specified if Gaia and Eros were born from Chaos or whether they were pre-existing; however, Hesiod mentions that Gaia (Earth) came into existence in order to become the home of the gods. This is similar to other myths, like Sumerian myths, which describe how the earth was initially created for the gods to dwell.
        </p>

        <p>
          Chaos also gave birth to Erebus, who was the darkness of the underworld, and Nyx (night).
          Gaia gave birth to Uranus (heavens) and Okeanos (ocean).
          The story continues showing how the gods mated with each other to complete the whole of creation. Nyx and Erebus mated, and Hemere (day) and Aether (air) were born. Nyx also gave birth to other gods like Moros, Thanatos (death), Nemesis, Hypnos (sleep), Eris and Keres. Uranus and Gaia became the first gods to rule. Uranus then mated with Gaia and produced Cyclopes and the twelve Titans (a race of giants). One of the Titans was Cronus (Saturn).
        </p>

         <p>
          And from here the pantheon of the famous gods of Greek mythology begins.
        </p>

             </div>

            <div class = "content" style="top: 230%; height: 95%;">

            <img src = "Gallery/Cronos.jpg" style = "width: 80%; position: relative; left: 10%; margin-top: 3%; height: 60%; box-shadow: 2px 2px 3px 3px black;"/>
             <p style = "margin-top: 30px;">
              Uranus and Gaia spoke a prophecy to Cronus, telling him that one of his sons would overpower him. As a result, Cronus decided to swallow their children. Gaia was able to save baby Zeus (Jupiter), who was raised on the Greek island Crete until he, with the help of Metis (another Titan), made Cronus to regurgitate the swallowed children. Led by Zues, the six brothers and sisters (Demeter, Hera, Hestia, Hades and Poseidon) rebelled against their father against whom they were victorious, throwing Cronus forever into the Tartarus (the dark world under Earth).
            </p>


          </div>

          <div class = "content" style = "top: 335%; ">
            <p  style = "margin-top: 60px;">
              After that, the rebel gods of ancient Greece divided the universe between them. Zeus was the supreme god, ruling over all others, and all of them lived on the peak of Mount Olympus in Greece.
             <p>
              Greek mythology is full of fights between the gods, similar to other myths and religions—and so far we still have not seen the creation of man.
            </p>

            <p>
              In the above mentioned battle, three Titans did not support Cronus: Prometheus, Epimetheus and Okeanos. Prometheus later joined Zeus. All the Titans were sent into Tartarus (the underworld), with the exception of Prometheus and Epimetheus.
            </p>

            <p>
              Prometheus was the one to create man out of earth (mud), and the goddess Athena breathed life into the man. Here we see another common pattern repeating in the creation, where the spirit is given to the body so that it will become alive.
            </p>
             <p>
                Epimetheus was the one to whom Prometheus assigned the duty to give all living creatures of the planet different qualities/skills; however, Epimetheus had already given all the good skills and qualities to other creatures, and nothing was left for man. Consequently, Prometheus made man to stand upright—as only the gods had done—and gave him fire.
              </p>
         </div>

         <div style = "position: absolute; top: 432%; width: 100%; height: 85%; background-color: inherit; z-index: 2; opacity: 0.975;">
          <iframe width="560px" height="315px" src="https://www.youtube.com/embed/LxoRWD-RwtU" style = "position:relative; left: 25%; height: 100%; width: 50%;" frameborder="0" allowfullscreen>
          </iframe>
         </div>

          <div class = "content" style = "top: 518%; ">
              <p style = "margin-top: 60px;">
                This made Zeus angry because he was not very fond of man, though man was Prometheus’s favourite creation. Zeus thus decreed that man must present a portion of each animal they sacrificed to the gods, but Prometheus tricked Zeus and, as a result, Zeus took fire away from man. Prometheus then stole fire back and returned it to man. For that Zeus punished both man and Prometheus.
              </p>
               <p>
                The punishment that Zeus inflicted to man was to create Pandora (with the help of god Hephaestus), the first woman. He gave Pandora as a gift a box that she was not allowed to open. The box was full of misfortunes, diseases and plagues, while at the bottom of the box there was also hope.
              </p>

              <p>
                Prometheus was condemned to be tormented on the Caucasus Mountain where he was chained on a rock in unbreakable chains. Every night an eagle would appear and eat his liver. During the day the liver was reborn, and every night the eagle would return and eat it again.It is clear that Greek mythology contains parallels to other mythologies and religions, such as water being the b eginning of all life, the on-going fighting between gods and, most importantly, the denial of the gods to allow humans to have knowledge.
              </p>
          </div>

          <div id = "cs" style = "font-size:2em; margin-left: 5%;  position: fixed; top: 27%; left: 74.5%; color:white; text-decoration:underline;"> COMING SOON...</div>
          <div id = "links">
            <br/><a href = "IndianMyths.php">>>> INDIAN MYTHS..</a>
            <br/><br/><a href = "EastAsianMyths.php" style = "margin-left: 3.5%;">>>> EAST ASIAN MYTHS..</a>
            <br/><br/><a href = "ChristianMyths.php" style = "margin-left: 4%;">>>> CHRISTIAN MYTHS..</a>
            <br/><br/><a href = "AfricanMyths.php" style = "margin-left: 5%;">>>> AFRICAN MYTHS..</a>
          </div>
           <button id = "backToTop">
          </button>

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

    $(document).ready(function($){
      $(window).scroll(function(){
          if ($(this).scrollTop() > 50) {
              $('#backToTop').fadeIn('slow');
          } else {
              $('#backToTop').fadeOut('slow');
          }
      });

      $('#backToTop').click(function(){
          $("html, body").animate({ scrollTop: 0 }, 500);
          //$("html, body").scrollTop(0); //For without animation
          return false;
      });
    });

      </script>
</body>
</html>
