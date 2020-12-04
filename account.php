<?php 
  $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "nightsky";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
$sql = "SELECT * FROM blogs"; 
$result = mysqli_query($con,$sql);   
?>

<!doctype html>
<html>
<head>

<style type="text/css">
		#tableData
	{
		color : white;
		border-collapse: separate;
		border-spacing: 6em 2em;
	}

	#blog_acc{
background-image: url("https://cdn.statically.io/img/wallpaperaccess.com/full/432480.jpg");
width:98%;
height:100%;
margin-top:10px;
margin-bottom:10px;
margin-left:1%;
margin-right:1%;
color:#ffffff;
font-size:150% 
}
</style>


<title>
NightSky>Account
</title>
<link type="text/css" rel="stylesheet" href="stylesheet.css">
</head>
<body>
<div id="Header">
<img id="logo" src="Images/logo.png"/>
<img id="header1" src="Images/
header1.jpg"/>

<img id="header2" src="Images/header2.jpg"/>

</div>
<div id="Navbar">
<ul>
<li>Home
<ul>
<li><a href="home.html">HomePage</a></li>
<li><a href="#" >Courses</a></li>
<li><a href="account.php" >Your Account</a></li>
</ul>
</li>
<li>Research
<ul>
<li><a href="Research.html#solarsystem">Solar System</a></li>
<li><a href="Research.html#earth">Earth</a></li>
<li><a  href="Research.html#planets">Planets</a></li>
<li><a href="Research.html#satellite">Satellites</a></li>
<li><a href="Research.html#celestial">Celestial Bodies</a></li>
<li><a  href="Research.html#Bh">Black Holes</a></li>
</ul>
</li>
<li>Gallery
<ul>
<li><a href="Images.html">Images</a></li>
<li><a href="Videos.html">Videos</a></li>
<li><a href="NasaLive.html">NASA live</a></li>
</ul>
</li>
<li>Article
<ul>
<li><a href="blogs.html">Blogs</a></li>

</ul>
</li>
</ul>

</div>
<div id="blog_acc">
<center> <h3>Your Blogs</center></h3>
	<table id="tableData">
		<tr>
			<th>Title</th>
			<th>Category</th>
			<th>Content</th>
		</tr>
		 <?php  
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
            <tr> 
                <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN--> 
                     <td><?php echo $rows['Title'];?></td> 
                <td><?php echo $rows['Category'];?></td> 
                <td><?php echo $rows['Content'];?></td> 
            </tr> 
            <?php 
                } 
             ?> 
	</table>
</div>

<div class="footer">
<ul>
<li><a href="#">Home</a></li>
<li><a href="#">Terms of Use</a></li>
<li><a href="#">About Us</a></li>
<li><a href="#">Contact Us</a></li>
</ul>
<div>
<br/>
<div class="footer">
<p>
<h3>
<center>-=DISCLAIMER=- </center></h3>Using our codes without our permission is strictly prohibited under Section 107 of the Copyright Act 1976. Please contact us for more information. <br/>&copy: Nightsky.co.nf. All Rights Reserved.</p>
</div>
</div>
</body>
</html>