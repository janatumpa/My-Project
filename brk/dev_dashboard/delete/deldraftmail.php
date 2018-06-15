<?php
include '../../config/connect.php';

$id=$_REQUEST['id'];

 $abc=  mysql_query("delete from ".TABLE_PREFIX."draft where Draft_Id='$id'");
   
   header('location:../draftmail.php');
    
   


?>