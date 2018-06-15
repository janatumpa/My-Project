<?php
	include"../../config/connect.php";
	session_start();
	$SqlUser = "SELECT * FROM pro_sale_registration WHERE S_id = '".$_SESSION['userid']."'";
	$ResSqlUser = mysql_query($SqlUser);
	$FetchRows = mysql_fetch_array($ResSqlUser); 
    $abc=$FetchRows['S_id'];
	//Registration
	 if($_POST['submit']=="SUBMIT") 
     {
		        $usercreationdate = date('Y-m-d');
			    $p_domain = $_POST['p_domain'];
				$p_name = $_POST['p_name'];
				$p_type =$_POST['p_type'];
			    $p_category = $_POST['p_category'];
				$p_file =$_POST['p_file'];
				/*$address = addslashes($_REQUEST['add']);*/
				
							
				//Checking Email Unique//
				
                             $InsertRegSql="INSERT INTO pro_project SET 
																					Domain = '".$p_domain."' ,
                                                                                    S_id ='". $abc."',																				
																					Name = '".$p_name."' ,
																					Type = '".$p_type."' ,
																					Category = '".$p_category."' , 
                                                                                    File_Upload ='".$p_file."',
																					RegistDate = NOW(),
																					ProStatus ='working'
																					";
																				//exit();
																					
					   mysql_query($InsertRegSql) or die(mysql_error());

						
						// End Php mailer
						
						echo '<script language="javascript">';
						echo 'window.location="../project_list.php?mess=successful"';
						echo '</script>';
						
						

						
	
	}

    
	
		
?>