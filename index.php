<?php
	include"config/connect.php";
		//emaillog passwordlog submit Login
		if($_POST['submit']=="Log In") {
			$d_email =$_POST['email'];
			$d_password = $_POST['pwd'];
					//Checking Email  With Database
					$FetchUserSql = "SELECT * FROM pro_dev_registration WHERE Email_Id = '".$d_email."' AND Pwd = '".base64_encode($d_password)."' AND DevStatus = 'Yes' AND EmailVerification = 'Yes'";
					$FetchUserQuery = mysql_query($FetchUserSql);
					$NumRows = mysql_num_rows($FetchUserQuery);
					if($NumRows>0) {
					$FetchRows = mysql_fetch_array($FetchUserQuery);
					//$_SESSION['username'] = $FetchRows['email'];
					$_SESSION['userid'] = $FetchRows['Uid'];
					$_SESSION['loggedIn'] = $fetch['email'];
					//$_SESSION['useremail'] = $fetch['email'];
					$cookievalue = $_SESSION['userid']."@@".$_SESSION['loggedIn'];
					if($_REQUEST['rem'] == 'yes')
					{
						setcookie("UserCookie",$cookievalue,time()+30*24*60*60);
					}
						header("location:index.php?login=successful");
				} else {
					header("location:d_login.php?login=fail");
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
    <link rel="stylesheet" href="css/custom.css">
     <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    <script src="js/need.js"></script>

</head>

<body >
     <section class="con1">
  
    <?php include'header.php';?>


    <div class="cardhome1">
        <img class="card-img-top" src="images/Login-MeMeasstpng.png" alt="Card image cap">
        <div class="card-block">

            <h3 class="para1 text-center">Log into your dashboard</h3>
<!--<div class="button">
     <div class="col-md-5 btn11 col-md-pull-1 ">
                <a href="dev_login.php"><button type="button" class=" info">Developer Login</button></a>
        </div>
        <div class="btn11 col-md-5 col-md-push-1 ">
            <a href="sale_login.php"><span class="slogin">
                    <button type="button" class="success"> Sales Login </button></a>
        </div>


    </div>-->

   <div class="text-center">
  <a href="s_login.php">  <button  type="button" class="btn btn-default slog" >Sales</button></a>
<a  href="d_login.php">   <button type="button" class="btn btn-default dlog" >Developer</button></a>
    </div>



    </div>
    </div>
     <br>
        <br>
        <br>
        <br>
        <br>
</section>
   <?php include'footer.php';?>


</body>