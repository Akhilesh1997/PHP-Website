<?php
  include("Hits.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Space!!</title>
	<link href = "SpaceStyle.css" rel = "stylesheet" type="text/css"/>
	<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body>
	<img src = "Gallery/Cosmos.jpg" id = "cosmos"/>
	  <div class = "header" style="opacity: 0.99;">

        <img src = "Gallery/HeaderImage1.png" alt = "No!" style = " position: fixed; min-width: 100%; min-height: 28%; left: 0%; top: 0%;"/>

          <div id = "img"> <img src = "Gallery/Logo.png" alt="Stil looking for it!" style = "filter: brightness(80%);"/></div>

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
                  <form action = "Search.php" method = "post">
                        <input type="text" name="search" placeholder="Search By CategoryName only.." style = "padding: 7px 7px 7px 7px; font-size: 15px; font-weight: bold; width: 20%;border: 2px black ridge;background-color: teal; color: white; position: absolute; left: 23.5%; top: 72%; box-shadow: 2px 2px 3px 3px white;"/>
                        <input type="submit" name="button" placeholder="Search.." style = "padding: 7px 7px 7px 7px; font-size: 15px; font-weight: bold; width: 5%;border: 2px black ridge;background-color: teal; color: white; float: left; text-align: center; position: absolute; left: 46%; top: 72%; box-shadow: 2px 2px 3px 3px white;"/>
                  </form>
            </center>

          <ul id="menu">
            <li id = "Mithya" onmouseover="AudioPlay()"> <center>  <a href="Mithya.php" />  M<sup>i</sup>THYAA..  </center> </a> </li>
            <li onmouseover="AudioPlay()"> <center>

                  <li id = "Categorized" onmouseover ="AudioPlay()" ><center>CATEGORIZED</center>
                        <center>
                            <div id = "panel" style = "display: none; z-index: 3; opacity: 1; background-color: whitesmoke; width: 100%;">
                             <br/><a href = "Space.php"  class = "options"> SPACE..</a><br/><br/>
                             <a href = "HumanRace.php"  class = "options"> HUMAN RACE..</a><br/><br/>
                             <a href = "Technology.php"  class = "options"> TECHNOLOGY..</a><br/><br/>
                            </div>
                        </center>
                  </li>

            </center> </li>
            <li id = "Feedback" onmouseover="AudioPlay()"> <center> <a href="TellMe.php" >  TELL<sup>ME!</sup>  </center> </a></li>
          </ul>
    </div>


    <!-- SOLAR SYSTEM -->
    <div class = "content">
    	<h1 style = "letter-spacing: 2px; color: darkred; font-family: "Trebuchet MS", Helvetica, sans-serif;">ABOUT THE SOLAR SYSTEM-</h1>
        <div class = "col1">
      		<p class = "mnf">Myth:</p> The Sun is a burning ball of fire!<br/>
          <img class = "repimg" src = "Gallery/Sun.png" alt = "No!"/>
      	</div>

        <div class = "col2">
        	<p class = "mnf" >Fact:</p> The sun is glowing, not burning like a fire. The sun glows because its temperature is about 5,500 degrees Celsius (about 10,000 degrees Fahrenheit). This heat is not produced by burning (a chemical reaction), but rather by fusion (a nuclear reaction). This nuclear fusion takes place deep in the suns core at a temperature of about 15 million degrees. As the heat travels out through the suns layers, it becomes much cooler, but still hot enough to glow in visible light. For comparison, the temperature of a wood fire is less than a thousand degrees Fahrenheit.<br/><br/><br/><br/><br/><br/><br/>
        </div>

        <div class = "col1">
      		<p class = "mnf">Myth:</p> Spacecrafts can land on the surfaces of Jupiter, Saturn, Urnaus and Neptune!<br/>
          <img class = "repimg" src = "Gallery/Spacecraft.jpg" alt = "No!"  style = "top:  35.5%;" />
        </div>

        <div class = "col2">
      		<p class = "mnf" >Fact:</p> These giant planets are made mostly of gas. They may have solid cores, but the temperature and pressure of the gas would increase as the spacecraft moved toward the core. It would be destroyed before it reached that solid surface.<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        </div>


        <div class = "col1">
        	<p class = "mnf">Myth:</p> Pluto is the most distant and last object of the solar system!<br/>
          <img class = "repimg" src = "Gallery/Pluto.jpg" alt = "No!"  style = "top:  60.5%;"/>
      	</div>

        <div class = "col2">
          <p class = "mnf" >Fact:</p> No, Pluto is not the last object in the solar system. Pluto resides within a region of icy objects called the Kuiper Belt. The Kuiper Belt extends from Neptunes orbit outward. Beyond Plutos orbit is another vast region of icy objects called the Oort Cloud, which, like the Kuiper Belt, is a home to comets.<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        </div>

        <div class = "col1">
      		<p class = "mnf">Myth:</p> All comets have tails!<br/>
          <img class = "repimg" src = "Gallery/Comet.jpg" alt = "No!"  style = "top:  81%;"/>
        </div>

        <div class = "col2">
          <p class = "mnf" >Fact:</p> Comets do not always have tails. They develop a fuzzy, shell like cloud called a coma, and one, two, or three tails when near the sun. Comets have no coma or tail when far away from the sun.<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        </div>
      		<a href = "http://amazingspace.org/resource_page/160/solar_system/type" style = "font-size: 15px; color: red;  font-weight: 600;margin-left: 65%; filter: brightness(300%);">To read more click here!</a>
      		<hr/>
    </div>

    <div style = "position: absolute; top: 364.5%; width: 100%; height: 78%; background-color: black; opacity: 0.975; z-index: 5;">
        <iframe width="560px" height="315px" style = "position:relative; left: 25%; height: 100%; width: 50%;" src="https://www.youtube.com/embed/3nQiLSqIdJs" frameborder="0" allowfullscreen>
        </iframe>
    </div>

    <!-- COSMOS -->
    <div class = "content" style = "top: 443%;">
      	<h1 style = "letter-spacing: 2px; color: darkred; font-family: "Trebuchet MS", Helvetica, sans-serif;">ABOUT THE COSMOS-</h1>
      		<div class = "col1">
            <p class = "mnf">Myth:</p> The Big Bang happened in a particular place!<br/>
            <img class = "repimg" src = "Gallery/CosmicExplosion.jpg" alt = "No!"  style = "top:  10%; background-color: black; filter: brightness(1.2);"/>
          </div>

        	<div class = "col2">
            <p class = "mnf" >Fact:</p> To describe a Big Bang, the term 'explosion' is very misleadingm since in reality, the Big Bang was utterly different from any explosion we are familiar with.In a conventional explosion, shrapnel flies outwards into a pre existing space. But, in the case of the Big Bang, there was no pre existing space. All space; not to mention matter, energy, and even time, burst into being and began expanding spontaneously. Also, in a conventional explosion, stuff flies outwards from a single point in space. The Big Bang, however, did not occur at a particular location.<em>Every point of space exploded away from every other point in space.</em><br/>

      			It has become conventional to liken the expansion – which continues today with the galaxies like our own Milky Way flying apart from each other – to the rising of a cake studded with raisins. As the cake swells, every raisin recedes from every other raisin, and none is the centre of the expansion. <em>The analogy with our universe is not, of course, perfect since a cake has an edge and the universe, as far as we know, does not. It either goes on for ever or folds back on itself just like a higher dimensional version of the surface of a football.</em><br/><br/>
          </div>

          <div class = "col1">
        		<p class = "mnf">Myth:</p> If the universe is expanding, the Solar System must be expanding too!<br/>
          </div>

          <div class = "col2">
          	<p class = "mnf" >Fact:</p> The universe is certainly expanding but you yourself are not expanding. Neither is the Earth, nor our Solar System, nor our Milky Way, nor the Local Group of galaxies of which the Milky Way is a prominent member. To understand why, you need to know something about the nature of the universe is expansion.<br/>

      			As the American astronomer Edwin Hubble discovered in 1929, the farther apart two galaxies are, the faster they are flying apart from each other. In fact, two galaxies that are twice as far apart as two others will be receding twice as fast; three times as far apart, three times as fast; and so on. What this tells us is that the expansion of the universe becomes ever more powerful and irresistible the larger the scale.<br/><br/>
          </div>

          <div class = "col1">
            <p class = "mnf">Myth:</p> Gravity always pulls!<br/>
          </div>

      		<div class = "col2">
            <p class = "mnf" >Fact:</p> Gravity is a 'universal' force which acts between every piece of matter and every other piece of matter.There is a force of gravity between the Earth and the Moon and between the Sun and the Earth. And, in all these cases, the force is attractive. However, this need not always be so, as Einstein showed.<br/>
        		The source' of gravity in Newtons theory is 'mass'. <em>However, Einstein showed that it is really 'energy', of which mass is merely one kind. Actually, Einstein showed that the source of gravity is energy + pressure.</em> The energy in normal matter is enormous (think of how much is liberated by the destruction of a kilogram or so in a hydrogen bomb) and the pressure: the microscopic drumming of particles of matter on any container, is negligible in comparison. But say there exists a type of material where not only is the pressure bigger than the energy but it is also negative. <em>In this case, the (energy + pressure) term that generates gravity in Einsteins theory might be reversed in sign, creating repulsive gravity.</em><br/>
        		This only goes on justify, <em>that since 1998, we have known that about 70 per cent of the mass-energy of the universe is in the form of 'dark energy'. It is invisible. It fills all of space. And it has repulsive gravity, which is speeding up the expansion of the universe.</em>
        		<br/><br/>
          </div>

      		<a href = "https://newhumanist.org.uk/articles/4748/ten-cosmic-myths" style = "font-size: 15px; color: red;  font-weight: 600;margin-left: 65%; filter: brightness(300%);">To read more click here!</a>
      		<hr/>

	</div>

  <button id = "backToTop" style = "z-index:0;">
  </button>
	<script type="text/javascript">
		 // $(function(){
   //    		$("#Categorized").on('change', function(){
   //      		url = $(this).val();
   //      		if(url)
   //        		window.location = url;
   //    		});
   //  	});

     $(document).ready(function(){
      $(".col1").animate({opacity: 1}, 1500);
      $(".col2").animate({opacity: 1}, 1500);
      $(".repimg").animate({opacity: 1}, 1500);
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
