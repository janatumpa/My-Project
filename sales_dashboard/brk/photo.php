<?php
include"../config/connect.php";

//User  
$SqlUser = "SELECT * FROM owner_registration WHERE email = '".$_SESSION['email']."'";
$ResSqlUser = mysql_query($SqlUser);
$FetchRows = mysql_fetch_array($ResSqlUser);

//Fetch Order



//For Cover Image
if($FetchRows['user_image'] == "")
{
$pic = "images/nopic.png";
}
else if(!is_file("../profileimage/medium/".$FetchRows['user_image']))
{
$pic = "images/nopic.png";
}
else
{
$pic = "../profileimage/medium/".$FetchRows['user_image'];
}

$page = "home";

//Fetch Home  Details


?>

<?php


$details=mysql_fetch_array(mysql_query("select * from owner_registration where email='$_SESSION[email]'"));


if($_REQUEST['submit']=="Update") {  

$oldimg = $_REQUEST['oldimg'];

//echo $_FILES['image']['name'];
/***********************/

if($_FILES['image']['name']!=''){

$unlink_sql = "SELECT user_image FROM owner_registration WHERE email = '".$_SESSION['email']."'";
$unlink_rs = mysql_query($unlink_sql) or mysql_error();
$row_unlink = mysql_fetch_array($unlink_rs);

$photo = "../profileimage/fullsize/".$row_unlink['user_image'];
$thumb = "../profileimage/bigimg/".$row_unlink['user_image'];
$thumb1 = "../profileimage/smallimg/".$row_unlink['user_image'];
$thumb2 = "../profileimage/medium/".$row_unlink['user_image'];
$thumb3 = "../profileimage/extbig/".$row_unlink['user_image'];

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

$imgwidth3 = 300;
$imgheight3 =  250;

$imgwidth4 = 800;
$imgheight4 =  600;

$ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
if (in_array($ext, $valid_exts)) {
//Upload image path...
$imagename = uniqid() . '.' . $ext; //Concate with Uniqid id and extension.
$path = '../profileimage/bigimg/' . $imagename;
$path1 = '../profileimage/smallimg/' . $imagename;
$pathfull = '../profileimage/fullsize/' . $imagename;
$thumb2 = '../profileimage/medium/'.$imagename;
$thumb3 = '../profileimage/extbig/'.$imagename;
$tmp = $_FILES['image']['tmp_name'];
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
imagejpeg($dstImg2, $thumb2);

$dstImg3 = imagecreatetruecolor($imgwidth4, $imgheight4);
imagecopyresampled($dstImg3, $vImg, 0, 0, $x, $y, $imgwidth4, $imgheight4, $w, $h);
imagejpeg($dstImg3, $thumb3);

//Upload image full size...
@copy($tmp,$pathfull);

imagedestroy($dstImg);
imagedestroy($dstImg1);
imagedestroy($dstImg2);
imagedestroy($dstImg3);

} else {
echo 'unknown problem!';
} 


}  else {
$imagename = $oldimg;	
}
/************************/



$vender_type=$_POST['category'];

$subcat=$_POST['subcat'];
$cuisione=implode(',',$_POST['cuisione']);

/***********cuisine*************/
if($_POST['cuisne_txt'] != "")
{
$cuisione1=strtoupper($_POST['cuisne_txt']);
$checked="Yes";
$cnt1 = mysql_num_rows(mysql_query("SELECT * FROM cuisine_type WHERE name='$cuisione1'"));
if($cnt1 == 0){
$cuisine_insert=mysql_query("insert into  cuisine_type set name='$cuisione1'");
$chkid=mysql_insert_id();
}
}
else{
$chkid=$cuisione;
$checked="No";
}

/************cuisine end***************/



$InsertRegSql="UPDATE owner_registration  SET  
restaurant_name = '".$_REQUEST['restaurant_name']."' ,
first_name = '".$_REQUEST['fname']."' ,
last_name= '".$_REQUEST['lname']."' ,
user_image = '".$imagename."' ,  
city='".$_REQUEST['city']."',
address= '".stripslashes($_REQUEST['address'])."' , 
street_name = '".stripslashes($_REQUEST['sname'])."' ,
tphone = '".$_REQUEST['tphone']."' ,
phone = '".$_REQUEST['phone']."' ,
zipcode= '".$_REQUEST['post']."' ,
county = '".$_REQUEST['county']."' ,
website_address = '".$_REQUEST['wname']."' ,
category='$vender_type',
sub_category='$subcat',

cuisione='$chkid',
other_cuisine='$checked'

WHERE email = '".$_SESSION['email']."'
";
//exit();
//mysql_query($InsertRegSql) or die(mysql_error());

mysql_query($InsertRegSql) or mysql_error();


$_SESSION['msg'] = "Profile Update Successful";
echo '<script language="javascript">';
echo 'window.location="profile1.php?mess=successfulupdate"';
echo '</script>';


}
?>