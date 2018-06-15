<?php
	include"../../config/connect.php";
	
	//Registration
	 if($_POST['submit']=="SUBMIT") 
     {
				$usercreationdate = date('Y-m-d');
				/* unicId */
				$prefix = "MeMe" . date("y") . date("m");
				$pl = strlen($prefix);
				$ql = $pl + 1;
				$rn = "SELECT MAX(SUBSTR(SaleReg_No,$ql)) FROM  pro_sale_registration where SaleReg_No like '%$prefix%'";
				$res_rn = mysql_query($rn);
				$row_rn = mysql_fetch_array($res_rn);
				$id = $row_rn['0'];
				$id = $id + 1;
				$leadingzeros = '00000';
				$SaleReg_No = $prefix . substr($leadingzeros, 0, (-strlen($id))) . $id;
						           	
				$s_name = $_POST['s_name'];
				$s_eid = $_POST['s_eid'];
				$s_email =$_POST['s_email'];
				$s_phn = $_POST['s_phn'];
                $s_pwd = $_POST['s_pwd'];
				$s_role =$_POST['s_role'];
				/*$address = addslashes($_REQUEST['add']);*/
				
							
				//Checking Email Unique//
				$CheckEmailSql = "SELECT EmailId FROM  pro_sale_registration WHERE EmailId = '".$s_email."'";
				$CheckEmailQuery=mysql_query($CheckEmailSql) or mysql_error();
				$CheckEmailRow=mysql_num_rows($CheckEmailQuery);
			
			
				if($CheckEmailRow=="0")
				{
				
			    $InsertRegSql="INSERT INTO pro_sale_registration SET 
																					SaleReg_No = '".$SaleReg_No."' ,
                                                                                    admin_user = 'admin',																				
																					Sale_Name = '".$s_name."' ,
																					Sale_id = '".$s_eid."' ,
																					EmailId = '".$s_email."' , 
																					S_image='',
																					S_address='',
                                                                                    PhoneNo ='".$s_phn."',
																					Password = '".base64_encode($s_pwd)."' , 
																					Role = '".$s_role."',
																					RegistDate = NOW() , 
																					EmailVerification = 'Yes' , 												
																					SaleStatus = 'Yes' 
																					";
																				//exit();
					mysql_query($InsertRegSql) or die(mysql_error());

						
						// End Php mailer
						
						echo '<script language="javascript">';
						echo 'window.location="../sale_list.php?mess=successful"';
						echo '</script>';
						
						}

						else
						{
						  echo '<script language="javascript">';
						    echo 'window.location="../sale_add.php?mess=Email_Address_Already_Exists.Try_another_one!"';
						    echo '</script>';
						 $mess = "E-Mail already exists.Try another one! ";
						  

						}
	
	}
	
	
		
?>