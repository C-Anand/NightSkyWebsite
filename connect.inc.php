<?php
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = '';
$mysql_db = "nightsky";
$con=mysqli_connect($mysql_host,$mysql_user,$mysql_pass);
mysqli_select_db($con,$mysql_db);
if(!mysqli_connect($mysql_host,$mysql_user,$mysql_pass)||!mysqli_select_db($con,$mysql_db)){
die(mysql_error());
}
?>