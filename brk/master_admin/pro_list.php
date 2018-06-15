<?php
include "../config/connect.php";
if($_SESSION['admin_id'] == "" && $_SESSION['admin_username'] == ""){
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Master Dashboard</title>
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
                
                
              <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step=5  data-position="left">
    <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
      <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
      <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>
      
</div>
 
            </div>
          </div>
          <div class="vd_title-section clearfix">
            <div class="vd_panel-header no-subtitle">
              <h1>Projects List</h1>
            </div>
          </div>
          <div class="vd_content-section clearfix">
            <div class="row">
              
              <div class="col-sm-12">
                <div class="tabs widget">
  <ul class="nav nav-tabs widget">
    <!--<li> <a data-toggle="tab" href="#profile-tab"> Profile <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>-->
    <li class="active"> <a data-toggle="tab" href="#projects-tab"> Projects <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>   
    <!--<li> <a data-toggle="tab" href="#photos-tab"> Photos <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>-->
    <!--<li> <a data-toggle="tab" href="#friends-tab"> Friends <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
    <li> <a data-toggle="tab" href="#groups-tab"> Groups <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>-->
  </ul>
  <div class="tab-content">
    
    
    <div id="projects-tab"  class="tab-pane active">
    	<div class="pd-20">
				<div class="vd_info tr"> <a href="add_project.php" class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-plus append-icon"></i> Add Project </a> </div>         
				<h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-bolt mgr-10 profile-icon"></i> PROJECTS</h3>        
				<table id="data-tables" class="table table-striped table-hover">
                  <thead>
                      <tr>
                        <th>#</th>   
                        <th>Assign By</th>          	  
				          <th>Project Name</th>                                  
									  <!--<th>Domain Name</th>
                    <th>Sale Member</th>-->
				        <th>Type</th>
                
				        <th>Assigned Devloper</th>
                        <th>Status</th>
                        <th>Action</th>                                          
                      </tr>
                  </thead>   
                  <tbody>
                 <?php
                  $c = 1;
                  $SqlUser = "select * from ".TABLE_PREFIX."project  ";
                  $ResSqlUser = mysql_query($SqlUser);
                  while($FetchRows = mysql_fetch_array($ResSqlUser))
                  {
                    
                        $SqlUser1 = "SELECT * FROM  pro_dev_registration WHERE D_id='".$FetchRows['D_id']."' ";
                        $ResSqlUser1 = mysql_query($SqlUser1);
                        $Rows = mysql_fetch_array($ResSqlUser1);
                           if($FetchRows['A_id']!=""){
                             $SqlUser3 = "SELECT * FROM  pro_admin_details WHERE A_id='".$FetchRows['A_id']."' ";
                        $ResSqlUser3 = mysql_query($SqlUser3);
                        $Rows2 = mysql_fetch_array($ResSqlUser3);
                         $abc=$Rows2['Name']; 
                          }
                          else{
    $SqlUser2 = "SELECT * FROM  pro_sale_registration WHERE S_id='".$FetchRows['S_id']."' ";
                        $ResSqlUser2 = mysql_query($SqlUser2);
                        $Rows1 = mysql_fetch_array($ResSqlUser2);
                         $abc=$Rows1['Sale_Name'];
                          }
                      
                                              
                                              
                ?>             
								<tr>
                    <td><?php echo $c ;?></td> 
                   
                     <td><?php echo $abc ;?></td>     
                        <!--<td><?php echo $Rows2['Name']; ?></td>                  -->
                    <td><?php echo $FetchRows['Name']; ?></td>                    
                    <!--<td><?php echo $FetchRows['Domain']; ?></td> 
                    <td><?php echo $FetchRows['Sale_Name']; ?></td>                                   -->
                    <td><?php echo $FetchRows['Type']; ?></td>
                   
                    <td><?php echo $Rows['Dev_Name']; ?></td> 
                      <td><?php echo $FetchRows['ProStatus']; ?></td> 
                    <!--<td>
                      
                    <select class="span9 chosen"  id="stat<?=$FetchRows['P_id']?>" onChange="changestatus(this.value,'<?=$FetchRows['P_id']?>')">
                    <option value="working" <?=$FetchRows['ProStatus'] == 'working' ? 'selected' : ''?>>Working</option>
                    <option value="complete" <?=$FetchRows['ProStatus'] == 'complete' ? 'selected' : ''?>>Complete</option>
                    <option value="pending" <?=$FetchRows['ProStatus'] == 'pending' ? 'selected' : ''?>>Pending</option>
                    <option value="live" <?=$FetchRows['ProStatus'] == 'live' ? 'selected' : ''?>>Live</option>
                    
                    </select>
                    </td>-->
                    <td class="menu-action rounded-btn" width="15%" >
                                        <a href="view_project.php?P_ID=<?php echo $FetchRows['P_id']; ?>" class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                            <i class="fa fa-eye"></i>
                                          </a>                                      
                                        <a href="edit_project.php?P_ID=<?php echo $FetchRows['P_id']; ?>"class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                            <i class="fa fa-pencil"></i>
                                          </a>
                                      
                                        <a href="delete/delproject.php?id=<?php echo $FetchRows['P_id']; ?>" onClick="javascript:return confirm('Are You Sure?');" class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                            <i class="fa fa-times"></i>
                                          </a>
                                            <a href="assign.php?P_ID=<?php echo $FetchRows['P_id']; ?>"class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="Assign to Developer ">
                                            <i class="fa fa-user"></i>
                                          </a>
                    </td>   
                 </tr>
                <?php
                  $c++;
                  }
                  ?>
								</tbody>
						 </table>
             <div class=""></div>        
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
    
<script type="text/javascript" src="plugins/dataTables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="plugins/dataTables/dataTables.bootstrap.js"></script>

<script type="text/javascript" src="js/theme.js"></script>
<script type="text/javascript" src="custom/custom.js"></script>
 
<!-- Specific Page Scripts Put Here -->
<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
				
				$('#data-tables').dataTable();
		} );
    
    $('#data-tables').dataTable( {
        "iDisplayLength": 25
    });
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
<script>
		/********************Status****************/
	function changestatus(stat,id)
	{
		$.post('status/statusproject.php',{ stat : stat , id : id });
	}
</script>

</body>


</html>