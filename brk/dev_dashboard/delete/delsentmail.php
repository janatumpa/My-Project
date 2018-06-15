<?php
include '../../config/connect.php';

$id=$_REQUEST['id'];

 $abc=  mysql_query("delete from pro_inbox where M_Id='$id'");
   
   header('location:../sentmail.php');
 
?>