<?php
include"../config/connect.php";
session_start();
if ($_SESSION['userid']=="" && $_SESSION['loggedIn']=="") { 
    header("location:../index.php");
}
//echo $_SESSION['userid']; exit();
if($_REQUEST['action']=="delete" && $_REQUEST['id']!=''){
    $del = mysql_query("DELETE FROM list WHERE id='".$_REQUEST['id']."'");
    header('location:feedback.php?action=deleted');
}
//$ResSqlUser = mysql_fetch_array($ResSqlUser1);
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
          <?php if($_REQUEST['action']=="deleted") {?>
          <div class="alert alert-success"> <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong>Information Deleted Successfully!</strong></div>
          <?php }?>
          <div class="vd_title-section clearfix">
            
          <div class="vd_content-section clearfix">
           
            <div class="row">
              <div class="col-md-12">
                <div class="panel widget">
                  <div class="panel-heading vd_bg-grey">         
				<h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-bolt mgr-10 profile-icon"></i> FEEDBACK<a href="add.php" class="btn vd_btn btn-xs vd_bg-yellow" style="float: right;"> <i class="fa fa-plus append-icon"></i> Add Feedback </a>  </h3>
                  </div>
                  <div class="panel-body  table-responsive">
                    <table class="table table-striped table-hover">
                      <thead class="vd_bg-green vd_white">
                        <tr>
                          <th>#</th>             	  
                          <th>Name</th>
                          <th>Team Player</th>
                          <th>Ownership</th>
                          <th>Quick Learner</th>
                           <th>Problem Solver</th>
                           <th>Passionate</th>
                           <!--<th>Proactive</th>
                           <th>Hard Working</th> 
                           <th>Attitude</th>  -->
                           <th>Action</th>
                           <th></th> 
                            <th></th>                                           
								  </tr>
                      </thead>
                      <tbody>
                       <?php
                         $rows_per_page=12;
                        if(isset($_REQUEST['page']))
                          {
                          $pagenumber=$_REQUEST['page'];
                          }
                         else
                          {
                          $pagenumber=1;
                          }
                          $offset=($pagenumber-1)*$rows_per_page;
                          $res_product=mysql_query("select * from pro_dev_feedback WHERE user_id = '".$_SESSION['userid']."' limit $offset,$rows_per_page");
                          $totnumrow=mysql_num_rows($res_product);
                          $totrow=ceil($totnumrow/$rows_per_page);
                            
                          //$subCatSql="SELECT sr.*, pr.* FROM pro_project as pr INNER JOIN pro_sale_registration as sr ON pr.S_id=sr.S_id WHERE pr.D_id = '".$_SESSION['userid']."' limit $offset,$rows_per_page ";
                          //$ResSqlUser=mysql_query($subCatSql) or mysql_error();
                          

                        $c = 1;
                        // $SqlUser = "SELECT * FROM pro_project WHERE S_id = '".$_SESSION['userid']."'";
                        // $ResSqlUser = mysql_query($SqlUser);
                        $SqlUser = "SELECT * FROM pro_dev_feedback WHERE user_id  = '".$_SESSION['userid']."'";
                        $ResSqlUser = mysql_query($SqlUser);
                        while($FetchRows = mysql_fetch_array($ResSqlUser))
                        {
                           
                        ?>             
								<tr>
                    <td><?php echo $c ;?></td>              	
                    <td><?php echo $FetchRows['Name']; ?></td>                                    
                    <td><?php echo $FetchRows['Team_Player']; ?></td>
                    <td><?php echo $FetchRows['Ownership']; ?></td>
                    <td><?php echo $FetchRows['Quick_Learner']; ?></td>
                     <td><?php echo $FetchRows['Problem_Solver']; ?></td>
                      <td><?php echo $FetchRows['Passionate']; ?></td>
                       <!--<td><?php echo $FetchRows['proactive']; ?></td>     
                     <td><?php echo $FetchRows['Hardworking']; ?></td>
                      <td><?php echo $FetchRows['Attitude']; ?></td> -->
                   <td><b><a href="viewfeedback.php?id=<?php echo $FetchRows['id']?>"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></b></a> 
</td>
  <!--<td><b><a href="update1.php?id=<?php echo $FetchRows['id']?>"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></b></a> 
</td>-->
<!--<td><b><a href="feedback.php?id=<?php echo $FetchRows['id']?>&action=delete" onclick="return confirm('are you sure want to delete?')"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></b></a> 
</td> -->

                   
                      
                 </tr>

                     <!-- Modal -->
                    

                        <?php
                          $c++;
                          }
                          ?>
                      </tbody>
                    </table>
                    <ul class="pagination">
                            <?php
                              if($pagenumber>12)
                              {
                            ?>
                            <li><a href="project_list.php?page=<?php echo $pagenumber-1; ?>">&laquo;</a></li>
                            <?php 
                            } 
                            ?>
                            <?php
                              for($p=1;$p<=$totrow;$p++)
                              {
                              if($pagenumber==$p)
                              {
                                $sty="active";
                              }
                              else
                              {
                                $sty="";
                              }
                            ?>
                            <li class="<?php echo $sty ;?>">
                              <a href="project_list.php?page=<?php echo $p; ?>" >
                              <?php echo $p; ?>
                              </a>
                            </li>
                            <?php
                              }
                            ?>
                            <?php
                              if($pagenumber<$totrow)
                              {
                            ?>
                              <li><a href="project_list.php?page=<?php echo $pagenumber+1; ?>" >&raquo;</a></li>
                            <?php
                              }
                            ?>
                     </ul>
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
<script>
		/********************Status****************/
	function changestatus(stat,id)
	{
		$.post('status/statusproject.php',{ stat : stat , id : id });
	}
</script>

</body>


</html>