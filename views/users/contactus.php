<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo site_url();?>public/styles/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo site_url();?>public/styles/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo site_url();?>public/styles/style.css" type="text/css" media="all">
<script type="text/javascript" src="<?php echo site_url();?>public/scripts/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="<?php echo site_url();?>public/scripts/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo site_url();?>public/scripts/cufon-replace.js"></script> 
<script type="text/javascript" src="<?php echo site_url();?>public/scripts/Terminal_Dosis_300.font.js"></script>
<script type="text/javascript" src="<?php echo site_url();?>public/scripts/atooltip.jquery.js"></script>
<script type="text/javascript" src="<?php echo site_url();?>public/scripts/script.js"></script>

</head>
<body id="page6">
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
								<input class="input" type="text" value="Site Search" onblur="if(this.value=='') this.value='Site Search'" onFocus="if(this.value =='Site Search' ) this.value=''">
							</div>
						</form>
						<nav>
							<ul id="menu">
								<li><a href="<?php echo site_url();?>">Home</a></li>
								<li ><a href="<?php echo site_url();?>users/aboutus">About</a></li>
								<li><a href="<?php echo site_url();?>users/albums">Albums</a></li>
								<li><a href="<?php echo site_url();?>users/services">Services</a></li>
								<li><a href="#">Price Package</a></li>
								<li class="end" id="active"><a href="<?php echo site_url();?>users/contactus">Contact</a></li>
							</ul>
						</nav>
					</div>
				</header><div class="ic"></div>
<!-- / header-->
<!-- content -->
				<section id="content">
					<div class="wrapper">
						<h2>Contact Form</h2>
						<form id="ContactForm">
							<div>
								<div class="wrapper">
									<span>Your Name:</span><input type="text" class="input" >
								</div>
								<div class="wrapper">
									<span>Your E-mail:</span><input type="text" class="input" >								
								</div>
								<div class="textarea_box">
									<span>Your Message:</span><textarea name="textarea" cols="1" rows="1"></textarea>								
								</div>
								<span>&nbsp;</span>
								<a href="#" class="button" onClick="document.getElementById('ContactForm').reset()">Clear</a>
								<a href="#" class="button" onClick="document.getElementById('ContactForm').submit()">Send</a>
							</div>
						</form>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>
<div class="body4">
	<div class="main">
		<section id="content2">
			<div class="line2 wrapper">
				<div class="wrapper">
					<article class="col1">
<!--						<h2>Sample Text</h2>
						<div class="pad">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
</div>--> &nbsp;
					</article>
					<article class="col2 pad_left1">
						<h2>My Contacts</h2>
						<div class="pad">
							<span class="col3">
								<strong>	
									Country:<br>
									State:<br>
									City:<br>
									Telephone:<br>
									Email:
								</strong>
							</span>	
							Country<br>
							state<br>
							City<br>
							+123<br>
							<a href="mailto:">Email</a>
						</div>
					</article>
				</div>
			</div>				
		</section>
	</div>
</div>
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
</body>
</html>