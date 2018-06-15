<?php
include '../../config/connect.php';

$id=$_REQUEST['id'];

 $abc=  mysql_query("delete from pro_dev_registration where D_id='$id'");
   
   header('location:../dev_list.php');
    
   


?>