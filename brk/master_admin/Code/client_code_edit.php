	<?php 
	include"../../config/connect.php";
session_start();

	if($_POST['submit']=="SUBMIT") 
            { 
 			 $id = $_POST['cid'];
              $name = $_POST['name'];
				$c_name = $_POST['c_name'];
				$c_location =$_POST['c_location'];
			    $c_phn = $_POST['c_phn'];
				$c_email =$_POST['c_email'];
                $c_business =$_POST['c_business'];


				 $InsertRegSql="UPDATE pro_customer  SET 
				                            
										 Name = '".$name."' ,
                                         Company = '".$c_name."' ,
										 Location = '".$c_location."' ,
										 Phone = '".$c_phn."' , 
                                         Email ='".$c_email."',
                                         Nature_of_business ='".$c_business."'
                                           WHERE C_id = '".$id."'
								";
                  //exit();																				
						mysql_query($InsertRegSql) or mysql_error();
					
					
						$_SESSION['msg'] = "Profile Update Successful";
						echo '<script language="javascript">';
						echo 'window.location="../client_list.php?mess=successfulupdate"';
						echo '</script>';
						
			 }
			 else
				{
				 $mess = "E-Mail/User Name already exists.Try another one! ";
				}
            
?>	