<?php
  include("Hits.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<link href = "StyleSheet.css" rel = "stylesheet" type = "text/css"/>

		<title>CommonMyths!</title>

		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type = "text/javascript"></script>

	</head>

	<body style = "background-color: black; overflow-y: auto;">


		<div class = "header" style="background-color: transparent;">
            <img src = "Gallery/HeaderImage1.png" alt = "No!" style = " position: fixed; min-width: 100%; min-height: 25%; left: 0%; top: 0%;"/>

            <center>
                  <form action = "Search.php" method = "post" style = "width: 25%; height: auto; position: absolute; left: 23.5%; top: 72%; background-color: transparent; border: transparent 0px solid;">
                        <input type="text" name="search" placeholder="Search By CategoryName only.." style = "padding: 7px 7px 7px 7px; font-size: 15px; font-weight: bold; width: 75%;border: 2px black ridge;background-color: teal; color: white;  box-shadow: 2px 2px 3px 3px white; float:left;"/>
                        <input type="submit" name="button" placeholder="Search.." style = "padding: 7px 7px 7px 7px; font-size: 15px; font-weight: bold; width: 5%;border: 2px black ridge;background-color: teal; color: white; float: left; text-align: center; position: absolute; left: 76%; width: 20%; box-shadow: 2px 2px 3px 3px white; float:left;"/>
                  </form>
            </center>

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
                <ul id="menu">
                  <li id = "Mithya" onmouseover="AudioPlay()"> <center>  <a href="Mithya.php" />  M<sup>i</sup>THYAA..  </center> </a> </li>
                  <li id = "Categorized" onmouseover ="AudioPlay()" ><center>CATEGORIZED</center>
                        <center>
                            <div id = "panel" style = "display: none; z-index: 3; opacity: 1; background-color: white;">
                              <br/><a href = "Space.php" class = "options"> SPACE..</a><br/><br/>
                              <a href = "HumanRace.php"  class = "options"> HUMAN RACE..</a><br/><br/>
                              <a href = "Technology.php"  class = "options"> TECHNOLOGY..</a><br/><br/>
                            </div>
                        </center>
                  </li>
                  <li id = "Feedback" onmouseover="AudioPlay()"> <center> <a href="TellMe.php" >  TELL<sup>ME!</sup>  </center> </a></li>
                </ul>
            </div>

      <div class = "myth" id = "one" style = "opacity: 0;">
      		<p>
      				<h1>1.</h1>
      				<em><strong>Myth</strong></em>: Using a cellphone at a gas station is a fire risk.<br/>
					<em><strong>Truth</strong></em>: Only one gas station fire has reportedly involved a cell phone, and even in that case it was later found that the phone wasn't responsible for actually starting the fire, New York Daily News reports. Several studies have also debunked the long-time myththat cellphones might generate an electric spark that could ignite gasoline fumes. That's theoretically possible, the FCC says, however highly improbably under normal circumstances. Still, just to play it safe the National Fire Protection Association advises that you follow manufacturer's instructions, which may say that you should leave your phone in the car. The FCC calls the potential for fires caused by wireless devices "very remote."
			</p>

			<img id = "gas" src = "Gallery/GasStation.jpg" alt="NotFound!" style = "width: 60%; height: 90%; position: absolute; top: 7.5%;  right: 5%; box-shadow: 3px 3px 5px 2px black;">
      </div>

      <div class = "myth" id = "two" style = "top: 105.5%; opacity: 0;">
      		<hr/><br/><p>
      			<h1>2.</h1>
      			<em><strong>Myth</strong></em> : You can't take good photos unless your camera has a lot of megapixels.<br/>
      			<em><strong>Truth</strong></em> : Despite being one of the most commonly held beliefs about digital photography, a photo's quality is determined by many more factors than megapixels. As The New York Times explains that a lens of the camera, circuitry and sensor; not to mention your mastery of lighting, composition and the camera controls are far more important factors.
      		</p>

      		<img id = "cams" src = "Gallery/Camera.jpg" alt="NotFound!" style = "width: 60%; height: 90%; position: absolute; top: 15.5%; right: 5%; margin-bottom: 2%; box-shadow: 3px 3px 5px 2px black;">
      </div>

      <div class = "myth" id = "three" style = "top: 162.5%; opacity: 0;">
      		<hr/><br/><p>
      			<h1>3.</h1>
      			<em><strong>Myth</strong></em> : If you do not fully drain and recharge your phone and laptop batteries, they will lose the ability to take a full charge.<br/>
      			<em><strong>Truth</strong></em> :This may have once been true, but advances in battery technology have made this far less of an issue. Now most devices are powered using lithium-ion or lithium-ion polymer cells, which, as Apple notes, you can charge <em>whenever convenient, without requiring a full charge or discharge cycle.</em>
      		</p>

      		<img id = "battery" src = "Gallery/Nobattery.png" alt="NotFound!" style = "width: 60%; height: 90%; position: absolute; top: 15.5%; right: 5%; margin-bottom: 2%; box-shadow: 3px 3px 5px 2px black;">
      </div>

      <div class = "myth" id = "four" style = "top: 225%; opacity: 0;">
      		<hr/><br/><p>
      			<h1>4.</h1>
      			<em><strong>Myth</strong></em> : Magnets will erase your data!<br/>
      			<em><strong>Truth</strong></em> :You would need a really big magnet, and even then it would only affect certain types of data storage. Solid state drives (SSD) such as thumb drives, for example, are safe. Hard disk drives, like those on your computer, are at risk but only from really powerful magnets, like those used in MRI machines or other specialized equipment.
      		</p>

      		<img id = "magnet" src = "Gallery/Magnet.jpg" alt="NotFound!" style = "width: 60%; height: 90%; position: absolute; top: 15.5%;  right: 5%; margin-bottom: 2%; box-shadow: 3px 3px 5px 2px black;">
      </div>

      <div class = "myth" id = "five" style = "top: 280%; opacity: 0;">
      		<hr/><br/><p>
      			<h1>5.</h1>
      			<em><strong>Myth</strong></em> : Cell phones give you brain cancer!<br/>
      			<em><strong>Truth</strong></em> :Despite being one of the most talked about health scares in the 1990s and early 2000s, no research to date has found a causal link between using your cell phone and getting cancer. An 11-year-long study in the UK concluded that <em>despite exhaustive research, we have found no evidence of risks to health from the radio waves produced by mobile phones or their base stations.</em> Still, you might want to stay tuned on this one. The study also determined that <em>more research was needed.</em>
      		</p>

      		<img id = "cancer" src = "Gallery/Cancerphones.jpg" alt="NotFound!" style = "width: 60%; height: 90%; position: absolute; top: 15.5%;  right: 5%; margin-bottom: 2%; box-shadow: 3px 3px 5px 2px black;">
      </div>

   <button id = "backToTop">
  </button>

      <script>
		$(document).ready(function(){
			$("#one").animate({opacity:1}, 1500);
			$("#gas").animate({left: "120%"}, 1000);

			$("#two").animate({opacity:1}, 1500);
			$("#cams").animate({left: "120%"}, 1000);

			$("#three").animate({opacity:1}, 1500);
			$("#battery").animate({left: "120%"}, 1000);

			$("#four").animate({opacity:1}, 1500);
			$("#magnet").animate({left: "120%"}, 1000);

			$("#five").animate({opacity:1}, 1500);
			$("#cancer").animate({left: "120%"}, 1000);
		});

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
