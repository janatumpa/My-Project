<?php
include"../config/connect.php";
session_start();
$SqlUser = "SELECT * FROM pro_sale_registration WHERE S_id = '".$_SESSION['userid']."'";
$ResSqlUser = mysql_query($SqlUser);
$FetchRows = mysql_fetch_array($ResSqlUser);
//For Cover Image
if($FetchRows['S_image'] == "")
{
  $pic = "profileimage/nopic.png";
}
else if(!is_file("profileimage/medium/".$FetchRows['S_image']))
{
  $pic = "profileimage/nopic.png";
}
else
{
  $pic = "profileimage/medium/".$FetchRows['S_image'];
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Sales Profile page</title>
    <meta name="keywords" content="#" />
    <meta name="description" content="#">
    <meta name="author" content="Venmond">
    
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    
    
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/ico/favicon.png">
    
    
    <!-- CSS -->
       
    <!-- Bootstrap & FontAwesome & Entypo CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if IE 7]><link type="text/css" rel="stylesheet" href="css/font-awesome-ie7.min.css"><![endif]-->
    <link href="css/font-entypo.css" rel="stylesheet" type="text/css">    

    <!-- Fonts CSS -->
    <link href="css/fonts.css"  rel="stylesheet" type="text/css">
               
    <!-- Plugin CSS -->
    <link href="plugins/jquery-ui/jquery-ui.custom.min.css" rel="stylesheet" type="text/css">    
    <link href="plugins/prettyPhoto-plugin/css/prettyPhoto.css" rel="stylesheet" type="text/css">
    <link href="plugins/isotope/css/isotope.css" rel="stylesheet" type="text/css">
    <link href="plugins/pnotify/css/jquery.pnotify.css" media="screen" rel="stylesheet" type="text/css">    
	<link href="plugins/google-code-prettify/prettify.css" rel="stylesheet" type="text/css"> 
   
         
    <link href="plugins/mCustomScrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
    <link href="plugins/tagsInput/jquery.tagsinput.css" rel="stylesheet" type="text/css">
    <link href="plugins/bootstrap-switch/bootstrap-switch.css" rel="stylesheet" type="text/css">    
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css">    
    <link href="plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/colorpicker/css/colorpicker.css" rel="stylesheet" type="text/css">            

	<!-- Specific CSS -->
	    
     
    <!-- Theme CSS -->
    <link href="css/theme.min.css" rel="stylesheet" type="text/css">
    <!--[if IE]> <link href="css/ie.css" rel="stylesheet" > <![endif]-->
    <link href="css/chrome.css" rel="stylesheet" type="text/chrome"> <!-- chrome only css -->    


        
    <!-- Responsive CSS -->
        	<link href="css/theme-responsive.min.css" rel="stylesheet" type="text/css"> 
	          
        <!-- Custom CSS -->
    <link href="custom/custom.css" rel="stylesheet" type="text/css">

    <!-- Head SCRIPTS -->
    <script type="text/javascript" src="js/modernizr.js"></script> 
    <script type="text/javascript" src="js/mobile-detect.min.js"></script> 
    <script type="text/javascript" src="js/mobile-detect-modernizr.js"></script> 
     
</head>    

<body id="pages" class="full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed      responsive    clearfix" data-active="pages "  data-smooth-scrolling="1">     
<div class="vd_body">
<!-- Header Start -->
   <?php
include "lib/header.php";
 ?>

  <!-- Header Ends --> 
<div class="content">
  <div class="container">
    <div class="vd_navbar vd_nav-width vd_navbar-tabs-menu vd_navbar-left  ">
	
<!--Side bar Menu-->
    <?php
include "lib/sidebar.php";
 ?>
    <!--End Sider bar navigator-->
	<!--<div class="navbar-menu clearfix">
    	<div class="content-list content-image content-chat">
            <ul class="list-wrapper no-bd-btm pd-lr-10">
                <li class="group-heading vd_bg-black-20">FAVORITE</li>
                <li>  
                    <a href="#"> 
                            <div class="menu-icon"><img src="img/avatar/avatar.jpg" alt="example image"></div> 
                            <div class="menu-text">Jessylin
                                <div class="menu-info">
                                    <span class="menu-date">Administrator </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                    </a>
                </li>
                <li>  
                    <a href="#"> 
                            <div class="menu-icon"><img src="img/avatar/avatar-2.jpg" alt="example image"></div> 
                            <div class="menu-text">Rodney Mc.Cardo
                                <div class="menu-info">
                                    <span class="menu-date">Designer </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="badge status vd_bg-grey">&nbsp;</span></div> 
                    </a>
                </li>
                <li>  
                    <a href="#"> 
                            <div class="menu-icon"><img src="img/avatar/avatar-3.jpg" alt="example image"></div> 
                            <div class="menu-text">Theresia Minoque
                                <div class="menu-info">
                                    <span class="menu-date">Engineering </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                    </a>
                </li>
                <li class="group-heading vd_bg-black-20">FRIENDS</li>                                                                                                                                 
                <li>  
                    <a href="#"> 
                            <div class="menu-icon"><img src="img/avatar/avatar-4.jpg" alt="example image"></div> 
                            <div class="menu-text">Greg Grog
                                <div class="menu-info">
                                    <span class="menu-date">Developer </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="badge status vd_bg-grey">&nbsp;</span></div> 
                    </a>
                </li> 
                <li>  
                    <a href="#"> 
                            <div class="menu-icon"><img src="img/avatar/avatar-5.jpg" alt="example image"></div> 
                            <div class="menu-text">Stefanie Imburgh
                                <div class="menu-info">
                                    <span class="menu-date">Dancer</span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="vd_grey font-sm"><i class="fa fa-mobile"></i></span></div> 
                    </a>
                </li> 
                <li>  
                    <a href="#"> 
                            <div class="menu-icon"><img src="img/avatar/avatar-6.jpg" alt="example image"></div> 
                            <div class="menu-text">Matt Demon
                                <div class="menu-info">
                                    <span class="menu-date">Musician </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="vd_grey font-sm"><i class="fa fa-mobile"></i></span></div> 
                    </a>
                </li>
                <li>  
                    <a href="#"> 
                            <div class="menu-icon"><img src="img/avatar/avatar-7.jpg" alt="example image"></div> 
                            <div class="menu-text">Jeniffer Anastasia
                                <div class="menu-info">
                                    <span class="menu-date">Senior Developer </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                    </a>
                </li>                    
                <li>  
                    <a href="#"> 
                            <div class="menu-icon"><img src="img/avatar/avatar-8.jpg" alt="example image"></div> 
                            <div class="menu-text">Daniel Dreamon
                                <div class="menu-info">
                                    <span class="menu-date">Sales Executive </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                    </a>
                </li> 

            </ul>
        </div>

            
    </div>-->
    <div class="navbar-spacing clearfix">
    </div>
</div>    
    <!-- Middle Content Start -->
    
    <div class="vd_content-wrapper">
      <div class="vd_container">
        <div class="vd_content clearfix">
          <div class="vd_head-section clearfix">
            <div class="vd_panel-header">
              <ul class="breadcrumb">
                <li><a href="index.html">Home</a> </li>
                <li><a href="pages-custom-product.html">Pages</a> </li>
                
                
              <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step=5  data-position="left">
    <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
      <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
      <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>
      
</div>
 
            </div>
          </div>
          <div class="vd_title-section clearfix">
            <div class="vd_panel-header no-subtitle">
              <h1>User Profile Page</h1>
            </div>
          </div>
          <div class="vd_content-section clearfix">
            <div class="row">
              <div class="col-sm-3">
                <div class="panel widget light-widget panel-bd-top">
                  <div class="panel-heading no-title"> </div>
                  <div class="panel-body">
                    <div class="text-center vd_info-parent"> <img alt="example image" src="<?=$pic?>"> </div>
                    <div class="row">
                   
                      <div class="col-xs-12"> <a class="btn vd_btn vd_bg-green btn-xs btn-block no-br"><i class="fa fa-check-circle append-icon" ></i><?php echo $FetchRows['Sale_Name'];?></a> </div>
                      <div class="col-xs-12"> <a class="btn vd_btn vd_bg-grey btn-xs btn-block no-br"><?php echo $FetchRows['Position'];?></a> </div>
                    </div>
                    <!--<h3 class="font-semibold mgbt-xs-5">Mariah Caraiban</h3>
                    <h4>Business analytics.</h4>-->
                   
                  
                  </div>
                </div>
                <!-- panel widget -->
                
            
                <!-- panel widget --> 
              </div>
              <div class="col-sm-9">
                <div class="tabs widget">
  <ul class="nav nav-tabs widget">
    <li class="active"> <a data-toggle="tab" href="#profile-tab"> Profile <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
    <!--<li> <a data-toggle="tab" href="#projects-tab"> Projects <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>    
    <li> <a data-toggle="tab" href="#photos-tab"> Photos <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>-->
    <!--<li> <a data-toggle="tab" href="#friends-tab"> Friends <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
    <li> <a data-toggle="tab" href="#groups-tab"> Groups <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>-->
  </ul>
  <div class="tab-content">
    <div id="profile-tab" class="tab-pane active">
      <div class="pd-20">
<div class="vd_info tr"> <a href="profile_edit.php"class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-pencil append-icon"></i> Edit </a> </div>      
        <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="icon-user mgr-10 profile-icon"></i> ABOUT</h3>
        <div class="row">
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Name:</label>
              <div class="col-xs-7 controls"><?php echo $FetchRows['Sale_Name'];?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">User Name:</label>
              <div class="col-xs-7 controls"><?php echo $FetchRows['Sale_Name'];?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Email:</label>
              <div class="col-xs-7 controls"><?php echo $FetchRows['EmailId'];?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Phone:</label>
              <div class="col-xs-7 controls"><?php echo $FetchRows['PhoneNo'];?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Address:</label>
              <div class="col-xs-7 controls"><?php echo $FetchRows['S_address'];?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Designation:</label>
              <div class="col-xs-7 controls"><?php echo $FetchRows['Position'];?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          
        </div>
        <hr class="pd-10"  />
        
        <!-- row -->
      
    
        <!-- row --> 
      </div>
      <!-- pd-20 --> 
    </div>
    <!-- home-tab -->
    
  
    
 
    <div id="friends-tab" class="tab-pane">
    	<div class="pd-20">
        	<h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-users mgr-10 profile-icon"></i> FRIENDS</h3>
            <ul class="nav nav-pills">
          <li class="active"><a href="#photos-1" data-toggle="tab">Friends</a></li>
          <li><a href="#photos-2" data-toggle="tab">Pending Request</a></li>
          <li><a href="#photos-3" data-toggle="tab">Blacklisted</a></li>          
        </ul>
        	<div class="content-grid column-xs-3 column-sm-4 column-md-4 column-lg-6 height-xs-4 mgbt-xs-20">	
                       <div>
<ul class="list-wrapper">
                    <li> <a href="#"> 
                    		<span class="menu-icon"><img src="img/avatar/avatar.jpg" alt="example image"></span> 
                         </a>
                        <span class="menu-text"> Gabriella Montagna
                            <span class="menu-info">
                                <span class="menu-date">San Diego</span>                                                                         
                                <span class="menu-action">
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Approve" class="menu-action-icon vd_green vd_bd-green">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Reject" class="menu-action-icon vd_red vd_bd-red">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                                                                   
                                </span>                                
                            </span>
                        </span> 
                     </li>
                    <li class="warning"> 
                    		<a href="#"> 
                    			<span class="menu-icon"><img src="img/avatar/avatar-2.jpg" alt="example image"></span>  
                            </a>                            
                            <span class="menu-text">  Jonathan Fuzzy
                            	<span class="menu-info">
                                    <span class="menu-date">Seattle</span>                                                                         
                                    <span class="menu-action">
                                        <span data-placement="bottom" data-toggle="tooltip" data-original-title="Approve" class="menu-action-icon vd_green vd_bd-green">
                                            <i class="fa fa-check"></i>
                                        </span> 
                                        <span data-placement="bottom" data-toggle="tooltip" data-original-title="Reject" class="menu-action-icon vd_red vd_bd-red">
                                            <i class="fa fa-times"></i>
                                        </span>                                                                            
                                    </span>                                
                            	</span>                            
                            </span> 
                     </li>    
                    <li> <a href="#"> 
                    		<span class="menu-icon"><img src="img/avatar/avatar-3.jpg" alt="example image"></span> 
                         </a>    
                        <span class="menu-text">  Sakura Hinata
                            <span class="menu-info">
                                <span class="menu-date">Hawaii</span>                                                                         
                                <span class="menu-action">
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Approve" class="menu-action-icon vd_green vd_bd-green">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Reject" class="menu-action-icon vd_red vd_bd-red">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                             
                                </span>                                
                            </span>                                                     
                        </span> 
                    </li>                                     
                    <li> <a href="#"> 
                    		<span class="menu-icon"><img src="img/avatar/avatar-4.jpg" alt="example image"></span> 
                         </a>    
                        <span class="menu-text">  Rikudou Sennin
                            <span class="menu-info">
                                <span class="menu-date">Las Vegas</span>                                                                         
                                <span class="menu-action">
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Approve" class="menu-action-icon vd_green vd_bd-green">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Reject" class="menu-action-icon vd_red vd_bd-red">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                              
                                </span>                                
                            </span>                                                        
                        </span> 
                    </li> 
                    <li> <a href="#"> 
                    		<span class="menu-icon"><img src="img/avatar/avatar-5.jpg" alt="example image"></span>  
                         </a>   
                        <span class="menu-text">  Kim Kardiosun
                            <span class="menu-info">
                                <span class="menu-date">New York</span>                                                                         
                                <span class="menu-action">
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Approve" class="menu-action-icon vd_green vd_bd-green">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Reject" class="menu-action-icon vd_red vd_bd-red">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                              
                                </span>                                
                            </span>                                                          
                        </span> 
                     </li>
                    <li> <a href="#"> 
                    		<span class="menu-icon"><img src="img/avatar/avatar-6.jpg" alt="example image"></span>
                         </a>    
                        <span class="menu-text">   Brad Pita
                            <span class="menu-info">
                                <span class="menu-date">Seattle</span>                                                                         
                                <span class="menu-action">
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Approve" class="menu-action-icon vd_green vd_bd-green">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Reject" class="menu-action-icon vd_red vd_bd-red">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                              
                                </span>                                
                            </span>                             
                        </span> 
                    </li>                                     
                    <li> <a href="#"> 
                    		<span class="menu-icon"><img src="img/avatar/avatar-7.jpg" alt="example image"></span> 
                         </a>   
                        <span class="menu-text">  Celline Dior
                            <span class="menu-info">
                                <span class="menu-date">Los Angeles</span>                                                                         
                                <span class="menu-action">
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Approve" class="menu-action-icon vd_green vd_bd-green">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Reject" class="menu-action-icon vd_red vd_bd-red">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                             
                                </span>                                
                            </span>                              
                        </span> 
                    </li> 
                    <li> <a href="#"> 
                    		<span class="menu-icon"><img src="img/avatar/avatar-8.jpg" alt="example image"></span>
                         </a>    
                        <span class="menu-text">  Goerge Bruno Marz
                            <span class="menu-info">
                                <span class="menu-date">Las Vegas</span>                                                                         
                                <span class="menu-action">
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Approve" class="menu-action-icon vd_green vd_bd-green">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Reject" class="menu-action-icon vd_red vd_bd-red">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                              
                                </span>                                
                            </span>                              
                        </span> 
                    </li>                                                                                
                    
               </ul>
                       </div>                                                                      
                       </div>
        </div><!-- pd-20 -->   
    </div>  <!-- photos tab -->  
    <div id="groups-tab" class="tab-pane">
    	<div class="pd-20">
        <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-leaf mgr-10 profile-icon"></i> GROUPS</h3>
        	<div class="row">
            	<div class="col-xs-12 col-sm-6">
                    <div class="content-list content-large menu-action-right">
                        <ul class="list-wrapper pd-lr-15">
                        <li>  
                            <div class="menu-icon"><a href="#"><img src="img/groups/logo-01.jpg" alt="example image"></a></div> 
                            <div class="menu-text"> 
                                <h4 class="mgbt-xs-0"><a href="#">Groupis Group</a></h4>
                                <div class="menu-info">
                                    <span class="menu-date"> 3467 members </span> 
                                                                                                                                   
                                </div>  
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco...</p>                                                        
                            </div>                                               
                            <div class="menu-action">                                                              
                                <div data-placement="bottom" data-toggle="tooltip" data-original-title="Leave Group" class="menu-action-icon vd_red">
                                    <i class="fa fa-times"></i>
                                </div>                                                                                                                                       
                            </div>                                                	  
                        </li>
                        </ul> <!-- list-wrapper -->
                   </div> <!-- content-list -->
                </div> <!-- col-xs-12 col-sm-6 -->

            	<div class="col-xs-12 col-sm-6">
                    <div class="content-list content-large menu-action-right">
                        <ul class="list-wrapper pd-lr-15">
                        <li>  
                            <div class="menu-icon"><a href="#"><img src="img/groups/logo-02.jpg" alt="example image"></a></div> 
                            <div class="menu-text"> 
                                <h4 class="mgbt-xs-0"><a href="#">Ztormin Community</a></h4>
                                <div class="menu-info">
                                    <span class="menu-date"> 12597 members </span> 
                                                                                                                                   
                                </div>  
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco...</p>                                                        
                            </div>                                               
                            <div class="menu-action">                                                              
                                <div data-placement="bottom" data-toggle="tooltip" data-original-title="Leave Group" class="menu-action-icon vd_red">
                                    <i class="fa fa-times"></i>
                                </div>                                                                                                                                       
                            </div>                                                	  
                        </li>
                        </ul> <!-- list-wrapper -->
                   </div> <!-- content-list -->
                </div> <!-- col-xs-12 col-sm-6 -->
                
            	<div class="col-xs-12 col-sm-6">
                    <div class="content-list content-large menu-action-right">
                        <ul class="list-wrapper pd-lr-15">
                        <li>  
                            <div class="menu-icon"><a href="#"><img src="img/groups/logo-03.jpg" alt="example image"></a></div> 
                            <div class="menu-text"> 
                                <h4 class="mgbt-xs-0"><a href="#">Book Lovers</a></h4>
                                <div class="menu-info">
                                    <span class="menu-date"> 67 members </span> 
                                                                                                                                   
                                </div>  
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco...</p>                                                        
                            </div>                                               
                            <div class="menu-action">                                                              
                                <div data-placement="bottom" data-toggle="tooltip" data-original-title="Leave Group" class="menu-action-icon vd_red">
                                    <i class="fa fa-times"></i>
                                </div>                                                                                                                                       
                            </div>                                                	  
                        </li>
                        </ul> <!-- list-wrapper -->
                   </div> <!-- content-list -->
                </div> <!-- col-xs-12 col-sm-6 -->

    

                
            </div> <!-- row -->
        </div> <!-- pd-20 --> 
    </div>  <!-- groups tab -->   
    
  </div>
  <!-- tab-content --> 
</div>
<!-- tabs-widget -->              </div>
            </div>
            <!-- row --> 
            
          </div>
          <!-- .vd_content-section --> 
          
        </div>
        <!-- .vd_content --> 
      </div>
      <!-- .vd_container --> 
    </div>
    
    
  </div>
  <!-- .container --> 
</div>
<!-- .content -->

<!-- Footer Start -->
  <footer class="footer-1"  id="footer">      
    <div class="vd_bottom ">
        <div class="container">
            <div class="row">
              <div class=" col-xs-12">
                <div class="copyright">
                  	Copyright &copy;2014 Venmond Inc. All Rights Reserved 
                </div>
              </div>
            </div><!-- row -->
        </div><!-- container -->
    </div>
  </footer>
<!-- Footer END -->
   
      </div>      
  </div>

</div>

<!-- .vd_body END  -->
<a id="back-top" href="#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>


<script type="text/javascript" src="js/jquery.js"></script> 

<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src='plugins/jquery-ui/jquery-ui.custom.min.js'></script>
<script type="text/javascript" src="plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<script type="text/javascript" src="js/caroufredsel.js"></script> 
<script type="text/javascript" src="js/plugins.js"></script>

<script type="text/javascript" src="plugins/breakpoints/breakpoints.js"></script>
<script type="text/javascript" src="plugins/dataTables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="plugins/prettyPhoto-plugin/js/jquery.prettyPhoto.js"></script> 

<script type="text/javascript" src="plugins/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="plugins/tagsInput/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="plugins/blockUI/jquery.blockUI.js"></script>
<script type="text/javascript" src="plugins/pnotify/js/jquery.pnotify.min.js"></script>

<script type="text/javascript" src="js/theme.js"></script>
<script type="text/javascript" src="custom/custom.js"></script>
 
<!-- Specific Page Scripts Put Here -->
<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>


<script type="text/javascript">
$(document).ready(function() {
	"use strict";

		
  // init Isotope

  var $container = $('.isotope').isotope({
    itemSelector: '.gallery-item',
    layoutMode: 'fitRows'
  });
  

	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
	  $container.isotope('layout');
	});


  // bind filter button click

  $('#filters').on( 'click', 'a', function() {
    var filterValue = $( this ).attr('data-filter');
	$('#filters li').removeClass('active');
	$(this).parent().addClass('active');	
    $container.isotope({ filter: filterValue });
  });

	
});
</script>
<!-- Specific Page Scripts END -->






<script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXX-X']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script> 

</body>


</html>