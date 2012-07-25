<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Albums</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo site_url();?>public/styles/reset.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo site_url();?>public/styles/prettyPhoto.css" type="text/css" media="all">
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
        <script type="text/javascript" src="<?php echo site_url();?>public/scripts/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="<?php echo site_url();?>public/scripts/hover-image.js"></script>
        <script type="text/javascript" src="<?php echo site_url();?>public/scripts/tabs.js"></script>
        <script type="text/javascript" src="<?php echo site_url();?>public/scripts/script.js"></script>

    </head>
    <body id="page3">
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
								<li><a href="<?php echo site_url();?>users/aboutus">About</a></li>
								<li id="active"><a href="<?php echo site_url();?>users/albums">Albums</a></li>
								<li><a href="<?php echo site_url();?>users/services">Services</a></li>
								<li><a href="#">Price Package</a></li>
								<li class="end"><a href="<?php echo site_url();?>users/contactus">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="relative">
                                <div id="gallery">
                                    <ul id="myRoundabout">
                                        <?php while($images = mysql_fetch_array($variables_array[gallery])) {?>
					<li><img src="<?php echo site_url();?>public/gallery-images/<?php echo $images['image_name'];?>" alt=""></li>
                                        <?php }?>
                                    </ul>
                                </div>
                            </div>
                        </header>
                        <!-- / header-->
                        <!-- content -->
                        <section id="content">
                            <div class="line1 wrapper">
                                <div class="wrapper tabs">
                                    <article class="col1">
                                        <h2>Categories</h2>
                                        <div class="pad">
                                            <ul class="nav">
                                                <?php while($cat = mysql_fetch_array($variables_array[categories])) {?>
                                                
                                                <li class="selected"><a href="#<?php echo $cat['category_name']?>"><?php echo $cat['category_name']?></a></li>
                                                <?php }?>
<!--                                                <li><a href="#3D">3D Objects</a></li>
                                                <li><a href="#Wedding">Wedding</a></li>
                                                <li><a href="#Reportage">Reportage</a></li>
                                                <li><a href="#Advertising">Advertising</a></li>
                                                <li><a href="#Portrait">Portrait</a></li>-->
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="col2 pad_left1 tab-content" id="Fashion">
                                        <h2>Fashion Category</h2>
                                        <ul class="gallery">
                                            <li>
                                                <a href="<?php echo site_url();?>public/images/img1.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img1.jpg" alt="">
                                                </a>
                                                <a href="<?php echo site_url();?>users/albums_gallery" id="view_album">View Album</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url();?>public/images/img2.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img2.jpg" alt="">
                                                </a>
                                                <a href="<?php echo site_url();?>users/albums_gallery" id="view_album">View Album</a>
                                            </li>
                                            <li class="end">
                                                <a href="<?php echo site_url();?>public/images/img3.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img3.jpg" alt="">
                                                </a>
                                                <a href="<?php echo site_url();?>users/albums_gallery" id="view_album">View Album</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url();?>public/images/img4.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img4.jpg" alt="">
                                                </a>
                                                <a href="<?php echo site_url();?>users/albums_gallery" id="view_album">View Album</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url();?>public/images/img5.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img5.jpg" alt="">
                                                </a>
                                                <a href="<?php echo site_url();?>users/albums_gallery" id="view_album">View Album</a>
                                            </li>
                                            <li class="end">
                                                <a href="<?php echo site_url();?>public/images/img6.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img6.jpg" alt="">
                                                </a>
                                                <a href="<?php echo site_url();?>users/albums_gallery" id="view_album">View Album</a>
                                            </li>

                                        </ul>
                                    </article>
                                    <article class="col2 pad_left1 tab-content" id="3D">
                                        <h2>3D Objects</h2>
                                        <ul class="gallery">
                                            <li>
                                                <a href="<?php echo site_url();?>public/images/img1.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img1.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url();?>public/images/img2.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img2.jpg" alt="">
                                                </a>
                                            </li>
                                            <li class="end">
                                                <a href="<?php echo site_url();?>public/images/img3.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img3.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url();?>public/images/img4.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img4.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url();?>public/images/img5.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img5.jpg" alt="">
                                                </a>
                                            </li>
                                            <li class="end">
                                                <a href="<?php echo site_url();?>public/images/img6.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img6.jpg" alt="">
                                                </a>
                                            </li>

                                        </ul>
                                    </article>
                                    <article class="col2 pad_left1 tab-content" id="Wedding">
                                        <h2>Wedding Category</h2>
                                        <ul class="gallery">
                                            <li>
                                                <a href="<?php echo site_url();?>public/images/img1.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img1.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url();?>public/images/img2.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img2.jpg" alt="">
                                                </a>
                                            </li>
                                            <li class="end">
                                                <a href="<?php echo site_url();?>public/images/img3.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img3.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url();?>public/images/img4.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img4.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url();?>public/images/img5.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img5.jpg" alt="">
                                                </a>
                                            </li>
                                            <li class="end">
                                                <a href="<?php echo site_url();?>public/images/img6.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img6.jpg" alt="">
                                                </a>
                                            </li>

                                        </ul>
                                    </article>
                                    <article class="col2 pad_left1 tab-content" id="Reportage">
                                        <h2>Reportage Category</h2>
                                        <ul class="gallery">
                                            <li>
                                                <a href="<?php echo site_url();?>public/images/img1.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img1.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url();?>public/images/img2.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img2.jpg" alt="">
                                                </a>
                                            </li>
                                            <li class="end">
                                                <a href="<?php echo site_url();?>public/images/img3.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img3.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url();?>public/images/img4.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img4.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url();?>public/images/img5.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img5.jpg" alt="">
                                                </a>
                                            </li>
                                            <li class="end">
                                                <a href="<?php echo site_url();?>public/images/img6.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img6.jpg" alt="">
                                                </a>
                                            </li>

                                        </ul>
                                    </article>
                                    <article class="col2 pad_left1 tab-content" id="Advertising">
                                        <h2>Advertising Category</h2>
                                        <ul class="gallery">
                                            <li>
                                                <a href="<?php echo site_url();?>public/images/img1.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img1.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url();?>public/images/img2.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img2.jpg" alt="">
                                                </a>
                                            </li>
                                            <li class="end">
                                                <a href="<?php echo site_url();?>public/images/img3.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img3.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url();?>public/images/img4.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img4.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url();?>public/images/img5.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img5.jpg" alt="">
                                                </a>
                                            </li>
                                            <li class="end">
                                                <a href="<?php echo site_url();?>public/images/img6.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img6.jpg" alt="">
                                                </a>
                                            </li>

                                        </ul>
                                    </article>
                                    <article class="col2 pad_left1 tab-content" id="Portrait">
                                        <h2>Portrait Category</h2>
                                       <ul class="gallery">
                                            <li>
                                                <a href="<?php echo site_url();?>public/images/img1.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img1.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url();?>public/images/img2.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img2.jpg" alt="">
                                                </a>
                                            </li>
                                            <li class="end">
                                                <a href="<?php echo site_url();?>public/images/img3.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img3.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url();?>public/images/img4.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img4.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url();?>public/images/img5.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img5.jpg" alt="">
                                                </a>
                                            </li>
                                            <li class="end">
                                                <a href="<?php echo site_url();?>public/images/img6.jpg" class="lightbox-image" rel="prettyPhoto[group1]" >
                                                    <img src="<?php echo site_url();?>public/images/img6.jpg" alt="">
                                                </a>
                                            </li>

                                        </ul>
                                    </article>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="body4">
            <div class="main">
                <section id="content2">
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
        <script type="text/javascript">
            $(document).ready(function() {
                $('#myRoundabout').roundabout({
                   autoplay: true,
		autoplayDuration: 3000,
		autoplayPauseOnHover: true
                });
                tabs.init();
                // for lightbox
                if ($("a[rel^='prettyPhoto']").length) {
                    $(document).ready(function() {
                        // prettyPhoto
                        $("a[rel^='prettyPhoto']").prettyPhoto({theme:'light_square'});
                    });
                } 
            });
        </script>
    </body>
</html>