<?php
	include"../config/connect.php";
	
	//Registration
	 if($_POST['submit']=="SUBMIT") 
     {
		        $usercreationdate = date("Y/m/d");
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
						           	
				$name = $_POST['name'];
				$emp_id = $_POST['emp_id'];
				$email =$_POST['email'];
				$phone = $_POST['phone'];
                $position = $_POST['position'];
				$pwd =$_POST['pwd'];
				
				
							
				//Checking Email Unique//
				$CheckEmailSql = "SELECT EmailId FROM  pro_sale_registration WHERE EmailId = '".$email."'";
				$CheckEmailQuery=mysql_query($CheckEmailSql) or mysql_error();
				$CheckEmailRow=mysql_num_rows($CheckEmailQuery);
			
			
				if($CheckEmailRow=="0")
				{
				
			    $InsertRegSql="INSERT INTO pro_sale_registration SET 
																					SaleReg_No = '".$SaleReg_No."' ,																				
																					Sale_Name = '".$name."' ,
																					Sale_id = '".$emp_id."' ,
																					EmailId = '".$email."' , 
                                                                                    PhoneNo ='".$phone."',
																					Position ='".$position."',
																					Password = '".base64_encode($pwd)."' , 
																					RegistDate = $usercreationdate , 
																					EmailVerification = 'Yes' , 												
																					SaleStatus = 'Yes' 
																					";
																				//exit();
					mysql_query($InsertRegSql) or die(mysql_error());

						
						// End Php mailer
						
						echo '<script language="javascript">';
						echo 'window.location="../s_login.php?mess=successful"';
						echo '</script>';
						
						}

						else
						{
						 $mess = "E-Mail already exists.Try another one! ";
						  

						}
	
	}
	
	
		
?>