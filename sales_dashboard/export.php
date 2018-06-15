<?php  
  include "../config/connect.php";
 $Sql = "SELECT projectname,task,start,end,total,Date  FROM pro_sales_timesheet WHERE userid='".$_SESSION['userid']."'";  
 $ResSqlUser = mysql_query($Sql);  
  
// $columnHeader = '';  
$columnHeader =   "Project Name" . "\t" . "Task" . "\t" ."Start Time". "\t" ."End Time". "\t" ."Total Time". "\t" ."Date". "\t";  
  
 $setData = '';  
  
while ($res = mysql_fetch_row($ResSqlUser)) {  
     $rowData = '';  
    foreach ($res as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=Timesheet.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
?>  