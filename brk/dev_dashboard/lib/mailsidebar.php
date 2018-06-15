<div class="content">
  <div class="container">
    <div class="vd_navbar vd_nav-width vd_navbar-email vd_bg-black-80 vd_navbar-left vd_navbar-style-2 ">
	<div class="navbar-tabs-menu clearfix">
			<span class="expand-menu" data-action="expand-navbar-tabs-menu">
            	<span class="menu-icon menu-icon-left">
            		<i class="fa fa-ellipsis-h"></i>
                    <span class="badge vd_bg-red">
                        20
                    </span>                    
                </span>
            	<span class="menu-icon menu-icon-right">
            		<i class="fa fa-ellipsis-h"></i>
                    <span class="badge vd_bg-red">
                        20
                    </span>                    
                </span>                
            </span>  
                   
                                                 
    </div>
	<div class="navbar-menu clearfix">
    	<h3 class="menu-title hide-nav-medium hide-nav-small"><a href="composemail.php" class="btn vd_btn vd_bg-red"><span class="append-icon"><i class="icon-feather"></i></span>Compose Email</a></h3>
        <div class="vd_menu">
        	<ul>
	<li class="line vd_bd-grey">
    </li>
 	<li>
    	<a href="inbox.php">
        	<span class="menu-icon entypo-icon"><i class="icon-mail"></i></span> 
            <?php $unread = mysql_num_rows(mysql_query("SELECT * FROM pro_inbox WHERE status='ur' AND Email_Id='".$_SESSION['loggedIn']."'"));?>
            <span class="menu-text">Inbox <?php if($unread > 0){?>(<?=$unread?>)<?php }?></span>  
           
       	</a> 
    </li> 
    <li>
    	<a href="draftmail.php">
        	<span class="menu-icon"><i class="fa fa-archive"></i></span> 
            <span class="menu-text">Drafts</span>  
                        
       	</a>
    </li>          
    <li>
    	<a href="sentmail.php">
        	<span class="menu-icon entypo-icon"><i class="icon-paperplane"></i></span> 
            <span class="menu-text">Sent</span>  
       	</a>
    </li>          
             
    <!--<li>
    	<a href="javascript:void(0);">
        	<span class="menu-icon entypo-icon"><i class="icon-trash"></i></span> 
            <span class="menu-text">Trash</span>  
       	</a>
    </li> -->         
                
	<li class="line vd_bd-grey">
    </li>
    
	
    <li>
    	<a href="index.php">
        	<span class="menu-icon"><i class="fa fa-desktop"></i></span> 
            <span class="menu-text">Back to Home</span>  
       	</a>
    </li>                             
</ul>
<!-- Head menu search form ends -->         </div>  

            
    </div>
    <div class="navbar-spacing clearfix">
    </div>
</div> 