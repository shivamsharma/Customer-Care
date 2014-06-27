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
<img src="image\image1.gif"/>
</div>

<div id="content" style="background-color:#EEEEEE;height:480px;width:900px;float:left;">

<h2 align="center" style="color:#008080">Landline Portal</h2>

<p style="font-size:15px;margin-left:20px;font-family:Arial Rounded MT Bold">Connectify~All  Landline,the Life Line of INDIA Crystal Clear Voice Quality.
We change the way INDIA Communicates.A fully computerized online single window Complaint Booking Facility for MTNL Landline and Broadband related complaint.
 If your Telephone or Broadband line goes faulty, register your complaint here for prompt and fast recovery of your Telephone/Broadband line.</p>

<div id="top1" style="margin-left:250px;margin-top:60px;width:400px;height:28px;background-color:#A8A8A8;float:top;border-radius:10px"><font style="margin-left:90px;"
FACE="Arial Rounded MT Bold">Links To Landlines's Facilities</font></div>
<div id="1" style="margin-left:250px;width:400px;height:250px;background-color:#D8D8D8;float:left;border-radius:10px">
<ul>
</br><li><a href="register_complaints.php" value="<?php $_SESSION['shortcut']='landline';?>" style="color:rgb(198,48,62)"><font size="4px">Complaint Register</a></li></br>
<li><a href="complaint_status_landline.php" style="color:rgb(198,48,62)">Complaint Status</a></li></br>
<li><a href="new_request_landline.php" style="color:rgb(198,48,62)">Request For Service</a></font></li>
</ul>
</div>

</div>
<div id="footer" style="background-color:#3bb9ff;clear:both;text-align:center;">
Copyright © Raman, Abhinav& Shivam</div>

</div>
</body>
</html>