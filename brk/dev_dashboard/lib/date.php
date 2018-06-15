 
<?php
session_start();
include"../config/connect.php";
$x=$_SESSION['email'];
$sql="SELECT d_doj FROM pro_dev_registration WHERE email='$x' ";
$result = $con->query($sql);
$fetch=mysql_fetch_array($result);
$join=$fetch['d_doj'];
if(isset($_POST['date']))
{

$current = time(); // or your date as well

$your_date = strtotime("$join");
$datediff = $current - $your_date;
$days= floor($datediff / (60 * 60 * 24));
echo $days;
$d=$days/30;
$_SESSION['d']=$d;
if($d >= 3)
{
    $_SESSION['d']=$d;
    echo "apply for leave";
    header("location:leave.php");
}
else{
    echo "not eligible";
}
}
?>
<!doctype html>
<html lang="en">
<head>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body>
 <form name="join" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<br>
<input type="submit" name="date"  value="submit" id="btn" >

 
 </form>
</body>
</html>