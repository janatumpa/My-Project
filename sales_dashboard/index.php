<?php
include "../config/connect.php";
if($_SESSION['userid'] == "" && $_SESSION['loggedIn'] == ""){
    header("location:../s_login.php");
}


$SqlUser    = "SELECT * FROM pro_sale_registration WHERE S_id = '" . $_SESSION['userid'] . "'";
$ResSqlUser = mysql_query($SqlUser);
$FetchRows  = mysql_fetch_array($ResSqlUser);
//For Cover Image


?>


<!DOCTYPE html>
<!--[if IE 8]>            <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>            <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->    <html><!--<![endif]-->

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

    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css">

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
  <?php
include "lib/header.php";
?>
 <!-- Header Ends --> 
<div class="content">
  <div class="container">
    <div class="vd_navbar vd_nav-width vd_navbar-tabs-menu vd_navbar-left">
    
<!--Side bar Menu-->
    <?php
include "lib/sidebar.php";
?>
  
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
              <h1>WELCOME TO <?php echo $FetchRows['Sale_Name'];?></h1> 
            </div>
            <!-- vd_panel-header --> 
          </div>
          <!-- vd_title-section -->
          <div class="vd_content-section clearfix">
             <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 mgbt-sm-15">
							<div class="vd_status-widget vd_bg-red widget">
							<div class="vd_panel-menu">
							<div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
							</div> 
								<?php
								$member_query2 = mysql_query("select * from " . TABLE_PREFIX . "customer  WHERE S_id = '" . $_SESSION['userid'] . "'");
								$member_num2   = mysql_num_rows($member_query2);
								?>                               
							<a class="panel-body"  href="#">                                  
								<div class="clearfix">
									<span class="menu-icon">
										<i class="fa fa-users"></i>
									</span>
									<span class="menu-value">
										<?= $member_num2 ?>
								</span>  
								</div>   
								<div class="menu-text clearfix">
									Total Client
								</div>
							</a>                                                                  
						</div>                   
              </div><!--col-xs-6 --> 
			  <div class="col-lg-6 col-md-6 col-sm-6 mgbt-sm-15">
							<div class="vd_status-widget vd_bg-green widget">
							<div class="vd_panel-menu">
							<div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
							</div> 
								<?php
								$member_query2 = mysql_query("select * from " . TABLE_PREFIX . "project  WHERE S_id = '" . $_SESSION['userid'] . "'");
								$member_num2   = mysql_num_rows($member_query2);
								?>                               
							<a class="panel-body"  href="#">                                  
								<div class="clearfix">
									<span class="menu-icon">
										<i class="icon-bars"></i>
									</span>
									<span class="menu-value">
										<?= $member_num2 ?>
								</span>  
								</div>   
								<div class="menu-text clearfix">
									Total Project
								</div>
							</a>                                                                  
						</div>                   
              </div>
                 <!--col-xs-6 --> 
			  
                </div><!-- .row -->
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6 mgbt-sm-15">
							<div class="vd_status-widget vd_bg-blue widget">
							<div class="vd_panel-menu">
							<div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
							</div> 
								<?php
								$member_query2 = mysql_query("select * from " . TABLE_PREFIX . "project  WHERE S_id = '" . $_SESSION['userid'] . "' AND ProStatus='Live'");
								$member_num2   = mysql_num_rows($member_query2);
								?>                               
							<a class="panel-body"  href="#">                                  
								<div class="clearfix">
									<span class="menu-icon">
										<i class=" fa fa-stack-overflow"></i>
									</span>
									<span class="menu-value">
										<?= $member_num2 ?>
								</span>  
								</div>   
								<div class="menu-text clearfix">
									Live Project
								</div>
							</a>                                                                  
						</div>                   
              </div><!--col-xs-3 --> 
			  <div class="col-lg-3 col-md-6 col-sm-6 mgbt-sm-15">
							<div class="vd_status-widget vd_bg-green widget">
							<div class="vd_panel-menu">
							<div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
							</div> 
								<?php
								$member_query2 = mysql_query("select * from " . TABLE_PREFIX . "project  WHERE S_id = '" . $_SESSION['userid'] . "' AND ProStatus='Complete'");
								$member_num2   = mysql_num_rows($member_query2);
								?>                               
							<a class="panel-body"  href="#">                                  
								<div class="clearfix">
									<span class="menu-icon">
										<i class="icon-thumbs-up"></i>
									</span>
									<span class="menu-value">
										<?= $member_num2 ?>
								</span>  
								</div>   
								<div class="menu-text clearfix">
									Complete Project
								</div>
							</a>                                                                  
						</div>                   
              </div><!--col-xs-3 --> 
			  <div class="col-lg-3 col-md-6 col-sm-6 mgbt-sm-15">
							<div class="vd_status-widget vd_bg-grey widget">
							<div class="vd_panel-menu">
							<div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
							</div> 
								<?php
								$member_query2 = mysql_query("select * from " . TABLE_PREFIX . "project  WHERE S_id = '" . $_SESSION['userid'] . "' AND ProStatus='Pending'");
								$member_num2   = mysql_num_rows($member_query2);
								?>                               
							<a class="panel-body"  href="#">                                  
								<div class="clearfix">
									<span class="menu-icon">
										<i class="glyphicon glyphicon-exclamation-sign"></i>
									</span>
									<span class="menu-value">
										<?= $member_num2 ?>
								</span>  
								</div>   
								<div class="menu-text clearfix">
									Pending Project
								</div>
							</a>                                                                  
						</div>                   
              </div><!--col-xs-3 --> 
			  <div class="col-lg-3 col-md-6 col-sm-6 mgbt-sm-15">
							<div class="vd_status-widget vd_bg-yellow widget">
							<div class="vd_panel-menu">
							<div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
							</div> 
								<?php
								$member_query2 = mysql_query("select * from " . TABLE_PREFIX . "project  WHERE S_id = '" . $_SESSION['userid'] . "' AND ProStatus='Working'");
								$member_num2   = mysql_num_rows($member_query2);
								?>                               
							<a class="panel-body"  href="#">                                  
								<div class="clearfix">
									<span class="menu-icon">
										<i class="glyphicon glyphicon-forward"></i>
									</span>
									<span class="menu-value">
										<?= $member_num2 ?>
								</span>  
								</div>   
								<div class="menu-text clearfix">
									Working Project
								</div>
							</a>                                                                  
						</div>                   
              </div><!--col-xs-3 --> 
                  <div class="row">
              <div class="col-md-12 mgbt-xs-20 mgbt-md-0">
                <div class="panel widget  light-widget">
                 
                  <div class="panel-body-list pd-25">
                    <h2 class="mgtp--5"> <span class="font-semibold">Project Status</span></h2>
                    <div id="bar-placeholder" class="bar-chart" style="height:318px;"></div>
                  </div>
                </div>
                <!-- col-md-6 --> 
              </div>
              <!-- row -->
<!-- vd_panel-menu --> 
                  </div>
                </div><!-- .row -->
				 <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-6 mgbt-sm-15">
							<div class="vd_status-widget vd_bg-yellow widget">
							<div class="vd_panel-menu">
							<div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
							</div>                              
							<a class="panel-body"  href="profile_edit.php">                                  
								<div class="clearfix">
									<span class="menu-icon">
										<i class="icon-users"></i>
									</span>
									 
								</div>   
								<div class="menu-text clearfix">
									Edit Profile
								</div>
							</a>                                                                  
						</div>                   
              </div><!--col-xs-4 --> 
			  <div class="col-lg-4 col-md-6 col-sm-6 mgbt-sm-15">
							<div class="vd_status-widget vd_bg-blue widget">
							<div class="vd_panel-menu">
							<div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
							</div>                               
							<a class="panel-body"  href="add_project.php">                                  
								<div class="clearfix">
									<span class="menu-icon">
										<i class="fa fa-tasks"></i>
									</span>
									  
								</div>   
								<div class="menu-text clearfix">
									Add Project
								</div>
							</a>                                                                  
						</div>                   
              </div><!--col-xs-4 --> 
			  <div class="col-lg-4 col-md-6 col-sm-6 mgbt-sm-15">
							<div class="vd_status-widget vd_bg-red widget">
							<div class="vd_panel-menu">
							<div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
							</div>                               
							<a class="panel-body"  href="add_client.php">                                  
								<div class="clearfix">
									<span class="menu-icon">
										<i class="fa fa-comments"></i>
									</span>
									  
								</div>   
								<div class="menu-text clearfix">
									Add Client
								</div>
							</a>                                                                  
						</div>                   
              </div><!--col-xs-4 --> 
			  
                </div><!-- .row -->
                

                 
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
  <?php
include "lib/footer.php";
?>
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


<script type="text/javascript" src="plugins/raphael/raphael.min.js"></script>
<script type="text/javascript" src="plugins/morris/morris.min.js"></script>

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
    $num = mysql_num_rows(mysql_query("SELECT * FROM pro_project WHERE S_id='".$_SESSION['userid']."' AND RegistDate BETWEEN '$sdate' AND '$ndate' AND ProStatus!='inactive'"));
     $num1 = mysql_num_rows(mysql_query("SELECT * FROM pro_project WHERE S_id='".$_SESSION['userid']."' AND RegistDate BETWEEN '$sdate' AND '$ndate' AND ProStatus ='working'"));
    
          if($i < 12){
          ?>
		{ y: '<?=date('M',strtotime($sdate))?>', a: <?=$num?>, b: <?=$num1?>, c: <?=$num1?>},
    <?php }else{?>
        { y: '<?=date('M',strtotime($sdate))?>', a: <?=$num?>, b: <?=$num1?>, c: <?=$num1?>}      
        <?php  }}?>
//		{ y: 'Feb', a: 75,  b: 65 },
//		{ y: '2008', a: 50,  b: 40 },
//		{ y: '2009', a: 75,  b: 65 },
//		{ y: '2010', a: 50,  b: 40 },
//		{ y: '2011', a: 75,  b: 65 },
//		{ y: '2012', a: 100, b: 90 }
	  ],
	  xkey: 'y',
	  ykeys: ['a', 'b', 'c'],
	  labels: ['Active A', 'Working B', 'Inactive C'],
	  barColors: ["#23709E","#39515f"]
	});
});
</script>

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
         
        function showTooltip(x, y, contents) {
            $('<div id="tooltip">' + contents + '</div>').css({
                position: 'absolute',
                display: 'none',
                top: y + 5,
                left: x + 20,    
                size: '10',  
//                'border-top' : '3px solid #1FAE66',
                'background-color': '#111111',
                color: "#FFFFFF",
                opacity: 0.85
            }).appendTo("body").fadeIn(200);
        }


/* REVENUE LINE CHART */

    var d2 = [ [1, 250],
            [2, 150],
            [3, 50],
            [4, 200],
            [5,50],
            [6, 150],
            [7, 150],
            [8, 200],
            [9, 100],
            [10, 250],
            [11,250],
            [12, 200],
            [13, 300]            

];
    var d1 = [
            [1, 650],
            [2, 550],
            [3, 450],
            [4, 550],
            [5, 350],
            [6, 500],
            [7, 600],
            [8, 450],
            [9, 300],
            [10, 600],
            [11, 400],
            [12, 500],
            [13, 700]                    
            
];
    var plot = $.plotAnimator($("#revenue-line-chart"), [
            {      label: "Revenue",
                data: d2,     
                lines: {                
                    fill: 0.4,
                    lineWidth: 0,                
                },
                color:['#f2be3e']
            },{ 
                data: d1, 
                animator: {steps: 60, duration: 1000, start:0},         
                lines: {lineWidth:2},    
                shadowSize:0,
                color: '#F85D2C'
            },{
                label: "Revenue",
                data: d1, 
                points: { show: true, fill: true, radius:6,fillColor:"#F85D2C",lineWidth:3 },    
                color: '#fff',                
                shadowSize:0
            },
            {    label: "Cost",
                data: d2, 
                points: { show: true, fill: true, radius:6,fillColor:"#f2be3e",lineWidth:3 },    
                color: '#fff',                
                shadowSize:0
            }
        ],{    xaxis: {
        tickLength: 0,
        tickDecimals: 0,
        min:2,

                font :{
                    lineHeight: 13,
                    style: "normal",
                    weight: "bold",
                    family: "sans-serif",
                    variant: "small-caps",
                    color: "#6F7B8A"
                }
            },
            yaxis: {
                ticks: 3,
                tickDecimals: 0,
                tickColor: "#f0f0f0",
                font :{
                    lineHeight: 13,
                    style: "normal",
                    weight: "bold",
                    family: "sans-serif",
                    variant: "small-caps",
                    color: "#6F7B8A"
                }
            },
            grid: {
                backgroundColor: { colors: [ "#fff", "#fff" ] },
                borderWidth:1,borderColor:"#f0f0f0",
                margin:0,
                minBorderMargin:0,                            
                labelMargin:20,
                hoverable: true,
                clickable: true,
                mouseActiveRadius:6
            },
            legend: { show: false}
        });

         $("#revenue-line-chart").UseTooltip();        

        $(window).on("resize", function(){
            plot.resize();
            plot.setupGrid();
            plot.draw();
        });
                

/* REVENUE DONUT CHART */
    
        var data2 = [],
            series = 3;
        var data2 = [
            { label: "Men",  data: 35},
            { label: "Women",  data: 65}
        ];
        var revenue_donut_chart = $("#revenue-donut-chart");
        
        $("#revenue-donut-chart").bind("plotclick", function (event, pos, item) {
            if (item) {
                $("#clickdata").text(" - click point " + item.dataIndex + " in " + item.series.label);
                plot.highlight(item.series, item.datapoint);
            }
        });
        $.plot(revenue_donut_chart, data2, {
            series: {
                pie: { 
                    innerRadius: 0.4,
                    show: true
                }
            },
            grid: {
                hoverable: true,
                clickable: true,
            },
            colors: ["#1FAE66", "#F85D2C "]                
        });
        
        
/* REVENUE BAR CHART */    
    
        var bar_chart_data = [ ["Jan", 10], ["Feb", 8], ["Mar", 4], ["Apr", 13], ["May", 17], ["Jun", 9], ["Jul", 10], ["Aug", 8], ["Sep", 4], ["Oct", 13], ["Nov", 17], ["Dec", 9] ];
        
        var bar_chart = $.plot(
        $("#revenue-bar-chart"), [{
            data: bar_chart_data,
 //           color: "rgba(31,174,102, 0.8)",
             color: "#F85D2C" ,
            shadowSize: 0,
            bars: {
                show: true,
                lineWidth: 0,
                fill: true,
                fillColor: {
                    colors: [{
                        opacity: 1
                    }, {
                        opacity: 1
                    }]
                }
            }
        }], {
            series: {
                bars: {
                    show: true,
                    barWidth: 0.9,
                    align: "center"
                }
            },
            grid: {
                show: true,
                hoverable: true,
                borderWidth: 0
            },
            yaxis: {
                min: 0,
                max: 20,
                show: false
            },
            xaxis: {
                mode: "categories",
                tickLength: 0,
                color: "#FFFFFF",                
            }            
        });
        
       var previousPoint2 = null;
       $("#revenue-bar-chart").bind("plothover", function (event, pos, item) {
            $("#x").text(pos.x.toFixed(2));
            $("#y").text(pos.y.toFixed(2));
            if (item) {
                if (previousPoint2 != item.dataIndex) {
                    previousPoint2 = item.dataIndex;
                    $("#tooltip").remove();
                    var x = item.datapoint[0] + 1,
                        y = item.datapoint[1].toFixed(2);
                    showTooltip(item.pageX, item.pageY, 
                                "<p class='vd_bg-green'><strong class='mgr-10 mgl-10'>" + x + " - 2013 </strong></p>" +
                                "<div style='padding: 0 10px 10px;'>" +
                                "<div> Sales: <strong>"+ Math.round(y)*17  +"</strong></div>" +
                                "<div> Profit: <strong>$"+ Math.round(y)*280  +"</strong></div>" +
                                "</div>"                                        
                    );
                }
            }
        });

        $('#revenue-bar-chart').bind("mouseleave", function () {
            $("#tooltip").remove();
        });



/* PIE CHART */

        var pie_placeholder = $("#pie-chart");

        var pie_data = [];
        
        pie_data[0] = {
            label: "IE",
            data: 10
        }
        pie_data[1] = {
            label: "Safari",
            data: 8
        }    
        pie_data[2] = {
            label: "Opera",
            data: 8
        }                
        pie_data[3] = {
            label: "Chrome",
            data: 13
        }    
        pie_data[4] = {
            label: "Firefox",
            data: 17
        }    
        pie_data[5] = {
            label: "Other",
            data: 3
        }                    
        $.plot(pie_placeholder, pie_data, {
            series: {
                pie: { 
                    show: true,
                    label:{
                        show: true,
                        radius: .5,
                        formatter: labelFormatter,
                        background: {
                            opacity: 0
                        }
                    },

                }
            },
            grid: {
                hoverable: true,
                clickable: true
            },
            colors: ["#FCB660", "#ce91db", "#56A2CF", "#52D793", "#FC8660", "#CCCCCC"]
        });

        pie_placeholder.bind("plothover", function(event, pos, obj) {
            if (!obj) {
                return;
            }
            var percent = parseFloat(obj.series.percent).toFixed(2);
            $("#hover").html("<span style='font-weight:bold; color:" + obj.series.color + "'>" + obj.series.label + " (" + percent + "%)</span>");
        });

        pie_placeholder.bind("plotclick", function(event, pos, obj) {
            if (!obj) {
                return;
            }
            percent = parseFloat(obj.series.percent).toFixed(2);
            alert(""  + obj.series.label + ": " + percent + "%");
        });

    function labelFormatter(label, series) {
        return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
    }
        


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
      ]
$('#map1').vectorMap({
   map: 'world_mill_en',
    scaleColors: ['#C8EEFF', '#0071A4'],
    normalizeFunction: 'polynomial',
    focusOn:{
          x: 5,
          y: 0.56,
          scale: 1.7
    },
    zoomOnScroll:false,
    zoomMin:0.85,
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


/* REAL TIME CHART */
      
        var data = [],
            totalPoints = 300;

        function getRandomData() {

            if (data.length > 0)
                data = data.slice(1);

            // Do a random walk

            while (data.length < totalPoints) {

                var prev = data.length > 0 ? data[data.length - 1] : 50,
                    y = prev + Math.random() * 10 - 5;

                if (y < 0) {
                    y = 0;
                } else if (y > 100) {
                    y = 100;
                }

                data.push(y);
            }

            // Zip the generated y values with the x values

            var res = [];
            for (var i = 0; i < data.length; ++i) {
                res.push([i, data[i]])
            }

            return res;
        }

        // Set up the control widget

        var updateInterval = 30;
        $("#updateInterval").val(updateInterval).change(function () {
            var v = $(this).val();
            if (v && !isNaN(+v)) {
                updateInterval = +v;
                if (updateInterval < 1) {
                    updateInterval = 1;
                } else if (updateInterval > 2000) {
                    updateInterval = 2000;
                }
                $(this).val("" + updateInterval);
            }
        });

        var realtime_chart = $.plot("#realtime-chart", [ getRandomData() ], {
            series: {
                shadowSize: 0,    // Drawing is faster without shadows
                lines: {
                    fill: true,
                    fillColor: "#ffe29c",
                },
                color: "#ffe29c", 
            },
            yaxis: {
                min: 0,
                max: 100
            },
            xaxis: {
                show: false
            },
            grid: {
                borderWidth: 0
            },
            
        });

        function update() {
            realtime_chart .setData([getRandomData()]);

            // Since the axes don't change, we don't need to call plot.setupGrid()
            realtime_chart .draw();
            setTimeout(update, updateInterval);
        }

        update();


/* FULL CALENDAR  */
        
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        
        $('#calendar').fullCalendar({
            header: {
                left:   'title',
                center: '',
                right:  'today prev,next'
            },
            editable: true,
            events: [
                {
                    title: 'All Day Event',
                    start: new Date(y, m, 1)
                },
                {
                    title: 'Long Event',
                    start: new Date(y, m, d-5),
                    end: new Date(y, m, d-2)
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: new Date(y, m, d-3, 16, 0),
                    allDay: false
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: new Date(y, m, d+4, 16, 0),
                    allDay: false
                },
                {
                    title: 'Meeting',
                    start: new Date(y, m, d, 10, 30),
                    allDay: false
                },
                {
                    title: 'Lunch',
                    start: new Date(y, m, d, 12, 0),
                    end: new Date(y, m, d, 14, 0),
                    allDay: false
                },
                {
                    title: 'Birthday Party',
                    start: new Date(y, m, d+1, 19, 0),
                    end: new Date(y, m, d+1, 22, 30),
                    allDay: false
                },
                {
                    title: 'Click for Google',
                    start: new Date(y, m, 28),
                    end: new Date(y, m, 29),
                    url: 'http://google.com/'
                }
            ]
        });
        

// Skycons

      var icons = new Skycons({"color": "white","resizeClear": true}),
            icons_btm = new Skycons({"color": "#F89C2C","resizeClear": true}),
          list  = "clear-day",
          livd_btm = ["rain", "wind"
          ];
          icons.set(list,list)
      for(var i = livd_btm.length; i--; )
        icons_btm.set(livd_btm[i], livd_btm[i]);

      icons.play();
      icons_btm.play();

/* News Widget */
       $(".vd_news-widget .vd_carousel").carouFredSel({
            prev:{
                button : function()
                {
                    return $(this).parent().parent().children('.vd_carousel-control').children('a:first-child')
                }
            },
            next:{
                button : function()
                {
                    return $(this).parent().parent().children('.vd_carousel-control').children('a:last-child')
                }
            },        
            scroll: {
                fx: "crossfade",
                onBefore: function(){
                        var target = "#front-1-clients";
                        $(target).css("transition","all .5s ease-in-out 0s");                
                    if ($(target).hasClass("vd_bg-soft-yellow")){                        
                        $(target).removeClass("vd_bg-soft-yellow");
                        $(target).addClass("vd_bg-soft-red");        
                    } else
                    if ($(target).hasClass("vd_bg-soft-red")){                        
                        $(target).removeClass("vd_bg-soft-red");
                        $(target).addClass("vd_bg-soft-blue");        
                    } else
                    if ($(target).hasClass("vd_bg-soft-blue")){                        
                        $(target).removeClass("vd_bg-soft-blue");
                        $(target).addClass("vd_bg-soft-green");        
                    } else
                    if ($(target).hasClass("vd_bg-soft-green")){                        
                        $(target).removeClass("vd_bg-soft-green");
                        $(target).addClass("vd_bg-soft-yellow");        
                    }                     
                }
            },
            width: "auto",
            height: "responsive",
            responsive: true,
            auto:3000
            
        });



    // Notification
      setTimeout(function() { notification("topright","notify","fa fa-exclamation-triangle vd_yellow","Welcome to Vendroid","Click on <i class='fa fa-question-circle vd_red'></i> Question Mark beside filter to take a view layout tour guide"); },1500)     ; 
      
      

});
</script>
<!-- Specific Page Scripts END -->




<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->

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