<?php
$pageInfo = array();
$pageLink = array();
$pageText = array();
   
//    Page Information
   	$pageInfo[Title] = "Pong";
   	$pageInfo[ofTitle] = "Pong";
	$pageInfo[Cat] = "Gaming";
   	$pageInfo[Type] = "Java";
   	$pageInfo[Size] = "168Kb";
   	$pageInfo[Org] = "Tale of Two Nerds";
   	$pageInfo[Stat] = "In Progress";
   	$pageInfo[Ver] = "1.0L";
   	$pageInfo[Dev] = "Blaine Harper";
   	$pageInfo[Img] = "/res/img/pong/pongW.png";
   	
//    	Page Images
	$pageImg[imgOne] = "https://cdn.scratch.mit.edu/static/site/projects/thumbnails/301/3901.png";
	$pageImg[imgTwo] = "/res/img/pong/eclipse.jpg";
	$pageImg[imgThree] = "/res/img/pong/ultimatePongGH.jpg";
	$pageImg[imgFour] = "/res/img/pong/pong.jpg";
	$pageImg[imgFive] = "";
	$pageImg[imgSix] = "";

//   	Related pages
	$pageRel[one] = "/res/img/mikecraft/main.png";
	$pageRel[oneLink] = "/mikecraft.php";
	
	$pageRel[two] = "";
	$pageRel[twoLink] = "";
	
	$pageRel[three] = "";
	$pageRel[threeLink] = "";
   	
   	
//    	Page Links
   	$pageLink[Ver] = "/res/UltimatePong.jar";
   	$pageLink[Cat] = "gaming.php";
   	
//    	Page Text
   	$pageText[bac-Col-1] = "The idea for the Ultimate Pong game comes from a challenge that I was given at Team 1764. 
		We were given the task of creating a simple game using Light Weight Java Gaming Library (lwjgl) and openGL. 
		Having accomplished this I decided to move on to a more challenging task — improve this game to the max. 
		I spent most of my life working on this one project. It became my obsession and I continued tweaking it until 
		I was content with my progress; then I set it aside and didn't touch it for quite a few months. I has noticed 
		that while clearing up space on my computer I had removed some of my old Java projects and with them was my Pong
		game.";
	$pageText[bac-Col-2] = "Tragic as this may seem I was not upset for a while when I got the idea to begin the Ultimate Pong Project. 
		I searched and searched in order to find my old code to pong and after hours was finally able to find an old and 
		very outdated version of my game. The outdated version was lacking many of the features which were added on and I 
		thought this would be a great time for advancement of the game. After talking with a few friends I decided that it 
		would be best to try and make something big out of this game so I began the Ultimate Pong Project. The project is 
		still in the beginning stages of development, but is sure to be something amusing in a short time.";
	$pageText[desc] = "Ultimate Pong is a game designed to be simple and then completely redesigned in the most complex 
		way that one can reprogram a game from the 1970s. With two dimensional travelling of the paddles to servers and multiplayer 
		the Ultimate Pong game takes simplicity to the next level. Textured paddles and an integrated scoring display allow the 
		player to check his/her score while simultatiously checking the score of their opponent. In the multiplayer version they 
		can also check their standings and where they are in the tournament. This game is sure to amuse teams and families everywhere.";
	$pageText[feat] = "Ultaimate Pong is going to bring back the nostalgia of the good old days 
		of gaming. Back when games were simple, made sense, and were still fun to play. This version 
		which is solely splitscreen contains two paddles: red and blue, and a single white ball 
		which bounces across the game board where it then can be hit by the paddle. Of course most 
		people understand how pong works so I don't need to get too far into the game.<br><br>
		The biggest feature of Ultimate Pong is the 2 Dimensional movement. 
		Tryout pressing AD and <- ->. It's fun";
	$pageText[feat2] = "
		<ol>
			<li>2D Game</li>
			<li>Java-Based</li>
			<li>Open Source</li>
			<li>GitHub</li>
			<li>Free-to-Play</li>
			<li>Designed for Mac</li>
			<li>Simple Controls</li>
			<li>Multiplayer</li>
		</ol>";
		
	include("./base/header.html");
	include("./projectInfo.php");
	include("./base/footer.html");
?>