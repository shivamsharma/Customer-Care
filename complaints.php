<html>
<body>

<?php
	//Start the session to see if the user is authenticated user.
	session_start();
	//Check if the user is authenticated first. Or else redirect to login page
	if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
	{
		include('background1.html');
		$_SESSION['shortcut']='';
	}
	else
	{
		include('background.html');
	}
?>

<div id="gallery" style="height:480px;width:400px;float:left;">
<img src="image\image2.jpg"/>
</div>

<div id="content" style="background-color:#EEEEEE;height:480px;width:900px;float:left;">

<h2 align="center" style="color:#008080">Complaints Drop Box</h2>

<p style="font-size:15px;margin-left:20px;font-family:Arial Rounded MT Bold">Connectify~All, India's No.1 Telecommunication's Company, now makes its customers to subscribe to any of its services from comfort of their homes. 
Connectify~All Customer Care is aimed at providing clients with an online facility using which he can register for various services offered. Through 
Connectify~All Customer Care Portal subscriber can book the complaint as well as know the status of booked complaint.</p>

<div id="top1" style="margin-left:250px;margin-top:60px;width:400px;height:28px;background-color:#A8A8A8;float:top;border-radius:10px"><font style="margin-left:90px;"
FACE="Arial Rounded MT Bold">Links To Complaint's Drop Box</font></div>
<div id="1" style="margin-left:250px;width:400px;height:250px;background-color:#D8D8D8;float:left;border-radius:10px">
<form name="complaintsform" action="register_complaints.php" method="post">
</br>
<input type="radio" name="complaintfor" value="Complaint for Landline" ><font size="5px" style="color:rgb(198,48,62);margin-left:20px">Complaint for Landline</font></br></br>
<input type="radio" name="complaintfor" value="Complaint for Broadband" ><font size="5px" style="color:rgb(198,48,62);margin-left:20px">Complaint for Broadband</font></br></br>
<input type="radio" name="complaintfor" value="Complaint for Mobile" ><font size="5px" style="color:rgb(198,48,62);margin-left:20px">Complaint for Mobile</font></br></br>
<input type="submit" name="submit" value="Submit" class="button blue" style="margin-left:130px;margin-top:15px;font-size:20px">
</form>
</div>

</div>
<div id="footer" style="background-color:#3bb9ff;clear:both;text-align:center;">
Copyright © Raman, Abhinav& Shivam</div>

</div>
</body>
</html>