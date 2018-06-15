<?php
error_reporting(0);
session_start();
define('PROJECT_NAME', 'Project Management');
define('ALIAS', 'promanagement');
define('FAVICON', 'img/icon.png');
define('TABLE_PREFIX', 'pro_');
/*define('LOGO', 'img/logo123.png');*/
define('AFROMIXDJ_SEO_PREFIX','Project Management');

//date_default_timezone_set('Asia/Kolkata');

if($_SERVER['HTTP_HOST']=='192.168.1.130'||$_SERVER['HTTP_HOST']=='192.168.1.121' || $_SERVER['HTTP_HOST']=='127.0.0.1' || $_SERVER['HTTP_HOST']=='localhost'||$_SERVER['HTTP_HOST']=='192.168.1.121'||$_SERVER['HTTP_HOST']=='192.168.1.1'||$_SERVER['HTTP_HOST']=='192.168.1.121')
{
	define('DB_HOST', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'promanagement');
	//define("BASE_URL", "http://localhost/eatoutplus/admin/"||"172.168.0.14/afromixdj/admin/");
	define("BASE_URL", "http://localhost/promanagement/admin/");
	define("DIR_PATH", str_replace("\\","/",$_SERVER['DOCUMENT_ROOT'])."/promanagement/admin/");
	
	$title = "promanagement";
	$copyright = "";
	$emailaddresscopy = "";
	$siteurl = "http://localhost/promanagement/";
	$siteurladmin = "http://localhost/promanagement/admin/";
	$siteimg = "http://localhost/promanagement/img/";
}
else
{//die('samiran');
	define('DB_HOST', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASS', 'root');
	define('DB_NAME', 'promanagement');
	define("BASE_URL", 'http://ec2-35-167-207-190.us-west-2.compute.amazonaws.com/projectmanage/admin/');
	define("DIR_PATH", str_replace("\\","/",$_SERVER['DOCUMENT_ROOT'])."/admin/");
	
	$title = "promanagement";
	$copyright = "";
	$emailaddresscopy = "";
	$siteimg = "http://ec2-35-167-207-190.us-west-2.compute.amazonaws.com/projectmanage/images/";
	$siteurl = "http://ec2-35-167-207-190.us-west-2.compute.amazonaws.com/projectmanage/";
	$siteurladmin = "http://ec2-35-167-207-190.us-west-2.compute.amazonaws.com/projectmanage/admin/";
	//Change the max upload size
	ini_set('post_max_size', '100M');
	ini_set('upload_max_filesize', '100M');
}

$con = mysql_connect(DB_HOST,DB_USERNAME,DB_PASS) or die("Database connection error");
$db = mysql_select_db(DB_NAME,$con) or die("Database connection error");

$fetch_address=mysql_fetch_array(mysql_query("select * from contact where id='1'"));
$phone=$fetch_address['phone'];
define('ADMIN_PHONE',$phone);


?>