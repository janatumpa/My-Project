<?php 
include("../../config/connect.php");

$id = $_REQUEST['id'];
$stat = $_REQUEST['stat'] == 'true' ? 'Yes' : 'No';	

$updatestat = "UPDATE ".TABLE_PREFIX."customer SET CusStatus = '".$stat."' WHERE C_id = '".$id."'";
mysql_query($updatestat) or die(mysql_error());
?>