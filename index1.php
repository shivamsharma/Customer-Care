<html>
<body>

<?php
	//Start the session to see if the user is authenticated user.
	session_start();
	//Check if the user is authenticated first. Or else redirect to login page
	if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
	{
		include('background1.html');
	}
?>

<div id="rotator" style="height:480px;width:400px;float:left;">
<img src="image\image2.jpg"/>
</div>

<div id="content" style="background-color:#EEEEEE;height:480px;width:900px;float:left;">

<h2 align="center" style="color:#008080">Welcome to Connectify~All's Customer Care Portal</h2>

<p style="font-size:15px;margin-left:20px;font-family:Arial Rounded MT Bold">Connectify~All, India's No.1 Telecommunication's Company, now makes its customers to subscribe to any of its services from comfort of their homes. 
Connectify~All Customer Care is aimed at providing clients with an online facility using which he can register for various services offered. Through 
Connectify~All Customer Care Portal subscriber can book the complaint as well as know the status of booked complaint.</p>

<div id="top1" style="margin-left:200px;margin-top:100px;width:400px;height:28px;background-color:#A8A8A8;float:top;border-radius:5px"><font style="margin-left:125px;"
FACE="Arial Rounded MT Bold">Complaint's Status</font></div>
<div id="1" style="margin-left:200px;width:400px;height:170px;background-color:#D8D8D8;float:left;border-radius:5px">
<ul>
<li><a href="complaint_status_landline.php" style="color:rgb(198,48,62)"><font size="5px">Landline</a></li>
<li><a href="complaint_status_broadband.php" style="color:rgb(198,48,62)">Broadband</a></li>
<li><a href="complaint_status_mobile.php" style="color:rgb(198,48,62)">Mobile</font></a></li>
</ul>
</div>

</div>
<div id="footer" style="background-color:#3bb9ff;clear:both;text-align:center;">
Copyright © Raman, Abhinav& Shivam</div>

</div>
</body>
</html>