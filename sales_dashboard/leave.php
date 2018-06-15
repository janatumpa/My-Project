<?php
include"../config/connect.php";
session_start();
if ($_SESSION['userid']=="" && $_SESSION['loggedIn']=="") { 
    header("location:../index.php");
}
$SqlUser    = "SELECT * FROM pro_sale_registration WHERE S_id = '" . $_SESSION['userid'] . "'";
$ResSqlUser = mysql_query($SqlUser);
$FetchRows  = mysql_fetch_array($ResSqlUser);

$_SESSION['Sale_Name'];
if(isset($_POST['submit']))
{

    $FROM=$_POST['from'];
    $TO=$_POST['to'];
    $PURPOSE=$_POST['purpose'];
    $sql="INSERT INTO pro_sale_leaveapp SET 
        name='".$_POST['name']."',
        userid='".$_POST['userid']."',
        from_date='".$FROM."',
        to_date='".$TO."',
        purpose='".$PURPOSE."'
        ";
    // mysql_query($sql) or die(mysql_error());
    $abc=mysql_query($sql);

    if($abc)
    {
        echo"sent";
        header("location:leave_list.php");
    }
    else{
        echo "error";
    }
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
    <title><?php echo $FetchRows['Sale_Name'];?></title>
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

	  
 
 
    <!-- for specific page in style css -->
        
    <!-- for specific page responsive in style css -->
        
    
    <!-- Custom CSS -->
    <link href="custom/custom.css" rel="stylesheet" type="text/css">



    <!-- Head SCRIPTS -->
    <script type="text/javascript" src="js/modernizr.js"></script> 
    <script type="text/javascript" src="js/mobile-detect.min.js"></script> 
    <script type="text/javascript" src="js/mobile-detect-modernizr.js"></script> 
 
    

</head>    

<body id="pages" class="full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed responsive clearfix" data-active="pages" data-smooth-scrolling="1">     
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
	
</div>  
    <!-- Middle Content Start -->
   
    <!-- Middle Content Start -->
      
    <div class="vd_content-wrapper">
      <div class="vd_container">
        <div class="vd_content clearfix">
          <div class="vd_head-section clearfix">
            <div class="vd_panel-header">
              <ul class="breadcrumb">
                <li><a href="index.php">Home</a> </li>
                <li><a href="client_list.php">Leave List</a> </li>
                <li>Apply</li>
              </ul>
              <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step=5  data-position="left">
    <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
      <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
      <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>
      
</div>
 
            </div>
          </div>
          <div class="vd_title-section clearfix">
            <div class="vd_panel-header">
              <h1>Add Leave</h1>
              
              <div class="vd_panel-menu"> 
               <!-- <div class="menu" data-action="click-trigger"> Go To <i class="fa fa-arrow-circle-o-right fa-fw"></i> </div>-->
                <div class="vd_mega-menu-content width-xs-3 left-xs" data-action="click-target">
                  <div class="child-menu">
                    <div class="content-list content-menu">
                      <ul id="goto-menu" class="list-wrapper pd-lr-10">
                        <li> <a href="#form-basic"> <span class="menu-icon"><i class=" fa fa-th-list"></i></span> <span class="menu-text">Form Basic</span> </a> </li>
                        <li> <a href="#advanced-input"> <span class="menu-icon"><i class=" fa  fa-files-o"></i></span> <span class="menu-text">Advanced Input</span> </a> </li>
                        <li> <a href="#auto-complete-input"> <span class="menu-icon"><i class=" fa  fa-list-alt"></i></span> <span class="menu-text">Auto Complete Input</span> </a> </li>
                        <li> <a href="#switch-input"> <span class="menu-icon"><i class=" fa  fa-adjust"></i></span> <span class="menu-text">Switch Input</span> </a> </li>
                        <li> <a href="#date-input"> <span class="menu-icon"><i class=" fa  fa-calendar"></i></span> <span class="menu-text">Date Input</span> </a> </li>
                        <li> <a href="#bootstrap-date"> <span class="menu-icon"><i class=" fa  fa-calendar-o"></i></span> <span class="menu-text">Bootstrap DateRange Picker</span> </a> </li>
                        <li> <a href="#bootstrap-time"> <span class="menu-icon"><i class=" fa  fa-clock-o"></i></span> <span class="menu-text">Bootstrap Time Picker</span> </a> </li>
                        <li> <a href="#color-pickers"> <span class="menu-icon"><i class=" fa  fa-flask"></i></span> <span class="menu-text">Color Picker</span> </a> </li>
                        <li> <a href="#ck-editor"> <span class="menu-icon"><i class="fa  fa fa-pencil"></i></span> <span class="menu-text">CK Editor</span> </a> </li>
                        <li> <a href="#html5-editor"> <span class="menu-icon"><i class="fa  fa-bolt"></i></span> <span class="menu-text">Wysiwyg HTML 5</span> </a> </li>
                        <li> <a href="#file-upload"> <span class="menu-icon"><i class=" fa  fa-cloud-upload"></i></span> <span class="menu-text">File Upload</span> </a> </li>
                      </ul>
                    </div>
                    <!-- content-list --> 
                  </div>
                  <!-- child-menu --> 
                </div>
                <!-- vd_mega-menu --> 
              </div>
            </div>
          </div>
          <!-- vd_title-section -->
          
          <div class="vd_content-section clearfix">
            <div class="row" id="form-basic">
              <div class="col-md-12">
                <div class="panel widget">
                  <div class="panel-heading vd_bg-grey">
                    <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-bar-chart-o"></i> </span>Employee </h3>
                  </div>
                  <div class="panel-body">
                    <form method="post" class="form-horizontal" action="" role="form">
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Name</label>
                        <div class="col-sm-7 controls">
                          <input type="text" name="name" readonly value="<?php echo $FetchRows['Sale_Name']; ?>" />
                          </div>
                      </div>
                      <div class="form-group">
                        
                          <input type="hidden" name="userid" readonly value="<?php echo $FetchRows['S_id']; ?>" />
                          
                      </div>
                   
                      <div class="form-group">
                        <label class="col-sm-4 control-label">From</label>
                        <div class="col-sm-7 controls">
                          <input type="text" name="from" id="datepicker" value="<?php echo date('Y-m-d'); ?>" />
                          </div>
                      </div>
                       <div class="form-group">
                        <label class="col-sm-4 control-label">To</label>
                        <div class="col-sm-7 controls">
                          <input type="text" name="to" id="datepicker1" >
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Purpose</label>
                        <div class="col-sm-7 controls">
                          <input type="text" name="purpose"  placeholder="Enter purpose">
                          </div>
                      </div>
                      <div class="form-group form-actions">
                        <div class="col-sm-4"> </div>
                        <div class="col-sm-7">
                          <button class="btn vd_btn vd_bg-green vd_white" type="submit" name="submit"  value="APPLY"><i class="icon-ok"></i>Apply</button>
                          
                          <a class="btn vd_btn" href="leave_list.php">Cancel</a>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- Panel Widget --> 
               
                <!-- Panel Widget --> 
              </div>
              <!-- col-md-12 --> 
            </div>
            <!-- row -->
            
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
  <?php
include "lib/footer.php";
 ?>
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

<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  <script>
  $( function() {
    $( "#datepicker1" ).datepicker();
  } );
  </script>

 
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


</body>


</html>












































