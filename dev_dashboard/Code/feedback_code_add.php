
<?php
	include"../../config/connect.php";
	session_start();

	//Registration
	 if($_POST['submit']=="SUBMIT") 
     {
		 $name=$_POST['s1'];	
		    $Team_Player = $_POST['Team_Player'];
				$Ownership =$_POST['Ownership'];
			    $Quick_Learner = $_POST['Quick_Learner'];
				$Problem_Solver =$_POST['Problem_Solver'];
				$Passionate =$_POST['Passionate'];
                $proactive =$_POST['proactive'];
				$Hardworking =$_POST['Hardworking'];
				$Attitude =$_POST['Attitude'];
				
		/*$address = addslashes($_REQUEST['add']);*/
				
							
				//Checking Email Unique
					$SqlUser = "SELECT * FROM pro_dev_registration WHERE D_id = '".$_SESSION['userid']."'";
					$ResSqlUser = mysql_query($SqlUser);
					$FetchRows = mysql_fetch_array($ResSqlUser);
                               $InsertRegSql="INSERT INTO pro_dev_feedback SET 
			                                                                        Name='".$name."' ,														
															                        Team_Player='".$Team_Player."' ,
                                                                                    user_id ='".$FetchRows['D_id']."',
																					kind='developer',																			
																				    Ownership ='".$Ownership."' ,
																				    Quick_Learner ='".$Quick_Learner."' ,
																					Problem_Solver ='".$Problem_Solver."' , 
																					Passionate ='".$Passionate."' , 
                                                                                    proactive ='".$proactive."',
                                                                                    Hardworking ='".$Hardworking."',
																					Attitude ='".$Attitude."'
																					
																					
																					";
																			
																					
					   mysql_query($InsertRegSql) or die(mysql_error());

						
						// End Php mailer
						
						echo '<script language="javascript">';
						echo 'window.location="../feedback_list.php?mess=successful"';
						echo '</script>';
						
						

						
	
	}

    
	
		
?>