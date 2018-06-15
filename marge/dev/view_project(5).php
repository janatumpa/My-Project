<?php
include"../config/connect.php";
session_start();
if ($_SESSION['userid']=="" && $_SESSION['loggedIn']=="") { 
    header("location:../index.php");
}
$sql = "SELECT sr.*, pr.* FROM pro_project as pr INNER JOIN pro_sale_registration as sr WHERE pr.S_id=sr.S_id AND pr.P_id = '".$_REQUEST['projectid']."'";
$ressql = mysql_query($sql);
$resu = mysql_fetch_array($ressql);
?>
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html><!--<![endif]-->

<!-- Specific Page Data -->
<!-- End of Data -->

<head>
     <meta charset="utf-8" />
    <title><?php echo $FetchRows['Dev_Name'];?></title>
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
                <li>Project List</li>
                </ul>
          <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step=5  data-position="left">
<div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
  <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
  <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>
      
</div>
 
            </div>
          </div>
          <div class="vd_title-section clearfix">
              <div class="col-md-12">
                <div class="panel widget light-widget panel-bd-top">
                  <div class="panel-heading no-title"> </div>
                  <div class="panel-body">
                    <h3 class="mgtp--5"> Project Details</h3>
                    <div class="content-list content-image">
                      <ul class="list-wrapper pd-lr-10">
                          <li>
                          <div class="menu-text"> Assigned By
                            <div class="menu-info">
                              <?=$resu['Sale_Name']?>
                            </div>
                          </div>
                        </li>

                        <li>
                          <div class="menu-text"> Client Name
                            <div class="menu-info">
                              <?=$resu['C_Name']?>
                            </div>
                          </div>
                        </li>

                        <li>
                          <div class="menu-text"> Project Name
                            <div class="menu-info">
                              <?=$resu['Name']?>
                            </div>
                          </div>
                        </li>

                        <li>
                          <div class="menu-text"> Domain Name
                            <div class="menu-info">
                              <?=$resu['Domain']?>
                            </div>
                          </div>
                        </li>

                        <li>
                          <div class="menu-text"> Project Type
                            <div class="menu-info">
                              <?=$resu['Type']?>
                            </div>
                          </div>
                        </li>

                        <li>
                          <div class="menu-text"> Project Category
                            <div class="menu-info">
                              <?=$resu['Category']?>
                            </div>
                          </div>
                        </li>
                        
                        <li>
                          <div class="menu-text"> Assigned Date
                            <div class="menu-info">
                              <?=date('d-m-Y',strtotime($resu['RegistDate']))?>
                            </div>
                          </div>
                        </li>

                        <li>
                          <div class="menu-text"> Attached File
                            <div class="menu-info">
                            <table width="100%" celpaddin="0" cellspacing="0" border="1">
                            <tr>
                         <th>No</th>
                         <th>Date</th>
                         <th>Document</th>
                            </tr>
                        
                        <?php 
                            if($images != ""){
                            $images = explode(',', $rows['File_Upload']);
                       // print_r($images);
                            $cnt =1;
                            
                        foreach($images as $key=>$image){
                            $img = explode('_',$image);
                            
                            ?>
                           <tr>
                         <td><?=$cnt?>.</td>
                         <td><?=date('d M Y',strtotime($img[0]))?></td>
                         <td><a href="../Documents/<?=$image?>" download>Attachment<?=$cnt?></a> <br/></td>
                            </tr>
                            


                         <?php $cnt++;}}else{?>
                            <tr>
                         <td colspan="3" align="center">No attachement are here</td>
                         
                            </tr>
                            <?php }?>
                         <!--<input type="text" value="<?php echo $rows['File_Upload']; ?>" readonly="readonly"/>-->
                       </table>
                            </div>
                          </div>
                        </li>
                          
                        

                        <li>
                          <div class="menu-text"> Project Status
                            <div class="menu-info">
                              <?=$resu['ProStatus']?>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="menu-text"> Messages
                            <div class="menu-info">
                            <table width="100%" celpaddin="0" cellspacing="0" border="1">
                            <tr>
                         <th width="5%">No</th>
                         <th width="20%">Date</th>
                         <th>Document</th>
                            </tr>
                        
                        <?php $fetch = mysql_query("SELECT * FROM pro_project_message WHERE project_id='".$_REQUEST['projectid']."'");
                       // print_r($images);
                            $cnt =1;
                            
                        while($fet = mysql_fetch_array($fetch)){
                          
                            
                            ?>
                           <tr>
                         <td><?=$cnt?>.</td>
                         <td><?=date('d M Y H:i A',strtotime($fet['date']))?></td>
                         <td><?=stripslashes($fet['message'])?></td>
                            </tr>
                            


                         <?php $cnt++;}?>
                         <!--<input type="text" value="<?php echo $rows['File_Upload']; ?>" readonly="readonly"/>-->
                       </table>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <!-- content-list --> 
                  </div>
                </div>
                <!-- Panel Widget --> 
                
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
</body>


</html>