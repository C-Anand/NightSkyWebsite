<?php
require 'core.inc.php';
require 'connect.inc.php';


 $title =$_POST['title'];
 $cat =$_POST['category'];
 $cont = $_POST['content'];

if(!empty($title)&&!empty($cat)&&!empty($cont)){
	$qry="INSERT INTO blogs VALUES('$title','$cat','$cont') ";
if($con->query($qry)==TRUE){
	 echo "<script language=\"JavaScript\">\n";
echo "alert('Blog Added');\n";
echo "window.location='blogs.html'";
echo "</script>";

}
}
else{
 echo "<script language=\"JavaScript\">\n";
echo "alert('Something went wrong.');\n";
echo "window.location='blogs.html'";
echo "</script>";
}
?>