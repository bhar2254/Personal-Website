<?php
$pageInfo = array();
   
//    Page Information
   	$pageInfo[ofTitle] = "Automation";
   	$pageInfo[shortTitle] = "Automation";
   	$pageInfo[date] = "24 April 2015";
   	$pageInfo[time] = "9:38";
   	$pageInfo[author] = "Blaine Harper";
   	
   	$pageInfo[month] = "4";
   	$pageInfo[year] = "2015";

   	$pageInfo[teaser] = "I've been working on creating a much more intuitive 
							design for this website. I've used PHP and arrays to fill the page 
							so that I can cut down the large number of lines of code from a 
							large amount of redundant lines to only the required lines of code 
							(e.g. the text in this post). As I move forward in this I think 
							that I can take my website from a very difficult to modify peace 
							of redundancy to a nice and easy to modify program.";
   	$pageInfo[text] = "The only problem which I am currently faced with is the fact that I
   							can't seem to think of a way to connect the index page and this 
   							current page. If I could have a single file then all I would have 
   							to do is make this file and everything would be so seamless. All 
   							I need is java, or JavaScript. I'll look into it...";
   	
	include ('../../../base/header2.html');
	include ('../../noteTemp.php');
	include ('../../../base/footer.html');
?>