<?php
include"../config/connect.php";
session_start();
if ($_SESSION['userid']=="" && $_SESSION['loggedIn']=="") { 
    header("location:../index.php");
}
?>
<div class="navbar-tabs-menu clearfix">
		                                         
    </div>  
	

<div class="navbar-menu clearfix">
        <div class="vd_panel-menu hidden-xs">
            <span data-original-title="Expand All" data-toggle="tooltip" data-placement="bottom" data-action="expand-all" class="menu" data-intro="<strong>Expand Button</strong><br/>To expand all menu on left navigation menu." data-step=4 >
                <i class="fa fa-sort-amount-asc"></i>
            </span>                   
        </div>
    	<!--<h3 class="menu-title hide-nav-medium hide-nav-small">UI Features</h3>-->
        <div class="vd_menu">
        	 <ul>
    <li>
    	<a href="index.php" >
        	<span class="menu-icon"><i class="fa fa-dashboard"></i></span> 
            <span class="menu-text">Dashboard</span>  
           
     	</a>
    </li>  
 	<li>
    	<a href="profile.php">
        	<span class="menu-icon"><i class=" icon-user"></i></span> 
            <span class="menu-text">Profile</span>  
          
       	</a> 
    </li> 
    <li>
    	<a href="project_list.php">
        	<span class="menu-icon"><i class="fa fa-th-list"></i></span> 
            <span class="menu-text">Assigned Project</span>  
            
       	</a> 
    </li>
    <!--<li>
    	<a href="timesheet.php">
        	<span class="menu-icon"><i class="fa fa-th-list"></i></span> 
            <span class="menu-text">Time Sheet Update</span>  
            
       	</a> 
    </li>-->
    <li>
    	<a href="inbox.php">
        	<span class="menu-icon"><i class="fa fa-envelope"></i></span> 
            <span class="menu-text">Mailing</span>  
            
       	</a> 
    </li>
<li>
    	<a href="feedback_list.php">
        	<span class="menu-icon"><i class=" fa fa-comments-o"></i></span> 
            <span class="menu-text"> Developer Feedback</span>  
          
       	</a> 
    </li> 
<li>
    	<a href="sales_feedback.php">
        	<span class="menu-icon"><i class=" fa fa-comments-o"></i></span> 
            <span class="menu-text">Sales Feedback </span>  
          
       	</a> 
    </li>
    <li>
    	<a href="leave_list.php">
       
        	<span class="menu-icon"><i class="fa fa-list"></i></span> 
            <span class="menu-text">Leave</span>  
            
       	</a> 
    </li> 
  
   <li>
    	<a href="timesheet_dev.php">
        	<span class="menu-icon"><i class=" fa fa-th-list"></i></span> 
            <span class="menu-text">Timesheet </span>  
          
       	</a> 
    </li> 
             
</ul>
</div>   
<!-- Head menu search form ends -->                   
    </div>
    <div class="navbar-spacing clearfix">
    </div>     
</div>  
  <div class="vd_navbar vd_nav-width vd_navbar-chat vd_bg-black-80 vd_navbar-right   ">
	