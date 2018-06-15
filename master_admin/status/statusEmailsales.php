<?php 
include("../../config/connect.php");

$id = $_REQUEST['id'];
$stat = $_REQUEST['stat'];	

$updatestat = "UPDATE ".TABLE_PREFIX."sale_registration SET EmailVerification = '".$stat."' WHERE S_id = '".$id."'";
mysql_query($updatestat) or die(mysql_error());
?>