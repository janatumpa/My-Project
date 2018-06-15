<?php
include '../../config/connect.php';

$id=$_REQUEST['id'];

 $abc=  mysql_query("delete from pro_customer where c_id='$id'");
   
   header('location:../client_list.php');
    
   


?>