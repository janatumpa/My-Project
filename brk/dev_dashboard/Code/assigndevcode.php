	<?php 
	include"../../config/connect.php";
session_start();

	if($_POST['submit']=="SUBMIT") 
            { 
 			 $id = $_POST['pid'];
            
            
			   $d_id=$_POST['dname'];


			$InsertRegSql="UPDATE pro_project  SET  
										   D_id= '".$_POST['dname']."',
										   assign_date=NOW()
                                           WHERE P_id = '".$id."'

								";
                //   exit();																			
						mysql_query($InsertRegSql) or mysql_error();
					
					
						$_SESSION['msg'] = "Profile Update Successful";
						echo '<script language="javascript">';
						echo 'window.location="../project_list.php?mess=successfulupdate"';
						echo '</script>';
						
			 }
			//  else
			// 	{
			// 	 $mess = " ";
			// 	}
            
?>	