<?php
require 'core.inc.php';
require 'connect.inc.php';
if(isset($_POST['username'])&&isset($_POST['password']))
{
 $name=$_POST['username'];
 $pwd=$_POST['password'];
if(!empty($name)&&!empty($pwd)){
 $query=mysqli_query($con,"select * from users where username='".$name."' and password='".$pwd."'");
$res=mysqli_fetch_row($query);
   if($res)
   {
$user_id=$res['username'];
$_SESSION['user_id']=$user_id;
header('location:home.html');

    
       }
   else
   {
    echo "<script language=\"JavaScript\">\n";
echo "alert('Username or Password was incorrect! Please SignUp to enjoy full site');\n";
echo "window.location='Login.html'";
echo "</script>";
   }





}
else{
echo "<script language=\"JavaScript\">\n";
echo "alert('Enter both username and password');\n";
echo "window.location='Login.html'";
echo "</script>";
}
}
?> 