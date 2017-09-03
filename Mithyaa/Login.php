<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="LoginStyle.css"/>
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type = "text/javascript"></script>

</head>
<body>
	<img src = "Gallery/HeaderImage.jpg" style = "opacity: 0.75;"/>

	<p id = "title" style = "font-weight: bold;"> The Myths of Everything~~</p>

	<div id = "content" style = "box-shadow: 2px 2px 3px 3px black; position: absolute; top: 16%; left: 1%; bottom: 1%;   height: auto; width: 60%; background-color: transparent; z-index:3; padding-left: 1.5%; padding-top: 1%; color: black; ">
    	<span>
		~Seekers often ask questions about the meaning of the word MITHYA.<br/>

          ~The dictionary definition of the word gives: <br/>1) contrarily, incorrectly, wrongly, improperly; <br/>2) falsely, deceitfully, untruly;<br/> 3) not in reality, only apparently;<br/> 4) to no purpose, fruitlessly, in vain.<br/><br/>

          It explains that the utility of the objects seen in the waking state is contradicted by the dream state. Objects have to be regarded as mithya since they have a beginning and an end.<br/><br/>



          ~If an object has utility, then it must be real. Thus, for example, I see a glass of water on the table; I pick it up and drink it and my thirst is quenched. Therefore that glass of water must have been real.<br/>

          But the glass of water seen in a dream quenches the thirst of the dreamer. On waking, however, it is realized not to have been real. In fact, the waking glass of water is totally useless to the dreamer. <br/>

          ~Both worlds are <em>relatively real</em> but neither is absolutely real.  Hence there is the need for a new word to describe them <strong> MITHYA</strong>.<br/><br/>



          ~The first definition equates <strong>MITHYA</strong> with <strong>ANIRVACHANLYA</strong> i.e. indefinable or inexplicable. Or it can be said as the state of <em>being</em> or <em>non-being</em>.<br/> One inference is that a MITHYA object has two properties <br/>
          <pre style="font-size:1.45em"><em>the absolute negation of being</em>, which could mean <em>non-being;</em><center><em>the absolute negation of non-being</em>, which could mean <em>being</em>;</center></pre><br/>



          ~The second definition uses the concept of counter positive (pratiyogin), which brings into play, the concept of zero as a <em>non-negative number</em>, and positrons being <em>negative-  or non- electrons</em>.<br/>

          For example, if a person believes a rope to be a snake, and later realizes that it was a rope; he will say, <em>There was never a snake here!</em>.
          He can also say, <em>The non-existence of a snake was always there in this place!</em>. This is <em>counter-positive!</em><br/><br/>

          ~So, from many such explanations, I can be conclusive of the <em>fact</em>, <em>(pun intended!)</em> that a myth, as we call it in English, is an
          <strong><em>Indefinite structure, whose foundation is a belief, which is supported by counter-positive explanations of why the belief is not wrong; and has an environment of possible reality that surrounds it, with a population that is walking in a random direction, towards an abstract goal..."</em></strong>.<br/><br/>

          ~But in the end, the only actual, but incomprehensible reality is the Universe, and the Creator!!<br/>
    </span>
</div>

    <p style="position: absolute;left:  70%;top: 40%; color: gold; font-size: 2.5em; text-shadow: 2px 2px darkred;"> Wanna read more??<br/>
	 <form method="post" action="Mylogin.php" id = "login">
		<br/>Username: <input type="text" name="username" style = "z-index:3; box-shadow: 1px 1px 3px 3px black;"/>
		<br/><br/>Password: &nbsp;<input type="password" name="password" style = "z-index:3; box-shadow: 1px 1px 3px 3px black;"/>
		<br/><br/><button type="submit">Login!</button>
	</form><br/>

	<div style = "color: gold; left:  67.5%; top: 75%;position: absolute;">--------------------------------</div>
	<form action="Register.php" method="post" style = "top: 48.5%; left: 75%; padding: 0px; height: 2.5%; height: 0%; border: none;"><br/>
		<button type="submit" style = "z-index:3; top: 80.5%; left: 70%;">Register!</button>
	</form>

	<script>
		$(document).ready(function(){
			$("#title").animate({opacity: 1}, 500);
			$("#content").animate({opacity: 1}, 1000);
		});
	</script>
</body>
</html>
