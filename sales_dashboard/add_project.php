<?php
include "../config/connect.php";
if($_SESSION['userid'] == "" && $_SESSION['loggedIn'] == ""){
    header("location:../s_login.php");
}
    
    $SqlUser = "SELECT * FROM pro_sale_registration WHERE S_id = '".$_SESSION['userid']."'";
    $ResSqlUser = mysql_query($SqlUser);
    $FetchRows = mysql_fetch_array($ResSqlUser); 
    $abc=$FetchRows['S_id'];

    if(isset($_FILES['files'])){
        $usercreationdate = date('Y-m-d');
        $p_domain = $_POST['p_domain'];
        $p_name = $_POST['p_name'];
        $c_name =$_POST['c_name'];
        $d_designation =$_POST['d_designation'];
        $p_type =$_POST['p_type'];
        $p_category = $_POST['p_category'];
        $p_file =$_POST['p_file'];

        $errors= array();
        $images = "";
	      //print_r($_FILES['files']['tmp_name']);exit();
        foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
        $file_name = $key.$_FILES['files']['name'][$key];
        $file_size =$_FILES['files']['size'][$key];
        $file_tmp =$_FILES['files']['tmp_name'][$key];
        $file_type=$_FILES['files']['type'][$key];  
        if($file_size > 2097152){
        $errors[]='File size must be less than 2 MB';
        }   
        $desired_dir="../Documents";
        $file_name = time().$file_name;
        move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
        $images .= $file_name.',';
       }
       $imagess = rtrim($images,",");
       $InsertRegSql="INSERT INTO pro_project SET 
                      Domain = '".$p_domain."' ,
                      S_id ='". $abc."',
                      C_Name ='". $c_name."',               
                      Name = '".$p_name."' ,
                      designation='".$d_designation."',
                      Type = '".$p_type."' ,
                      Category = '".$p_category."' , 
                      File_Upload ='".$imagess."',
                      RegistDate = NOW(),
                      ProStatus = 'working'
					            ";
       mysql_query($InsertRegSql) or die(mysql_error());

      if(empty($error)){
        $msg = "Data inserted Successfully";
        header("location:project_list.php");
      }
      }else{
        if(isset($_REQUEST['submit'])){
	      $usercreationdate = date('Y-m-d');
        $p_domain = $_POST['p_domain'];
        $p_name = $_POST['p_name'];
        $c_name =$_POST['c_name'];
        $c_desination =$_POST['c_desgination'];
        $p_type =$_POST['p_type'];
        $p_category = $_POST['p_category'];
        
    
     $InsertRegSql="INSERT INTO pro_project SET 
					  Domain = '".$p_domain."',
					  S_id ='". $abc."',  
            C_Name ='". $c_name."',             
					  Name = '".$p_name."',
           designation='".$d_designation."',
					  Type = '".$p_type."',
					  Category = '".$p_category."', 
					  RegistDate = NOW(),
					  ProStatus = 'working'
				    ";
                                       
      mysql_query($InsertRegSql) or die(mysql_error());
      $msg = "Data inserted Successfully";
      header("location:project_list.php");
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
    <title>Add Project</title>
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
                <li><a href="pro_list.php">Project List</a></li>
                <li>Add Project</li>
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
              <h1>Add Project</h1>
              
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
                    <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-bar-chart-o"></i> </span>Project </h3>
                  </div>
                  <div class="panel-body">
                    <form method="post" class="form-horizontal" action="<?=$_SERVER['PHP_SELF']?>" role="form" enctype="multipart/form-data">
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Project Domain Name</label>
                        <div class="col-sm-7 controls">
                          <input type="text" name="p_domain" id="p_domain" placeholder="Enter Project Domain Name">
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Project Name</label>
                        <div class="col-sm-7 controls">
                          <input type="text" name="p_name" id="p_name" required placeholder="Enter Project Name">
                          </div>
                      </div>
                         <div class="form-group">
                            <label class="col-sm-4 control-label">Verticals</label>
                            <div class="col-sm-7 controls">
                             
                                  <select  id="d_designation" name="d_designation" required>
                                  <option value="">Register As(choose your role)</option>
                                  <option value="Php" <?php if($rows['designation']=="Php") {?> selected="selected" <?php }?>>Php</option>
                                  <option value="Web Designer" <?php if($rows['designation']=="Web Designer") {?> selected="selected" <?php }?>>Web Designer</option>
                                  <option value="User Interface/User Experience" class="selectoptn" <?php if($rows['designation']=="User Interface/User Experience") {?> selected="selected" <?php }?>>User Interface/User Experience</option>
                                  <option value="Angular Js" <?php if($rows['designation']=="Angular Js") {?> selected="selected" <?php }?>>Angular Js</option>
                                  <option value="IOT" <?php if($rows['designation']=="IOT") {?> selected="selected" <?php }?>>IOT</option>
                                  </select>
                                </div>
                                <!-- col-xs-9 -->
                               
                              </div>
                              <!-- row --> 
              
                          <!-- form-group -->
                          

     


                      <div class="form-group">
                        <label class="col-sm-4 control-label">Client Name</label>
                        <div class="col-sm-7 controls">
                        
                        <select id="c_name" name="c_name" onchange="this.form.submit()" required>
                         <option value="">--Select Client--</option>
                         <?php
                        $SqlUser = "SELECT * FROM pro_customer WHERE S_id = '".$_SESSION['userid']."'";
                        $ResSqlUser = mysql_query($SqlUser);
                        while($FetchRows = mysql_fetch_array($ResSqlUser))
                        {
                        ?>
                        <option value="<?php echo $FetchRows['Name']; ?>"><?php echo $FetchRows['Name']; ?></option>
                         <?php
                        }
                        ?>
                         </select>
                         
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Project Type</label>
                        <div class="col-sm-7 controls">
                          <select name="p_type" id="p_type" required>
                            <option value="">-- Choose Your Project Type --</option>
                    <?php 
                              $sql = mysql_query("SELECT * FROM pro_type");
                              while($fet=mysql_fetch_array($sql)){?>
                              <option value="<?=$fet['type']?>"><?=$fet['type']?></option>
                              
                              <?php }?>
                            
                            
                          </select>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="col-sm-4 control-label">Project Category</label>
                        <div class="col-sm-7 controls">
                          <select name="p_category" id="p_category" required>
                            <option value="">-- Choose Your Project Category --</option>
                           <?php 
                              $sql1 = mysql_query("SELECT * FROM pro_category");
                              while($fet=mysql_fetch_array($sql1)){?>
                              <option value="<?=$fet['category']?>"><?=$fet['category']?></option>
                              
                              <?php }?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4 control-label">File Upload</label>
                        <div class="col-sm-7 controls">
                          <input type="file" name="files[]" multiple="" id="p_file">
                        </div>
                      </div>
                      <div class="form-group form-actions">
                        <div class="col-sm-4"> </div>
                        <div class="col-sm-7">
                          <button class="btn vd_btn vd_bg-green vd_white" type="submit" name="submit"  value="SUBMIT"><i class="icon-ok"></i> Save</button>
                          
                           <a class="btn vd_btn" href="project_list.php">Cancel</a>
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
  <footer class="footer-1"  id="footer">      
    <div class="vd_bottom ">
        <div class="container">
            <div class="row">
              <div class=" col-xs-12">
                <div class="copyright">
                  	Copyright ©2017 MeMe Infotech. All Rights Reserved
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