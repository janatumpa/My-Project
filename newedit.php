<?php
	include"config/connect.php";
			if($_REQUEST['submit']=="Update") 
            {   
			    $oldimg = $_REQUEST['oldimg']; //For Profile Images.
				$email =$_REQUEST['email'];
				//Checking Email Unique//
				$CheckEmailSql = "SELECT EmailId FROM pro_sale_registration WHERE EmailId = '".$email."' and S_id!='".$_SESSION['userid']."'";
				$CheckEmailQuery=mysql_query($CheckEmailSql) or mysql_error();
				$CheckEmailRow=mysql_num_rows($CheckEmailQuery);
			
			
				if($CheckEmailRow=="0")
				{
					
					//For Profile Image Update
					if($_FILES['cimage']['name']!=''){
							
								//Unlink Old ImageBefore Upload New image
								$unlink_sql = "SELECT S_image FROM pro_sale_registration WHERE S_id = '".$_SESSION['userid']."'";
								$unlink_rs = mysql_query($unlink_sql) or mysql_error();
								$row_unlink = mysql_fetch_array($unlink_rs);
								
								$photo = "profileimage/fullsize/".$row_unlink['S_image'];
								$thumb = "profileimage/bigimg/".$row_unlink['S_image'];
								$thumb1 = "profileimage/smallimg/".$row_unlink['S_image'];
								$thumb2 = "profileimage/extbig/".$row_unlink['S_image'];
								$thumb3 = "profileimage/medium/".$row_unlink['S_image'];
								
								if(file_exists($photo))
									{
										@unlink($photo);
									}
								if(file_exists($thumb))
									{
										@unlink($thumb);
									}
								if(file_exists($thumb1))
									{
										@unlink($thumb1);
									}
								if(file_exists($thumb2))
									{
										@unlink($thumb2);
									}
								if(file_exists($thumb3))
									{
										@unlink($thumb3);
									}
							
								//Image uploadin start.
								$valid_exts = array('jpeg', 'jpg', 'png', 'gif');
								$max_file_size = 2000 * 1024; #200kb
								//$nw = $nh = 300; # image with # height
								$imgwidth = 200;
								$imgheight =  200;
								
								$imgwidth2 = 100;
								$imgheight2 =  100;
								
								$imgwidth3 = 400;
								$imgheight3 =  350;
								
								$imgwidth3 = 500;
								$imgheight3 =  400;

									$ext = strtolower(pathinfo($_FILES['cimage']['name'], PATHINFO_EXTENSION));
									if (in_array($ext, $valid_exts)) {
											//Upload image path...
											$imagename = uniqid() . '.' . $ext; //Concate with Uniqid id and extension.
											$path = 'profileimage/bigimg/' . $imagename;
											$path1 = 'profileimage/smallimg/' . $imagename;
											$pathfull = 'profileimage/fullsize/' . $imagename;
											$pathfull2 = 'profileimage/extbig/' . $imagename;
											$pathfull3 = 'profileimage/medium/' . $imagename;
											
											$tmp = $_FILES['cimage']['tmp_name'];
											$size = getimagesize($tmp);
						
											$x = (int) $_POST['x'];
											$y = (int) $_POST['y'];
											$w = (int) $_POST['w'] ? $_POST['w'] : $size[0];
											$h = (int) $_POST['h'] ? $_POST['h'] : $size[1];
						
											$data = file_get_contents($tmp);
											$vImg = imagecreatefromstring($data);
											
											//Crop code...
											$dstImg = imagecreatetruecolor($imgwidth, $imgheight);
											imagecopyresampled($dstImg, $vImg, 0, 0, $x, $y, $imgwidth, $imgheight, $w, $h);
											imagejpeg($dstImg, $path);
											
											$dstImg1 = imagecreatetruecolor($imgwidth2, $imgheight2);
											imagecopyresampled($dstImg1, $vImg, 0, 0, $x, $y, $imgwidth2, $imgheight2, $w, $h);
											imagejpeg($dstImg1, $path1);
											
											$dstImg2 = imagecreatetruecolor($imgwidth3, $imgheight3);
											imagecopyresampled($dstImg2, $vImg, 0, 0, $x, $y, $imgwidth3, $imgheight3, $w, $h);
											imagejpeg($dstImg2, $pathfull2);
											
											$dstImg3 = imagecreatetruecolor($imgwidth3, $imgheight3);
											imagecopyresampled($dstImg3, $vImg, 0, 0, $x, $y, $imgwidth3, $imgheight3, $w, $h);
											imagejpeg($dstImg3, $pathfull3);
											
											//Upload image full size...
											@copy($tmp,$pathfull);
											
											imagedestroy($dstImg);
											imagedestroy($dstImg1);
											imagedestroy($dstImg2);
											imagedestroy($dstImg3);
											//echo "<img src='$pathfull' />";
											
										} else {
											echo 'unknown problem!';
									} 

					
				}  else {
					$imagename = $oldimg;	
				}
				

									         
					 $InsertRegSql="UPDATE pro_sale_registration  SET  
																					
																				   	S_image = '".$imagename."' 														
																					WHERE S_id = '".$_SESSION['userid']."'
																					";
																				
						mysql_query($InsertRegSql) or mysql_error();
					
					
						$_SESSION['msg'] = "Profile Update Successful";
						echo '<script language="javascript">';
						echo 'window.location="profile.php?mess=successfulupdate"';
						echo '</script>';
						
						}
						else
						{
						 $mess = "E-Mail/User Name already exists.Try another one! ";
						}
	
		
	
		}
					
	
				//User  
				$SqlUser = "SELECT * FROM pro_sale_registration WHERE S_id = '".$_SESSION['userid']."'";
				$ResSqlUser = mysql_query($SqlUser);
				$FetchRows = mysql_fetch_array($ResSqlUser);
				
				//For Cover Image
if($FetchRows['S_image'] == "")
{
  $pic = "profileimage/nopic.png";
}
else if(!is_file("profileimage/medium/".$FetchRows['S_image']))
{
  $pic = "profileimage/nopic.png";
}
else
{
  $pic = "profileimage/medium/".$FetchRows['S_image'];
}
				
				
	
	

		//Fetch Home  Details
		

?>
<html>
<head>
  <title><?php echo $FetchRows['Sale_Name'];?></title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="css/bootstrap-responsive.css">
  <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/style.css">
		<!-- Bootstrap -->
  
</head>
<body>
  <div class="col-md-6" style="margin-left:17em">
<div class="section">
                     
                     <div class="container">
             
             <div class="update_frm col-md-8 col-md-push-2">
          
              <form  class="contact_form" method="post" action="<?=$_SERVER['PHP_SELF']?>" enctype="multipart/form-data" >
             <?php if(isset($mess)!=""){ ?>
				<p style="color:#CD3E4F; font-size:18px;"><?=$mess?></p>
		 <?php } ?>
                <ul>
                 <li>
                
											<div style="padding-bottom:0px;" id='preview' > 
		<img id="uploadPreview" src="<?=$pic?>" class="user_img"  border="0" title="Click here to view Profile image"/>
											 </div>
											<p style=" margin-top:10px;"><span style="color:#f7814d;">Please upload</span>  (jpg, jpeg, gif, png) File Only.</p>
												<div class="custom_file_upload">
												<div class="file_upload">
											<input name="cimage" id="uploadImage" type="file" />
												<input type="hidden" name="oldimg" value="<?=$FetchRows['S_image']?>">
												</div>
												</div>
										
                  </li>
                
                 <li>  <input name="submit" type="submit" value="Update"  /></li>
                </ul>
              </form>
            </div>
       		</div>
    			</div> <!-- /form -->
</body>
</html>
