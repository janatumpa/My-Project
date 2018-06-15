/* start login validation */
          function valid()
            {
              var email = document.getElementById("email").value;
              var pwd = document.getElementById("pwd").value;

              if(email=='')
              {
                document.getElementById("email").style.border="2px solid red";
                document.loginfrm.email.focus() ;
                return false;
              }
              if (pwd=='')
              {
                document.getElementById("pwd").style.border="2px solid red";
                document.loginfrm.pwd.focus() ;
                return false;
               }
             }
              function checkEmail()
                       {
                       //alert('check');
                             var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                             if(!filter.test(document.getElementById("email").value))
                             {
                             document.getElementById("email").value="";
                             //alert('Please provide a valid email address');
                             document.getElementById("d1").innerHTML="Please provide a valid email address!";
                             document.getElementById("email").style.border="2px solid red";
                             document.getElementById("d1").style.color="Red";
                             document.loginfrm.email.focus() ;
                             return false;
                              }
                               else
                               {
                                 document.getElementById("d1").innerHTML="";
                                 document.getElementById("email").style.border="2px solid green";
                                }
                        }
   /* end login validation */                     



/*start registration validation */       

      

                                      function regvalid()
                                       {

                                        var name = document.getElementById("name").value.trim();
                                        var emp_id = document.getElementById("emp_id").value.trim();
                                        var dev_id = document.getElementById("dev_id").value.trim();
                                        var email = document.getElementById("email").value.trim();
                                        var phone = document.getElementById("phone").value.trim();
                                        var pwd = document.getElementById("pwd").value.trim();
                                        var s_position = document.getElementById("s_position").value.trim();
                                        var c_pwd = document.getElementById("c_pwd").value.trim();
                                        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm;
                                        


                                                    if (name=='')
                                                    {

                                                    document.getElementById("error_name").innerHTML="Enter Your Name";
                                                    document.getElementById("name").style.border="2px solid red";
                                                    document.reg.name.focus() ;
                                                    return false;
                                                    }

                                                    if (emp_id=='')
                                                    {
                                                    document.getElementById("error_emp_id").innerHTML="Enter Your Employee ID!";
                                                    document.getElementById("emp_id").style.border="2px solid red";
                                                    document.reg.emp_id.focus() ;
                                                    return false;
                                                    }else{
                                                    document.getElementById("error_emp_id").innerHTML="";
                                                    document.getElementById("emp_id").style.border="";    
                                                    }


                                                   if (dev_id=='')
                                                    {
                                                    document.getElementById("error_dev_id").innerHTML="Enter Your Developer ID!";
                                                    document.getElementById("dev_id").style.border="2px solid red";
                                                    document.reg.dev_id.focus() ;
                                                    return false;
                                                    }else{
                                                    document.getElementById("error_dev_id").innerHTML="";
                                                    document.getElementById("dev_id").style.border="";    
                                                    }



                                                    if (email=='')
                                                    {
                                                    
                                                    document.getElementById("email").style.border="2px solid red";
                                                    document.reg.email.focus();
                                                    document.getElementById("error_email").innerHTML="Please Enter Your Email Address";
                                                    return false;
                                                    }else if(!re.test(email)){
                                                      
                                                    document.getElementById("email").style.border="2px solid red";
                                                    document.reg.email.focus();
                                                    document.getElementById("error_email").innerHTML="Please Provide Your Email Format";
                                                    return false;
                                                    }else{
                                                    document.getElementById("error_email").innerHTML="";
                                                    document.getElementById("email").style.border="";        
                                                    }

                                                    if(phone=='')
                                                    {

                                                    document.getElementById("phone").style.border="2px solid red";
                                                    document.reg.phone.focus() ;
                                                    return false;
                                                     }


                                                      if (s_position=='')
                                                    {

                                                    document.getElementById("error_s_position").innerHTML="Enter Your Position";
                                                    document.getElementById("s_position").style.border="2px solid red";
                                                    document.reg.s_position.focus() ;
                                                    return false;
                                                    }else{
                                                    document.getElementById("error_s_position").innerHTML="";
                                                    document.getElementById("s_position").style.border="";        
                                                    }


                                                    if(pwd=='')
                                                    {
                                                    document.getElementById("pwd").style.border="2px solid red";
                                                    document.reg.pwd.focus() ;
                                                    document.getElementById("error_pwd").innerHTML="";
                                                    return false;
                                                    }else{
                                                    document.getElementById("error_pwd").innerHTML="";
                                                    document.getElementById("pwd").style.border="";    
                                                    }
                                                    if(pwd =='' || c_pwd=='' || pwd != c_pwd)
                                                    {
                                                    document.getElementById("c_pwd").style.border="2px solid red";
                                                    document.reg.c_pwd.focus() ;
                                                    document.getElementById("error_c_pwd").innerHTML="Password Must be Equal";
                                                    return false;
                                                    }else{
                                                    document.getElementById("error_c_pwd").innerHTML="";
                                                    document.getElementById("c_pwd").style.border="";    
                                                    }
                                                    
                                       
                                      }

   function checkName(evt)
{
var charCode=(evt.which)?evt.which:event.keyCode  
if((charCode<65||charCode>90)&&(charCode<96||charCode>122)&&(charCode!=32)&& charCode!=8)
{
document.getElementById("error_name").innerHTML="Only Characters are Allowed!";
document.getElementById("name").style.border="2px solid red";
return false;
}else{
document.getElementById("error_name").innerHTML="";
document.getElementById("name").style.border="";    
}


}
 



    //  ****phone***    
    
    
function Validate(event) {
        var regex = new RegExp("^[0-9-!@#$%*?]");
        var key = String.fromCharCode(event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
          document.getElementById("error_phone").innerHTML="Only numbers are Allowed!";
          document.getElementById("phone").style.border="2px solid red";
            event.preventDefault();
            return false;
        }
        else{
           document.getElementById("error_phone").innerHTML="";
            document.getElementById("phone").style.border="";    
}
   }       

function mailval()
{
  var email = document.getElementById("email").value;
   var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm;
   if(!re.test(email)){
     document.getElementById("error_email").innerHTML="No space is Allowed!";
   document.getElementById("error_email").innerHTML="";
   document.getElementById("email").style.border="2px solid red"; 
    event.preventDefault();
    return false;
   }
   else{
            document.getElementById("error_email").innerHTML="";
            document.getElementById("email").style.border=""; 

   }
}
function conpwdval()
{
   var pwd = document.getElementById("pwd").value;
   var c_pwd = document.getElementById("c_pwd").value;
   if(pwd =='' || c_pwd=='' || pwd != c_pwd){

    document.getElementById("error_c_pwd").innerHTML="Please Provide valid Password";
    document.getElementById("c_pwd").style.border="2px solid red"; 
    event.preventDefault();
    return false;
   }
    else{
            document.getElementById("error_c_pwd").innerHTML="";
            document.getElementById("c_pwd").style.border=""; 

   }
   }
// ****Employee id****

// function empid()



// ****** for d_reg******


function newd()
                                       {

                                        var name = document.getElementById("d_name").value.trim();
                                        var dev_id = document.getElementById("dev_id").value.trim();
                                        var email = document.getElementById("d_email").value.trim();
                                        var phone = document.getElementById("d_phone").value.trim();
                                        var pwd = document.getElementById("d_pwd").value.trim();
                                        var c_pwd = document.getElementById("dc_pwd").value.trim();
                                        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm;
                                        


                                                    if (name=='')
                                                    {

                                                    document.getElementById("error_name").innerHTML="Enter Your Name";
                                                    document.getElementById("d_name").style.border="2px solid red";
                                                    document.reg.name.focus() ;
                                                    return false;
                                                    }


                                                   if (dev_id=='')
                                                    {
                                                    document.getElementById("error_dev_id").innerHTML="Enter Your Developer ID!";
                                                    document.getElementById("dev_id").style.border="2px solid red";
                                                    document.reg.dev_id.focus() ;
                                                    return false;
                                                    }else{
                                                    document.getElementById("error_dev_id").innerHTML="";
                                                    document.getElementById("dev_id").style.border="";    
                                                    }



                                                    if (email=='')
                                                    {
                                                    
                                                    document.getElementById("d_email").style.border="2px solid red";
                                                    document.reg.email.focus();
                                                    document.getElementById("error_email").innerHTML="Please Enter Your Email Address";
                                                    return false;
                                                    }else if(!re.test(email)){
                                                      
                                                    document.getElementById("d_email").style.border="2px solid red";
                                                    document.reg.email.focus();
                                                    document.getElementById("error_email").innerHTML="Please Provide Your Email Format";
                                                    return false;
                                                    }else{
                                                    document.getElementById("error_email").innerHTML="";
                                                    document.getElementById("email").style.border="";        
                                                    }

                                                    if(phone=='')
                                                    {

                                                    document.getElementById("d_phone").style.border="2px solid red";
                                                    document.reg.phone.focus() ;
                                                    return false;
                                                     }


                                                    if(pwd=='')
                                                    {
                                                    document.getElementById("d_pwd").style.border="2px solid red";
                                                    document.reg.pwd.focus() ;
                                                    document.getElementById("error_pwd").innerHTML="";
                                                    return false;
                                                    }else{
                                                    document.getElementById("error_pwd").innerHTML="";
                                                    document.getElementById("d_pwd").style.border="";    
                                                    }
                                                    if(pwd =='' || c_pwd=='' || pwd != c_pwd)
                                                    {
                                                    document.getElementById("dc_pwd").style.border="2px solid red";
                                                    document.reg.c_pwd.focus() ;
                                                    document.getElementById("error_c_pwd").innerHTML="Password Must be Equal";
                                                    return false;
                                                    }else{
                                                    document.getElementById("error_c_pwd").innerHTML="";
                                                    document.getElementById("dc_pwd").style.border="";    
                                                    }
                                                    
                                       
                                      }

   function checkName_d(evt)
{
var charCode=(evt.which)?evt.which:event.keyCode  
if((charCode<65||charCode>90)&&(charCode<96||charCode>122)&&(charCode!=32)&& charCode!=8)
{
document.getElementById("error_name").innerHTML="Only Characters are Allowed!";
document.getElementById("d_name").style.border="2px solid red";
return false;
}else{
document.getElementById("error_name").innerHTML="";
document.getElementById("d_name").style.border="";    
}


}
 



    //  ****phone***    
    
    
function Validate_d(event) {
        var regex = new RegExp("^[0-9-!@#$%*?]");
        var key = String.fromCharCode(event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
          document.getElementById("error_phone").innerHTML="Only numbers are Allowed!";
          document.getElementById("d_phone").style.border="2px solid red";
            event.preventDefault();
            return false;
        }
        else{
           document.getElementById("error_phone").innerHTML="";
            document.getElementById("d_phone").style.border="";    
}
   }       

function mailval_d()
{
  var email = document.getElementById("email").value;
   var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm;
   if(!re.test(email)){
     document.getElementById("error_email").innerHTML="No space is Allowed!";
   document.getElementById("error_email").innerHTML="";
   document.getElementById("d_email").style.border="2px solid red"; 
    event.preventDefault();
    return false;
   }
   else{
            document.getElementById("error_email").innerHTML="";
            document.getElementById("d_email").style.border=""; 

   }
}
function conpwdval_d()
{
   var pwd = document.getElementById("d_pwd").value;
   var c_pwd = document.getElementById("dc_pwd").value;
   if(pwd =='' || c_pwd=='' || pwd != c_pwd){

    document.getElementById("error_c_pwd").innerHTML="Please Provide valid Password";
    document.getElementById("dc_pwd").style.border="2px solid red"; 
    event.preventDefault();
    return false;
   }
    else{
            document.getElementById("error_c_pwd").innerHTML="";
            document.getElementById("dc_pwd").style.border=""; 

   }
   }
// ****Ends****


//*************************** Profile Pwd Update Validation K.B ****************************//
 function profilepwdvalid()
    {
      var s_pwd = document.getElementById("s_pwd").value.trim();
      var c_pwd = document.getElementById("c_pwd").value.trim(); 

      if(s_pwd=='')
      {
      document.getElementById("s_pwd").style.border="2px solid red";
      document.proedit.s_pwd.focus() ;
      document.getElementById("error_pwd").innerHTML="";
      return false;
      }else{
      document.getElementById("error_pwd").innerHTML="";
      document.getElementById("s_pwd").style.border="";    
      }
      if(s_pwd =='' || c_pwd=='' || s_pwd != c_pwd)
      {
      document.getElementById("c_pwd").style.border="2px solid red";
      document.proedit.c_pwd.focus() ;
      document.getElementById("error_c_pwd").innerHTML="Confirm Password Must be Equal";
      return false;
      }else{
      document.getElementById("error_c_pwd").innerHTML="";
      document.getElementById("c_pwd").style.border="";    
      }
    }
//*************************** End Profile Pwd Update Validation K.B ****************************//


