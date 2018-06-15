<?php
include '../../config/connect.php';

$id=$_REQUEST['id'];

 $abc=  mysql_query("delete from pro_sale_registration where S_id='$id'");
   
   header('location:../sale_list.php');
    
   


?>