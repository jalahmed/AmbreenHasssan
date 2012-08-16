<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <title>Album Gallery</title>
  <link rel="stylesheet" href="<?php echo site_url();?>public/styles/gallery.css" type="text/css" />
  <script type="text/javascript" src="<?php echo site_url();?>public/scripts/jquery-1.3.2.min.js"></script>
  <script type="text/javascript" src="<?php echo site_url();?>public/scripts/jquery.js"></script>
  <script type="text/javascript" src="<?php echo site_url();?>public/scripts/jquery.galleriffic.js"></script>
  <script type="text/javascript" src="<?php echo site_url();?>public/scripts/jquery.opacityrollover.js"></script>
  <!-- Display thumbnails only when JavaScript is disabled -->
  <script type="text/javascript"><!--
    document.write('<style type="text/css">.noscript { display: none; }</style>');
  -->
  
  function hideongallery(img_id){
         $.ajax({
        type: "GET",
        url:  "<?php echo site_url();?>siteadmin/hidefromgallery/"+img_id,
        success: function(data){
            $('#image_modify' ).html(data);
        },
        error: function(){
        },
        beforeSend: function(){
            $('#login_div').html("");
        }
    });
  }
  function showongallery(img_id){
        $.ajax({
        type: "GET",
        url:  "<?php echo site_url();?>siteadmin/showongallery/"+img_id,
        success: function(data){
            $('#image_modify' ).html(data);
        },
        error: function(){
        },
        beforeSend: function(){
            $('#login_div').html("");
        }
    });
  }

  </script>
</head>

<body>
<?php $album = mysql_fetch_array($variables_array[album]);?>
  <div id="header">
    <div class="page">
      <div id="header-text">
        <h1><a href="#" target="_blank"><?php echo $album['album_name'];?></a></h1>
        <a href="<?php echo site_url();?>admin/manage_album/<?php echo $album['album_id'];?>">Add more Pictures</a> |
        <a href="<?php echo site_url();?>admin/view_albums/">back to Albums</a>
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

          <?php $i = 1; 
          while($images = mysql_fetch_array($variables_array[album_photos])) {
              
              ?>
          <li id="image_<?php echo $i;?>">
            <a class="thumb" href="<?php echo site_url(); ?>public/gallery-images/<?php echo $images['image_name'];?>">
              <img src="<?php echo site_url(); ?>public/gallery-images/thumbs/<?php echo $images['image_name'];?>" alt="Alamo Square" />
            </a>
            <div class="caption">
              <div class="image-title"><a href="<?php echo site_url()?>siteadmin/delete_image/?album_id=<?php echo $images['album_id']?>&image_id=<?php echo $images['image_id']?>" onclick="return confirm('Are you sure to delete')">Delete picture</a></div>
              <div class="image-desc" id="image_modify">
                  <?php if($images['display_on']==1){?>
                  <a href="javascript:void(0);" onclick="hideongallery('<?php echo $images['image_id']?>')">Hide from Gallery</a>
              <?php }else{?>
                  <a href="javascript:void(0);" onclick="showongallery('<?php echo $images['image_id']?>')">Show on Gallery</a>
             <?php }?>
              </div>
            </div>
          </li>
            <?php 
            $i++;
            } ?>
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