<?php
$pageInfo = array();
$pageLink = array();
$pageText = array();
   
//    Page Information
   	$pageInfo[Title] = "Sara";
   	$pageInfo[Cat] = "Irrelavence";
   	$pageInfo[Type] = "PHP";
   	$pageInfo[Size] = "512Tb";
   	$pageInfo[Org] = "Tale of Two Nerds";
   	$pageInfo[Stat] = "In Progress";
   	$pageInfo[Ver] = "N/A";
   	$pageInfo[Dev] = "Blaine Harper";
   	
//    	Page Links
   	$pageLink[Ver] = "https://github.com/TaleofTwoNerds/Ultimate-Pong";
   	$pageLink[Cat] = "gaming.php";
   	
//    	Page Text
   	$pageText[bac-Col-1] = "The idea for the Ultimate Pong game comes from a challenge that I was given at Team 1764. 
		We were given the task of creating a simple game using Light Weight Java Gaming Library (lwjgl) and openGL. 
		Having accomplished this I decided to move on to a more challenging task — improve this game to the max. 
		I spent most of my life working on this one project. It became my obsession and I continued tweaking it until 
		I was content with my progress; then I set it aside and didn't touch it for quite a few months. I has noticed 
		that while clearing up space on my computer I had removed some of my old Java projects and with them was my Pong
		game. ";
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
	$pageText[feat] = "There are currently a vast number of features included in the Ultimate Pong package. First off is the Singleplayer 
		gamemode which allows the user to play Racketball with themselves against a wall which cannot be penetrated. Another gamemode 
		featured in ultimate pong is the ability to play against a secondary oponent who would use the arrows keys instead of WASD. 
		This allows one person to share the gaming experience with another gamer. Other features of the game include two-dimensional 
		gameplay. This means that any player will be capable of moving their bat either up, down, or right and left. This two-dimenstional 
		gameplay adds another layer of difficulty to the game.";
	
	include("/base/header.html");
	include("/projectInfo.php");
	include("/base/footer.html");
?>