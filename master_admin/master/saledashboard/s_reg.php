<?php
	include"config/connect.php";
	
	//Registration
	 if($_POST['submit']=="SUBMIT") 
     {
		
		
	
						//Registration No.
			   
				/*$ip = $_SERVER['REMOTE_ADDR'];*/
				/*$date = date('d-m-Y g:i:s a');*/ 
				$usercreationdate = date('Y-m-d');
				/* unicId */
				$prefix = "Sales" . date("y") . date("m");
				$pl = strlen($prefix);
				$ql = $pl + 1;
				$rn = "SELECT MAX(SUBSTR(SaleReg_No,$ql)) FROM  pro_sale_registration where SaleReg_No like '%$prefix%'";
				$res_rn = mysql_query($rn);
				$row_rn = mysql_fetch_array($res_rn);
				$id = $row_rn['0'];
				$id = $id + 1;
				$leadingzeros = '00000';
				$SaleReg_No = $prefix . substr($leadingzeros, 0, (-strlen($id))) . $id;
						           	
				$s_name = $_POST['name'];
				$sale_id = $_POST['emp_id'];
				$s_email =$_POST['email'];
				$s_phone = $_POST['phone'];
				$s_doj =date('Y-m-d',strtotime($_POST['s_doj']));
                $s_pwd = $_POST['pwd'];
				$s_role =$_POST['s_role'];
				/*$address = addslashes($_REQUEST['add']);*/
				
							
				//Checking Email Unique//
				$CheckEmailSql = "SELECT EmailId FROM  pro_sale_registration WHERE EmailId = '".$s_email."'";
				$CheckEmailQuery=mysql_query($CheckEmailSql) or mysql_error();
				$CheckEmailRow=mysql_num_rows($CheckEmailQuery);
			
			
				if($CheckEmailRow=="0")
				{
				
			    $InsertRegSql="INSERT INTO pro_sale_registration SET 
																					SaleReg_No = '".$SaleReg_No."' ,																				
																					Sale_Name = '".$s_name."' ,
																					Sale_id = '".$sale_id."' ,
																					EmailId = '".$s_email."' , 
																					S_image='',
																					S_address='',
                                                                                    PhoneNo ='".$s_phone."',
																					Password = '".base64_encode($s_pwd)."' , 
																					Role = '".$s_role."',
																					s_doj = '".$s_doj."' ,
																					RegistDate = NOW() , 																	
                                                                                 EmailVerification = 'No' ,
																					SaleStatus = 'Yes'

																					";
																				//exit();
					mysql_query($InsertRegSql) or die(mysql_error());

						
						// End Php mailer
						
			//PHP MAIL FUNCTION

						$to = $s_email;
						$subject = "Account Verification E-mail";

						$message = "
									<!DOCTYPE html>
									<html>
									<head>
									<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
									<meta name='viewport' content='width=device-width, initial-scale=1' />
									<title>MeMe Developer Confirm Email</title>


									<style type='text/css'>

									img {
									max-width: 600px;
									outline: none;
									text-decoration: none;
									-ms-interpolation-mode: bicubic;
									}

									a img { border: none; }
									table { border-collapse: collapse !important; }
									#outlook a { padding:0; }
									.ReadMsgBody { width: 100%; }
									.ExternalClass {width:100%;}
									.backgroundTable {margin:0 auto; padding:0; width:100%;}
									table td {border-collapse: collapse;}
									.ExternalClass * {line-height: 115%;}


									/* General styling */

									td {
									font-family: Arial, sans-serif;
									color: #6f6f6f;
									}

									body {
									-webkit-font-smoothing:antialiased;
									-webkit-text-size-adjust:none;
									width: 100%;
									height: 100%;
									color: #6f6f6f;
									font-weight: 400;
									font-size: 18px;
									}


									h1 {
									margin: 10px 0;
									}

									a {
									color: #27aa90;
									text-decoration: none;
									}

									.force-full-width {
									width: 100% !important;
									}

									.force-width-80 {
									width: 80% !important;
									}


									.body-padding {
									padding: 0 75px;
									}

									.mobile-align {
									text-align: right;
									}



									</style>

									<style type='text/css' media='screen'>
									@media screen {
									@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,900);
									/* Thanks Outlook 2013! */
									* {
									font-family: 'Source Sans Pro', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
									}
									.w280 {
									width: 280px !important;
									}

									}
									</style>

									<style type='text/css' media='only screen and (max-width: 480px)'>
									/* Mobile styles */
									@media only screen and (max-width: 480px) {

									table[class*='w320'] {
									width: 320px !important;
									}

									td[class*='w320'] {
									width: 280px !important;
									padding-left: 20px !important;
									padding-right: 20px !important;
									}

									img[class*='w320'] {
									width: 250px !important;
									height: 67px !important;
									}

									td[class*='mobile-spacing'] {
									padding-top: 10px !important;
									padding-bottom: 10px !important;
									}

									*[class*='mobile-hide'] {
									display: none !important;
									}

									*[class*='mobile-br'] {
									font-size: 12px !important;
									}

									td[class*='mobile-w20'] {
									width: 20px !important;
									}

									img[class*='mobile-w20'] {
									width: 20px !important;
									}

									td[class*='mobile-center'] {
									text-align: center !important;
									}

									table[class*='w100p'] {
									width: 100% !important;
									}

									td[class*='activate-now'] {
									padding-right: 0 !important;
									padding-top: 20px !important;
									}

									td[class*='mobile-block'] {
									display: block !important;
									}

									td[class*='mobile-align'] {
									text-align: left !important;
									}

									}
									</style>
									</head>
									<body  class='body' style='padding:0; margin:0; display:block; background:#eeebeb; -webkit-text-size-adjust:none;' bgcolor='#eeebeb'>
									<table align='center' cellpadding='0' cellspacing='0' width='100%'>
									<tr>
									<td align='center' valign='top' style='background-color:#eeebeb' width='100%'>

									<center>

									<table cellspacing='0' cellpadding='0' width='600' class='w320'>
									<tr>
									<td align='center' valign='top'>


									<table style='margin:0 auto;' cellspacing='0' cellpadding='0' width='100%'>
									<tr>
									<td style='text-align: center;'>
									<a href='#'><img class='w320' width='311' height='83' src='images/headerlogo.png' alt='company logo' /></a>
									</td>
									</tr>
									</table>


									<table cellspacing='0' cellpadding='0' class='force-full-width' style='background-color:#3bcdb0;'>
									<tr>
									<td style='background-color:#3bcdb0;'>

									<table cellspacing='0' cellpadding='0' class='force-full-width'>
									<tr>
									<td style='font-size:40px; font-weight: 600; color: #ffffff; text-align:center;' class='mobile-spacing'>
									<div class='mobile-br'>&nbsp;</div>
									Hi $s_name, Your Registration Process Done!
									<br/>
									</td>
									</tr>
									<tr>
									<td style='font-size:24px; text-align:center; padding: 0 75px; color: #6f6f6f;' class='w320 mobile-spacing'>
									Please click on the button to verify your account.
									</td>
									</tr>
									</table>

									<table cellspacing='0' cellpadding='0' width='100%'>
									<tr>
									<td>
									<img src='images/newbg_07.gif' style='max-width:100%; display:block;'>
									</td>
									</tr>
									</table>

									</td>
									</tr>
									</table>

									<table cellspacing='0' cellpadding='0' class='force-full-width' bgcolor='#ffffff' >
									<tr>
									<td style='background-color:#ffffff; padding-top: 15px;'>

									<center>

									<table style='margin:0 auto;' cellspacing='0' cellpadding='0' class='force-width-80'>
									<tr>
									<td  class='mobile-block'>

									<table cellspacing='0' cellpadding='0' class='force-full-width'>
									<tr>
									<td style='border-bottom:1px solid #e3e3e3; font-weight: bold; text-align:left'>
									Account Activation
									</td>
									</tr>
									</table>
									</td>
									</tr>
									</table>


									<table style='margin: 0 auto;' cellspacing='0' cellpadding='0' class='force-width-80'>
									<tr>
									<td style='text-align: left;'>
									<br>
									To activate your developer account please click on the below button.<br><br>
									MeMe Infotech Pvt Ltd.
									</td>
									</tr>
									</table>
									</center>

									<table style='margin:0 auto;' cellspacing='0' cellpadding='10' width='100%'>
									<tr>
									<td style='text-align:center; margin:0 auto;'>
									<br>
									<div><!--[if mso]>
									<v:rect xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word' href='#' style='height:45px;v-text-anchor:middle;width:180px;' stroke='f' fillcolor='#f5774e'>
									<w:anchorlock/>
									<center>
									<![endif]-->
									<a href='http://staging.memeinfotech.com/projectmanage/s_thankyou.php?account=activated&email=".$s_email."'
									style='background-color:#f5774e;color:#ffffff;display:inline-block;font-family:'Source Sans Pro', Helvetica, Arial, sans-serif;font-size:18px;font-weight:400;line-height:45px;text-align:center;text-decoration:none;width:180px;-webkit-text-size-adjust:none;'>Activate Account</a>
									<!--[if mso]>
									</center>
									</v:rect>
									<![endif]--></div>
									<br>
									</td>
									</tr>
									</table>
									</td>
									</tr>
									</table>
									</td>
									</tr>
									</table>
									</center>
									</td>
									</tr>
									</table>
									</body>
									</html>
									";

						// Always set content-type when sending HTML email
						$headers = "MIME-Version: 1.0" . "\r\n";
						$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

						// More headers
						$headers .= 'From: <info@memeinfotech.com>' . "\r\n";

						mail($to,$subject,$message,$headers);

						
						
						echo '<script language="javascript">';
						echo 'window.location="s_reg.php?mess=successful"';
						echo '</script>';
						
						} else{
								echo '<script language="javascript">';
								echo 'window.location="s_reg.php?mess=registrationunsuccessful"';
								echo '</script>';
							  }
	
	}
	
		
?>

<html>

<head>
    <title>welcome</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		
		<link rel="stylesheet" href="css/custom.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

		<link rel="stylesheet" href="css/custom.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/login.css">
		<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="css/mdb.min.css">

		<link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

		<script src="js/custom.js"></script>
		<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>

<body >

	  <section class="con1 height114 heightresback">
  
    <?php include'header.php';?>


    <div class="cardhome1 height86">
       
   

  



<form name="reg" method="post"  onSubmit="return regvalid()" id="paddingtop3">
 <h2 class="title-text text-center"><span class="txtclr1">Registration Form</span></h2>
  <?php if(isset($_REQUEST['mess'])){ ?>
					<p style="color:#CD3E4F; font-size:18px;">
						<?php echo 'Registration Successful Check your Emailid ' ?>
					</p>
					<?php } ?>
      
 <!--<input type="text" name="name" id="name" placeholder="Name" onKeyPress="javascript:return checkName(event) "/>
  <label id="error_name" class="red" ></label>-->
  <div class="md-form">
						<input type="text" name="name" id="name" class="form-control" onKeyPress="javascript:return checkName(event) " />
						<label   for="form1" class="" id="mail">Name</label>
					
<span id="error_name" class="red" ></span>
</div>

 <!--<input type="text" name="emp_id" id="emp_id" placeholder="Employee Id"  />
  <label id="error_emp_id" class="red" ></label>
 -->
 <div class="md-form">
					<!--<input type="text" name="dev_id" id="dev_id" placeholder="Developer Id"/>-->
					<input type="text" class="form-control" name="emp_id" id="emp_id"  />
					<label   for="form1" class="" id="mail">Employee Id</label>
					<span id="error_emp_id" class="red"></span>
</div>
 <!--<input type="text" name="email" id="email" placeholder="Email" onKeyUp="javascript:return mailval() "/>
   <label id="error_email" class="red" ></label>-->
   <div class="md-form">
					<input type="text" name="email" id="email"  onKeyUp="javascript:return mailval() " />
				<label   for="form1" class="" id="mail">Email Id</label>
					<span id="error_email" class="red"></span>
</div>
 
 <!--<input type="text" name="phone" id="phone" placeholder="Phone No" maxlength="11" onkeypress="return Validate(event)" />
   <label id="error_phone" class="red" ></label>-->
   <div class="md-form">
					<input type="text" name="phone" id="phone"  maxlength="11" onkeypress="return Validate(event)"
					/>
					<label   for="form1" class="" id="mail">Phone no</label>
					<span id="error_phone" class="red"></span>
</div>
 
  <!--<input type="text" name="s_position" id="s_position" placeholder="Position"/>
    <label id="error_s_position" class="red" ></label>
  -->
  <div class="md-form">
					
				<!--<input type="text" name="dev_id" id="dev_id" placeholder="Developer Id"/>-->
				<select name="s_role" id="s_role" style="
				 width: 100%;
    padding: 15px;
    border-bottom: 1px solid #ccc !important;
    border: none;
	color: #757575;
	  left: 0;
	
	     
    font-size: 1rem;
    cursor: text;" > 
				<option value="0">Role</option>
				<option value="Manager">Manager</option>
				<option value="Sale">Sale</option>
					<!--<input type="text" class="form-control" name="s_role" id="s_role"  />
					<label   for="form1" class="" id="mail">Role</label>
					<span id="error_s_role" class="red"></span>-->
					</select>
</div>

 <!--<input type="password" name="pwd" id="pwd" placeholder="Password"/>
   <label id="error_pwd" class="red" ></label>
 --><div class="md-form">
					<input type="password" name="pwd" id="pwd"  onKeyUp="javascript:return conpwdval_d()"
					/>
					<label   for="form1" class="" id="mail"> Password</label>
					<span id="error_pwd" class="red"></span>
</div>
  <!--<input type="password" name="c_pwd" id="c_pwd" placeholder="Confirm Password"  onKeyUp="javascript:return conpwdval()"/>
    <label id="error_c_pwd" class="red" ></label>-->
	<div class="md-form">
					<input type="password" name="c_pwd" id="c_pwd"  onKeyUp="javascript:return conpwdval()"
					/>
					<label   for="form1" class="" id="mail">Confirm Password</label>
					<span id="error_c_pwd" class="red"></span>
</div>
<div class="md-form">
						<input type="text" name="s_doj" id="datepicker" required />
						<label for="form1" class="" id="mail">Date Of Joining</label>
						
					</div>
  
 <!--<input type="submit" name="submit" value="SUBMIT"/></fieldset>-->
 <div class="text-center">
									<button type="submit"  name="submit" value="SUBMIT" class="submit1 slog">Submit</button>
									<button type="button" class=" submit1 slog bck">Cancel</button>
								</div>
</form>
 
    </div>
<br>
        <br>
        <br>
        <br>
        <br>
</section>
 <?php include'footer.php';?>
<script src="js/need.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/mdb.min.js"></script>
		
</body>
</html>