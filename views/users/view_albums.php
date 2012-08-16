<script>

function delete_album(id){
    var r=confirm("Are you Sure? All Images will also deleted")
    if(r==true){
     $.ajax({
        type: "GET",
        url:  "<?php echo site_url();?>admin/delete_album/"+id,
        success: function(data){
            $('#album_'+id).fadeOut("slow");
        },
        error: function(){
        },
        beforeSend: function(){
            $('#album_'+id).html("");
        }
    });
}
}



</script>



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
                    <li><a href="<?php echo site_url();?>siteadmin/admin_home">Admin Home</a></li>
                    <li><a href="javascript:void(0);">Manage Categories<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul>
                      <li><a href="<?php echo site_url();?>siteadmin/admin_categories/">Add Category</a></li>
                        <li><a href="<?php echo site_url();?>siteadmin/view_categories/">View Categories</a></li>
                        </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                    <li><a class="current" href="javascript:void(0);">Manage Albums<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul>
                         <li><a href="<?php echo site_url();?>siteadmin/add_album/" title="">Create Album</a></li>
                        <li><a href="<?php echo site_url();?>siteadmin/view_albums/" title="">View Albums</a></li>
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
        
    <h2>Albums</h2> 
                    
     
         <table id="rounded-corner" style="margin-left:110px;">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">Album Name</th>
            <th scope="col" class="rounded">Created Date</th>
            <th scope="col" class="rounded">Category</th>
            <th scope="col" class="rounded">Status</th>
            <th scope="col" class="rounded">Images</th>
            <th scope="col" class="rounded">Edit</th>
            <th scope="col" class="rounded-q4">Delete</th>
        </tr>
    </thead>
        <tfoot>
    	
    </tfoot>
    <tbody>
        <?php while($albums = mysql_fetch_array($variables_array[albums])) {?>
    	<tr id="album_<?php echo $albums['album_id']?>">
            <td><input type="checkbox" name="" /></td>
            <td><?php echo $albums['album_name']?></td>
            <td><?php echo $albums['created_date']?></td>
            <td><?php echo $albums['category_name']?></td>
            <td><?php echo $albums['status']?></td>
            <td><a href="<?php echo site_url();?>siteadmin/album_images/<?php echo $albums['album_id']?>"><img src="<?php echo site_url();?>public/images/camera_icon_small.jpg" alt="" title="" border="0" /></a></td>
            <td><a href="<?php echo site_url();?>siteadmin/edit_album/<?php echo $albums['album_id']?>"><img src="<?php echo site_url();?>public/images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="javascript:void(0);" onclick="delete_album('<?php echo $albums['album_id']?>')"><img src="<?php echo site_url();?>public/images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
      
        <?php } ?>
    </tbody>
</table> 
      
     
     </div>
                    </div> 
   
</div>		
</body>
</html>