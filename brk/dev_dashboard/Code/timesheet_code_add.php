
<?php
	include"../../config/connect.php";
	session_start();

	//Registration
	 if($_POST['submit']=="SUBMIT") 
     {
             $usercreationdate = date('Y-m-d');
		    $projectname = $_POST['projectname'];
				$task=$_POST['task'];
			    $start = $_POST['start'];
				$end =$_POST['end'];
				$total =$_POST['diftime'];
                $Date =$_POST['Date'];
				
							
				//Checking Email Unique
				$SqlUser = "SELECT * FROM pro_devs_timesheet WHERE userid = '".$_SESSION['userid']."'";
					$ResSqlUser = mysql_query($SqlUser);
					$FetchRows = mysql_fetch_array($ResSqlUser);
                              $InsertRegSql="INSERT INTO pro_devs_timesheet SET 
			                                                                        										
															                       projectname='".$projectname."' ,
                                                                                    userid ='".$_SESSION['userid']."',
																																					
																				    task ='".$task."' ,
																				    start ='".$start."' ,
                                                                                   
																					end ='".$end."' , 
																					total ='".$total ."',
                                                                                     Date = '".$Date ."'
                                                                                  
                                                                                    ";  
                                                                                																																								
																					
																			
																					
					   mysql_query($InsertRegSql) or die(mysql_error());

						
						// End Php mailer
						
						echo '<script language="javascript">';
						echo 'window.location="../timesheet_dev.php?mess=successful"';
						echo '</script>';
						
						

						
	
	}

    
	
		
?>