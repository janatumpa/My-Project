<?php
include("../config/connect.php");
unset($_SESSION['userid']);
unset($_SESSION['loggedIn']);
setcookie("UserCookie",'',time());
header("location:../index.php");
?>