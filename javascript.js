

    
var r=  confirm("Sign in to enjoy full website.");
if(r==true){
var elem1=document.getElementById('dgsn');
elem1.style.display='block';

}
else {

}



function disp(){
var elem = document.getElementById('dgsn');
elem.style.display='block';
}

function dispd(){
var elem2 = document.getElementById('dgsn');
elem2.style.display='none';
}


function validate()
{
 var error="";
 var name = document.getElementById( "name" );
 if( name.value == "" )
 {
  error = " You Have To Write Your Name. ";
  alert(error);
  return false;
 }

 var email = document.getElementById( "email" ).value;
var mf=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
var mres=email.match(mf);
 if( mres==false )
 {
  error = " You Have To Write Valid Email Address. ";
  alert(error);
  return false;
 }

 var password = document.getElementById( "password" );
 if( password.value == "" || password.value <= 8 )
 {
  error = " Password Must Be More Than Or Equal To 8 Digits. ";
  alert(error);
  return false;
 }
 var username = document.getElementById( "username" );
 if( username.value == "")
 {
  error = " You must provide a username.";
  alert(error);
  return false;
 }
 var contactno= document.getElementById( "website" ).value;
 var phoneRGEX = /^((\\+[1-9]{1,4}[ \\-]*)|(\\([0-9]{2,3}\\)[ \\-]*)|([0-9]{2,4})[ \\-]*)*?[0-9]{3,4}?[ \\-]*[0-9]{3,4}?$/;
  var phoneResult = contactno.match(phoneRGEX);
 if(phoneResult==false){
error="Provide a valid Contact Number";
  alert(error);
  return false;
 }


 else
 {
  return true;
 }
}