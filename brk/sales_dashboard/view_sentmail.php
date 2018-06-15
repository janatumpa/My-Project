<?php
include "../config/connect.php";
if($_SESSION['userid'] == "" && $_SESSION['loggedIn'] == ""){
    header("location:../s_login.php");
}
session_start();
	if(isset($_GET['M_ID']) && $_GET['M_ID'] != "")
    {
		$Mail_id = mysql_real_escape_string($_GET['M_ID']);
		$Mail_id = intval($Mail_id);
		$m_record = mysql_query("select * from pro_sent where M_Id='$Mail_id'");
    $rows = mysql_fetch_array($m_record);
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
    <title>View Email</title>
    <meta name="keywords" content="HTML5 Template, CSS3, All Purpose Admin Template, Vendroid" />
    <meta name="description" content="Responsive Admin Template for blogging dashboard">
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
	<link href="plugins/bootstrap-wysiwyg/css/bootstrap-wysihtml5-0.0.2.css" rel="stylesheet" type="text/css">    
     
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

<body id="email" class="full-layout    nav-top-fixed   nav-right-small   responsive    clearfix" data-active="email "  data-smooth-scrolling="1">     
<div class="vd_body">
<!-- Header Start -->
   <?php
include "lib/header.php";
 ?>

  <!-- Header Ends --> 
  <!--Side bar Menu-->
    <?php
include "lib/mailsidebar.php";
 ?>
    <!--End Sider bar navigator--> 
 
   
    <!-- Middle Content Start -->
    
    <div class="vd_content-wrapper">
      <div class="vd_container">
        <div class="vd_content clearfix">
          <div class="vd_head-section clearfix">
            <div class="vd_panel-header">
              <ul class="breadcrumb">
               <li><a href="inbox.php">Inbox</a></li>
                <li><a href="sentmail.php">Sent Mail</a></li>
                <li class="active">View Email</li>
              </ul>
              <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step=5  data-position="left">
    <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
      <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
      <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>
      
</div>
            </div>
            <!-- vd_panel-header --> 
          </div>
          <!-- vd_panel-head-section -->
          
          <div class="vd_title-section clearfix">
            <div class="vd_panel-header">
              <h1>View Email</h1>
             
              <div class="vd_panel-menu  hidden-xs">  
  
</div>
<!-- vd_panel-menu -->         
   </div>
          </div>
          <!-- vd_title-section -->
          
          <div class="vd_content-section clearfix">
            <div class="row">
            <div class="col-md-2"></div>
              <div class="col-md-8">
                <div class="panel widget light-widget">
                  <div class="panel-heading no-title"> </div>
                  <!-- vd_panel-heading -->
                  
                  <div class="panel-body">
                    <h2 class="mgtp--10"><i class="icon-feather mgr-10 vd_green"></i>View Email </h2>
                    <br/>
                    <form class="form-horizontal" role="form" action="" method="post">
                   
                      <div class="form-group clearfix">
                        <label class="col-sm-2 control-label">To</label>
                        <div class="col-sm-10 controls">
                          <?php echo $rows['Email_Id']; ?>
                        </div>
                      </div>
                      
                      <div class="form-group  clearfix">
                        <label class="col-sm-2 control-label">Subject</label>
                        <div class="col-sm-10 controls">
                         <?php echo $rows['Subject']; ?>
                        </div>
                      </div>
                      <br/>
                      
                      <div class="form-group  clearfix">
                        <label class="col-sm-2 control-label ">Message</label>
                        <div class="col-sm-10 controls">
                          <?php echo $rows['Message']; ?><br/>
                          <?php echo date('d M Y',strtotime($rows['Date'])); ?>  
                        </div>
                      </div>
                     
                    </form>
                  </div>
                  <!-- panel-body  --> 
                  
                </div>
                <!-- panel --> 
              </div>
              <!-- col-md-8 -->
             <div class="col-md-2"></div>
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
<script type="text/javascript" src="plugins/bootstrap-wysiwyg/js/wysihtml5-0.3.0.min.js"></script>
<script type="text/javascript" src="plugins/bootstrap-wysiwyg/js/bootstrap-wysihtml5-0.0.2.js"></script>
<script type="text/javascript" language="javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>


<script type="text/javascript">

$(function () {
	"use strict";
	
	$('#message').wysihtml5();
	


	  // init Isotope
	  var $container = $('.isotope').isotope({
		itemSelector: '.isotope .email-item',
		layoutMode: 'vertical'
	  });

		
	// User types in search box - call our search function and supply lower-case keyword as argument
	$('#filter-text').bind('keyup', function() {

		var filterValue = this.value.toLowerCase();
		isotopeFilter();

	});
	
	var filterFns = function() {		 
	  var kwd = $('#filter-text').val().toLowerCase();
	  var re = new RegExp(kwd, "gi");
      var name = $(this).find('.filter-name').text();
      return name.match( re );		  
	}
	
	function isotopeFilter(){

		  $container.isotope({ filter: filterFns });	
	}
	
	
	$('#check-all').click(function() {
        $('.email-item input').prop('checked', true);
	});
	$('#uncheck-all').click(function() {
        $('.email-item input').prop('checked', false);
	});	


		
	$('#insert-email-btn').click(function(e) {
          e.preventDefault();
		  var emails='';
		  emails=$('.email-item input:checked').map(function(n){  //map all the checked value to tempValue with `,` seperated
            	return  this.value;
   		  }).get().join(' , ');
		  var comma = $('#email-input').val() ? ' , ' : '';		
		  if (emails)  {
		  	$('#email-input').val($('#email-input').val() + comma + emails);
		  }
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