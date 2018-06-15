<?php
	include"../../config/connect.php";
			if($_REQUEST['submit']=="Update") 
            {   
				$session_id = $_SESSION['userid'];
			    $oldimg = $_REQUEST['oldimg']; //For Profile Images.
				$email =$_POST['email'];
				
				$imagechecksql = "SELECT * FROM pro_sale_registration";
				$imagecheckquery = mysql_query($imagechecksql) or mysql_error();
				$imagefect = mysql_fetch_array($imagecheckquery);
				if($_FILES["cimage"]['name'] != ''){
				
				/*===========IMAGE UPLOAD [SUPRATIM]==============*/
					$target_dir = "../profileimage/";
					$target_file = $target_dir . basename($_FILES["cimage"]["name"]);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					if($imageFileType == 'jpg' || $imageFileType == 'png' || $imageFileType == 'jpeg'){
					if (move_uploaded_file($_FILES["cimage"]["tmp_name"], $target_file)) {
						if($oldimg != ""){
							$profileimage = '../profileimage/'.$oldimg;
							unlink($profileimage);
						}
					   
					    $UploadProfileImageSql="UPDATE pro_sale_registration  SET S_image = '".$_FILES["cimage"]["name"]."' WHERE S_id = '".$session_id."'";
						mysql_query($UploadProfileImageSql) or mysql_error();
					
					    $_SESSION['msg'] = "Profile Update Successful";
						echo '<script language="javascript">';
						echo 'window.location="../profile.php?mess=successfulimageupdate"';
						echo '</script>';
					}else{
						$_SESSION['msg'] = "Profile Not Update";
						echo '<script language="javascript">';
						echo 'window.location="../profile.php?mess=unsuccessful_image_update"';
						echo '</script>';
					}
					}else{
						$_SESSION['msg'] = "Please Upload .jpg, .png, and .jpeg";
						echo '<script language="javascript">';
						echo 'window.location="../profile.php?mess=unsuccessful_image_update"';
						echo '</script>';
					
					}
				/*===========IMAGE UPLOAD [SUPRATIM]==============*/		 
				} else{
				
					
					    $_SESSION['msg'] = "Profile Update Successful";
						echo '<script language="javascript">';
						echo 'window.location="../pp_edit.php?mess=successfulimageupdate"';
						echo '</script>';
					
				}
			}				
?>