<?php
include '../../config/connect.php';

$id=$_REQUEST['id'];

 $abc=  mysql_query("delete from pro_project where p_id='$id'");
   
   header('location:../pro_list.php');
    
   


?>