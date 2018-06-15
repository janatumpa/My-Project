		

<?php
	include"../../config/connect.php";
	   $id = $_POST['id'];
			if($_REQUEST['submit']=="SUBMIT") 
            {  
				  
										  $InsertRegSql="UPDATE pro_sales_timesheet  SET  
										  	projectname= '".$_REQUEST['projectname']."',
										   task='".$_REQUEST['task']."',
								          start='".$_REQUEST['start']."',
                                          end='".$_REQUEST['end']."',
										  total= '".$_REQUEST['diftime']."',
										  Date= '".$_REQUEST['Date']."'
										    WHERE id = '".$id."'							  
										"; 
									
																				
						mysql_query($InsertRegSql) or mysql_error();
					
					
						$_SESSION['msg'] = "Timesheet Update Successful";
						echo '<script language="javascript">';
						echo 'window.location="../timesheet_sales.php?mess=successfulupdate"';
						echo '</script>';
						
						}
						else
						{
						 $mess = "E-Mail/User Name already exists.Try another one! ";
						}
            
?>			