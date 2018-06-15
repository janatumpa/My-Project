<?php
	include"config/connect.php";
	$email = mysql_real_escape_string($_REQUEST['email']);
	mysql_query("UPDATE pro_sale_registration SET EmailVerification='Yes' WHERE EmailId='".$email."'");
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
	<style>
	img.img-responsive {
    width: auto;
    margin: 0 auto;
    margin-top: 31px;
}
	</style>

	<body>
		<section class="con1">
			<?php include'header.php';?>
				<img src="images/thanks.png" class="img-responsive">
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