<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo site_url();?>public/styles/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo site_url();?>public/styles/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo site_url();?>public/styles/style.css" type="text/css" media="all">
<script type="text/javascript" src="<?php echo site_url();?>public/scripts/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="<?php echo site_url();?>public/scripts/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo site_url();?>public/scripts/cufon-replace.js"></script> 
<script type="text/javascript" src="<?php echo site_url();?>public/scripts/Terminal_Dosis_300.font.js"></script>
<script type="text/javascript" src="<?php echo site_url();?>public/scripts/atooltip.jquery.js"></script>
 <script src="<?php echo site_url();?>public/scripts/roundabout.js" type="text/javascript"></script>
 <script src="<?php echo site_url();?>public/scripts/roundabout_shapes.js" type="text/javascript"></script>
 <script src="<?php echo site_url();?>public/scripts/jquery.easing.1.2.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo site_url();?>public/scripts/script.js"></script>

</head>
<body id="page1">
<div class="body1">
	<div class="body2">
		<div class="body3">
			<div class="main">
<!-- header -->
				<header>
					<div class="wrapper">
						<h1><a href="index.html" id="logo"></a></h1>
						<form id="search" method="post">
							<div>
								<input type="submit" class="submit" value="">
								<input class="input" type="text" value="Site Search" onblur="if(this.value=='') this.value='Site Search'" onfocus="if(this.value =='Site Search' ) this.value=''">
							</div>
						</form>
						<nav>
							<ul id="menu">
								<li id="active"><a href="<?php echo site_url();?>">Home</a></li>
								<li ><a href="<?php echo site_url();?>users/aboutus">About</a></li>
								<li><a href="<?php echo site_url();?>users/albums">Albums</a></li>
								<li><a href="<?php echo site_url();?>users/services">Services</a></li>
								<li><a href="#">Price Package</a></li>
								<li class="end"><a href="<?php echo site_url();?>users/contactus">Contact</a></li>
							</ul>
						</nav>
					</div>
					<div class="relative">
						<div id="gallery">
							<ul id="myRoundabout">
								<li><img src="<?php echo site_url();?>public/images/img1.jpg" alt=""></li>
								<li><img src="<?php echo site_url();?>public/images/img2.jpg" alt=""></li>
								<li><img src="<?php echo site_url();?>public/images/img3.jpg" alt=""></li>
								<li><img src="<?php echo site_url();?>public/images/img4.jpg" alt=""></li>
								<li><img src="<?php echo site_url();?>public/images/img5.jpg" alt=""></li>
								<li><img src="<?php echo site_url();?>public/images/img6.jpg" alt=""></li>
							</ul>
						</div>
					</div>
				</header>	
<!-- / header-->
<!-- content -->
				<section id="content">
					<div class="line1">
						<div class="line2 wrapper">
							<div class="wrapper">
								<article class="col1">
									<h2>Shortly About Me</h2>
									<figure><img src="<?php echo site_url();?>public/images/page1_img1.jpg" alt="" class="pad_bot1"></figure>
									<div class="pad">
										<p>	
											In this Section you can give a short description about you and your work theme.
										</p>
									</div>
								</article>
								<article class="col2 pad_left1">
									<h2>Experiences</h2>
									<div class="pad">
										<ul class="list1">
											<li><a href="#">Fashion Show</a>Recent fashion show ETC</li>
											<li><a href="#">Wedding Shoot</a>Recent wedding shoot. </li>
											<li><a href="#">Occasions shoots</a>Different Occasion Picture albums</li>
										</ul>
									</div>
								</article>
								<article class="col3 pad_left1">
									<h2>Whatâ€™s New</h2>
									<div class="pad">
										<div class="wrapper">
											<span class="date"><span>01</span>July</span>
											<p>	
												<a href="#" class="link1">New covered shoot Title</a><br>
												This <a href="#" target="_blank">Text or link for this Album.
											</p>
										</div>
										<div class="wrapper">
											<span class="date"><span>02</span>July</span>
											<p>
												<a href="#" class="link1">New covered shoot Title </a><br>
												Text or link for this Album.
											</p>
										</div>
									</div>
								</article>
							</div>
							<div class="wrapper buttons">
								<article class="col1">
									<a href="#" class="button">Read More</a>
								</article>
								<article class="col2 pad_left1">
									<a href="#" class="button">Read More</a>
								</article>
								<article class="col3 pad_left1">
									<a href="#" class="button">News Archive</a>
								</article>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>
<!--<div class="body4">
	<div class="main">
		<section id="content2">
			<div class="line2 wrapper">
				<div class="wrapper">
					<article class="col1">
						<h2>Sample Text</h2>
						<div class="wrapper">
							<figure class="left marg_right1"><img src="images/page1_img2.jpg" alt=""></figure>
							<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.	
							</p>
						</div>
						<div class="pad">
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
							</p>
						</div>
					</article>
					<article class="col3 pad_left1">
						<h2>Coming Soon</h2>
						<div class="pad">
							<div class="wrapper">
								<span class="date"><span>05</span>July</span>
								<p>
									Detail about future shoots/plans.
								</p>
							</div>
							<div class="wrapper">
								<span class="date"><span>06</span>July</span>
								<p>
									Detail about future shoots/plans.
								</p>
							</div>
						</div>
					</article>
				</div>
				<div class="wrapper buttons">
					<article class="col1">
						<a href="#" class="button">Read More</a>
					</article>
					<article class="col3 pad_left1">
						<a href="#" class="button">Read More</a>
					</article>
				</div>
			</div>
		</section>
	</div>
</div>-->
<!-- / content -->
<div class="main">
<!-- footer -->
	<footer>
		<div class="wrapper">
			<span class="left">
			 	
			</span>
			<ul id="icons">
				<li><a href="#" class="normaltip" title="Facebook"><img src="<?php echo site_url();?>public/images/icon1.png" alt=""></a></li>
				<li><a href="#" class="normaltip" title="Delicious"><img src="<?php echo site_url();?>public/images/icon2.png" alt=""></a></li>
				<li><a href="#" class="normaltip" title="Stumble Upon"><img src="<?php echo site_url();?>public/images/icon3.png" alt=""></a></li>
				<li><a href="#" class="normaltip" title="Twitter"><img src="<?php echo site_url();?>public/images/icon4.png" alt=""></a></li>
				<li><a href="#" class="normaltip" title="Linkedin"><img src="<?php echo site_url();?>public/images/icon5.png" alt=""></a></li>
				
			</ul>
		</div>
<!-- {%FOOTER_LINK} -->
	</footer>
<!-- / footer -->
</div>
<script type="text/javascript"> Cufon.now(); </script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#myRoundabout').roundabout({
                autoplay: true,
		autoplayDuration: 3000,
		autoplayPauseOnHover: true
                
		});
	});
	
</script>
</body>
</html>