	<?php 
	include"../../config/connect.php";
session_start();

	if($_POST['submit']=="SUBMIT") 
            { 
 			 $id = $_POST['pid'];
              $p_domain = $_POST['p_domain'];
              $p_name = $_POST['p_name'];
			  $c_name = $_POST['c_name'];
              $p_type = $_POST['p_type'];
              $p_category = $_POST['p_category'];


				 $InsertRegSql="UPDATE pro_project  SET  
										   Domain= '".$_POST['p_domain']."',
                                           Name='".$_POST['p_name']."',
										   C_Name='".$_POST['c_name']."',
                                           Type='".$_POST['p_type']."',
                                           Category='".$_POST['p_category']."'
                                           WHERE P_id = '".$id."'
								";
                //  exit();																				
						mysql_query($InsertRegSql) or mysql_error();
					
					
						$_SESSION['msg'] = "Profile Update Successful";
						echo '<script language="javascript">';
						echo 'window.location="../project_list.php?mess=successfulupdate"';
						echo '</script>';
						
			 }
			 else
				{
				 $mess = "E-Mail/User Name already exists.Try another one! ";
				}
            
?>	