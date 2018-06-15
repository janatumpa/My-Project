<?php 
include("../../config/connect.php");

$id = $_REQUEST['id'];
$stat = $_REQUEST['stat'];	

$updatestat = "UPDATE ".TABLE_PREFIX."dev_registration SET EmailVerification = '".$stat."' WHERE D_id = '".$id."'";
mysql_query($updatestat) or die(mysql_error());
?>