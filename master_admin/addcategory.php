<?php
include"../config/connect.php";
session_start();
if($_REQUEST['categoryadd']=="Save") {
    $category = $_REQUEST['category'];
    $InsertCatSql="INSERT INTO pro_category SET 
                                                category = '".$category."'";
																					
		mysql_query($InsertCatSql) or die(mysql_error());
						
        echo '<script language="javascript">';
        echo 'window.location="addcategory.php?mess=addedsuccessful"';
        echo '</script>';
}
if($_REQUEST['categoryedit']=="Save"){
    $cat_id = $_REQUEST['cat_id'];
    $category = $_REQUEST['category'];

    $UpdateSql="UPDATE pro_category  SET 
				                        category = '".$category."'
                                        WHERE cat_id = '".$cat_id."'";																		
						
        mysql_query($UpdateSql) or mysql_error();
        
        echo '<script language="javascript">';
        echo 'window.location="addcategory.php?mess=editsuccessful"';
        echo '</script>';
}
if($_REQUEST['action']=="delete" && $_REQUEST['cat_id']!=''){
$cat_id = $_REQUEST['cat_id'];
mysql_query("delete from pro_category where cat_id='$cat_id'");

        echo '<script language="javascript">';
        echo 'window.location="addcategory.php?mess=deletesuccessful"';
        echo '</script>';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Project Categories</title>
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

<body id="pages" class="full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed responsive clearfix" data-active="pages " data-smooth-scrolling="1">     
<div class="vd_body">
<!-- Header Start -->
<?php include "lib/header.php"; ?>

  <!-- Header Ends --> 
<div class="content">
  <div class="container">
    <div class="vd_navbar vd_nav-width vd_navbar-tabs-menu vd_navbar-left  ">
	
<!--Side bar Menu-->
    <?php include "lib/sidebar.php";?>
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
                <li> Category </li>
                
                
              <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step=5  data-position="left">
              <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
              <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
              <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>
      
</div>
 
            </div>
          </div>
          <?php if($_REQUEST['mess']=="addedsuccessful") {?>
          <div class="alert alert-success"> <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong>Category Added Successfully!</strong></div>
          <?php }?>
          <?php if($_REQUEST['mess']=="editsuccessful") {?>
          <div class="alert alert-success"> <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong>Category Edited Successfully!</strong></div>
          <?php }?>
          <?php if($_REQUEST['mess']=="deletesuccessful") {?>
          <div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong>Category Deleted Successfully!</strong></div>
          <?php }?>
          <div class="vd_title-section clearfix">
            <div class="vd_panel-header no-subtitle">
              <h1>Project Category</h1>
            </div>
          </div>
          <div class="vd_content-section clearfix">
            <div class="row">
              
              <div class="col-sm-12">
                <div class="tabs widget">
  <ul class="nav nav-tabs widget">
    
    <li class="active"> <a data-toggle="tab" href="#projects-tab"> Category <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>   

  </ul>
  <div class="tab-content">
    
    
    <div id="projects-tab"  class="tab-pane active">
    	<div class="pd-20">
				<div class="vd_info tr"> <a data-toggle="modal" data-target="#myModal" class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-plus append-icon"></i> Add Category </a> </div>         
				<h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-bolt mgr-10 profile-icon"></i> CATEGORY</h3>        
				<table class="table table-striped table-hover">
                <thead>
                <tr>
                <th>#</th>              	  
                <th>Client Name</th>                                     
                <th>Action</th>                                          
                </tr>
                </thead>   
                <tbody>
                <?php
                $c = 1;
                $SqlUser = "SELECT * FROM pro_category";
                $ResSqlUser = mysql_query($SqlUser);
                while($FetchRows = mysql_fetch_array($ResSqlUser))
                {
                ?>
                <tr>
                <td><?php echo $c ?></td>              	
                <td><?php echo $FetchRows['category']; ?></td>
                <td class="menu-action rounded-btn">                                     
                <a data-toggle="modal" data-target="#myModal<?php echo $FetchRows['cat_id'];?>" class="btn menu-icon vd_bg-yellow"><i class="fa fa-pencil"></i></a>
                <a href="addcategory.php?action=delete&cat_id=<?=$FetchRows['cat_id']?>" onClick="javascript:return confirm('Are You Sure?');" class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete"><i class="fa fa-times"></i></a>
                </td>   
                </tr>
                        <!--Modal EDIT-->
                        <div class="modal fade" id="myModal<?php echo $FetchRows['cat_id'];?>" role="dialog">
                        <div class="modal-dialog modal-xs">
                        <div class="modal-content">
                        <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Edit Category</h4>
                        </div>
                        <div class="modal-body" style="height: 250px;">
                        <form class="form-horizontal" action="<?=$_SERVER['PHP_SELF']?>" method="post" role="form">
                        <input type="hidden" name="cat_id" value="<?php echo $FetchRows['cat_id'];?>">
                        <div class="form-group">
                        <label class="col-sm-4 control-label">Category Name</label>
                        <div class="col-sm-7 controls">
                        <input type="text" name="category" value="<?php echo $FetchRows['category']; ?>" required>
                        </div>
                        </div>
                        <div class="form-group form-actions">
                        <div class="col-sm-7">
                        <input class="btn vd_btn vd_bg-green vd_white" type="submit" name="categoryedit" value="Save" style="margin-left: 198px;">
                        </div>
                        </div>
                        </form>
                        </div>
                        </div>
                        </div>
                        </div>    
                        <!--Modal EDIT-->
                <?php $c++;}?>                 
                </tbody>
				</table>
                            <!-- Modal ADD-->
                            <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog modal-xs">
                            <div class="modal-content">
                            <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Category</h4>
                            </div>
                            <div class="modal-body" style="height: 250px;">
                            <form class="form-horizontal" action="<?=$_SERVER['PHP_SELF']?>" method="post" role="form">
                            <div class="form-group">
                            <label class="col-sm-4 control-label">Category Name</label>
                            <div class="col-sm-7 controls">
                            <input type="text" name="category" required>
                            </div>
                            </div>
                            <div class="form-group form-actions">
                            <div class="col-sm-7">
                            <input class="btn vd_btn vd_bg-green vd_white" type="submit" name="categoryadd" value="Save" style="margin-left: 198px;">
                            </div>
                            </div>
                            </form>
                            </div>
                            </div>
                            </div>
                            </div>
                            <!--Modal ADD--> 

                                 
        </div>
    </div>
    
 
    
    
  </div>
  <!-- tab-content --> 
</div>
<!-- tabs-widget -->              </div>
            </div>
            <!-- row --> 
            
          </div>
          <!-- .vd_content-section --> 
          
        </div>
        <!-- .vd_content --> 
      </div>
      <!-- .vd_container --> 
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
</body>
</html>