<?php
	include"../config/connect.php";
 
				//User  
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

		//Fetch Home  Details
		

	
			if($_REQUEST['submit']=="Finish") 
            { 
         $oldimg = $_REQUEST['oldimg'];
			
			
			/***********************/
			
			if($_FILES['image']['name']!=''){
							
								$unlink_sql = "SELECT S_image FROM pro_sale_registration WHERE S_id = '".$_SESSION['userid']."'";
								$unlink_rs = mysql_query($unlink_sql) or mysql_error();
								$row_unlink = mysql_fetch_array($unlink_rs);
								
								$photo = "profileimage/fullsize/".$row_unlink['S_image'];
								$thumb = "profileimage/bigimg/".$row_unlink['S_image'];
								$thumb1 = "profileimage/smallimg/".$row_unlink['S_image'];
								$thumb2 = "profileimage/medium/".$row_unlink['S_image'];
								$thumb3 = "profileimage/extbig/".$row_unlink['S_image'];
								
								if(file_exists($photo))
									{
										@unlink($photo);
									}
								if(file_exists($thumb))
									{
										@unlink($thumb);
									}
								if(file_exists($thumb1))
									{
										@unlink($thumb1);
									}
								if(file_exists($thumb2))
									{
										@unlink($thumb2);
									}
								if(file_exists($thumb3))
									{
										@unlink($thumb3);
									}
							
								//Image uploadin start.
								$valid_exts = array('jpeg', 'jpg', 'png', 'gif');
								$max_file_size = 2000 * 1024; #200kb
								//$nw = $nh = 300; # image with # height
								$imgwidth = 200;
								$imgheight =  200;
								
								$imgwidth2 = 100;
								$imgheight2 =  100;
								
								$imgwidth3 = 300;
								$imgheight3 =  250;
								
								$imgwidth4 = 800;
								$imgheight4 =  600;

									$ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
									if (in_array($ext, $valid_exts)) {
											//Upload image path...
											$imagename = uniqid() . '.' . $ext; //Concate with Uniqid id and extension.
											$path = 'profileimage/bigimg/' . $imagename;
											$path1 = 'profileimage/smallimg/' . $imagename;
											$pathfull = 'profileimage/fullsize/' . $imagename;
											$thumb2 = 'profileimage/medium/'.$imagename;
											$thumb3 = 'profileimage/extbig/'.$imagename;
											$tmp = $_FILES['image']['tmp_name'];
											$size = getimagesize($tmp);
						
											$x = (int) $_POST['x'];
											$y = (int) $_POST['y'];
											$w = (int) $_POST['w'] ? $_POST['w'] : $size[0];
											$h = (int) $_POST['h'] ? $_POST['h'] : $size[1];
						
											$data = file_get_contents($tmp);
											$vImg = imagecreatefromstring($data);
											
											//Crop code...
											$dstImg = imagecreatetruecolor($imgwidth, $imgheight);
											imagecopyresampled($dstImg, $vImg, 0, 0, $x, $y, $imgwidth, $imgheight, $w, $h);
											imagejpeg($dstImg, $path);
											
											$dstImg1 = imagecreatetruecolor($imgwidth2, $imgheight2);
											imagecopyresampled($dstImg1, $vImg, 0, 0, $x, $y, $imgwidth2, $imgheight2, $w, $h);
											imagejpeg($dstImg1, $path1);
											
											$dstImg2 = imagecreatetruecolor($imgwidth3, $imgheight3);
											imagecopyresampled($dstImg2, $vImg, 0, 0, $x, $y, $imgwidth3, $imgheight3, $w, $h);
											imagejpeg($dstImg2, $thumb2);
											
											$dstImg3 = imagecreatetruecolor($imgwidth4, $imgheight4);
											imagecopyresampled($dstImg3, $vImg, 0, 0, $x, $y, $imgwidth4, $imgheight4, $w, $h);
											imagejpeg($dstImg3, $thumb3);
											
											//Upload image full size...
											@copy($tmp,$pathfull);
											
											imagedestroy($dstImg);
											imagedestroy($dstImg1);
											imagedestroy($dstImg2);
											imagedestroy($dstImg3);
											
										} else {
											echo 'unknown problem!';
									} 

					
				}  else {
					$imagename = $oldimg;	
				}
			/************************/
					//For Profile Image Update
				   
				
		echo		 $InsertRegSql="UPDATE pro_sale_registration  SET   
					 			                     		Sale_Name= '".$_REQUEST['s_name']."',
                                                S_image = '".$imagename."' ,   
                                          PhoneNo='".$_REQUEST['s_phn']."',
                                           Position='".$_REQUEST['s_position']."',
                                           S_address='".$_REQUEST['s_add']."'
                                                                                                              
                                         	WHERE S_id = '".$_SESSION['userid']."'
										                     	";											
																		
																				exit();
						mysql_query($InsertRegSql) or mysql_error();
					
					
						$_SESSION['msg'] = "Profile Update Successful";
						echo '<script language="javascript">';
						echo 'window.location="profile.php?mess=successfulupdate"';
						echo '</script>';
						
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

	  
 
 
    <!-- for specific page in style css -->
        
    <!-- for specific page responsive in style css -->
        
    
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
   <?php include "lib/header.php";?>

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
                <li class="active">User Profile Form</li>
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
              <h1>User Profile Form</h1>
              <small class="subtitle">Form for user profile</small> </div>
          </div>
          <div class="vd_content-section clearfix">
            <div class="row">
              <div class="col-sm-12">
                <div class="panel widget light-widget">
                  <div class="panel-heading no-title"> </div>

                  <!--Form Start-->
                  <form  method="post" class="form-horizontal"  role="form" >
                    <div  class="panel-body">
                      <h2 class="mgbt-xs-20"> Profile: <span class="font-semibold"><?php if($FetchRows['Sale_Name']!=''){ echo $FetchRows['Sale_Name'];}?></span> </h2>
                      <br/>
                      <div class="row">
                        <div class="col-sm-3 mgbt-xs-20">
                          <div class="form-group">
                            <div class="col-xs-12">
                            <!--image upload-->
                            
                              <div style="padding-bottom:0px;" id='preview' > 
		                              <img id="uploadPreview" src="<?=$pic?>" class="user_img"  border="0" title="Click here to view Profile image"/>
											        </div>
                              <p style=" margin-top:10px;"><span style="color:#f7814d;">Please upload</span>  (jpg, jpeg, gif, png) File Only.</p>
                                <div class="custom_file_upload">
												<div class="file_upload">
								           			<input name="image" id="uploadImage" type="file" />
											         	<input type="hidden" name="oldimg" value="<?php echo $FetchRows['S_image'];?>">
                        

												</div>
												</div>
                              <br/>
                          
                            </div>
                            <!--end image upload-->
                          </div>
                        </div>
                        <div class="col-sm-9">
                          <h3 class="mgbt-xs-15">Account Setting</h3>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <span><?php echo $FetchRows['EmailId'];?></span>
                                </div>
                               
                               
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          
                          
                        
                        
                          
                          <hr />
                          <h3 class="mgbt-xs-15">Profile Setting</h3>
                          <div class="form-group">
                            <label class="col-sm-3 control-label"> Name</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" name="s_name" id="s_name" value="<?php if($FetchRows['Sale_Name']!=''){ echo stripslashes($FetchRows['Sale_Name']); }?>" placeholder="Name">
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
                                  <input type="text" name="s_add" id="s_add" value="<?php if($FetchRows['S_address']!=''){ echo stripslashes($FetchRows['S_address']); }?>" placeholder="Address">
                                </div>
                               
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Position</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                <input type="text" name="s_position" id="s_position" value="<?php if($FetchRows['Position']!=''){ echo stripslashes($FetchRows['Position']); }?>" placeholder="Address">
                                  
                                </div>
                               
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
                                  <input type="text"  name="s_phn" id="s_phn" value="<?php if($FetchRows['PhoneNo']!=''){ echo stripslashes($FetchRows['PhoneNo']); }?>" >
                                </div>
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->

                        <!--<div class="form-group">
                            <label class="col-sm-3 control-label">Facebook</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text"  placeholder="facebook">
                                </div>
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <!--<div class="form-group">
                            <label class="col-sm-3 control-label">LinkedIn</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" placeholder="LinkedIn">
                                </div>
                                
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
                    <div class="pd-20">
                  <!--<input name="submit" type="submit" value="Update"  /></li>-->
                   <button class="btn vd_btn vd_bg-green col-md-offset-3" type="submit" name="submit"  value="Finish"><span class="menu-icon"><i class="fa fa-fw fa-check"></i></span> Finish</button>
                    </div>
                  </form>
                  <!--Form End-->
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
  <footer class="footer-1"  id="footer">      
    <div class="vd_bottom ">
        <div class="container">
            <div class="row">
              <div class=" col-xs-12">
                <div class="copyright">
                  	Copyright &copy;2017 MeMe Infotech All Rights Reserved 
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