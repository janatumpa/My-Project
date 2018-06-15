<?php
	include"../../config/connect.php";
	    $password = $_POST['d_pwd'];
		$pwdbase64 = base64_encode($password);

			if($_REQUEST['submit']=="Finish") 
            {  
				   $InsertRegSql="UPDATE pro_dev_registration  SET  
										  Dev_Name= '".$_REQUEST['d_name']."',
										  Pwd= '$pwdbase64',
										  Phone_No='".$_REQUEST['d_phn']."',
										   Role='".$_REQUEST['d_role1']."',
										  designation='".$_REQUEST['d_designation']."',
                                          D_address='".$_REQUEST['d_add']."',
										  D_Username= '".$_REQUEST['d_username']."',
										  D_State='".$_REQUEST['d_state']."',
										  D_Zip='".$_REQUEST['d_zip']."',
										  D_FB='".$_REQUEST['d_fb']."',
										  D_LI='".$_REQUEST['d_li']."',
										  D_TW='".$_REQUEST['d_tw']."',
										  D_Gen='".$_REQUEST['d_gen']."',
                                          D_Marital='".$_REQUEST['d_marital']."'
										  
										  WHERE D_id = '".$_SESSION['userid']."'
										";
										//exit();
																				
						mysql_query($InsertRegSql) or mysql_error();
					
					
						$_SESSION['msg'] = "Profile Update Successful";
						echo '<script language="javascript">';
						echo 'window.location="../profile.php?mess=successfulupdate"';
						echo '</script>';
						
						}
						else
						{
						 $mess = "E-Mail/User Name already exists.Try another one! ";
						}
            
?>			