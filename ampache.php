<?php
$pageInfo = array();
$pageLink = array();
$pageText = array();
   
//    Page Information
   	$pageInfo[Title] = "Stream";   
   	$pageInfo[ofTitle] = "Ampache";
   	$pageInfo[Cat] = "Music Streaming";
   	$pageInfo[Type] = "Web Development";
   	$pageInfo[Size] = "A Lot";
   	$pageInfo[Org] = "Tale of Two Nerds";
   	$pageInfo[Stat] = "In Progress";
   	$pageInfo[Ver] = "N/A";
   	$pageInfo[Dev] = "Blaine Harper";
   	$pageInfo[Img] = "http://ampache.org/img/previews/re-ordering.jpg";
   	
//    	Page Images
	$pageImg[imgOne] = "http://ampache.org/img/previews/artist.jpg";
	$pageImg[imgTwo] = "http://ampache.org/img/previews/playing.jpg";
	$pageImg[imgThree] = "http://ampache.org/img/previews/album_edit.jpg";
	$pageImg[imgFour] = "http://ampache.org/img/previews/catalog.jpg";
	$pageImg[imgFive] = "http://ampache.org/img/previews/login.jpg";
	$pageImg[imgSix] = "http://ampache.org/img/previews/catalog.jpg";

//   	Related pages
	$pageRel[one] = "/res/img/website/web01.jpg";
	$pageRel[oneLink] = "/website.php";
	
	$pageRel[two] = "";
	$pageRel[twoLink] = "";
	
	$pageRel[three] = "";
	$pageRel[threeLink] = "";
   	
//    	Page Links
   	$pageLink[Cat] = "gaming.php";
   	
//    	Page Text
   	$pageText[bac-Col-1] = "While working on my new web server I knew I had to come up 
   		with some useful service that I could implement. I ended up deciding that a music 
   		service could help me to keep all of my music stored in a single place that I could 
   		access from anywhere. After scouring the intertubes I decided upon a application called 
   		Ampache. After installing and updating Ampache on my Ubuntu (14.04LTS) Server I configuered 
   		everything. I also added all of my music.";
	$pageText[bac-Col-2] = "My music library contains a small 10GB of information, which when 
		converted to the Ampache friendly mp3 format my entire library went from 10GB to an even smalle 2.5GB. 
		I also got the updated version (3.7) and my browsing became even easier. After a few days of debugging 
		I decided I was finally able to post it here.";
	$pageText[desc] = "Ampache is a free open-source application which allows users to share 
		their files and stream their files from anywhere. Currently my server focuses namely on 
		the musical aspect of the service and contains mainly only my music files. The user is 
		allowed to login to the web application and then browse through the library and find 
		music they like. From there they can choose the music they like and create a playlist 
		and play that directly in their browser.";
	$pageText[feat] = "The service is currently not on the open internet because I'm poor and 
		am currently keeping this personal. Ampache allows easy control of the music library 
		with the ability to allow others, if your choose, to listen to your music. This makes 
		it simple for one to host a server and let their family borrow their music, or to simply 
		keep it to themselves and not let anyone listen to the music. It is purely the admins choice.";
	$pageText[feat2] = "
		<ol>
			<li>Easy Hosting</li>
			<li>Unix Based comman shell</li>
			<li>Open Source</li>
			<li>GitHub</li>
			<li>Ease of use</li>
			<li>Up to 40GB storage</li>
			<li>Personal Playlists</li>
		</ol>";
	
	include("./base/header.html");
	include("./projectInfo.php");
	include("./base/footer.html");
?>