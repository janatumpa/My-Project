
<?php
	include"../../config/connect.php";
	session_start();
$SqlUser = "SELECT * FROM pro_admin WHERE admin_id = '".$_SESSION['admin_id']."'";
$ResSqlUser = mysql_query($SqlUser);
$FetchRows = mysql_fetch_array($ResSqlUser); 
 $abc=$FetchRows['admin_id'];
	//Registration
	 if($_POST['submit']=="SUBMIT") 
     {
		        $usercreationdate = date('Y-m-d');
			    $name = $_POST['name'];
				$c_name = $_POST['c_name'];
				$c_location =$_POST['c_location'];
			    $c_phn = $_POST['c_phn'];
				$c_email =$_POST['c_email'];
                $c_business =$_POST['c_business'];
		/*$address = addslashes($_REQUEST['add']);*/
				
							
				//Checking Email Unique//
				
                            $InsertRegSql="INSERT INTO pro_customer SET 
																				    Name = '".$name."' ,
S_id ='". $abc."',																				
																				    Company = '".$c_name."' ,
																				    Location = '".$c_location."' ,
																					Phone = '".$c_phn."' , 
Email ='".$c_email."',
Nature_of_business ='".$c_business."',
																					Date = NOW(),
																					CusStatus = 'Yes'
																					
																					"; 
																				
																					
					   mysql_query($InsertRegSql) or die(mysql_error());

						
						// End Php mailer
						
						echo '<script language="javascript">';
						echo 'window.location="../client_list.php?mess=successful"';
						echo '</script>';
						
						

						
	
	}

    
	
		
?>