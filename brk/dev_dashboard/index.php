<?php
include "../config/connect.php";
session_start();
if ($_SESSION['userid']=="" && $_SESSION['loggedIn']=="") { 
    header("location:../index.php");
}
$SqlUser    = "SELECT * FROM pro_dev_registration WHERE D_id = '" . $_SESSION['userid'] . "'";
$ResSqlUser = mysql_query($SqlUser);
$FetchRows  = mysql_fetch_array($ResSqlUser);
//For Cover Image
// echo $_SESSION['userid'];
// echo $_SESSION['loggedIn']; exit();
?>
<!DOCTYPE html>
<!--[if IE 8]>            <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>            <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->    <html><!--<![endif]-->

<!-- Specific Page Data -->

<!-- End of Data -->

<head>
    <meta charset="utf-8" />
    <title><?php echo $FetchRows['Dev_Name'];?></title>
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
              <h1>WELCOME TO <?php echo $FetchRows['Dev_Name'];?></h1> 
            </div>
            <!-- vd_panel-header --> 
          </div>
          <!-- vd_title-section -->
          <div class="vd_content-section clearfix">
             <div class="row">
              <div class="col-xs-12">
                <div class="panel widget light-widget">
                  <div class="panel-heading no-title"> </div>
                  <div class="panel-body">
                    <h2 class="mgtp--5"> <span class="font-semibold">Project</span> Status </h2>
                    <p>This is the chart for your project status, please hover on the bars and you can see the statistics.</p>
                  </div>
                </div>
                <!-- Panel Widget --> 
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 mgbt-xs-20 mgbt-md-0">
                <div class="panel widget  light-widget">
                  <div class="panel-heading no-title">
                    <div class="vd_panel-menu">
                        <div data-action="refresh" class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Refresh"> <i class="icon-cycle"></i> </div>
                        <div class="menu entypo-icon" data-placement="bottom" data-toggle="tooltip" data-original-title="Close" data-action="close"> <i class="icon-cross"></i> </div>
                        </div>
<!-- vd_panel-menu --> 
                  </div>  
                  <div class="panel-body-list pd-25">
                    <h2 class="mgtp--5"> <span class="font-semibold">Status</span></h2>
                    <div id="bar-placeholder" class="bar-chart" style="height:318px;"></div>
                  </div>
                </div>
                <!-- col-md-6 --> 
              </div>
              <!-- row -->
<!-- vd_panel-menu --> 
                  </div>
                </div>
              </div>
              <!-- col-md-6 --> 
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
    $num = mysql_num_rows(mysql_query("SELECT * FROM pro_project WHERE D_id='".$_SESSION['userid']."' AND assign_date BETWEEN '$sdate' AND '$ndate' AND ProStatus!='live'"));
    $numlive = mysql_num_rows(mysql_query("SELECT * FROM pro_project WHERE D_id='".$_SESSION['userid']."' AND assign_date BETWEEN '$sdate' AND '$ndate' AND ProStatus='live'"));
    
    if($i < 12){
    ?>
        { y: '<?=date('M',strtotime($sdate))?>', O: <?=$num?>, L: <?=$numlive?> },
    <?php }else{?>
        { y: '<?=date('M',strtotime($sdate))?>', O: <?=$num?>, L: <?=$numlive?> }      
    <?php  }}?>
	  ],
	  xkey: 'y',
	  ykeys: ['O', 'L'],
	  labels: ['Ongoing', 'Live'],
	  barColors: ["#23709E","#39515f"]
	});
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