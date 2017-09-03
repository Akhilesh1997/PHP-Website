<html>
	<head>
		<meta charset="utf-8">
		<title>Registration</title>
		<link href = "StyleSheet.css" rel = "stylesheet"/>
		<style>
			form{
				width:  60%;
				height: 60%;
				position: absolute;
				top: 35%;
				left: 20%;
				padding-left:  30px;
				font-size: 27px;
				line-height: 30px;
				letter-spacing: 5px;
			}

			input{
				box-shadow: 2px 2px 3px 3px black;
				position: absolute;
				left:  45%;
			}

			button{
				box-shadow: 2px 2px 5px 5px black;
				width:  45%;
				height: 10%;
				position: absolute;
				left:  25%;
				padding-top: 5px;
				padding-bottom: 10px;
				border-radius: 5%;
				border: 1px gold solid;
				background-color: gold;
				font-size: 25px;
			}
		</style>
	</head>
    <body>
    	<div class = "header" style = "background-color: transparent;">

          <img src = "Gallery/HeaderImage1.png" alt = "No!" style = " position: fixed; min-width: 100%; min-height: 25%; left: 0%; top: 0%;"/>

          <div id = "img"> <img src = "Gallery/Logo.png" alt="Stil looking for it!"/></div>

            <!-- <center>
              <input type="text" name="search" placeholder="Search.." style = "padding: 7px 7px 7px 7px; font-size: 15px; font-weight: bold; width: 30%;border: 2px black ridge;background-color: teal; color: white; position: absolute; left: 55%; top: 5%; box-shadow: 2px 2px 3px 3px white;"/>

              <input type="submit" name="search" placeholder="Search.." style = "padding: 7px 7px 7px 7px; font-size: 15px; font-weight: bold; width: 7%;border: 2px black ridge;background-color: teal; color: white; float: left; text-align: center; position: absolute; left: 85.5%; top: 5%; box-shadow: 2px 2px 3px 3px white;"/>
            </center>

          <ul id="menu">
            <li id = "Mithya" onmouseover="AudioPlay()" > <center>  <a href="Mithya.php" />  M<sup>i</sup>THYAA..  </center> </a> </li>
            <li > <center>

            <select id = "Categorized" style = "background-color: inherit; " onmouseover="AudioPlay()">
              <option value = "categories" style = "color:black; font-size: 15px;"> CATEGORI<sup>z</sup>ED..  </option><hr/>

              <option value = "Technological.php" style = "color:black; font-size: 15px;">
                <a href = "Technological.php">Technological</a>
              </option>

              <option value = "Space.php" style = "color:black; font-size: 15px;">
              <a href = "Space.php"> Space</a>
              </option>

              <option value = "Humanrace.php" style = "color:black; font-size: 15px;">
              <a href = "HumanRace.php">Human race </a>
              </option>
            </select>

            </center> </li>
            <li id = "Feedback" onmouseover="AudioPlay()"> <center> <a href="Feedback.php" >  TELL<sup>ME!</sup>  </center> </a></li>
          </ul> -->
       </div>
        <form action="Recordlog.php" method="post">
            <br/><br/>Enter UserName--     <input type="text" name="username" required/><br/><br/>
            Enter Password--    <input type="password" name="password" required/><br/><br/>
            Retype Password--	<input type="password" name="repassword" required/><br/><br/>
            Enter Contact---  <input type="number" name="contact" required/><br/><br/>
            Enter Email ID--     <input type="text" name="email" required/><br/><br/>
            <button type="submit">Punch it!</button>
        </form>
    </body>
</html>
