
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

?>
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html><!--<![endif]-->

<!-- Specific Page Data -->

<!-- End of Data -->

<head>
    <meta charset="utf-8" />
    <title>MIT</title>
    <meta name="keywords" content="HTML5 Template, CSS3, All Purpose Admin Template, " />
    <meta name="description" content="Responsive Admin Template for multipurpose use">
    <meta name="author" content="Venmond">
    
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    
    
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
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
	<link href="plugins/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"><link href="plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css"><link href="plugins/introjs/css/introjs.min.css" rel="stylesheet" type="text/css">    
     
    <!-- Theme CSS -->
    <link href="css/theme.min.css" rel="stylesheet" type="text/css">
    <!--[if IE]> <link href="css/ie.css" rel="stylesheet" > <![endif]-->
    <link href="css/chrome.css" rel="stylesheet" type="text/chrome"> <!-- chrome only css -->    


        
    <!-- Responsive CSS -->
        	<link href="css/theme-responsive.min.css" rel="stylesheet" type="text/css"> 

	  
 
 
    <!-- for specific page in style css -->
        
    <!-- for specific page responsive in style css -->
        
    
    <!-- Custom CSS -->
    <link href="custom/custom.css" rel="stylesheet" type="text/css">



    <!-- Head SCRIPTS -->
    <script type="text/javascript" src="js/modernizr.js"></script> 
    <script type="text/javascript" src="js/mobile-detect.min.js"></script> 
    <script type="text/javascript" src="js/mobile-detect-modernizr.js"></script> 
 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="js/html5shiv.js"></script>
      <script type="text/javascript" src="js/respond.min.js"></script>     
    <![endif]-->
    
</head>    

<body id="dashboard" class="full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed responsive clearfix" data-active="dashboard "  data-smooth-scrolling="1">     
<div class="vd_body">
<!-- Header Start -->
  <?php include "lib/header.php"; ?>
  <!-- Header Ends --> 
<div class="content">
  <div class="container">
    <div class="vd_navbar vd_nav-width vd_navbar-tabs-menu vd_navbar-left">
	
<!--Side bar Menu-->
    <?php
include "lib/sidebar.php";
 ?>
   
   
</div>    
 

  
  
    <!-- Middle Content Start -->
    
    <div class="vd_content-wrapper">
      <div class="vd_container">
        <div class="vd_content clearfix">
          <div class="vd_head-section clearfix">
            <div class="vd_panel-header">
              <ul class="breadcrumb">
                <li><a href="index.php">Home</a> </li>
                <!--<li class="active">Default Dashboard</li>-->
              </ul>
              <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step=5  data-position="left">
    <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
      <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
      <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>
      
</div>
 
            </div>
          </div>
          <!-- vd_head-section -->
          
          <div class="vd_title-section clearfix">
            <div class="vd_panel-header">
              <h1>WELCOME TO <?php echo $FetchRows['Sale_Name'];?>  </h1>
             
            
  <!-- menu -->
  
 
  <!-- menu --> 
</div>
<!-- vd_panel-menu --> 
            </div>
            <!-- vd_panel-header --> 
          </div>
          <!-- vd_title-section -->
          
          <div class="vd_content-section clearfix">
            <div class="row">
              <div class="col-md-7 mgbt-md-20 mgbt-lg-0">
                <div class="panel vd_interactive-widget light-widget widget">
  <div class="panel-body-list">
    <div class="vd_panel-menu">
  <div data-action="refresh" class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Refresh"> <i class="icon-cycle"></i> </div>
  <div class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Config">
    <div data-action="click-trigger" class="menu-trigger"> <i class="icon-cog"></i> </div>
    <div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target">
      <div class="child-menu">
        <div class="content-list content-menu">
          <ul class="list-wrapper pd-lr-10">
            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">Panel Menu</div> </a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="menu entypo-icon" data-placement="bottom" data-toggle="tooltip" data-original-title="Close" data-action="close"> <i class="icon-cross"></i> </div>
</div>
<!-- vd_panel-menu --> 
 
    
    <div class="pd-20">
     	       
				<h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-bolt mgr-10 profile-icon"></i> Client </h3>        
				<table class="table table-striped table-hover">
							  <thead>
								  <tr>
                                  	  <!--<th>#</th>-->
									  <!--<th> Id</th>                                  -->
									  <th>Clients</th>
									  <th>Entry Date</th>
									  <th>Email</th>
                                                                        
                                      <th>Phone</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
                                  <!--client show*********************************-->
								  
							<?php
                 
                 $SqlUser = "SELECT * FROM pro_customer WHERE S_id = '".$_SESSION['userid']."' AND CusStatus='Yes'";
                 $ResSqlUser = mysql_query($SqlUser);
                 while($fetch_user = mysql_fetch_array($ResSqlUser))
                 {
               ?>
								<tr>
                                	<!--<td>1</td>-->
									<!--<td><img height="80" src="img/avatar/avatar.jpg" alt="example image"></td>                    -->
                                	<td><?php echo $fetch_user['Name']; ?> </td>                                    
									<td class="center"><?php echo $fetch_user['Date']; ?></td>
									<td><?php echo $fetch_user['Email']; ?></td>
									<td ><?php echo $fetch_user['Phone']; ?></td>
										
									                                  
									<td class="menu-action rounded-btn">
                                    	<a href="view_client.php?C_ID=<?php echo $fetch_user['C_id']; ?>" class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                           <i class="fa fa-eye"></i>
                                        </a>                                      
                                    	
                                        
									</td>                                                                           
								</tr>
								
                                  <?php }?>     
                             
                                                                                   
                                                                   <!--end****************************************-->
							  </tbody>
						 </table>
                         <div class="">
                         </div>        
     
    
    </div>
   
  </div>
</div>
<!-- Panel Widget -->               </div>
              <!--col-md-7 -->
              <div class="col-md-5">
                <div class="row">
                  <div class="col-md-12">
                    <div class="vd_status-widget vd_bg-green widget">
	<div class="vd_panel-menu">
  <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
</div>
<!-- vd_panel-menu --> 
                                
    <a class="panel-body" href="#">
            <div class="clearfix">
                <span class="menu-icon">
                    <i class="icon-network"></i>
                </span>
                <span class="menu-value">
                    1,256,134
                </span>  
            </div>   
            <div class="menu-text clearfix">
                Total Clients
            </div>                                                               
    </a>        
</div>                    </div>
                  <!--col-md-12 --> 
                </div>
                <!-- .row -->
                <div class="row">
                  <div class="col-xs-6">
                    <div class="vd_status-widget vd_bg-red  widget">
    <div class="vd_panel-menu">
  <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
</div>
<!-- vd_panel-menu --> 
                                 
    <a class="panel-body" href="#">                                
        <div class="clearfix">
            <span class="menu-icon">
                <i class="icon-bars"></i>
            </span>
            <span class="menu-value">
                24
            </span>  
        </div>   
        <div class="menu-text clearfix">
           Total Project
        </div>  
     </a>                                                                
</div>                    </div>
                  <!--col-xs-6 -->
                  <div class="col-xs-6">
                    <div class="vd_status-widget vd_bg-blue widget">
    <div class="vd_panel-menu">
  <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
</div>
<!-- vd_panel-menu --> 
                                  
    <a class="panel-body"  href="#">                                  
        <div class="clearfix">
            <span class="menu-icon">
                <i class="fa fa-comments"></i>
            </span>
            <span class="menu-value">
                14
            </span>  
        </div>   
        <div class="menu-text clearfix">
            Total Live Project
        </div>
     </a>                                                                  
</div>                   </div>
                  <!--col-xs-6 --> 
                </div>
                <!-- .row -->
                <div class="row">
                  <div class="col-xs-6">
                    <div class="vd_status-widget vd_bg-yellow widget">
    <div class="vd_panel-menu">
  <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
</div>
<!-- vd_panel-menu --> 
                                  
    <a class="panel-body"  href="#">                                
        <div class="clearfix">
            <span class="menu-icon">
                <i class="icon-users"></i>
            </span>
            <!--<span class="menu-value">
                250
            </span>  -->
        </div>   
        <div class="menu-text clearfix">
          Edit Profile
        </div>  
     </a>                                                                
</div>                    </div>
                  <!--col-xs-6 -->
                  <div class="col-xs-6">
                    <div class="vd_status-widget vd_bg-grey widget">
    <div class="vd_panel-menu">
  <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
</div>
<!-- vd_panel-menu --> 
                                   
    <a class="panel-body"  href="#">                                  
        <div class="clearfix">
            <span class="menu-icon">
                <i class="fa fa-tasks"></i>
            </span>
            <!--<span class="menu-value">
                3
            </span>  -->
        </div>   
        <div class="menu-text clearfix">
           Add Project
        </div>
     </a>                                                                  
</div>                   </div>
                  <!--col-md-xs-6 --> 
                </div>
                <!-- .row --> 
                
              </div>
              <!-- .col-md-5 --> 
            </div>
   
<!-- vd_panel-menu --> 
  </div>
 

 
  </div>
  
</div>
<!-- Panel Widget -->               </div>
              <!--col-md-4-->
    
<!-- vd_panel-menu --> 
 
  </div>
 
</div>
              </div>
          
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

<!-- .vd_body END  -->
<a id="back-top" href="#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>

<!--
<a class="back-top" href="#" id="back-top"> <i class="icon-chevron-up icon-white"> </i> </a> -->

<!-- Javascript =============================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="js/jquery.js"></script> 
<!--[if lt IE 9]>
  <script type="text/javascript" src="js/excanvas.js"></script>      
<![endif]-->
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
<!-- Flot Chart  -->
<script type="text/javascript" src="plugins/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="plugins/flot/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="plugins/flot/jquery.flot.pie.min.js"></script>
<script type="text/javascript" src="plugins/flot/jquery.flot.categories.min.js"></script>
<script type="text/javascript" src="plugins/flot/jquery.flot.time.min.js"></script>
<script type="text/javascript" src="plugins/flot/jquery.flot.animator.min.js"></script>

<!-- Vector Map -->
<script type="text/javascript" src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script type="text/javascript" src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- Calendar -->
<script type="text/javascript" src='plugins/moment/moment.min.js'></script>
<script type="text/javascript" src='plugins/jquery-ui/jquery-ui.custom.min.js'></script>
<script type="text/javascript" src='plugins/fullcalendar/fullcalendar.min.js'></script>

<!-- Intro JS (Tour) -->
<script type="text/javascript" src='plugins/introjs/js/intro.min.js'></script>

<!-- Sky Icons -->
<script type="text/javascript" src='plugins/skycons/skycons.js'></script>


<script type="text/javascript">
$(window).load(function () 
	{




		$.fn.UseTooltip = function () {
			var previousPoint = null;
			 
			$(this).bind("plothover", function (event, pos, item) {        
					if (item) {
						if (previousPoint != item.dataIndex) {
		
							previousPoint = item.dataIndex;
		
							$("#tooltip").remove();
							var x = item.datapoint[0].toFixed(2),
							y = item.datapoint[1].toFixed(2);
		
							showTooltip(item.pageX, item.pageY,
								"<p class='vd_bg-green'><strong class='mgr-10 mgl-10'>" + Math.round(x)  + " NOV 2013 </strong></p>" +
								"<div style='padding: 0 10px 10px;'>" +
								"<div>" + item.series.label +": <strong>"+ Math.round(y)  +"</strong></div>" +
								"<div> Profit: <strong>$"+ Math.round(y)*7  +"</strong></div>" +
								"</div>"
							);
						}
					} else {
						$("#tooltip").remove();
						previousPoint = null;            
					}
			});
		};
		 
	

/* REVENUE LINE CHART */



/* REVENUE DONUT CHART */
	
	
		
		
/* REVENUE BAR CHART */	
	
	