<?php
	include"config/connect.php";
		//emaillog passwordlog submit Login
		$d_email =$_POST['email'];
			
		//Checking Email  With Database
		if($_POST['submit']=="submit")
		{  
						$FetchUserSql = "SELECT * FROM pro_dev_registration WHERE Email_Id = '".$d_email."'";
						$FetchUserQuery = mysql_query($FetchUserSql);
						$NumRows = mysql_num_rows($FetchUserQuery);
						if($NumRows>0) {
									$FetchRows = mysql_fetch_array($FetchUserQuery);
									//$_SESSION['username'] = $FetchRows['email'];
									$_SESSION['userid'] = $FetchRows['D_id'];
									$_SESSION['loggedIn'] = $fetch['email'];
									//$_SESSION['useremail'] = $fetch['email'];
									$cookievalue = $_SESSION['userid']."@@".$_SESSION['loggedIn'];
									if($_REQUEST['rem'] == 'yes')
									{
										setcookie("UserCookie",$cookievalue,time()+30*24*60*60);
									}
										header("location:d_resetpwd.php");
						}
						else {
						header("location:dev_forgetpwd.php?login=fail");
							echo "<p>Login failed, username or password incorrect.</p>";
							$mess = "E-Mail already exists.Try another one! ";
						}
		}
		
?>
	<html>

	<head>
		<title>welcome</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

		<link rel="stylesheet" href="css/custom.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/login.css">
		<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="css/mdb.min.css">

		<link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>


		<!--
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>-->


	</head>

	<body>
		<section class="con1">
			<?php include'header.php';?>


			<div class="cardhome11 ">

				<div class="login">


					<h2 class="title-text"><span class="txtclr1">Forget Password</span></h2>



					<?php
		if($_REQUEST['login']!='') {
	   ?>
						<p style="color:#ff0000;">Email Id/ Password Invalid!</p>
						<?php
	}
	?>
							<form id="paddingtop3" name="loginfrm" onSubmit="return valid()" class="login-container" method="post" action="<?=$_SERVER['PHP_SELF']?>">
								<p>
									<div class="md-form">
                                        <input type="email" class="form-control" name="email" id="email" onBlur="return checkEmail()">
										<div id="d1"></div>
										<label for="form1" class="" id="mail">Enter Your Email Address</label>
                                    </div>
								</p>
								
							
								<div class="text-center">
									<button type="submit" name="submit" value="submit" class="submit1 slog">Submit</button>
									<button type="button" class=" submit1 slog bck">Cancel</button>
								</div>
								 

							</form>




				</div>

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