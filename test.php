<?php
	include"config/connect.php";
	
	//Registration
	 if($_POST['submit']=="SUBMIT") 
     {
		
		
	
						//Registration No.
			   
				/*$ip = $_SERVER['REMOTE_ADDR'];*/
				/*$date = date('d-m-Y g:i:s a');*/ 
				$usercreationdate = date('Y-m-d');
				/* unicId */
				$prefix = "MeMe" . date("y") . date("m");
				$pl = strlen($prefix);
				$ql = $pl + 1;
				$rn = "SELECT MAX(SUBSTR(SaleReg_No,$ql)) FROM  pro_sale_registration where SaleReg_No like '%$prefix%'";
				$res_rn = mysql_query($rn);
				$row_rn = mysql_fetch_array($res_rn);
				$id = $row_rn['0'];
				$id = $id + 1;
				$leadingzeros = '00000';
				$SaleReg_No = $prefix . substr($leadingzeros, 0, (-strlen($id))) . $id;
						           	
				$s_name = $_POST['name'];
				$sale_id = $_POST['emp_id'];
				$s_email =$_POST['email'];
				$s_phone = $_POST['phone'];
                $s_pwd = $_POST['pwd'];
				$s_position =$_POST['s_position'];
				/*$address = addslashes($_REQUEST['add']);*/
				
							
				//Checking Email Unique//
				$CheckEmailSql = "SELECT EmailId FROM  pro_sale_registration WHERE EmailId = '".$s_email."'";
				$CheckEmailQuery=mysql_query($CheckEmailSql) or mysql_error();
				$CheckEmailRow=mysql_num_rows($CheckEmailQuery);
			
			
				if($CheckEmailRow=="0")
				{
				
			    $InsertRegSql="INSERT INTO pro_sale_registration SET 
																					SaleReg_No = '".$SaleReg_No."' ,																				
																					Sale_Name = '".$s_name."' ,
																					Sale_id = '".$sale_id."' ,
																					EmailId = '".$s_email."' , 
                                                                                    PhoneNo ='".$s_phone."',
																					Password = '".base64_encode($s_pwd)."' , 
																					Position = '".$s_position."',
																					RegistDate = NOW() , 
																					EmailVerification = 'Yes' , 												
																					SaleStatus = 'Yes' 
																					";
																				//exit();
					mysql_query($InsertRegSql) or die(mysql_error());

						
						// End Php mailer
						
						echo '<script language="javascript">';
						echo 'window.location="s_login.php?mess=successful"';
						echo '</script>';
						
						}

						else
						{
						 $mess = "E-Mail already exists.Try another one! ";
						  

						}
	
	}
	
	
		
?>

<html>

<head>
    <title>welcome</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/custom.css"> 
     <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
            <script src="js/need.js"></script>
    
<script src="js/custom.js"></script>
</head>

<body class="con1">
  
    <?php include'header.php';?>


    <div class="cardhome1">
       
   <form role="form">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
 
  



<form name="reg" method="post"  onSubmit="return regvalid()">
  <h1>Registration Form</h2>
    <?php if(isset($mess)!=""){ ?>
				<p style="color:#CD3E4F; font-size:18px;"><?=$mess?></p>
		 <?php } ?>
      
  <fieldset><input type="text" name="name" id="name" placeholder="Name" onKeyPress="javascript:return checkName(event) "/>
  <label id="error_name" class="red" ></label>
 </fieldset>
  <fieldset><input type="text" name="emp_id" id="emp_id" placeholder="Employee Id"  />
  <label id="error_emp_id" class="red" ></label>
  </fieldset>
  <fieldset><input type="text" name="email" id="email" placeholder="Email" onKeyUp="javascript:return mailval() "/>
   <label id="error_email" class="red" ></label>
  </fieldset>
  <fieldset><input type="text" name="phone" id="phone" placeholder="Phone No" maxlength="11" onkeypress="return Validate(event)" />
   <label id="error_phone" class="red" ></label>
  </fieldset>
   <fieldset><input type="text" name="s_position" id="s_position" placeholder="Position"/>
    <label id="error_s_position" class="red" ></label>
   </fieldset>
  <fieldset><input type="password" name="pwd" id="pwd" placeholder="Password"/>
   <label id="error_pwd" class="red" ></label>
  </fieldset>
   <fieldset><input type="password" name="c_pwd" id="c_pwd" placeholder="Confirm Password"  onKeyUp="javascript:return conpwdval()"/>
    <label id="error_c_pwd" class="red" ></label>
   </fieldset>
  <fieldset><input type="submit" name="submit" value="SUBMIT"/></fieldset>
</form>
 
    </div>



</body>
</html>