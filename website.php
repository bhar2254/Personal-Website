<?php
$pageInfo = array();
$pageLink = array();
$pageText = array();
   
// 	Page Information
   	$pageInfo[Title] = "Web<br>Site";   	
   	$pageInfo[ofTitle] = "This Site";
   	$pageInfo[Cat] = "Php";
   	$pageInfo[Type] = "RHCloud";
   	$pageInfo[Size] = "85Mb";
   	$pageInfo[Org] = "Tale of Two Nerds";
   	$pageInfo[Stat] = "In Progress";
   	$pageInfo[Ver] = "N/A";
   	$pageInfo[Dev] = "Blaine Harper";
   	$pageInfo[Img] = "/res/img/website/web02.png";
   	
//    	Page Links
   	
//    	Page Images
	$pageImg[imgOne] = "/res/img/website/wrangler04.png";
	$pageImg[imgTwo] = "/res/img/website/23-4-2015.png";
	$pageImg[imgThree] = "/res/img/website/web01.jpg";
	$pageImg[imgFour] = "/res/img/website/wrangler01.png";
	$pageImg[imgFive] = "/res/img/website/wrangler02.png";
	$pageImg[imgSix] = "/res/img/website/wrangler03.png";
   	
//   	Related pages
	$pageRel[one] = "http://ampache.org/img/previews/login.jpg";
	$pageRel[oneLink] = "/ampache.php";
	
	$pageRel[two] = "";
	$pageRel[twoLink] = "";
	
	$pageRel[three] = "";
	$pageRel[threeLink] = "";
	
//    	Page Texts
   	$pageText[bac-Col-1] = "After working on web development for FIRST Team 1764 I decided 
   		that it would be very beneficial if I made my own website to showcase the work that 
   		I have done and make one place for anyone who wants to play with one of my games.";
	$pageText[bac-Col-2] = "Since all of my games are free and open-source I decided to add 
		download links. If you want to download a game simple go to <b>More Info</b> and 
		on the version level you click the link and can <b>Download</b> the file. Happy Gaming.";
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
		
	include("./base/header.html");
	include("./projectInfo.php");
	include("./base/footer.html");
?>