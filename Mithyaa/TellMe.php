<?php
  include("Hits.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>TellMe!</title>
	<link rel="stylesheet" type="text/css" href="TellMeStyle.css"/>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type = "text/javascript"></script>
</head>
<body>
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
            <li id = "Mithya" onmouseover="AudioPlay()"> <center>  <a href="Mithya.php" />  M<sup>i</sup>THYAA..  </center> </a> </li>

            <li id = "Categorized" onmouseover ="AudioPlay()" ><center>CATEGORIZED</center>
              <center>
                <div id = "panel" style = "display: none; z-index: 3; opacity: 1; background-color: whitesmoke; width: 100%;">
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

      <div id = "msg" style="text-shadow: 2px 2px 2px red;">
      	SO, HOW DID YOU LIKE MY WEBSITE?
      </div>


	<form action = "Basicform.php" method = "post" id = "basicform" style="font-size:1.5em;">
		Name: 		<input type="text" name="name" placeholder="Aapka naam..." /><br/><br/>
		Age: 		<input type="integer" name="age" placeholder="Aapki umra.."/><br/><br/>
		Gender: 	<span style = "position:absolute; left: 18.5%;">MALE</span> <input type="radio" name="gender" value = "male"				style = "left: 25%;"/>
					<span style = "position:absolute; left: 28%;">FEMALE</span> <input type="radio" name="gender" value = "female"style = "left: 37%;"/><br/><br/><br/><br/>



		How would you rate my website??<br/><br/>

		<input type="radio" name="rating" value = "1"style = "position:relative; left:0px;"/>
		<span style = "font-size:18px;">Improvements required!</span>&nbsp;&nbsp;

		<input type="radio" name="rating" value = "2" style = "position:relative; left:0px;"/>
		<span  style = "font-size:21px;">Average..</span>&nbsp;&nbsp;

		<input type="radio" name="rating" value = "3" style = "position:relative; left: 0px;"/>
		<span style = "font-size:24px;">Good!</span>&nbsp;&nbsp;&nbsp;

		<input type="radio" name="rating" value = "4" style = "position:relative; left:0px;"/>
		<span  style = "font-size:27px;">Brilliant!</span>&nbsp;&nbsp;&nbsp;

		<input type="radio" name="rating" value = "5" style = "position:relative; left:0px;"/>
		<span style = "font-size:30px; ">Seen nothing like it!!</span><br/><br/><br/>



		<span>Any improvements you would like to suggest?</span><br/><br/>
		<textarea name = "suggestions"  style = "height: 15%; width: 40%; position: relative; left: 0px; overflow-y: auto;"/></textarea><br/><br/><br/>

		<span>Some other comments...</span><br/><br/>
		<textarea name = "comments" style = "height: 15%; width: 40%; position: relative; left: 0px;"/></textarea>
            <br/><br/><br/>
            <br/><button type = "submit" id = "sub" style = "margin-bottom: 30px; top: 115%; padding-bottom: 5px; font-size:1.3em;">Lets Go!</button><br/><br/>
  	</form>

      <div style = "position:absolute; left:-5%; top: 175%; color:whitesmoke;">==============================================================================================================================================================</div>

      <form action="Verify.php" method="post" id = "verify" style = "position: absolute; top: 185%; left: 5%; font-family: myfont1;font-size: 1.5em;background-color: transparent;opacity:  0.8;z-index: 1;width: 80%; height: 100%; color: whitesmoke;">
      <span style="color:gold; font-size: 1.8em; font-weight:bold; text-shadow: 2px 2px 2px red;">SOMETHING NEW YOU WOULD LIKE TO ADD?</span><br/><br/><br/>

      What is it about?  <input type="text" name="about"  style="position: absolute;left: 30%;" /><br/><br/>

      What is its category? <input type="text" name="category" style="position: absolute;left: 30%;"/><br/><br/>

      The Myth:  <textarea  name="myth" style="position: relative;left: 19%; height: 15%; width: 30%; overflow-y: auto; top:5%; "></textarea><br/>

      The corresponding Fact:  <textarea  name="fact" style="position: relative;left: 7%; width:30%; height: 20%; overflow-y:auto; top: 15%;"></textarea><br/>
      <button type="submit" id = "b" style = "position:relative; top: 20%; left: 30%; width: 30%; height: 5%; background-color:gold; font-family: myfont; font-size: 1.3em; font-weight: bold;">Send..</button>
      <br/>
      </form>



      <script>
      	$(document).ready(function(){
			$("#Categorized").hover(function(){
				$("#panel").slideToggle("slow");
				$("#panel").animate({diplay: "block"}, "slow");
			});
		});

		$("#User").hover(function(){
			$("#User").toggle('slide');
		});

		function submitforms(){
			document.getElementById("basicform").submit();
			document.getElementById("feedback").submit();
		}
      </script>
</body>
</html>
