<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <title>Album Gallery</title>
  <link rel="stylesheet" href="<?php echo site_url();?>public/styles/gallery.css" type="text/css" />
  <script type="text/javascript" src="<?php echo site_url();?>public/scripts/jquery-1.3.2.min.js"></script>
  <script type="text/javascript" src="<?php echo site_url();?>public/scripts/jquery.galleriffic.js"></script>
  <script type="text/javascript" src="<?php echo site_url();?>public/scripts/jquery.opacityrollover.js"></script>
  <!-- Display thumbnails only when JavaScript is disabled -->
  <script type="text/javascript"><!--
    document.write('<style type="text/css">.noscript { display: none; }</style>');
  --></script>
</head>

<body>

  <div id="header">
    <div class="page">
      <div id="header-text">
        <h1><a href="#" target="_blank">Album Title</a></h1>
        <h2>Album Text</h2>
      </div>
    </div>
  </div>

  <div class="page">
    <div id="container">

      <div id="gallery" class="content">
        <div id="controls" class="controls"></div>
        <div class="slideshow-container">
          <div id="loading" class="loader"></div>
          <div id="slideshow" class="slideshow"></div>
        </div>
        <div id="caption" class="caption-container"></div>
      </div>

      <div id="thumbs" class="navigation">
        <ul class="thumbs noscript">

          <!-- Photo 01 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/alamo_square.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/alamo_square.jpg" alt="Alamo Square" />
            </a>
            <div class="caption">
              <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 02 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/alcatraz_island.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/alcatraz_island.jpg" alt="Alcatraz Island" />
            </a>
            <div class="caption">
               <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 03 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/bay_bridge.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/bay_bridge.jpg" alt="Bay Bridge" />
            </a>
            <div class="caption">
               <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 04 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/china_town.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/china_town.jpg" alt="China Town" />
            </a>
            <div class="caption">
              <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 05 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/chinese_laundry_on_balcony.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/chinese_laundry_on_balcony.jpg" alt="North Beach Laundry" />
            </a>
            <div class="caption">
               <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 06 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/city_bay_embarcadero.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/city_bay_embarcadero.jpg" alt="The Embarcadero" />
            </a>
            <div class="caption">
               <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 07 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/city_of_san_francisco.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/city_of_san_francisco.jpg" alt="Rainy Day" />
            </a>
            <div class="caption">
               <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 08 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/city_skyline_skyscrapers.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/city_skyline_skyscrapers.jpg" alt="City View" />
            </a>
            <div class="caption">
              <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 09 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/coit_tower.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/coit_tower.jpg" alt="Coit Tower" />
            </a>
            <div class="caption">
               <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 10 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/columbus_avenue_streetscene.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/columbus_avenue_streetscene.jpg" alt="Columbus Avenue" />
            </a>
            <div class="caption">
              <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 11 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/container_ship.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/container_ship.jpg" alt="Container Ship" />
            </a>
            <div class="caption">
               <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 12 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/fishermans_wharf_sign.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/fishermans_wharf_sign.jpg" alt="Fishermans Wharf" />
            </a>
            <div class="caption">
               <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 13 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/freeway_traffic.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/freeway_traffic.jpg" alt="Freeway at Night" />
            </a>
            <div class="caption">
              <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 14 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/from_the_golden_gate.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/from_the_golden_gate.jpg" alt="From The Golden Gate Bridge" />
            </a>
            <div class="caption">
               <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 15 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/golden_gate_bridge1.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/golden_gate_bridge1.jpg" alt="Golden Gate Bridge" />
            </a>
            <div class="caption">
               <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 16 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/golden_gate_bridge2.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/golden_gate_bridge2.jpg" alt="Walk Along The Golden Gate Bridge" />
            </a>
            <div class="caption">
              <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 17 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/golden_gate_bridge3.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/golden_gate_bridge3.jpg" alt="Golden Gate Bridge Tower" />
            </a>
            <div class="caption">
              <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 18 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/golden_gate_bridge_traffic.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/golden_gate_bridge_traffic.jpg" alt="Golden Gate Bridge Traffic" />
            </a>
            <div class="caption">
              <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 19 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/golden_gate_park.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/golden_gate_park.jpg" alt="Golden Gate Park" />
            </a>
            <div class="caption">
               <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 20 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/heritage_house_front.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/heritage_house_front.jpg" alt="Historic House Fronts" />
            </a>
            <div class="caption">
               <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 21 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/nob_hill_cablecars.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/nob_hill_cablecars.jpg" alt="Nob Hill" />
            </a>
            <div class="caption">
               <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 22 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/pampanito_submarine.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/pampanito_submarine.jpg" alt="USS Pampanito Submarine" />
            </a>
            <div class="caption">
               <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 23 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/pioneer_park_coit_tower_view.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/pioneer_park_coit_tower_view.jpg" alt="Pioneer Park Turnaround" />
            </a>
            <div class="caption">
              <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 24 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/san_francisco_cityscape.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/san_francisco_cityscape.jpg" alt="Downtown" />
            </a>
            <div class="caption">
               <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 25 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/san_francisco_downtown_night.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/san_francisco_downtown_night.jpg" alt="San Francisco at Night" />
            </a>
            <div class="caption">
               <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 26 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/san_francisco_town_hall.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/san_francisco_town_hall.jpg" alt="City Hall" />
            </a>
            <div class="caption">
               <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 27 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/the_streets_of_san_francisco.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/the_streets_of_san_francisco.jpg" alt="San Francisco Architecture" />
            </a>
            <div class="caption">
               <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 28 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/washington_square_cathedral.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/washington_square_cathedral.jpg" alt="Sts. Peter and Paul Church" />
            </a>
            <div class="caption">
               <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

          <!-- Photo 29 -->
          <li>
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/washington_square_north_beach.jpg">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/washington_square_north_beach.jpg" alt="Washington Square Bench" />
            </a>
            <div class="caption">
              <div class="image-title">image title</div>
              <div class="image-desc">Image Description</div>
            </div>
          </li>

        </ul>
      </div>

      <div style="clear: both;"></div>
    </div>
  </div>

  
  <div id="footer">
    
    
  </div>

  <!-- "Advanced Galleriffic Gallery" JavaScript code -->
  <!-- See http://www.twospy.com/galleriffic/ for more info. -->
  <script type="text/javascript"><!--
    jQuery(document).ready(function($) {
      // Only apply these styles when JavaScript is enabled
      $('div.navigation').css({'width' : '185px', 'float' : 'left'});
      $('div.content').css('display', 'block');

      // Initially set opacity on thumbs and add additional styling for hover
      // effect on thumbs
      var onMouseOutOpacity = 0.67;
      $('#thumbs ul.thumbs li').opacityrollover({
        mouseOutOpacity:   onMouseOutOpacity,
        mouseOverOpacity:  1.0,
        fadeSpeed:         'fast',
        exemptionSelector: '.selected'
      });

      // Initialize Advanced Galleriffic Gallery
      var gallery = $('#thumbs').galleriffic({
        delay:                     2500,
        numThumbs:                 14,
        preloadAhead:              10,
        enableTopPager:            true,
        enableBottomPager:         true,
        maxPagesToShow:            7,
        imageContainerSel:         '#slideshow',
        controlsContainerSel:      '#controls',
        captionContainerSel:       '#caption',
        loadingContainerSel:       '#loading',
        renderSSControls:          true,
        renderNavControls:         true,
        playLinkText:              'Play Slideshow',
        pauseLinkText:             'Pause Slideshow',
        prevLinkText:              '&lsaquo; Previous Photo',
        nextLinkText:              'Next Photo &rsaquo;',
        nextPageLinkText:          '&rsaquo;',
        prevPageLinkText:          '&lsaquo;',
        enableHistory:             false,
        autoStart:                 false,
        syncTransitions:           true,
        defaultTransitionDuration: 900,
        onSlideChange:             function(prevIndex, nextIndex) {
          // 'this' refers to the gallery, which is an extension of $('#thumbs')
          this.find('ul.thumbs').children()
            .eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
            .eq(nextIndex).fadeTo('fast', 1.0);
        },
        onPageTransitionOut:       function(callback) {
          this.fadeTo('fast', 0.0, callback);
        },
        onPageTransitionIn:        function() {
          this.fadeTo('fast', 1.0);
        }
      });
    });
  --></script>

</body>
</html>