<div id="page">
	<div class="content current" data-target="template-project">
		<div class="container-fluid">
			<header class="project-header">
			<div class="row"><div class="col-sm-6"><h1><font><?php echo $pageInfo[Title]?></font></h1></div><div class="col-sm-6 info-table">
				<ul>
					<li class="title"><font>Category</font></li>
					<li class="name"><?php echo "<a href=$pageLink[Cat]><font>$pageInfo[Cat]</font></a>"?></li>
					<li class="title"><font>TYPE</font></li>
					<li class="name"><font><?php echo $pageInfo[Type]?></font></li>
					<li class="title item-hidden-tablet"><font>SIZE</font></li>
					<li class="name item-hidden-tablet"><font><?php echo $pageInfo[Size]?></font></li>
					<li class="title item-hidden-tablet"><font>STATUS</font></li>
					<li class="name item-hidden-tablet"><font><?php echo $pageInfo[Stat]?></font></li>
					<li class="title item-hidden-tablet item-hidden-desktop"><font>Developer</font></li>
					<li class="name item-hidden-tablet item-hidden-desktop"><font><?php echo $pageInfo[Dev]?></font></li>
					<li class="title item-hidden-tablet item-hidden-desktop"><font>ORGANIZATION</font></li>
					<li class="name item-hidden-tablet item-hidden-desktop"><font><?php echo $pageInfo[Org]?></font></li>
					<li class="title item-hidden-tablet item-hidden-desktop"><font>VERSION</font></li>
					<li class="name item-hidden-tablet item-hidden-desktop"><?php echo "<a href=$pageLink[Ver]><font>$pageInfo[Ver]</font></a>"?></li>
					<li class="open-info-table"><span class="more"><span class="hide-on-phone"><span class="icon-plus"></span>
					<font>more</font></span><font> info</font></span>
					<span class="less"><span class="hide-on-phone">
					<font>less</font></span><font> info</font></span></li></ul></div></div>
					<a href="/projects.php" class="all-projects-link">
						<span class="size"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="36" height="32" viewBox="0 0 36 32"><g></g><path d="M18.096 0l-18.096 10.448v21.552h36.19v-21.552l-18.094-10.448zM32.99 28.8h-29.79v-16.504l14.896-8.6 14.896 8.6v16.504z" fill="#000000"></path></svg></span>
						<font>All Projects</font></a></header>
						<div class="banner">
							<a class="image gallery-item" href="./res/img/pongW.jpg">
								<?php Echo "<a class=image gallery-item href=$pageInfo[Img]><img src=$pageInfo[Img]></a>"?>
							</a>
						</div>
						<section class="row blocks"><div class="col-sm-6 col-md-3 block"><h2 class="block-title">
							<font>Background</font></h2><p>
							<font><?php echo $pageText[bac-Col-1]?></font></p></div><div class="col-sm-6 col-md-3 block"><p>
							<font><?php echo $pageText[bac-Col-2]?></font></p></div><div class="col-sm-6 block">
								<?php Echo "<a class=image gallery-item href=$pageImg[imgOne]><img src=$pageImg[imgOne]></a>"?>
								<p></p></div>
							<div class="col-sm-6 block">
								<?php Echo "<a class=image gallery-item href=$pageImg[imgTwo]><img src=$pageImg[imgTwo]></a>"?>
								<p></p></div><div class="col-sm-6 block">
								<?php Echo "<a class=image gallery-item href=$pageImg[imgThree]><img src=$pageImg[imgThree]></a>"?>
								<p></p></div>
							<div class="col-sm-6 col-md-3 block"><h2 class="block-title"><font> Description</font></h2>
							<p><font><?php echo $pageText[desc]?></font></p></div>
							<div class="col-sm-6 col-md-3 block"><h2 class="block-title"><font> Features</font></h2>
							<p><font><?php echo $pageText[feat]?></font></p></div>
							<div class="col-sm-6 col-md-3 block"><p><br><font><?php echo $pageText[feat2]?></font></p></div>
							<div class="col-sm-12 block">
								<?php Echo "<a class=image gallery-item href=$pageImg[imgFour]><img src=$pageImg[imgFour]></a>"?>
								<p></p></div>
							<div class="col-sm-12 block">
								<?php Echo "<a class=image gallery-item href=$pageImg[imgFive]><img src=$pageImg[imgFive]></a>"?>
								<p></p></div>
							<div class="col-sm-12 block">
								<?php Echo "<a class=image gallery-item href=$pageImg[imgSix]><img src=$pageImg[imgSix]></a>"?>
								<p></p></div></section>
							<section class="row share-row">
								<div class="col-sm-6 col-md-8">
									<div class="row">
										<h4 class="col-md-12">
											<font>Related projects:</font>
										</h4>
										<div class="col-md-4 col-xs-6 item">
											<?php Echo "<a class=image gallery-item href=$pageRel[oneLink]><img src=$pageRel[one]></a>"?>
										</div>
										<div class="col-md-4 col-xs-6 item">
											<?php Echo "<a class=image gallery-item href=$pageRel[twoLink]><img src=$pageRel[two]></a>"?>
										</div>
										<div class="col-md-4 col-xs-6 item">
											<?php Echo "<a class=image gallery-item href=$pageRel[threeLink]><img src=$pageRel[three]></a>"?>
										</div>
									</div>
								</div>
							</section></div></div>
								<div class="content next"></div></div>
								<div class="push"></div></div>
							
							</body></html>