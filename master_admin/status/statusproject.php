<?php 
include("../../config/connect.php");

$id = $_REQUEST['id'];
$stat = $_REQUEST['stat'];	

$updatestat = "UPDATE ".TABLE_PREFIX."project SET ProStatus = '".$stat."' WHERE P_id = '".$id."'";
mysql_query($updatestat) or die(mysql_error());
?>