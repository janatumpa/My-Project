<?php
	include"../../config/connect.php";

	 if($_POST['submit']=="SUBMIT") 
     {
		        $usercreationdate = date('Y-m-d');
				/* unicId */
				$prefix = "MeMe" . date("y") . date("m");
				$pl = strlen($prefix);
				$ql = $pl + 1;
				$rn = "SELECT MAX(SUBSTR(DevReg_No,$ql)) FROM  pro_dev_registration where DevReg_No like '%$prefix%'";
				$res_rn = mysql_query($rn);
				$row_rn = mysql_fetch_array($res_rn);
				$id = $row_rn['0'];
				$id = $id + 1;
				$leadingzeros = '00000';
				$DevReg_No = $prefix . substr($leadingzeros, 0, (-strlen($id))) . $id;
						           	
				$d_name = $_POST['name'];
				$d_id = $_POST['eid'];
				$d_email =$_POST['email'];
				$d_phone = $_POST['phn'];
				$d_role1 =$_POST['d_role1'];
				$d_designation =$_POST['d_designation'];
                $d_pwd = $_POST['pwd'];
				
							
				//Checking Email Unique//
				$CheckEmailSql = "SELECT Email_Id FROM  pro_dev_registration WHERE Email_Id = '".$d_email."'";
				$CheckEmailQuery=mysql_query($CheckEmailSql) or mysql_error();
				$CheckEmailRow=mysql_num_rows($CheckEmailQuery);
			
			
				if($CheckEmailRow=="0")
				{
				
		        $InsertRegSql="INSERT INTO pro_dev_registration SET 
																					DevReg_No = '".$DevReg_No."' ,																				
																					Dev_Name = '".$d_name."' ,
																					Developer_id = '".$d_id."' ,
																					Email_Id = '".$d_email."' , 
                                                                                    Phone_No ='".$d_phone."',
																					Role = '".$d_role1."',
																					designation = '".$d_designation."',
                                                                                    Pwd = '".base64_encode($d_pwd)."' , 
																					RegistDate = NOW() , 
                                                                                    admin_user = 'admin',
																					EmailVerification = 'Yes' , 												
																					DevStatus = 'Yes' 
																					";
																			//	exit();
																					
					   mysql_query($InsertRegSql) or die(mysql_error());

						
						// End Php mailer
						
						echo '<script language="javascript">';
						echo 'window.location="../dev_list.php?mess=successful"';
						echo '</script>';
						
						}

						else
						{
                            echo '<script language="javascript">';
						    echo 'window.location="../dev_add.php?mess=Email_Address_Already_Exists.Try_another_one!"';
						    echo '</script>';
						 $mess = "E-Mail already exists.Try another one! ";
						  

						}
	
	}
	
	
		
?>