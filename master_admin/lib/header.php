<?php
include"../config/connect.php";
session_start();
$SqlUser = "SELECT * FROM pro_sale_registration WHERE S_id = '".$_SESSION['userid']."'";
$ResSqlUser = mysql_query($SqlUser);
$FetchRows = mysql_fetch_array($ResSqlUser);
 if($FetchRows['S_image'] == "")
                    {
                    $pic = "profileimage/nopic.png";
                    }
                    else if(!is_file("profileimage/".$FetchRows['S_image']))
                    {
                    $pic = "profileimage/nopic.png";
                    }
                    else
                    {
                    $pic = "profileimage/".$FetchRows['S_image'];
                    }
?>
 <header class="header-1" id="header">
      <div class="vd_top-menu-wrapper">
        <div class="container ">
          <div class="vd_top-nav vd_nav-width  ">
          <div class="vd_panel-header">
          	<div class="logo">
            	<a href="index.php"><img alt="logo" src="img/logo.png"></a>
            </div>
            <!-- logo -->
            <div class="vd_panel-menu  hidden-sm hidden-xs" data-intro="<strong>Minimize Left Navigation</strong><br/>Toggle navigation size to medium or small size. You can set both button or one button only. See full option at documentation." data-step=1>
            		                	<span class="nav-medium-button menu" data-toggle="tooltip" data-placement="bottom" data-original-title="Medium Nav Toggle" data-action="nav-left-medium">
	                    <i class="fa fa-bars"></i>
                    </span>
                                		                    
                	<span class="nav-small-button menu" data-toggle="tooltip" data-placement="bottom" data-original-title="Small Nav Toggle" data-action="nav-left-small">
	                    <i class="fa fa-ellipsis-v"></i>
                    </span> 
                                       
            </div>
            <div class="vd_panel-menu left-pos visible-sm visible-xs">
                                 
                        <span class="menu" data-action="toggle-navbar-left">
                            <i class="fa fa-ellipsis-v"></i>
                        </span>  
                            
                              
            </div>
            <div class="vd_panel-menu visible-sm visible-xs">
                	<span class="menu visible-xs" data-action="submenu">
	                    <i class="fa fa-bars"></i>
                    </span>        
                          
                        <!--<span class="menu visible-sm visible-xs" data-action="toggle-navbar-right">
                            <i class="fa fa-comments"></i>
                        </span>                   -->
                   	 
            </div>                                     
            <!-- vd_panel-menu -->
          </div>
          <!-- vd_panel-header -->
            
          </div>    
          <div class="vd_container">
          	<div class="row">
            	<div class="col-sm-5 col-xs-12">
     </div>
                <div class="col-sm-7 col-xs-12">
              		<div class="vd_mega-menu-wrapper">
                    	<div class="vd_mega-menu pull-right">
            				<ul class="mega-ul">
   <li id="top-menu-2" class="one-icon mega-li"> 
      <a href="index.html" class="mega-link" data-action="click-trigger">
    	<span class="mega-icon"><i class="fa fa-envelope"></i></span> 
		<span class="badge vd_bg-red">10</span>        
      </a>
      <div class="vd_mega-menu-content width-xs-3 width-sm-4 width-md-5 width-lg-4 right-xs left-sm" data-action="click-target">
        <div class="child-menu">  
           <div class="title"> 
           	   Messages
               <div class="vd_panel-menu">
                     <span data-original-title="Message Setting" data-toggle="tooltip" data-placement="bottom" class="menu">
                        <i class="fa fa-cog"></i>
                    </span>                                                                              
                </div>
           </div>                 
		   <div class="content-list content-image">
           	   <div data-rel="scroll" class="mCustomScrollbar _mCS_2" style="overflow: hidden;"><div class="mCustomScrollBox mCS-light" id="mCSB_2" style="position: relative; height: 100%; overflow: hidden; max-width: 100%; max-height: 400px;"><div class="mCSB_container mCS_no_scrollbar" style="position: relative; top: 0px;">	
               <ul class="list-wrapper pd-lr-10">
                    <li> 
                    		<div class="menu-icon"><img alt="example image" src="img/avatar/avatar.jpg"></div> 
                            <div class="menu-text"> Do you play or follow any sports?
                            	<div class="menu-info">
                                    <span class="menu-date">12 Minutes Ago </span>                                                                         
                                    <span class="menu-action">
                                        <span class="menu-action-icon" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-eye"></i>
                                        </span>                                                                            
                                    </span>                                
                            	</div>
                            </div> 
                    </li>
                    <li class="warning"> 
                    		<div class="menu-icon"><img alt="example image" src="img/avatar/avatar-2.jpg"></div>  
                            <div class="menu-text">  Good job mate !
                            	<div class="menu-info">
                                    <span class="menu-date">1 Hour 20 Minutes Ago </span>                                                                         
                                    <span class="menu-action">
                                        <span class="menu-action-icon" data-original-title="Mark as Read" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-eye-slash"></i>
                                        </span>                                                                            
                                    </span>                                
                            	</div>                            
                            </div> 
                     </li>    
                    <li> 
                    		<div class="menu-icon"><img alt="example image" src="img/avatar/avatar-3.jpg"></div> 
                            <div class="menu-text">  Just calm down babe, everything will work out.
                            	<div class="menu-info">
                                    <span class="menu-date">12 Days Ago</span>                                                                         
                                    <span class="menu-action">
                                        <span class="menu-action-icon" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-eye"></i>
                                        </span>                                                                            
                                    </span>                                
                            	</div>                                                     
                            </div> 
                    </li>                                     
                    <li>
                    		<div class="menu-icon"><img alt="example image" src="img/avatar/avatar-4.jpg"></div> 
                            <div class="menu-text">  Euuh so gross....
                            	<div class="menu-info">
                                    <span class="menu-date">19 Days Ago</span>                                                                         
                                    <span class="menu-action">
                                        <span class="menu-action-icon" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-eye"></i>
                                        </span>                                                                            
                                    </span>                                
                            	</div>                                                        
                            </div> 
                    </li> 
                    <li> 
                    		<div class="menu-icon"><img alt="example image" src="img/avatar/avatar-5.jpg"></div>  
                            <div class="menu-text">  That's the way.. I like it :D
                            	<div class="menu-info">
                                    <span class="menu-date">20 Days Ago</span>                                                                         
                                    <span class="menu-action">
                                        <span class="menu-action-icon" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-eye"></i>
                                        </span>                                                                            
                                    </span>                                
                            	</div>                                                          
                            </div> 
                     </li>
                    <li> 
                    		<div class="menu-icon"><img alt="example image" src="img/avatar/avatar-6.jpg"></div> 
                            <div class="menu-text">  Oooh don't be shy ;P
                            	<div class="menu-info">
                                    <span class="menu-date">21 Days Ago</span>                                                                         
                                    <span class="menu-action">
                                        <span class="menu-action-icon" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-eye"></i>
                                        </span>                                                                            
                                    </span>                                
                            	</div>                             
                            </div> 
                     </li>                                     
                    <li> 
                    		<div class="menu-icon"><img alt="example image" src="img/avatar/avatar-7.jpg"></div> 
                            <div class="menu-text">  Hello, please call my number..
                            	<div class="menu-info">
                                    <span class="menu-date">24 Days Ago</span>                                                                         
                                    <span class="menu-action">
                                        <span class="menu-action-icon" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-eye"></i>
                                        </span>                                                                            
                                    </span>                                
                            	</div>                              
                            </div> 
                    </li> 
                    <li> 
                    		<div class="menu-icon"><img alt="example image" src="img/avatar/avatar-8.jpg"></div> 
                            <div class="menu-text">  Don't go anywhere, i will be coming soon
                            	<div class="menu-info">
                                    <span class="menu-date">1 Month 2 days Ago</span>                                                                         
                                    <span class="menu-action">
                                        <span class="menu-action-icon" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-eye"></i>
                                        </span>                                                                            
                                    </span>                                
                            	</div>                              
                            </div> 
                     </li>                                                                                
                    
               </ul>
               </div><div class="mCSB_scrollTools" style="position: absolute; display: none;"><div class="mCSB_draggerContainer"><div class="mCSB_dragger" style="position: absolute; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="position:relative;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
               <div class="closing text-center" style="">
               		<a href="#">See All Notifications <i class="fa fa-angle-double-right"></i></a>
               </div>                                                                       
           </div>                              
        </div> <!-- child-menu -->                      
      </div>   <!-- vd_mega-menu-content --> 
    </li>
     <li id="top-menu-3" class="one-icon mega-li"> 
      <a href="index.html" class="mega-link" data-action="click-trigger">
    	<span class="mega-icon"><i class="fa fa-globe"></i></span> 
		<span class="badge vd_bg-red">51</span>        
      </a>
      <div class="vd_mega-menu-content  width-xs-3 width-sm-4  center-xs-3 left-sm" data-action="click-target">
        <div class="child-menu">  
           <div class="title"> 
           		Notifications 
               <div class="vd_panel-menu">
                     <span data-original-title="Notification Setting" data-toggle="tooltip" data-placement="bottom" class="menu">
                        <i class="fa fa-cog"></i>
                    </span>                   
<!--                     <span class="text-menu" data-original-title="Settings" data-toggle="tooltip" data-placement="bottom">
                        Settings
                    </span> -->                                                              
                </div>
           </div>                 
		   <div class="content-list">	
           	   <div data-rel="scroll" class="mCustomScrollbar _mCS_3" style="overflow: hidden;"><div class="mCustomScrollBox mCS-light" id="mCSB_3" style="position: relative; height: 100%; overflow: hidden; max-width: 100%; max-height: 400px;"><div class="mCSB_container mCS_no_scrollbar" style="position: relative; top: 0px;">	
               <ul class="list-wrapper pd-lr-10">
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_yellow"><i class="fa fa-suitcase"></i></div> 
                            <div class="menu-text"> Someone has give you a surprise 
                            	<div class="menu-info"><span class="menu-date">12 Minutes Ago</span></div>
                            </div> 
                    </a> </li>
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_blue"><i class=" fa fa-user"></i></div> 
                            <div class="menu-text">  Change your user profile details
                            	<div class="menu-info"><span class="menu-date">1 Hour 20 Minutes Ago</span></div>
                            </div> 
                    </a> </li>    
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_red"><i class=" fa fa-cogs"></i></div> 
                            <div class="menu-text">  Your setting is updated
                            	<div class="menu-info"><span class="menu-date">12 Days Ago</span></div>                            
                            </div> 
                    </a> </li>                                     
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_green"><i class=" fa fa-book"></i></div> 
                            <div class="menu-text">  Added new article
                            	<div class="menu-info"><span class="menu-date">19 Days Ago</span></div>                              
                            </div> 
                    </a> </li> 
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_green"><img alt="example image" src="img/avatar/avatar.jpg"></div> 
                            <div class="menu-text">  Change Profile Pic
                            	<div class="menu-info"><span class="menu-date">20 Days Ago</span></div>                              
                            </div> 
                    </a> </li>
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_red"><i class=" fa fa-cogs"></i></div> 
                            <div class="menu-text">  Your setting is updated
                            	<div class="menu-info"><span class="menu-date">12 Days Ago</span></div>                            
                            </div> 
                    </a> </li>                                     
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_green"><i class=" fa fa-book"></i></div> 
                            <div class="menu-text">  Added new article
                            	<div class="menu-info"><span class="menu-date">19 Days Ago</span></div>                              
                            </div> 
                    </a> </li> 
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_green"><img alt="example image" src="img/avatar/avatar.jpg"></div> 
                            <div class="menu-text">  Change Profile Pic
                            	<div class="menu-info"><span class="menu-date">20 Days Ago</span></div>                              
                            </div> 
                    </a> </li>                                                                                
                    
               </ul>
               </div><div class="mCSB_scrollTools" style="position: absolute; display: none;"><div class="mCSB_draggerContainer"><div class="mCSB_dragger" style="position: absolute; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="position:relative;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
               <div class="closing text-center" style="">
               		<a href="#">See All Notifications <i class="fa fa-angle-double-right"></i></a>
               </div>                                                                       
           </div>                              
        </div> <!-- child-menu -->                      
      </div>   <!-- vd_mega-menu-content -->         
    </li>
    <li id="top-menu-profile" class="profile mega-li"> 
        <a href="#" class="mega-link"  data-action="click-trigger"> 
            <span  class="mega-image">
                <img src="img/avatar/avatar.jpg" alt="example image" />               
            </span>
            <span class="mega-name">
                Caroline <i class="fa fa-caret-down fa-fw"></i> 
            </span>
        </a> 
      <div class="vd_mega-menu-content  width-xs-2  left-xs left-sm" data-action="click-target">
        <div class="child-menu"> 
        	<div class="content-list content-menu">
                <ul class="list-wrapper pd-lr-10">
                                 
                   
                    <li> <a href="dashboard.php"> <div class="menu-icon"><i class=" fa fa-cogs"></i></div> <div class="menu-text">Dashboard</div> </a> </li>
                    <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-lock"></i></div> <div class="menu-text">change Password</div> </a> </li>
                    <li> <a href="logout.php"> <div class="menu-icon"><i class=" fa fa-sign-out"></i></div>  <div class="menu-text">Sign Out</div> </a> </li>
                    <li class="line"></li>                
                             
                </ul>
            </div> 
        </div> 
      </div>     
  
    </li>               
       
  
	</ul>
<!-- Head menu search form ends -->                         
                        </div>
                    </div>
                </div>

            </div>
          </div>
        </div>
        <!-- container --> 
      </div>
      <!-- vd_primary-menu-wrapper --> 

  </header>
<style type="text/css">

    #data-tables_filter{text-align: right;}
    .pagination {margin:0px; float: right;}

</style>