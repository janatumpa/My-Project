<?php	
		include"../config/connect.php";
		
		header("Cache-control: private");
		if(isset($_SESSION['userid']))
		{
		
			unset($_SESSION['userid']);
                      
					}
		session_destroy();
		header("Location:../index.php");
?>