	<?php
	include"config/connect.php";
	    $password = $_POST['s_pwd'];
		$pwdbase64 = base64_encode($password);

			if($_REQUEST['submit']=="submit") 
            {  
				   $InsertRegSql="UPDATE pro_sale_registration  SET  
										 
										  Password= '$pwdbase64'
										
                                          WHERE S_id = '".$_SESSION['userid']."'
										";
										//exit();
																				
						mysql_query($InsertRegSql) or mysql_error();
					
					
						$_SESSION['msg'] = "Profile Update Successful";
						echo '<script language="javascript">';
						echo 'window.location="s_login.php?mess=successfulupdate"';
						echo '</script>';
						
						}
						else
						{
						 $mess = "E-Mail/User Name already exists.Try another one! ";
						}
            
?>			
	<html>

	<head>
		<title>Forget Password</title>
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

                    <form id="paddingtop3" name="loginfrm" onSubmit="return valid()" class="login-container" method="post" action="<?=$_SERVER['PHP_SELF']?>">
                        <div class="md-form">
                            <input type="password" class="form-control" name="s_pwd" id="s_pwdz">
                            <label for="form1" class="" id="pw">Enter Your New Password</label>
                        </div>
                        
                    
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