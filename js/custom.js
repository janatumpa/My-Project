/* start login validation */

					function valid()
            {
              
              var email = document.getElementById("email").value;
              var pwd = document.getElementById("pwd").value;

              if(email=='')
              {
                document.getElementById("email").style.borderBottom="2px solid red";
                document.loginfrm.email.focus() ;
                return false;
              }
              if (pwd=='')
              {
                document.getElementById("pwd").style.borderBottom="2px solid red";
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
                             document.getElementById("email").style.borderBottom="2px solid red";
                             document.getElementById("d1").style.color="Red";
                             document.loginfrm.email.focus() ;
                             return false;
                              }
                               else
                               {
                                 document.getElementById("d1").innerHTML="";
                                 document.getElementById("email").style.borderBottom="2px solid green";
                                }
                        }
   /* end login validation */       




// ****** Validation for Sales Registration ******    

      

                                      function regvalid()
                                       {

                                        var name = document.getElementById("name").value.trim();
                                        var emp_id = document.getElementById("emp_id").value.trim();
                                        // var dev_id = document.getElementById("dev_id").value.trim();
                                        var email = document.getElementById("email").value.trim();
                                        var phone = document.getElementById("phone").value.trim();
                                        var pwd = document.getElementById("pwd").value.trim();
                                        var s_position = document.getElementById("s_position").value.trim();
                                        var c_pwd = document.getElementById("c_pwd").value.trim();
                                        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm;
                                        


                                                    if (name=='')
                                                    {

                                                    document.getElementById("error_name").innerHTML="Enter Your Name";
                                                    document.getElementById("name").style.borderBottom="2px solid red";
                                                    document.reg.name.focus() ;
                                                    return false;
                                                    }

                                                    if (emp_id=='')
                                                    {
                                                    document.getElementById("error_emp_id").innerHTML="Enter Your Employee ID!";
                                                    document.getElementById("emp_id").style.borderBottom="2px solid red";
                                                    document.reg.emp_id.focus() ;
                                                    return false;
                                                    }else{
                                                    document.getElementById("error_emp_id").innerHTML="";
                                                    document.getElementById("emp_id").style.borderBottom="";    
                                                    }


                                                 



                                                    if (email=='')
                                                    {
                                                    
                                                    document.getElementById("email").style.borderBottom="2px solid red";
                                                    document.reg.email.focus();
                                                    document.getElementById("error_email").innerHTML="Please Enter Your Email Address";
                                                    return false;
                                                    }else if(!re.test(email)){
                                                      
                                                    document.getElementById("email").style.borderBottom="2px solid red";
                                                    document.reg.email.focus();
                                                    document.getElementById("error_email").innerHTML="Please Provide Your Email Format";
                                                    return false;
                                                    }else{
                                                    document.getElementById("error_email").innerHTML="";
                                                    document.getElementById("email").style.borderBottom="";        
                                                    }

                                                    if(phone=='')
                                                    {

                                                    document.getElementById("phone").style.borderBottom="2px solid red";
                                                    document.reg.phone.focus();
                                                    return false;
                                                     }


                                                      if (s_position=='')
                                                    {

                                                    document.getElementById("error_s_position").innerHTML="Enter Your Position";
                                                    document.getElementById("s_position").style.borderBottom="2px solid red";
                                                    document.reg.s_position.focus() ;
                                                    return false;
                                                    }else{
                                                    document.getElementById("error_s_position").innerHTML="";
                                                    document.getElementById("s_position").style.borderBottom="";        
                                                    }


                                                    if(pwd=='')
                                                    {
                                                    document.getElementById("pwd").style.borderBottom="2px solid red";
                                                    document.reg.pwd.focus() ;
                                                    document.getElementById("error_pwd").innerHTML="";
                                                    return false;
                                                    }else{
                                                    document.getElementById("error_pwd").innerHTML="";
                                                    document.getElementById("pwd").style.borderBottom="";    
                                                    }
                                                    if(pwd =='' || c_pwd=='' || pwd != c_pwd)
                                                    {
                                                    document.getElementById("c_pwd").style.borderBottom="2px solid red";
                                                    document.reg.c_pwd.focus() ;
                                                    document.getElementById("error_c_pwd").innerHTML="Password Must be Equal";
                                                    return false;
                                                    }else{
                                                    document.getElementById("error_c_pwd").innerHTML="";
                                                    document.getElementById("c_pwd").style.borderBottom="";    
                                                    }
                                                    
                                       
                                      }

   function checkName(evt)
{
var charCode=(evt.which)?evt.which:event.keyCode  
if((charCode<65||charCode>90)&&(charCode<96||charCode>122)&&(charCode!=32)&& charCode!=8)
{
document.getElementById("error_name").innerHTML="Only Characters are Allowed!";
document.getElementById("name").style.borderBottom="2px solid red";
return false;
}else{
document.getElementById("error_name").innerHTML="";
document.getElementById("name").style.borderBottom="";    
}


}
 



    //  ****phone***    
    
    
function Validate(event) {
        var regex = new RegExp("^[0-9-!@#$%*?]");
        var key = String.fromCharCode(event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
          document.getElementById("error_phone").innerHTML="Only numbers are Allowed!";
          document.getElementById("phone").style.borderBottom="2px solid red";
            event.preventDefault();
            return false;
        }
        else{
           document.getElementById("error_phone").innerHTML="";
            document.getElementById("phone").style.borderBottom="";    
}
   }       

function mailval()
{
  var email = document.getElementById("email").value;
   var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm;
   if(!re.test(email)){
     document.getElementById("error_email").innerHTML="No space is Allowed!";
   document.getElementById("error_email").innerHTML="";
   document.getElementById("email").style.borderBottom="2px solid red"; 
    event.preventDefault();
    return false;
   }
   else{
            document.getElementById("error_email").innerHTML="";
            document.getElementById("email").style.borderBottom=""; 

   }
}
function conpwdval()
{
   var pwd = document.getElementById("pwd").value;
   var c_pwd = document.getElementById("c_pwd").value;
   if(pwd =='' || c_pwd=='' || pwd != c_pwd){

    document.getElementById("error_c_pwd").innerHTML="Please Provide valid Password";
    document.getElementById("c_pwd").style.borderBottom="2px solid red"; 
    event.preventDefault();
    return false;
   }
    else{
            document.getElementById("error_c_pwd").innerHTML="";
            document.getElementById("c_pwd").style.borderBottom=""; 

   }
   }
// ****Employee id****

// ******End Validation for Sales Registration ******



// ****** Validation for developer Registration ******


function new_d()
                                       {
                                        

                                        var d_name = document.getElementById("d_name").value.trim();
                                        var dev_id = document.getElementById("dev_id").value.trim();
                                        var d_email = document.getElementById("d_email").value.trim();
                                        var d_phone = document.getElementById("d_phone").value.trim();
                                        var d_pwd = document.getElementById("d_pwd").value.trim();
                                        var dc_pwd = document.getElementById("dc_pwd").value.trim();
                                        var re_d = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm;
                                        


                                                    if (d_name=='')
                                                    {
 
                                                    document.getElementById("error_d_name").innerHTML="Enter Your Name";
                                                    document.getElementById("d_name").style.borderBottom="2px solid red";
                                                    document.reg.d_name.focus() ;
                                                    return false;
                                                    }


                                                   if (dev_id=='')
                                                    {
                                                    document.getElementById("error_dev_id").innerHTML="Enter Your Developer ID!";
                                                    document.getElementById("dev_id").style.borderBottom="2px solid red";
                                                    document.reg.dev_id.focus() ;
                                                    return false;
                                                    }else{
                                                    document.getElementById("error_dev_id").innerHTML="";
                                                    document.getElementById("dev_id").style.borderBottom="";    
                                                    }



                                                    if (d_email=='')
                                                    {
                                                    
                                                    document.getElementById("d_email").style.borderBottom="2px solid red";
                                                    document.reg.d_email.focus();
                                                    document.getElementById("error_d_email").innerHTML="Please Enter Your Email Address";
                                                    return false;
                                                    }else if(!re_d.test(d_email)){
                                                      
                                                    document.getElementById("d_email").style.borderBottom="2px solid red";
                                                    document.reg.d_email.focus();
                                                    document.getElementById("error_d_email").innerHTML="Please Provide Your Email Format";
                                                    return false;
                                                    }else{
                                                    document.getElementById("error_d_email").innerHTML="";
                                                    document.getElementById("d_email").style.borderBottom="";        
                                                    }

                                                    if(d_phone=='')
                                                    {

                                                    document.getElementById("d_phone").style.borderBottom="2px solid red";
                                                    document.reg.d_phone.focus() ;
                                                    return false;
                                                     }


                                                    if(d_pwd=='')
                                                    {
                                                    document.getElementById("d_pwd").style.borderBottom="2px solid red";
                                                    document.reg.d_pwd.focus() ;
                                                    document.getElementById("error_d_pwd").innerHTML="";
                                                    return false;
                                                    }else{
                                                    document.getElementById("error_d_pwd").innerHTML="";
                                                    document.getElementById("d_pwd").style.borderBottom="";    
                                                    }
                                                    if(d_pwd =='' || dc_pwd=='' || d_pwd != dc_pwd)
                                                    {
                                                    document.getElementById("dc_pwd").style.borderBottom="2px solid red";
                                                    document.reg.dc_pwd.focus() ;
                                                    document.getElementById("error_dc_pwd").innerHTML="Password Must be Equal";
                                                    return false;
                                                    }else{
                                                    document.getElementById("error_dc_pwd").innerHTML="";
                                                    document.getElementById("dc_pwd").style.borderBottom="";    
                                                    }
                                                    
                                       
                                      }

   function checkName_d(evt)
{
  
var charCode=(evt.which)?evt.which:event.keyCode  
if((charCode<65||charCode>90)&&(charCode<96||charCode>122)&&(charCode!=32)&& charCode!=8)
{
document.getElementById("error_d_name").innerHTML="Only Characters are Allowed!";
document.getElementById("d_name").style.borderBottom="2px solid red";
return false;
}else{
document.getElementById("error_d_name").innerHTML="";
document.getElementById("d_name").style.borderBottom="";    
}


}
 



    //  ****phone***    
    
    
function Validate_d(evt) {
        var regex = new RegExp("^[0-9-!@#$%*?]");
        var key = String.fromCharCode(event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
          document.getElementById("error_d_phone").innerHTML="Only numbers are Allowed!";
          document.getElementById("d_phone").style.borderBottom="2px solid red";
            event.preventDefault();
            return false;
        }
        else{
           document.getElementById("error_d_phone").innerHTML="";
            document.getElementById("d_phone").style.borderBottom="";    
}

   }       

function mailval_d()
{
  var d_email = document.getElementById("d_email").value;
   var re_d = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm;
   if(!re_d.test(d_email)){
     document.getElementById("error_d_email").innerHTML="No space is Allowed!";
   document.getElementById("error_d_email").innerHTML="";
   document.getElementById("d_email").style.borderBottom="2px solid red"; 
    event.preventDefault();
    return false;
   }
   else{
            document.getElementById("error_d_email").innerHTML="";
            document.getElementById("d_email").style.borderBottom=""; 

   }
}
function conpwdval_d()
{
   var d_pwd = document.getElementById("d_pwd").value;
   var dc_pwd = document.getElementById("dc_pwd").value;
   if(d_pwd =='' || dc_pwd=='' || d_pwd != dc_pwd){

    document.getElementById("error_dc_pwd").innerHTML="Please Provide valid Password";
    document.getElementById("dc_pwd").style.borderBottom="2px solid red"; 
    event.preventDefault();
    return false;
   }
    else{
            document.getElementById("error_dc_pwd").innerHTML="";
            document.getElementById("dc_pwd").style.borderBottom=""; 

   }
   }
// ****  Developer Registration Validation   Ends****



// registration form design script
/*
 * Material Deesign Checkboxes non Polymer updated for use in bootstrap.
 * Tested and working in: IE9+, Chrome (Mobile + Desktop), Safari, Opera, Firefox.
 * @author Jason Mayes 2014, www.jasonmayes.com
 * @update Sergey Kupletsky 2014, www.design4net.ru
*/

var wskCheckbox = function() {
  var wskCheckboxes = [];
  var SPACE_KEY = 32;

  function addEventHandler(elem, eventType, handler) {
    if (elem.addEventListener) {
      elem.addEventListener (eventType, handler, false);
    }
    else if (elem.attachEvent) {
      elem.attachEvent ('on' + eventType, handler);
    }
  }

  function clickHandler(e) {
    e.stopPropagation();
    if (this.className.indexOf('checked') < 0) {
      this.className += ' checked';
    } else {
      this.className = 'chk-span';
    }
  }

  function keyHandler(e) {
    e.stopPropagation();
    if (e.keyCode === SPACE_KEY) {
      clickHandler.call(this, e);
      // Also update the checkbox state.

      var cbox = document.getElementById(this.parentNode.getAttribute('for'));
      cbox.checked = !cbox.checked;
    }
  }

  function clickHandlerLabel(e) {
    var id = this.getAttribute('for');
    var i = wskCheckboxes.length;
    while (i--) {
      if (wskCheckboxes[i].id === id) {
        if (wskCheckboxes[i].checkbox.className.indexOf('checked') < 0) {
          wskCheckboxes[i].checkbox.className += ' checked';
        } else {
          wskCheckboxes[i].checkbox.className = 'chk-span';
        }
        break;
      }
    }
  }

  function findCheckBoxes() {
    var labels =  document.getElementsByTagName('label');
    var i = labels.length;
    while (i--) {
      var posCheckbox = document.getElementById(labels[i].getAttribute('for'));
      if (posCheckbox !== null && posCheckbox.type === 'checkbox') {
        var text = labels[i].innerText;
        var span = document.createElement('span');
        span.className = 'chk-span';
        span.tabIndex = i;
        labels[i].insertBefore(span, labels[i].firstChild);
        addEventHandler(span, 'click', clickHandler);
        addEventHandler(span, 'keyup', keyHandler);
        addEventHandler(labels[i], 'click', clickHandlerLabel);
        wskCheckboxes.push({'checkbox': span,
            'id': labels[i].getAttribute('for')});
      }
    }
  }

  return {
    init: findCheckBoxes
  };
}();

wskCheckbox.init();


         /******************************** profile_edit ********************/
            function profilepwdvalid()
            {
                  var s_pwd = document.getElementById("s_pwd").value.trim();
                  var c_pwd = document.getElementById("c_pwd").value.trim();

                  if(pwd=='')
                    {
                    document.getElementById("s_pwd").style.borderBottom="2px solid red";
                    document.reg.pwd.focus() ;
                    document.getElementById("error_pwd").innerHTML="";
                    return false;
                    }else{
                    document.getElementById("error_pwd").innerHTML="";
                    document.getElementById("s_pwd").style.borderBottom="";    
                    }
                    if(s_pwd =='' || c_pwd=='' || s_pwd != c_pwd)
                    {
                    document.getElementById("c_pwd").style.borderBottom="2px solid red";
                    document.reg.c_pwd.focus() ;
                    document.getElementById("error_c_pwd").innerHTML="Password Must be Equal";
                    return false;
                    }else{
                    document.getElementById("error_c_pwd").innerHTML="";
                    document.getElementById("c_pwd").style.borderBottom="";    
                    }
            }

