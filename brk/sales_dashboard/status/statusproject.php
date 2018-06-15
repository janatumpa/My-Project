<?php 
include("../../config/connect.php");

$id = $_REQUEST['id'];
if($_REQUEST['stat']=="true"){
    $stat = 'working';
}elseif($_REQUEST['stat']=="true1"){
    $stat = 'complete';
}if($_REQUEST['stat']=="false"){
    $stat = 'pending';
}elseif($_REQUEST['stat']=="false1"){
    $stat = 'live';
}
//$stat = $_REQUEST['stat'] == 'true' ? 'live' : 'complete' : 'pending' : 'working' ;		

$updatestat = "UPDATE ".TABLE_PREFIX."project SET ProStatus = '".$stat."' WHERE P_id = '".$id."'";
mysql_query($updatestat) or die(mysql_error());
?>