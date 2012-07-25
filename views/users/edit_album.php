<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN PANEL</title>
<link rel="stylesheet" type="text/css" href="<?php echo site_url();?>public/styles/admin.css" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url();?>public/styles/admin_default.css" />
<script type="text/javascript" src="<?php echo site_url();?>public/scripts/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo site_url();?>public/scripts/ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='images/plus.gif' class='statusicon' />", "<img src='images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>
<script src="<?php echo site_url();?>public/scripts/jquery.jclock-1.2.0.js.txt" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo site_url();?>public/scripts/jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>
<script type="text/javascript">
$(function($) {
    $('.jclock').jclock();
});
</script>

<script language="javascript" type="text/javascript" src="<?php echo site_url();?>public/scripts/niceforms.js"></script>


</head>
<body>
     
    
<div id="main_container">

    <div class="header">
    <div class="logo"><a href="#"><img src="<?php echo site_url();?>public/images/logo.gif" alt="" title="" border="0" /></a></div>
    
    <div class="right_header">Welcome Admin, <a href="<?php echo site_url();?>">Visit site</a> | <a href="<?php echo site_url();?>admin/logoutadmin" class="logout">Logout</a></div>
    <div class="jclock"></div>
    </div>
     <div class="main_content">
    <div class="menu">
                    <ul>
                    <li><a  href="<?php echo site_url();?>admin/admin_home/">Admin Home</a></li>
                    <li><a href="javascript:void(0);">Manage Categories<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul>
                        <li><a href="<?php echo site_url();?>admin/admin_categories/" title="">Add Category</a></li>
                        <li><a href="<?php echo site_url();?>admin/view_categories/" title="">View Categories</a></li>
                        </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                    <li><a class="current" href="javascript:void(0);">Manage Albums<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul>
                        <li><a href="<?php echo site_url();?>admin/add_album/" title="">Create Album</a></li>
                        <li><a href="<?php echo site_url();?>admin/view_albums/" title="">View Albums</a></li>
                        </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                    <li><a href="login.html">Manage Services<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul>
                        <li><a href="" title="">Add Services</a></li>
                        <li><a href="" title="">View Services</a></li>
                        </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                    <li><a href="login.html">Price Package<!--[if IE 7]><!--></a><!--<![endif]-->
                    </li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Experiences</a></li>
                    <li><a href="">Contact Us</a></li>
                    </ul>
                    </div> 
         
         <div class="right_content" style="width:870px; text-align:center;">            
        
    <h2>Edit Album</h2> 
                    
     <?php $album = mysql_fetch_array($variables_array[album]);?>
         <div class="form" style="width:700px !important; margin-left:114px;">
         <form action="<?php echo site_url();?>admin/edit_album_record/" method="POST" class="niceform">
         
                <fieldset>
                    <dl>
                        <dt><label for="email">Album Title:</label></dt>
                        <dd><input type="text" name="album_name" size="50" value="<?php echo $album['album_name'];?>"/></dd>
                    </dl>
                    <input type="hidden" name="album_id" value="<?php echo $album['album_id'];?>"/>
                    <dl>
                        <dt><label for="categories">Select category:</label></dt>
                        <dd>
                            <select size="1" name="category" style="margin-left:-320px;">
                                <?php while($cat = mysql_fetch_array($variables_array['categories'])) {?>
                                <option value="<?php echo $cat['cat_id']?>" <?php if($album['cat_id']==$cat['cat_id']) echo "selected=selected";?>><?php echo $cat['category_name']?></option>
                                <?php }?>
                            </select>
                        </dd>
                    </dl>
                    
                     <dl>
                        <dt><label for="interests">Select Status:</label></dt>
                        <dd>
                            <input type="radio" name="status"  value="display" <?php if($album['status']=="display") echo "checked=checked";?> /><label class="check_label">On display</label>
                            <input type="radio" name="status"  value="hide" <?php if($album['status']=="hide") echo "checked=checked";?>/><label class="check_label">Hide</label>
                            
                        </dd>
                    </dl>
                    
                     <dl class="submit" style="width:689px;">
                    <input type="submit" name="submit" id="submit" value="Submit" />
                     </dl>
                     
                     
                    
                </fieldset>
                
         </form>
         </div>  
      
     
     </div>
                    </div> 
   
</div>		
</body>
</html>