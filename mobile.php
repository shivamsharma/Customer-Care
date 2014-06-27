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
	else
	{
		include('background.html');
	}
?>

<div id="gallery" style="height:480px;width:400px;float:left;">
<img src="image\image4.png"/>
</div>

<div id="content" style="background-color:#EEEEEE;height:480px;width:900px;float:left;">

<h2 align="center" style="color:#008080">Mobile Portal</h2>

<p style="font-size:15px;margin-left:20px;font-family:Arial Rounded MT Bold">Experience total cost control, low rentals and easy billing with our mobile 
services. Explore the world with our roaming services and get absolutely cool offers with Connectify~All.Make or recieve calls from anywhere in India.
Get informationabout your prepaid account within seconds.Easy bill paymentanywhere anytime.Instant recharge anytime.</p>

<div id="top1" style="margin-left:250px;margin-top:60px;width:400px;height:28px;background-color:#A8A8A8;float:top;border-radius:10px"><font style="margin-left:90px;"
FACE="Arial Rounded MT Bold">Links To Mobile's Facilities</font></div>
<div id="1" style="margin-left:250px;width:400px;height:250px;background-color:#D8D8D8;float:left;border-radius:10px">
<ul>
</br><li><a href="register_complaints.php" value="<?php $_SESSION['shortcut']='mobile';?>" style="color:rgb(198,48,62)"><font size="4px">Complaint Register</a></li></br>
<li><a href="complaint_status_mobile.php" style="color:rgb(198,48,62)">Complaint Status</a></li></br>
<li><a href="new_request_mobile.php" style="color:rgb(198,48,62)">Request For Service</a></font></li>
</ul>
</div>

</div>
<div id="footer" style="background-color:#3bb9ff;clear:both;text-align:center;">
Copyright © Raman, Abhinav& Shivam</div>

</div>
</body>
</html>