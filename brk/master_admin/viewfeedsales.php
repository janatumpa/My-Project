<?php
include "../config/connect.php";
if($_SESSION['admin_id'] == "" && $_SESSION['admin_username'] == ""){
    header("location:index.php");
}

?>
<html>

<head>
    <meta charset="utf-8" />
    <title>View Feedback</title>
    <meta name="keywords" content="HTML5 Template, CSS3, Mega Menu, Admin Template, Elegant HTML Theme, Vendroid" />
    <meta name="description" content="Form Wizards - Responsive Admin HTML Template">
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

<body id="forms" class="full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed      responsive    clearfix" data-active="forms "  data-smooth-scrolling="1">     
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
      
    <div class="vd_content-wrapper">
      <div class="vd_container">
        <div class="vd_content clearfix">
          <div class="vd_head-section clearfix">
            <div class="vd_panel-header">
              <ul class="breadcrumb">
                <li><a href="index.php">Home</a> </li>
                <li><a href="dev_feedback.php">Developer Feedback List</a> </li>
                <li>View Feedback</li>
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
              <h1>Feedback Details</h1>
              
              <div class="vd_panel-menu"> 
               <!-- <div class="menu" data-action="click-trigger"> Go To <i class="fa fa-arrow-circle-o-right fa-fw"></i> </div>-->
                <div class="vd_mega-menu-content width-xs-3 left-xs" data-action="click-target">
                  <div class="child-menu">
                    <div class="content-list content-menu">
                      <ul id="goto-menu" class="list-wrapper pd-lr-10">
                        <li> <a href="#form-basic"> <span class="menu-icon"><i class=" fa fa-th-list"></i></span> <span class="menu-text">Project Details</span> </a> </li>
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
                    <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-bar-chart-o"></i> </span> Feedback Details </h3>
                  </div>
                  <div class="panel-body">
                    <form method="post" class="form-horizontal" action="view_feedback.php" role="form">
                   

 <div class="tab-content">
    
    
    <div id="projects-tab"  class="tab-pane active">
    	<div class="pd-20">
				<!--<div class="vd_info tr"> <a href="add_client.php" class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-plus append-icon"></i> Add Client </a> </div>         
				<h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-bolt mgr-10 profile-icon"></i> CLIENT</h3>  -->      
			
            
            <table class="table table-striped table-hover" id="data-tables">
                      <thead>
                          <tr>
                                <th>Sno</th>              	  
                              <th>Name</th>                                  
                              <!--<th>Company Name</th>-->
                                                              
                             <th>TeamPlayer</th> 
                             <th>Ownership</th>  
                             <th>Q_learner</th>  
                             <th>Action</th>                                           
                          </tr>
                      </thead>   
                      <tbody>
                      <?php
                 $c = 1;
                if(isset($_GET['DF_ID']) && $_GET['DF_ID'] != "")
                {
                    $Client_id = mysql_real_escape_string($_GET['DF_ID']);
                  //$Client_id = intval($Client_id);
                    $c_record = mysql_query("select * from pro_sales_feedback where user_id='$Client_id'");
                    
                
                while($FetchRows = mysql_fetch_array($c_record))
                 {
//$salename = mysql_fetch_array(mysql_query("SELECT * FROM pro_dev_feedback WHERE user_id = '".$FetchRows['D_id']."'"));
               ?>
								<tr>
                  <td><?php echo $c ?></td>              	
									<td><?php echo $FetchRows['Name']; ?></td>   
                                    <td><?php echo $FetchRows['Team_Player']; ?></td> 
                                    <td><?php echo $FetchRows['Ownership']; ?></td> 
                                    <td><?php echo $FetchRows['Quick_Learner']; ?></td> 
                                                     
                  <td class="menu-action rounded-btn" width="13%">
                                    	<a href="detailsalefeed.php?C_ID=<?php echo $FetchRows['id']; ?>" class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                           <i class="fa fa-eye"></i>
                                        </a>                                      
                                    	
                                        
									 </td>

								

								</tr>
                <?php
                 $c++;
                  }
                  }
                 ?>                 
								
                                                                                          
                                                                   
							  </tbody>
						 </table>
                         
                         </div>        
                        </div>
                      </div>
                   </form>
                  </div>
                </div>
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

<script type="text/javascript" src='plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js'></script>


<script type="text/javascript">
$(document).ready(function() {
	"use strict";
	
	$('#wizard-1').bootstrapWizard({
		'tabClass': 'nav nav-pills nav-justified',
		'nextSelector': '.wizard .next',
		'previousSelector': '.wizard .prev',
		'onTabShow' : function(){
			$('#wizard-1 .finish').hide();
			$('#wizard-1 .next').show();
			if ($('#wizard-1 .nav li:last-child').hasClass('active')){
				$('#wizard-1 .next').hide();
				$('#wizard-1 .finish').show();
			}
		},
		'onNext': function(){
			scrollTo('#wizard-1',-100);
		},
		'onPrevious': function(){
			scrollTo('#wizard-1',-100);
		}	
	});
	$('#wizard-2').bootstrapWizard({
		'tabClass': 'nav nav-pills nav-justified',
		'nextSelector': '.wizard .next',
		'previousSelector': '.wizard .prev',
		'onTabShow' :  function(tab, navigation, index){
			$('#wizard-2 .finish').hide();
			$('#wizard-2 .next').show();
			if ($('#wizard-2 .nav li:last-child').hasClass('active')){
				$('#wizard-2 .next').hide();
				$('#wizard-2 .finish').show();
			}
			var $total = navigation.find('li').length;
			var $current = index+1;
			var $percent = ($current/$total) * 100;
			$('#wizard-2').find('.progress-bar').css({width:$percent+'%'});			
		},
		'onTabClick': function(tab, navigation, index) {
			return false;		
		},
		'onNext': function(){
			scrollTo('#wizard-2',-100);
		},
		'onPrevious': function(){
			scrollTo('#wizard-2',-100);
		}		
	});	
	$('#wizard-3').bootstrapWizard({
		'tabClass': 'nav nav-pills nav-justified',
		'nextSelector': '.wizard .next',
		'previousSelector': '.wizard .prev',
		'onTabShow' : function(){
			$('#wizard-3 .finish').hide();
			$('#wizard-3 .next').show();
			if ($('#wizard-3 .nav li:last-child').hasClass('active')){
				$('#wizard-3 .next').hide();
				$('#wizard-3 .finish').show();
			}
		},
		'onNext': function(){
			scrollTo('#wizard-3',-100);
		},
		'onPrevious': function(){
			scrollTo('#wizard-3',-100);
		}		
	});	
	$('#wizard-4').bootstrapWizard({
		'tabClass': 'nav nav-tabs nav-stacked',
		'nextSelector': '.wizard .next',
		'previousSelector': '.wizard .prev',
		'onTabShow' : function(){
			$('#wizard-4 .finish').hide();
			$('#wizard-4 .next').show();
			if ($('#wizard-4 .nav li:last-child').hasClass('active')){
				$('#wizard-4 .next').hide();
				$('#wizard-4 .finish').show();
			}
		},
		'onNext': function(){
			scrollTo('#wizard-4',-100);
		},
		'onPrevious': function(){
			scrollTo('#wizard-4',-100);
		}		
	});		
	$('#wizard-5').bootstrapWizard({
		'tabClass': 'nav nav-tabs nav-stacked',
		'nextSelector': '.wizard .next',
		'previousSelector': '.wizard .prev',
		'onTabShow' : function(){
			$('#wizard-5 .finish').hide();
			$('#wizard-5 .next').show();
			if ($('#wizard-5 .nav li:last-child').hasClass('active')){
				$('#wizard-5 .next').hide();
				$('#wizard-5 .finish').show();
			}
		},
		'onNext': function(){
			scrollTo('#wizard-5',-100);
		},
		'onPrevious': function(){
			scrollTo('#wizard-5',-100);
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