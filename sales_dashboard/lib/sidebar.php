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
    	<a href="client_list.php">
        	<span class="menu-icon"><i class="fa fa-table"></i></span> 
            <span class="menu-text">Client</span>  
            
       	</a> 
    </li>
     <li>
    	<a href="project_list.php">
        	<span class="menu-icon"><i class="fa fa-th-list"></i></span> 
            <span class="menu-text">Project</span>  
            
       	</a> 
    </li>
    <li>
    	<a href="inbox.php">
        	<span class="menu-icon"><i class="fa fa-envelope"></i></span> 
            <span class="menu-text">Email</span>  
            
       	</a> 
    </li> 
    <li>
    	<a href="feedback.php">
        	<span class="menu-icon"><i class=" fa fa-comments-o"></i></span> 
            <span class="menu-text"> Developer Feedback</span>  
          
       	</a> 
    </li> 
<li>
    	<a href="Sales_feedback.php">
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
    	<a href="timesheet_sales.php">
        	<span class="menu-icon"><i class=" fa fa-comments-o"></i></span> 
            <span class="menu-text">Timesheet </span>  
          
       	</a> 
    </li> 
   </ul>
   </div>                          
    
      
    <!--<li>
    	<a href="project_details.php" data-action="click-trigger">
        	<span class="menu-icon"><i class="fa fa-th-list"></i></span> 
            <span class="menu-text">Project</span>  
            <span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
       	</a>
     	<div class="child-menu"  data-action="click-target">
            
      	</div>
    </li> -->  
<!-- Head menu search form ends -->                   
    </div>
    <div class="navbar-spacing clearfix">
    </div>
    <div class="vd_menu vd_navbar-bottom-widget">
        <ul>
            <li>
                <a href="logout.php">
                    <span class="menu-icon"><i class="fa fa-sign-out"></i></span>          
                    <span class="menu-text">Logout</span>             
                </a>
                           </li>
        </ul>
    </div>     
</div>  
  <div class="vd_navbar vd_nav-width vd_navbar-chat vd_bg-black-80 vd_navbar-right   ">
	