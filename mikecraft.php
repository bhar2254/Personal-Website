<?php
$pageInfo = array();
$pageLink = array();
$pageText = array();
   
//    Page Information
   	$pageInfo[Title] = "Mike-<br>Craft";
   	$pageInfo[ofTitle] = "Mikecraft";
   	$pageInfo[Cat] = "Gaming";
   	$pageInfo[Type] = "Java";
   	$pageInfo[Size] = "A Lot";
   	$pageInfo[Org] = "Tale of Two Nerds";
   	$pageInfo[Stat] = "In Progress";
   	$pageInfo[Ver] = "Pre 1.3";
   	$pageInfo[Dev] = "Blaine Harper";
   	$pageInfo[Img] = "/res/img/mikecraft/mikecraft.png";
   	
//    	Page Images
	$pageImg[imgOne] = "/res/img/mikecraft/main.png";
	$pageImg[imgTwo] = "/res/img/mikecraft/options.png";
	$pageImg[imgThree] = "/res/img/mikecraft/enemy.png";
	$pageImg[imgFour] = "/res/img/mikecraft/fall.png";
	$pageImg[imgFive] = "/res/img/mikecraft/credits.png";
	$pageImg[imgSix] = "/res/img/mikecraft/jump.png";

//   	Related pages
	$pageRel[one] = "/res/img/pong/pong.jpg";
	$pageRel[oneLink] = "/pong.php";
	
	$pageRel[two] = "";
	$pageRel[twoLink] = "";
	
	$pageRel[three] = "";
	$pageRel[threeLink] = "";
   	
//    	Page Links
   	$pageLink[Ver] = "https://github.com/bhar2254/Mikecraft/releases/download/Pre-v1.2.1/Mikecraft.zip";
   	$pageLink[Cat] = "gaming.php";
   	
//    	Page Text
   	$pageText[bac-Col-1] = "I desgined mikecraft as a solo project, which is part of why 
   		all of the textures are from Minecraft. I designed all of the game mechanics and wrote 
   		all of the code. If there are any errors please send me an email-I would like to fix 
   		them. I work hard every day on this so any comments would be very much appreciated. 
   		With each update I add more to the code and slim down some of my older rustier code. I 
   		try to keep all of the classes updated and make sure everything stays 100% up to date.";
	$pageText[bac-Col-2] = "Eventually Mikecraft began a full time project. I spent hours every 
		day working on Mikecraft. I even, at some point, worked harder to update Mikecraft 
		than I did to raise my level in Borderlands 2, and if you were to check steam you would 
		truly understand the importance of that statement.";
	$pageText[desc] = "The idea of Mikecraft was to make a Java-based platformer game that would 
		have some similarities as Nintendo's Mario, but to not be to overly obsessive about it.
		</br>
		In Mikecraft the player takes control of the mild-mannered robot, William. He must travel 
		through various levels under the thumb of an unknown force. He must jump through hoops 
		an stomp on enemies such as Mike. Mike is a small ball-shooting robot that is supposed to 
		destroy William. Should he succeed in destroying William then who knows what could happen 
		to the fictional world?";
	$pageText[feat] = "Mikecraftt comes with a few special features. Mikecraft is 2 dimensional 
		and can run quickly on almost all computers. The code for Mikecraft can easily be found 
		and modified from my GitHub page should anyone decide that they would like to modify the 
		code or mess with it. Mikecraft is free to play for everyone, currently, but should you 
		share this with anyone at least try to mention my name or send them to this site. 
		Currently Mikecraft is a singleplayer game designed for Mac. The controls inclue the 
		common controls (e.g. WASD and arrow keys) and space bar for jumping. These simple 
		controls keep Mikecraft simple, easy, and fun to play.";
	$pageText[feat2] = "
		<ol>
			<li>2D Platformer</li>
			<li>Java-Based</li>
			<li>Open Source</li>
			<li>GitHub</li>
			<li>Free-to-Play</li>
			<li>Designed for Mac</li>
			<li>Simple Controls</li>
		</ol>";
	
	include("./base/header.html");
	include("./projectInfo.php");
	include("./base/footer.html");
?>