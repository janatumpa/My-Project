<?php
	include"../../config/connect.php";
	    $password = $_POST['s_pwd'];
		$pwdbase64 = base64_encode($password);

			if($_REQUEST['submit']=="Finish") 
            {  
				   $InsertRegSql="UPDATE pro_sale_registration  SET  
										  Sale_Name= '".$_REQUEST['s_name']."',
										  Password= '$pwdbase64',
										  PhoneNo='".$_REQUEST['s_phn']."',
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
										  
										  WHERE S_id = '".$_SESSION['userid']."'
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