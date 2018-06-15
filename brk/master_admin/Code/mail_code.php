<?php
	include"../../config/connect.php";
	
	$usercreationdate = date('d/m/Y');
    $to = $_POST['to'];
    $subject = $_POST['subject'];
    $msg =$_POST['message'];
	 if($_POST['submit']=="SUBMIT") 
     {
         $to = explode(',',$to);
         foreach($to as $too){
                $InsertRegSql="INSERT INTO pro_inbox SET 
														Email_Id = '".$too."' ,
														Admin_id = '".$_SESSION['admin_id']."',
														Subject = '".$subject."' ,
														Message = '".$msg."' ,
													    Date = Now()
														";
				//exit();
																					
					   mysql_query($InsertRegSql) or die(mysql_error());
             
             $InsertRegSql1="INSERT INTO pro_sent SET 
														Email_Id = '".$too."' ,
														Admin_id = '".$_SESSION['admin_id']."',
														Subject = '".$subject."' ,
														Message = '".$msg."' ,
													    Date = Now()
														";
				//exit();
																					
					   mysql_query($InsertRegSql1) or die(mysql_error());

         }
         if(isset($_REQUEST['id']))
         {
             mysql_query("DELETE FROM pro_draft WHERE Draft_Id='".$_REQUEST['id']."'");
         }
						// End Php mailer
						
						echo '<script language="javascript">';
						echo 'window.location="../inbox.php?mess=successful"';
						echo '</script>';
	}
	else{
		$InsertRegSql="INSERT INTO pro_draft SET 
														Email_Id = '".$to."' ,
														Admin_id = '".$_SESSION['admin_id']."',
														Subject = '".$subject."' ,
														Message = '".$msg."' ,
													    Date = Now()
														";
				//exit();
																					
					   mysql_query($InsertRegSql) or die(mysql_error());

						
						// End Php mailer
						
						echo '<script language="javascript">';
						echo 'window.location="../draftmail.php?mess=successful"';
						echo '</script>';
	}

    
	
		
?>