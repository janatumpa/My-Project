<?php
	include"config/connect.php";

	 if($_POST['submit']=="SUBMIT") 
     {
		        $usercreationdate = date('Y-m-d');
				/* unicId */
				$prefix = "Dev" . date("y") . date("m");
				$pl = strlen($prefix);
				$ql = $pl + 1;
				$rn = "SELECT MAX(SUBSTR(DevReg_No,$ql)) FROM  pro_dev_registration where DevReg_No like '%$prefix%'";
				$res_rn = mysql_query($rn);
				$row_rn = mysql_fetch_array($res_rn);
				$id = $row_rn['0'];
				$id = $id + 1;
				$leadingzeros = '00000';
				$DevReg_No = $prefix . substr($leadingzeros, 0, (-strlen($id))) . $id;
						           	
				$d_name = $_POST['d_name'];
				$d_id = $_POST['dev_id'];
				$d_email =$_POST['d_email'];
				$d_phone = $_POST['d_phone'];
				$d_Role = $_POST['d_role1'];
				$d_designation =$_POST['d_designation'];
                $d_pwd = $_POST['d_pwd'];
				$d_doj = date('Y-m-d', strtotime($_POST['d_doj']));
				
							
				//Checking Email Unique//
				$CheckEmailSql = "SELECT Email_Id, Developer_id FROM  pro_dev_registration WHERE Email_Id = '".$d_email."' AND Developer_id = '".$d_id."'";
				$CheckEmailQuery=mysql_query($CheckEmailSql) or mysql_error();
				$CheckEmailRow=mysql_num_rows($CheckEmailQuery);
			
			
				if($CheckEmailRow=="0")
				{
				
		       $InsertRegSql="INSERT INTO pro_dev_registration SET 
																		DevReg_No = '".$DevReg_No."' ,																				
																		Dev_Name = '".$d_name."' ,
																		Developer_id = '".$d_id."' ,
																		Email_Id = '".$d_email."' , 
																		Phone_No ='".$d_phone."',
																		Role ='".$d_Role."',
																		designation = '".$d_designation."',
																		Pwd = '".base64_encode($d_pwd)."' , 
																	    d_doj = '".($d_doj)."' ,
																		RegistDate = NOW() , 
																		EmailVerification = 'No' , 												
																		DevStatus = 'Yes' 
																		";
																				//exit();
																					
					   mysql_query($InsertRegSql) or die(mysql_error());

						
						//PHP MAIL FUNCTION

						$to = $d_email;
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
									Hi $d_name, Your Registration Process Done!
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
									<a href='http://staging.memeinfotech.com/ProjectManage/thankyou.php?account=activated&email=".$d_email."'
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
						echo 'window.location="d_login.php?mess=successful"';
						echo '</script>';
						
						} else{
								echo '<script language="javascript">';
								echo 'window.location="d_login.php?mess=registrationunsuccessful"';
								echo '</script>';
							  }
	
	}
	
	
		
?>
	<html>

	<head>
		<title>MeMe Project Management</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">


		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<link rel="stylesheet" href="css/custom.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/login.css">
		<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="css/mdb.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>

		<script src="js/custom.js"></script>
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

	<body>
		<section class="con1 height114 heightresback " id="marginbottom20">
			<?php include'header.php';?>


			<div class="cardhome1 heightres">

				<form name="reg" method="post" onSubmit="return new_d()" id="paddingtop3">
					<h2 class="title-text text-center"><span class="txtclr1">Registration Form</span></h2>
					<!--<?php if(isset($mess)!=""){ ?>
					<p style="color:#CD3E4F; font-size:18px;">
						<?=$mess?>
					</p>
					<?php } ?>-->


					<div class="md-form">
						<input type="text" name="d_name" id="d_name" class="form-control" onKeyPress="javascript:return checkName_d(event) " />
						<label for="form1" class="" id="mail" style="margin-top: 12px;">Name</label>

						<span id="error_d_name" class="red"></span>
					</div>


					<div class="md-form">
						<!--<input type="text" name="dev_id" id="dev_id" placeholder="Developer Id"/>-->
						<input type="text" class="form-control" name="dev_id" id="dev_id" />
						<label for="form1" class="" id="mail">Developer Id</label>
						<span id="error_dev_id" class="red"></span>
					</div>
					<div class="md-form">
						<input type="text" name="d_email" id="d_email" onKeyUp="javascript:return mailval_d() " />
						<label for="form1" class="" id="mail">Email Id</label>
						<span id="error_d_email" class="red"></span>
					</div>
					<!--<input type="text" name="d_phone" id="d_phone" placeholder="Phone No"/>-->

					<div class="md-form">
						<input type="text" name="d_phone" id="d_phone" maxlength="11" onkeypress="return Validate_d(event)" />
						<label for="form1" class="" id="mail">Phone no</label>
						<span id="error_d_phone" class="red"></span>
					</div>

					
                   	<select name="d_role1" id="d_role" style="
					   width: 100%;
					   padding: 15px;
					   border-bottom:1px solid #ccc !important;
					   border: none;
					   color: #757575;
					   font-size: 1rem;" >
                       <option value="0">Role</option>
						<option value="Manager">Manager</option>
						<option value="Employee">Employee</option>
			    </select>
			
					<select name="d_designation" id="d_designation" style=" color: #757575;
					   font-size: 1rem;">
                       <option value="0">Vertical</option>
						<option value="Php">Php</option>
						<option value="Web Designer">Web Designer</option>
						<option value="User Interface/User Experience" >User Interface/User Experience</option>
						<option value="Angular Js">Angular Js</option>
						<option value="IOT">IOT</option>
			    </select>
                

					<div class=" md-form">
						<input type="password" name="d_pwd" id="d_pwd" />
						<label for="form1" class="" id="mail">Password</label>
						<span id="error_d_pwd" class="red"></span>
					</div>
					<div class="md-form">
						<input type="password" name="dc_pwd" id="dc_pwd" onKeyUp="javascript:return conpwdval_d()" />
						<label for="form1" class="" id="mail">Confirm Password</label>
						<span id="error_dc_pwd" class="red"></span>
					</div>
					<div class="md-form">
						<input type="text" name="d_doj" id="datepicker"/>
						<label for="form1" class="" id="mail">joining Date</label>
						
					</div>
					<!--<input type="password" name="dc_pwd" id="dc_pwd" placeholder="Confirm Password"/>-->
					<br>
					<!--<input type="submit" name="submit" value="SUBMIT" />-->
					<div class="text-center">
						<button type="submit" name="submit" value="SUBMIT" class="submit1 slog">Submit</button>
						<button type="button" class=" submit1 slog bck">Cancel</button>
					</div>

				</form>



			</div>

		</section>
		<?php include'footer.php';?>
		<script src="js/need.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/mdb.min.js"></script>

	</body>

	</html>