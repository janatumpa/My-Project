<?php
include "../config/connect.php";
if($_SESSION['admin_id'] == "" && $_SESSION['admin_username'] == ""){
    header("location:index.php");
}

	if(isset($_GET['S_ID']) && $_GET['S_ID'] != "")
    {
		$sale_id = mysql_real_escape_string($_GET['S_ID']);
		$sale_id = intval($sale_id);
		$s_record = mysql_query("select * from pro_sale_registration where S_id='$sale_id'");
        $rows = mysql_fetch_array($s_record);

    if($rows['S_image'] == "")
    {
   $pic1 = "../sales_dashboard/profileimage/nopic.png";
    }
    else if(!is_file("../sales_dashboard/profileimage/".$rows['S_image']))
    {
   $pic1 = "../sales_dashboard/profileimage/nopic.png";
    }
    else
    {
  $pic1 = "../sales_dashboard/profileimage/".$rows['S_image'];
    }
	}
?>

<head>
    <meta charset="utf-8" />
    <title>View Sale </title>
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
                <li><a href="sale_list.php">Sale Member List</a></li>
                <li>View Sale</li>
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
              <h1>Sale Details</h1>
            </div>
          </div>
          <div class="vd_content-section clearfix">
            <div class="row">
              <div class="col-sm-12">
                <div class="panel widget light-widget">
                  <div class="panel-heading no-title"> </div>
                  <form method="post" name="proedit" class="form-horizontal" action="Code/sale_code_edit.php" role="form" onSubmit="return profilepwdvalid()">
                    <div  class="panel-body">
                      <h2 class="mgbt-xs-20"> Profile: <span class="font-semibold"><?php echo $rows['Sale_Name'];?></span> </h2>
                      <br/>
                      <div class="row">
                        <div class="col-sm-3 mgbt-xs-20">
                          <div class="form-group">
                            <div class="col-xs-12">
                              <div class="form-img text-center mgbt-xs-15"> <img src="<?=$pic1?>" > </div>
                              <!--<div class="form-img-action text-center mgbt-xs-20"> <a class="btn vd_btn  vd_bg-blue" href="img_upload.php"><i class="fa fa-cloud-upload append-icon"></i> Upload</a> </div>-->
                              <br/>
                              <div>
                                <table class="table table-striped table-hover">
                                  <tbody>
                                    <tr>
                                      <td style="width:60%;">Status</td>
                                      <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    
                                    <tr>
                                      <td>Member Since</td>
                                      <td><?php echo $rows['RegistDate'];?></td>
                                    </tr>
                                    
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-9">
                          <h3 class="mgbt-xs-15">Account Setting</h3>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" value="<?php echo $rows['EmailId']?>" disabled>
                                </div>
                                <!-- col-xs-12 -->
                               
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          <input type="hidden" name="sid" id="sid" value="<?php echo $rows['S_id']; ?>" />
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Username</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                          <input type="text" name="s_username" id="s_username" value="<?php echo $rows['S_Username']?>" placeholder="User Name"/>
                                </div>
                                <!-- col-xs-9 -->
                                
                              </div>
                              <!-- row --> 
                          </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                           <div class="form-group">
                            <label class="col-sm-3 control-label">Employee Id</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                 <input type="text" name="eid" id="eid" value="<?php echo $rows['Sale_id']; ?>" placeholder="Name"/>
                                </div>
                                <!-- col-xs-9 -->
                               
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          <hr />
                          <h3 class="mgbt-xs-15">Profile Setting</h3>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                 <input type="text" name="s_name" id="s_name" value="<?php echo $rows['Sale_Name'];?>" placeholder="Name"/>
                                </div>
                                <!-- col-xs-9 -->
                               
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                              
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                           <input type="text" name="s_add" id="s_add" value="<?php echo $rows['S_address'];?>" placeholder="Address"/>
                                </div>
                                <!-- col-xs-9 -->
                               
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                           <div class="form-group">
                            <label class="col-sm-3 control-label">State</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                           <input type="text" name="s_state" id="s_state" value="<?php echo $rows['S_State'];?>" placeholder="State"/>
                                </div>
                                <!-- col-xs-9 -->
                               
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                           <div class="form-group">
                            <label class="col-sm-3 control-label">Zip Code</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" name="s_zip" id="s_zip" value="<?php echo $rows['S_Zip'];?>" placeholder="Zip"/>
                                </div>
                                <!-- col-xs-9 -->
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                         
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Gender</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <span class="vd_radio radio-info">
                                    <input type="radio" value="male" id="optionsRadios3" name="s_gen"  <?php if($rows['S_Gen']=="male") {?> checked="checked" <?php }?>>
                                    <label for="optionsRadios3"> Male </label>
                                  </span>
                                  <span class="vd_radio  radio-danger" > 
                                    <input type="radio" value="female" id="optionsRadios4" name="s_gen" <?php if($rows['S_Gen']=="female") {?> checked="checked" <?php }?>>
                                    <label for="optionsRadios4"> Female </label>
                                  </span> 
                                </div>
                                <!-- col-xs-9 -->
                               </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                           
                         <div class="form-group">
                            <label class="col-sm-3 control-label">Marital Status</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <select class="width-40" id="s_marital" name="s_marital" required>
                                  <option><?php if($rows['S_Marital']!=''){ echo stripslashes($rows['S_Marital']); }?></option>
                                  <option>--Select--</option>
                                    <option value="Single" <?php if($rows['S_Marital']=="Single") {?> selected="selected" <?php }?>>Single</option>
                                    <option value="Married" <?php if($rows['S_Marital']=="Married") {?> selected="selected" <?php }?>>Married</option>
                                  </select>
                                </div>
                                <!-- col-xs-9 -->
                               
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Role</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                             <select class="width-40" id="s_role" name="s_role" required>
                                  <option><?php if($rows['Role']!=''){ echo stripslashes($rows['Role']); }?></option>
                                  <option>--Select--</option>
                                    <option value="Manager" <?php if($rows['Role']=="Manager") {?> selected="selected" <?php }?>>Manager</option>
                                    <option value="Employee" <?php if($rows['Role']=="Employee") {?> selected="selected" <?php }?>>Employee</option>
                                  </select>
                             
                      
                                
                                 <!--<input type="text" name="s_role" id="s_role" value="<?php echo $rows['Role'];?>" placeholder="Role">-->
                                </div>
                                <!-- col-xs-12 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          
                          
                          <hr/>
                          <h3 class="mgbt-xs-15">Contact Setting</h3>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Mobile Phone</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                         <input type="text"  name="s_phn" id="s_phn" value="<?php echo $rows['PhoneNo'];?>" placeholder="Phone No" >
                                </div>
                                <!-- col-xs-12 -->
                              
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">LinkedIn</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                 <input type="text"  name="s_li" id="s_li" value="<?php echo $rows['S_LI'];?>" placeholder="LinkedIn">
                                </div>
                                <!-- col-xs-9 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Facebook</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                   <input type="text"  name="s_fb" id="s_fb" value="<?php echo $rows['S_FB'];?>" placeholder="Facebook">
                                </div>
                                <!-- col-xs-9 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Twitter</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                 <input type="text"  name="s_tw" id="s_tw" value="<?php echo $rows['S_TW'];?>" placeholder="Twitter">
                                </div>
                                <!-- col-xs-9 -->
                               
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group --> 
                          
                        </div>
                        <!-- col-sm-12 --> 
                      </div>
                      <!-- row --> 
                      
                    </div>
                    <!-- panel-body -->
                   <div class="form-group form-actions">
                        <div class="col-sm-4"> </div>
                        <div class="col-sm-7">
                        <button class="btn vd_btn vd_bg-green col-md-offset-3" type="submit" name="submit"  value="Finish"><span class="menu-icon"><i class="fa fa-fw fa-check"></i></span> Finish</button>
                          <a class="btn vd_btn" href="sale_list.php">Cancel</a>
                        </div>
                      </div>

                  </form>
                </div>
                <!-- Panel Widget --> 
              </div>
              <!-- col-sm-12--> 
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

<script src="custom/custom.js"></script>

</body>
</html>
	