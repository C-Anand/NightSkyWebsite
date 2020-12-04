<?php
require 'core.inc.php';
require 'connect.inc.php';


 $name =$_POST['name'];
 $emailid =$_POST['email'];
 $cont = $_POST['contact_no'];
 $username =$_POST['username'];
 $password =$_POST['password'];
if(!empty($name)&&!empty($emailid)&&!empty($cont)&&!empty($username)&&!empty($password)){
$query = mysqli_query($con, "SELECT 'Username' FROM users  WHERE Username='".$username."'");
$res=mysqli_fetch_row($query);
if(!$res){
	$qry="INSERT INTO users VALUES('$name','$emailid','$cont','$username','$password') ";
if($con->query($qry)==TRUE){
	 echo "<script language=\"JavaScript\">\n";
echo "alert('Registration Successful. Login to continue');\n";
echo "window.location='Login.html'";
echo "</script>";

}
}
else{
 echo "<script language=\"JavaScript\">\n";
echo "alert('Username is already taken. Try again with different username.');\n";
echo "window.location='registration.html'";
echo "</script>";
}
}
?>