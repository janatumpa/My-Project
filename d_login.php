<?php
	include"config/connect.php";
		//emaillog passwordlog submit Login
		if($_POST['submit']=="Log In") {
			$email =$_POST['email'];
			$password = $_POST['pwd'];
					//Checking Email  With Database
					$FetchUserSql = "SELECT * FROM pro_dev_registration WHERE Email_Id = '".$email."' AND Pwd = '".base64_encode($password)."' AND DevStatus = 'Yes' AND EmailVerification = 'Yes'";
					$FetchUserQuery = mysql_query($FetchUserSql);
					$NumRows = mysql_num_rows($FetchUserQuery);
					if($NumRows>0) {
					$FetchRows = mysql_fetch_array($FetchUserQuery);
					//$_SESSION['username'] = $FetchRows['email'];
					$_SESSION['userid'] = $FetchRows['D_id'];
					$_SESSION['loggedIn'] = $FetchRows['Email_Id'];
					//$_SESSION['useremail'] = $fetch['email'];
					$cookievalue = $_SESSION['userid']."@@".$_SESSION['loggedIn'];
					if($_REQUEST['rem'] == 'yes')
					{
						setcookie("UserCookie",$cookievalue,time()+30*24*60*60);
					}
						header("location:dev_dashboard/index.php?login=successful");
				} else {
						header("location:d_login.php?login=fail");
				}
		}
?>
	<html>

	<head>
		<title>welcome</title>
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
	</head>

	<body>

		<section class="con1">
			<?php include'header.php';?>


			<div class="cardhome11">



				<div class="login">
					<h2 class="title-text"><span class="txtclr1">Log In As Developer</span></h2>

					<?php
		if($_REQUEST['login']!='') {
	   ?>
						<p style="color:#ff0000;">Email Id/ Password Invalid!</p>
						<?php
	}
	?>
							<form name="loginfrm" onSubmit="return valid()" class="login-container" method="post" action="<?=$_SERVER['PHP_SELF']?>">
								<!--<p><input type="email" name="email" id="email" onBlur="return checkEmail()" placeholder="Email">
									<div id="d1"></div>
								</p>-->
								<p>
									<div class="md-form">


										<input type="email" class="form-control" name="email" id="email" onBlur="return checkEmail()">
										<div id="d1"></div>
										<label for="form1" class="" id="mail">Email</label>


									</div>
								</p>
								<!--<p><input type="password" name="pwd" id="pwd" placeholder="Password"></p>-->
								<!--<p><input type="submit" name="submit" value="Log In"></p>-->

								<div class="md-form">
									<input type="password" class="form-control" name="pwd" id="pwd">
									<label for="form1" class="" id="pw">Password</label>
								</div>
								<br>

								<br>

								<div class="text-center">
									<button type="submit" name="submit" value="Log In" class="submit1 slog">LOGIN</button>
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