<?php
	include"../../config/connect.php";
	    $id = $_POST['sid'];
			if($_REQUEST['submit']=="Finish") 
            {  
				   $InsertRegSql="UPDATE pro_sale_registration  SET  
										  Sale_Name= '".$_REQUEST['s_name']."',
										  PhoneNo='".$_REQUEST['s_phn']."',
										  Sale_id = '".$_REQUEST['eid']."',
										  Role='".$_REQUEST['s_role']."',
                                          S_address='".$_REQUEST['s_add']."',
										  S_Username= '".$_REQUEST['s_username']."',
										  S_State='".$_REQUEST['s_state']."',
										  S_Zip='".$_REQUEST['s_zip']."',
										   S_FB='".$_REQUEST['s_fb']."',
										  S_LI='".$_REQUEST['s_li']."',
										  S_TW='".$_REQUEST['s_tw']."',
										  S_Gen='".$_REQUEST['s_gen']."',
                                          S_Marital='".$_REQUEST['s_marital']."'
										  
										  WHERE S_id = '".$id."'
										";
										//exit();
																				
						mysql_query($InsertRegSql) or mysql_error();
					
					
						$_SESSION['msg'] = "Profile Update Successful";
						echo '<script language="javascript">';
						echo 'window.location="../sale_list.php?mess=successfulupdate"';
						echo '</script>';
						
						}
						else
						{
						 $mess = "E-Mail/User Name already exists.Try another one! ";
						}
            
?>			