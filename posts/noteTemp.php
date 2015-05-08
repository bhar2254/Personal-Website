<body>
	<div id="page">
	<div class="content current" data-target="template-project">
		<div class="container-fluid">
			<header class="project-header">
				<div class="row">
					<?php include '../../../base/topPages.html';?>
					<div class="col-sm-6 block">
					<h2 class="inHead" stlye="text-decoration=underline;">
						<font><?php echo $pageInfo[ofTitle]?></font>
					</h2>
					<?php echo $pageInfo[date]?>
						<u><b><?php echo $pageInfo[time]?></b></u> by <?php echo $pageInfo[author]?></br></hr></br>
						<?php echo $pageInfo[teaser]?>
					</br></br>
						<?php echo $pageInfo[text]?>
					</br></br>
						Live long and prosper, nerds
						</br>
						</br>
						
						<div class="g-plusone" data-annotation="inline" data-width="300"></div>
						</br><a href="https://twitter.com/share" class="twitter-share-button" data-text="C'mon" data-via="Doc_the_Doctor">Tweet</a>
						</br></br>-- <a href="../../../index.php">BACK</a> to news</br>
						</br>
						<script src="https://apis.google.com/js/plusone.js">
						</script>
						<?php echo "Go to this <a href=http://108-226-52-251.lightspeed.fyvlar.sbcglobal.net/posts/$pageInfo[year]/$pageInfo[month]/$pageInfo[shortTitle].php>link</a> if the comments aren't loading."?>
						</br></br>
						<?php echo
						"<div data-href=http://108-226-52-251.lightspeed.fyvlar.sbcglobal.net/posts/$pageInfo[year]/$pageInfo[month]/$pageInfo[shortTitle].php
							class=g-comments
						    data-width=642
						    data-first_party_property=BLOGGER
						    data-view_type=FILTERED_POSTMOD>
						</div>"
						?>
					</header>
				</div>
			</div>
		</div>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
	</body>
</html>