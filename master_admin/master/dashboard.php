<?php
include "../config/connect.php";
if($_SESSION['admin_id'] == "" && $_SESSION['admin_username'] == ""){
    header("location:index.php");
}
?>
<!DOCTYPE html>

<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html><!--<![endif]-->

<!-- Specific Page Data -->

<!-- End of Data -->

<head>
    <meta charset="utf-8" />
    <title>Project Management | MIT</title>
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
	<link href="plugins/morris/morris.css" rel="stylesheet" type="text/css">    
     
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

<body id="dashboard" class="full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed      responsive    clearfix" data-active="dashboard "  data-smooth-scrolling="1">     
<div class="vd_body">
<!-- Header Start -->
  <?php include'lib/header.php';?>
  <!-- Header Ends --> 
<div class="content">
  <div class="container">
   <?php include'lib/sidebar.php';?>
    
    <!-- Middle Content Start -->
    
    <div class="vd_content-wrapper">
      <div class="vd_container">
        <div class="vd_content clearfix">
          <div class="vd_head-section clearfix">
            <div class="vd_panel-header">
              <ul class="breadcrumb">
                <li><a href="index.php">Home</a> </li>
                <li class="active">Admin Dashboard</li>
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
              <h1>Wellcome To Master Admin </h1>
              <!--<small class="subtitle">Default dashboard for multipurpose demonstration</small>-->
           
  <!-- menu -->
  

  <!-- menu --> 
</div>
<!-- vd_panel-menu --> 
            </div>
            <!-- vd_panel-header --> 
          </div>
          <!-- vd_title-section -->
          
          <div class="vd_content-section clearfix">

             <!-- row --> 
                      <div class="row">
    <div class="col-xs-6">
        <div class="panel widget">
                      <div class="panel-heading vd_bg-red">
                        <h3 class="panel-title"><span class="menu-icon"> <i class="fa fa-dot-circle-o"></i> </span>TOTAL DEVELOPER  </h3>
                        <div class="vd_panel-menu">
 
</div>
<!-- vd_panel-menu --> 

 
                      </div>
                        	<?php
					$member_query2 = mysql_query("select * from " . TABLE_PREFIX . "dev_registration");
					$member_num  = mysql_num_rows($member_query2);
								?>  
                      <div class="panel-body">
                        <div class="row mgbt-xs-0">
                          <div class="col-xs-8">
                            <h2 class="vd_red mgbt-xs-0">	<?= $member_num ?></h2>
                            <!--<div class="vd_grey">% of Total: 100.00% (1,201)</div>-->
                          </div>
                          <div class="col-xs-4">
                           
                          </div>
                        </div>
                      </div>
                    </div>
        </div>
        <!--col-xs-6-->
         <div class="col-xs-6">
        <div class="panel widget">
                      <div class="panel-heading vd_bg-yellow">
                        <h3 class="panel-title"><span class="menu-icon"> <i class="fa fa-dot-circle-o"></i> </span>TOTAL SALES  </h3>
                        <div class="vd_panel-menu">
 
</div>
<!-- vd_panel-menu --> 

 
                      </div>
                      	<?php
					$member_query2 = mysql_query("select * from " . TABLE_PREFIX . "sale_registration");
					$member_num  = mysql_num_rows($member_query2);
								?>  
                      <div class="panel-body">
                        <div class="row mgbt-xs-0">
                          <div class="col-xs-8">
                            <h2 class="vd_blue mgbt-xs-0">	<?= $member_num ?></h2>
                            <!--<div class="vd_grey">% of Total: 100.00% (1,201)</div>-->
                          </div>
                          <div class="col-xs-4">
                           
                          </div>
                        </div>
                      </div>
                    </div>
        </div>
        </div>
            <!--row-->
              <!--start Row  -->
           


              <div class="col-md-6">

                <div class="panel widget">
                  <div class="panel-heading vd_bg-grey">
                    <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-dot-circle-o"></i> </span> Latest Project </h3>
                  </div>
                  <div class="panel-body-list  table-responsive">
                    <table class="table table-striped table-hover no-head-border">
                      <thead class="vd_bg-green vd_white">
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Date registered</th>
                           <!--<th>Price</th>-->
                           <th>View</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                         <?php
                  $c = 1;
                
                $SqlUser ="select * from ".TABLE_PREFIX."project order by P_id desc limit 10 ";
               
                  $ResSqlUser = mysql_query($SqlUser);
                  while($FetchRows = mysql_fetch_array($ResSqlUser))
                  {
                ?> 
                        <tr>
                          <td><?php echo $c ?></td>
                          <td><?php echo $FetchRows['Name']; ?></td>
                          <td class="center"><?php echo $FetchRows['RegistDate']; ?></td>
                          <!--<td class="center">Member</td>-->
                          <!--<td class="center">$1000</td>-->
                          <td class="menu-action rounded-btn">
                            <a  href="view_project.php?P_ID=<?php echo $FetchRows['P_id']; ?>" data-original-title="view" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-grey">
                               <i class="fa fa-eye"></i>
                                </a>
                                </td>
                        </tr>
                         <?php
                      $c++;
                        }
                      ?>    
                      
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- Panel Widget -->
               
              </div>
<!--................End latest product.............................-->
                   <div class="col-md-5">
 <div class="row">
                  <div class="col-md-12">
                    <div class="vd_status-widget vd_bg-blue widget">
	<div class="vd_panel-menu">
  <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
</div>
<!-- vd_panel-menu --> 
          <?php
					$member_query2 = mysql_query("select * from " . TABLE_PREFIX . "customer"  ) ;
								$member_num  = mysql_num_rows($member_query2);
								?>                          
    <a class="panel-body" href="#">
            <div class="clearfix">
                <span class="menu-icon">
                    <i class="icon-network"></i>
                </span>
                <span class="menu-value">
                  	<?= $member_num ?>
                </span>  
            </div>   
            <div class="menu-text clearfix">
                Total Clients
            </div>                                                               
    </a>   
    </div><!--widget -->
   
    </div>    <!-- col12 end-->     
</div>     <!--row -->
<!--.....................-->
<div class="row">
 <div class="col-md-12">
                    <div class="vd_status-widget vd_bg-red widget">
	<div class="vd_panel-menu">
  <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
</div>
<!-- vd_panel-menu --> 
             <?php
					$member_query2 = mysql_query("select * from " . TABLE_PREFIX . "project"  ) ;
								$member_num  = mysql_num_rows($member_query2);
								?>                          
    <a class="panel-body" href="#">
            <div class="clearfix">
                <span class="menu-icon">
                    <i class="icon-network"></i>
                </span>
                <span class="menu-value">
                   	<?= $member_num ?>
                </span>  
            </div>   
            <div class="menu-text clearfix">
                Total Projects
            </div>                                                               
    </a>        
</div><!--widget -->
   
    </div>    <!-- col12 end-->     
</div>     <!--row -->
<div class="row">
   
   <div class=" col-md-6 ">
                    <div class="vd_status-widget vd_bg-green  widget">
    <div class="vd_panel-menu">
  <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
</div>
<!-- vd_panel-menu --> 
        	<?php
					$member_query2 = mysql_query("select * from " . TABLE_PREFIX . "project  WHERE  ProStatus='Live'");
					$member_num  = mysql_num_rows($member_query2);
								?>                           
    <a class="panel-body" href="#">                                
        <div class="clearfix">
            <span class="menu-icon">
                <i class="icon-bars"></i>
            </span>
            <span class="menu-value">
               	<?= $member_num ?>
            </span>  
        </div>   
        <div class="menu-text clearfix">
            LIVE PROJECT
        </div>  
     </a>                                                                
</div>              
      </div>

<!--*********-->
<div class="col-xs-6">
                    <div class="vd_status-widget vd_bg-yellow widget">
    <div class="vd_panel-menu">
  <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
</div>
<!-- vd_panel-menu --> 
             	<?php
					$member_query2 = mysql_query("select * from " . TABLE_PREFIX . "project  WHERE  ProStatus='Complete'");
					$member_num  = mysql_num_rows($member_query2);
								?>                        
    <a class="panel-body"  href="#">                                  
        <div class="clearfix">
            <span class="menu-icon">
                <i class="fa fa-comments"></i>
            </span>
            <span class="menu-value">
               	<?= $member_num ?>
            </span>  
        </div>   
        <div class="menu-text clearfix">
            COMPLATE PROJECT
        </div>
     </a>                                                                  
</div>             
       </div>
</div>
<!--**********-->
 
     <!--***********************-->

</div> <!--col-mb-5 end -->


               </div><!--End Row-->


               <!--3rd part row *********************-->
                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 mgbt-sm-15">
                    <div class="vd_status-widget vd_bg-grey widget">
    <div class="vd_panel-menu">
  <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
</div>
<!-- vd_panel-menu --> 
           	<?php
					$member_query2 = mysql_query("select * from " . TABLE_PREFIX . "project  WHERE  ProStatus='Pending'");
					$member_num  = mysql_num_rows($member_query2);
								?>                          
    <a class="panel-body"  href="#">                                
        <div class="clearfix">
            <span class="menu-icon">
                <i class="icon-users"></i>
            </span>
            <span class="menu-value">
                  	<?= $member_num ?>
            </span>  
        </div>   
        <div class="menu-text clearfix">
            PENDING PROJECT
        </div>  
     </a>                                                                
</div>               
     </div>
     <!--***************-->
 <div class="col-lg-6 col-md-6 col-sm-6 mgbt-sm-15">
                    <div class="vd_status-widget vd_bg-blue widget">
    <div class="vd_panel-menu">
  <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
</div>
<!-- vd_panel-menu --> 
                 	<?php
					$member_query2 = mysql_query("select * from " . TABLE_PREFIX . "project  WHERE  ProStatus='Working'");
					$member_num  = mysql_num_rows($member_query2);
								?>                     
    <a class="panel-body"  href="#">                                  
        <div class="clearfix">
            <span class="menu-icon">
                <i class="fa fa-tasks"></i>
            </span>
            <span class="menu-value">
                  	<?= $member_num ?>
            </span>  
        </div>   
        <div class="menu-text clearfix">
            WORKING PROJECT
        </div>
     </a>                                                                  
</div>                
   </div>
                       </div>                
                      
            <!-- .row 3rd part end -->
<!--4th part start-->
   <div class="row">
              <div class="col-md-12">
                
<div class="panel vd_map-widget widget">
  <div class="panel-heading vd_bg-yellow">
    <h3 class="panel-title"> <span class="menu-icon"> <i class="glyphicon glyphicon-map-marker"></i> </span> <span class="menu-text">Visitor Map</span> </h3>
    <div class="vd_panel-menu">
  <div data-action="minimize" data-original-title="Minimize" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon"> <i class="icon-minus3"></i> </div>
  <div data-action="refresh"  data-original-title="Refresh" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
  <div data-original-title="Config" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon smaller-font">
    <div class="menu-trigger" data-action="click-trigger"> <i class="icon-cog"></i> </div>
    <div data-action="click-target" class="vd_mega-menu-content  width-xs-2  left-xs">
      <div class="child-menu">
        <div class="content-list content-menu">
          <ul class="list-wrapper pd-lr-10">
            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">User Menu</div> </a> </li>
            <li> <a href="#"> <div class="menu-icon"><i class=" icon-trophy"></i></div> <div class="menu-text">Panel Menu</div> </a> </li>
            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-envelope"></i></div> <div class="menu-text">Other Menu</div> </a> </li>
            <li class="line"></li>
            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-tasks"></i></div> <div class="menu-text"> Tasks</div> </a> </li>
            <li> <a href="#"> <div class="menu-icon"><i class=" icon-lock"></i></div> <div class="menu-text">Privacy</div> </a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div data-action="close" data-original-title="Close" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon"> <i class="icon-cross"></i> </div>
</div>
<!-- vd_panel-menu --> 
  </div>
  <div class="panel-body-list">
    <div id="map1" style="height: 348px;"></div>
    <div class="vd_info br" >
      <h5 class="text-right font-semibold"><strong>TOTAL VISITS</strong></h5>
      <h3 class="text-right  vd_red"><span class="append-icon"><i class="fa fa-map-marker"></i></span>3,546,456</h3>
    </div>
  </div>
</div>
<!-- Panel Widget -->     
          </div>

              <!--col-md-6-->


<!--******************************************************************-->
</div>
<!--4th part end-->
<!--....................Bar Charts..............-->
 <div class="row">
              <div class="col-md-12 >
                <div class="panel widget  light-widget">
                  <div class="panel-heading no-title">
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
                  </div>  
                  <div class="panel-body-list pd-25">
                    <h2 class="mgtp--5"> <span class="font-semibold">Bar</span> Chart </h2>
                    <div id="bar-placeholder" class="bar-chart" style="height:318px;"></div>
                  </div>
                </div>
                <!-- col-md-6 --> 
              </div>
              <!-- row -->
              <!--................End Bar charts.............................-->

          
                     </div>
          <!-- .vd_content-section --> 
          
        </div>
        <!-- .vd_content --> 
      </div>
      <!-- .vd_container --> 
    </div>
    <!-- .vd_content-wrapper --> 
    
    <!-- Middle Content End --> 
    
  </div>
  <!-- .container --> 
</div>
<!-- .content -->

<!-- Footer Start -->
  
<!-- Footer END -->
  

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
<script type="text/javascript" src="plugins/raphael/raphael.min.js"></script>
<script type="text/javascript" src="plugins/morris/morris.min.js"></script>
<script type="text/javascript" src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script type="text/javascript" src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<?php
$abc=70;
?>

<script type="text/javascript">
$(window).load(function() 
 {
 "use strict";
  
 Morris.Bar({
   element: 'bar-placeholder',
   data: [
    <?php for($i=1;$i<=12;$i++){
    $year = date('Y');
    $sdate = $year.'-'.$i.'-01';
    $ndate = $year.'-'.$i.'-31';
    $num = mysql_num_rows(mysql_query("SELECT * FROM pro_project WHERE RegistDate BETWEEN '$sdate' AND '$ndate' AND ProStatus!='inactive'"));
    $com=  mysql_num_rows(mysql_query("SELECT * FROM pro_project WHERE RegistDate BETWEEN '$sdate' AND '$ndate' AND ProStatus='live'"));
          if($i < 12){
          ?>
  { y: '<?=date('M',strtotime($sdate))?>', a: <?=$num?>, b: <?=$com?> },
    <?php }else{?>
        { y: '<?=date('M',strtotime($sdate))?>', a: <?=$num?>, b: <?=$com?> }      
        <?php  }}?>
//  { y: 'Feb', a: 75,  b: 65 },
//  { y: '2008', a: 50,  b: 40 },
//  { y: '2009', a: 75,  b: 65 },
//  { y: '2010', a: 50,  b: 40 },
//  { y: '2011', a: 75,  b: 65 },
//  { y: '2012', a: 100, b: 90 }
   ],
   xkey: 'y',
   ykeys: ['a', 'b'],
   labels: ['Project ', 'Live'],
   barColors: ["#23709E","#39515f"]
 });
});
</script>

<script type="text/javascript">
$(window).load(function() 
	{
"use strict";

var cityAreaData = [
        500.70,
        410.16,
        210.69,
        120.17,
        64.31,
        150.35,
        130.22,
        120.71,
        100.32
      ];

 
 var map = new jvm.WorldMap({
    map: 'world_mill_en',
    container: $('#map1'),
    scaleColors: ['#C8EEFF', '#0071A4'],
    normalizeFunction: 'polynomial',
	zoomOnScroll:false,	

    hoverColor: false,
	regionStyle:{
		  initial: {
			fill: '#abe7c8',
			"fill-opacity": 1,
			stroke: '#abe7c8',
			"stroke-width": 0,
			"stroke-opacity": 0
		  },
		  hover: {
			"fill-opacity": 0.8
		  },
		  selected: {
			fill: 'yellow'
		  },
		  selectedHover: {
		  }
		},
    markerStyle: {
		  initial: {
			fill: '#F85D2C',
			stroke: '#F85D2C',
			"fill-opacity": 0.9,
			"stroke-width": 10,
			"stroke-opacity": 0.5,
			r: 3
		  },
		  hover: {
			stroke: '#F85D2C',
			"stroke-width": 14
		  },
		  selected: {
			fill: 'blue'
		  },
		  selectedHover: {
		  }
		},	
    backgroundColor: '#ffffff',
     markers :[
  		{latLng: [50, 0], name: 'France - 43145 views'},	 
  		{latLng: [0, 120], name: 'Indonesia - 145 views'},
  		{latLng: [-25, 130], name: 'Australia - 486 views'},	
  		{latLng: [0, 20], name: 'Africa - 12 views'},	
  		{latLng: [35, 100], name: 'China - 7890 views'},	
  		{latLng: [46, 105], name: 'Mongolia - 2123 views'},	
  		{latLng: [40, 70], name: 'Kyrgiztan - 87456 views'},	
  		{latLng: [58, 50], name: 'Russia - 4905 views'},
		{latLng: [35, 135], name: 'Japan - 87456 views'}																		
      ],
	series: {
      markers: [{
        attribute: 'r',
        scale: [3, 7],
        values: cityAreaData
      }]
    },		
  }); 
 


$('#filters a').click(function(){
	var filter = $(this).data('filter');
	$('#map1').vectorMap('set', 'focus', filter);
	map.setScale(4);

});

	  
	  

});
</script>
<!-- Specific Page Scripts END -->




<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->

<!--<script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXX-X']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script> -->

</body>
</html>