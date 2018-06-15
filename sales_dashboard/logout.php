<?php	
		session_start();
		
		header("Cache-control: private");
		unset($_SESSION['userid']);
        unset($_SESSION['loggedIn']);
		header("Location:../index.php");
?>