
<?php
include("../config/connect.php");

$_REQUEST['dologin'];
// Load cookie
if(isset($_COOKIE['AdminCookie']))
{
$getcookie = $_COOKIE['AdminCookie'];
$getcookie = explode("@@",$getcookie);

$_SESSION['admin_id'] = $getcookie[0];
$_SESSION['admin_username'] = $getcookie[1];
}

// Session check
if($_SESSION['admin_id'] != "")	header("location:dashboard.php");

// Login
if($_REQUEST['dologin'] == 'yes' && $_REQUEST['admin_username']!= "" && $_REQUEST['admin_password']!= "")
{
$SqlCheck = "SELECT * FROM ".TABLE_PREFIX."admin WHERE 
admin_username = '".$_REQUEST['admin_username']."' AND 
admin_password = '".$_REQUEST['admin_password']."'";
$qrylogin = mysql_query($SqlCheck);

$cntlogin = mysql_num_rows($qrylogin);
$reslogin = mysql_fetch_array($qrylogin);

if(!$cntlogin)
{
header("location:index.php?login=failed");
}
else
{
$_SESSION['admin_id'] = $reslogin['admin_id'];
$_SESSION['admin_username'] = $reslogin['admin_username'];

$cookievalue = array(
            'username' => $_REQUEST['admin_username'],
            'password' => $_REQUEST['admin_password']
        );
//$cookievalue = $_REQUEST['admin_username'];
if($_REQUEST['rem'] == 'yes')
{
//setcookie("AdminCookie",$cookievalue,time()+30*24*60*60);
setcookie("AdminCookie", $cookievalue, time() + (86400 * 1), '/'); 
}

header("location:dashboard.php");
}
}

//print_r($_COOKIE['AdminCookie']);exit();
?>
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<!-- Specific Page Data -->

<!-- End of Data -->

<head>
  <meta charset="utf-8" />
  <title>Login Pages HTML Template - Responsive Multipurpose Admin Templates | Vendroid</title>
  <meta name="keywords" content="HTML5 Template, CSS3, All Purpose Admin Template, Vendroid" />
  <meta name="description" content="Login Pages - Responsive Admin HTML Template">
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
  <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.0/css/mdb.min.css" rel="stylesheet" type="text/css">-->
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!--[if IE 7]><link type="text/css" rel="stylesheet" href="css/font-awesome-ie7.min.css"><![endif]-->
  <link href="css/font-entypo.css" rel="stylesheet" type="text/css">

  <!-- Fonts CSS -->
  <link href="css/fonts.css" rel="stylesheet" type="text/css">

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
  <link href="css/chrome.css" rel="stylesheet" type="text/chrome">
  <!-- chrome only css -->



  <!-- Responsive CSS -->
  <link href="css/theme-responsive.min.css" rel="stylesheet" type="text/css">
  <link href="css/theme-responsive.min.css" rel="stylesheet" type="text/css">




  <!-- for specific page in style css -->

  <!-- for specific page responsive in style css -->


  <!-- Custom CSS -->
  <link href="custom/custom.css" rel="stylesheet" type="text/css">



  <!-- Head SCRIPTS -->
  <script type="text/javascript" src="js/modernizr.js"></script>
  <script type="text/javascript" src="js/mobile-detect.min.js"></script>
  <script type="text/javascript" src="js/mobile-detect-modernizr.js"></script>
  <!--<link href="custom/mdb.min.css" rel="stylesheet" type="text/chrome">-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script type="text/javascript" src="js/html5shiv.js"></script>
      <script type="text/javascript" src="js/respond.min.js"></script>     
    <![endif]-->

</head>

<body id="pages" class="full-layout no-nav-left no-nav-right  nav-top-fixed background-login     responsive remove-navbar login-layout   clearfix"
  data-active="pages " data-smooth-scrolling="1">
  <div class="vd_body" id="con1">
    <!-- Header Start -->

    <!-- Header Ends -->
    <div class="content">
      <div class="container">

        <!-- Middle Content Start -->

        <div class="con1">
          <div class="vd_container">
            <div class="vd_content clearfix">
              <div class="vd_content-section clearfix">
                <div class="vd_login-page">
                  <div class="heading clearfix">
                    <div class="logo">
                      <h2 class="mgbt-xs-5"><img src="img/logo.png" alt="logo"></h2>
                    </div>
                    <h4 class="text-center font-semibold vd_grey">LOGIN TO YOUR ACCOUNT</h4>
                  </div>

                  <div class="panel widget">
                    <div class="panel-body1">

                        <form class="form-horizontal" id="login-form" action="<?=$_SERVER['PHP_SELF']?>" role="form">
                    <input type="hidden" name="dologin" value="yes" />
<?php if(isset($_REQUEST['login']) && $_REQUEST['login']== 'failed') { ?>
<div class="alert alert-error">
<button data-dismiss="alert" class="close"></button>
Invalid Username or Password.
</div>
<?php } ?>
                        <div class="alert alert-danger vd_hidden">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                          <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Oh snap!</strong>                          Change a few things up and try submitting again. </div>
                        <div class="alert alert-success vd_hidden">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                          <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong>Well done!</strong>.
                        </div>
                        <div class="form-group  mgbt-xs-20">
                          <div class="col-md-12">


                            <div class="vd_input-wrapper" id="email-input-wrapper"> <span class="menu-icon"> <i class="fa fa-envelope"></i> </span>
                              <input type="email" placeholder="User Name" id="admin_username" name="admin_username" >
                            </div>
                            <!--mdbootstrap-->
                            <!--<div class="md-form">
                              <i class="fa fa-envelope prefix"></i>
                              <input type="email" id="form9" class="form-control validate">
                              <label for="form9" data-error="wrong" data-success="right">Type your email</label>
                            </div>
                             <div class="md-form">
                              <i class="fa fa-lock prefix"></i>
                              <input type="password" id="form4" class="form-control">
                              <label for="form4">Your password</label>
                            </div>-->

                            <div class="label-wrapper">
                              <label class="control-label sr-only" for="password">Password</label>
                            </div>
                           


                            <div class="vd_input-wrapper" id="password-input-wrapper"> <span class="menu-icon"> <i class="fa fa-lock"></i> </span>
                              <input type="password" placeholder="Password" id="password" id="admin_password" name="admin_password">
                            </div>
                          </div>
                        </div>
                        <div id="vd_login-error" class="alert alert-danger hidden"><i class="fa fa-exclamation-circle fa-fw"></i> Please fill the necessary field </div>
                        <div class="form-group">
                          <div class="col-md-12 text-center mgbt-xs-5">
                            <button class="btn vd_bg-green vd_white width-100" type="submit" onclick="return validate();">Login</button>
                          </div>
                            <div class="col-md-12">
                              <div class="row">
                                <div class="col-xs-6">
                                  <div class="vd_checkbox">
                                    <input type="checkbox" id="checkbox-1" value="1">
                                    <label for="checkbox-1"> Remember me</label>
                                  </div>
                                </div>
<!--
                                <div class="col-xs-6 text-right">
                                  <div class=""> <a href="pages-forget-password.html" class="txt1">Forget Password? </a> </div>
                                </div>
-->
                              </div>
                            </div>
                          </div>
                      </form>
                      </div>
                    </div>
                    <!-- Panel Widget -->
                    <!--<div class="register-panel text-center font-semibold"> <a href="pages-register.html">CREATE AN ACCOUNT<span class="menu-icon"><i class="fa fa-angle-double-right fa-fw"></i></span></a> </div>
            </div>-->
                    <!-- vd_login-page -->

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
        <!--<footer class="footer-2"  id="footer">      
    <div class="vd_bottom ">
        <div class="container">
            <div class="row">
              <div class=" col-xs-12">
                <div class="copyright text-center">
                  	Copyright &copy;2014 Venmond Inc. All Rights Reserved 
                </div>
              </div>
            </div>
        </div>
    </div>
  </footer>-->
        <!-- Footer END -->

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
      <!--<script type="text/javascript" src="js/bootstrap.min.js"></script>-->
      <script type="text/javascript" src="js/mdb.min.js"></script>
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
    
      <!-- Specific Page Scripts END -->


<script>
function validate()
{
//alert("Ok!"); return false;
var email=document.getElementById("admin_username").value;
var password=document.getElementById("admin_password").value;

if(email==""){		
//alert("Last Name is required!");  
document.getElementById("error_msg1").innerHTML="Username is Required!";
document.getElementById("admin_username").style.border="2px solid red";
return false; 		
}

if(password==""){		
//alert("Designation is required!");  
document.getElementById("error_msg2").innerHTML="Password is Required!";
document.getElementById("admin_password").style.border="2px solid red";
return false; 		
}

}
</script>

      <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->

    
      <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.0/js/mdb.min.js"></script>
</body>

</html>