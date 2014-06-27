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
<img src="image\image3.jpg"/>
</div>

<div id="content" style="background-color:#EEEEEE;height:480px;width:900px;float:left;">

<h2 align="center" style="color:#008080">Broadband Portal</h2>

<p style="font-size:15px;margin-left:20px;font-family:Arial Rounded MT Bold">Let your aspirations take flight with Connectify~All Broadband!
Dream big. Now you have the power to turn your dreams into reality, at your finger tips. Be it an education abroad, a high flying job, 
a wide network of friends, the most suitable life partner, a library full of movies. Now you can have it all.
Just connect to Connectify~All Broadband which offers high speeds at really affordable prices.</p>

<div id="top1" style="margin-left:250px;margin-top:60px;width:400px;height:28px;background-color:#A8A8A8;float:top;border-radius:10px"><font style="margin-left:90px;"
FACE="Arial Rounded MT Bold">Links To Broadband's Facilities</font></div>
<div id="1" style="margin-left:250px;width:400px;height:250px;background-color:#D8D8D8;float:left;border-radius:10px">
<ul>
</br><li><a href="register_complaints.php" value="<?php $_SESSION['shortcut']='broadband';?>" style="color:rgb(198,48,62)"><font size="4px">Complaint Register</a></li></br>
<li><a href="complaint_status_broadband.php" style="color:rgb(198,48,62)">Complaint Status</a></li></br>
<li><a href="new_request_broadband.php" style="color:rgb(198,48,62)">Request For Service</a></font></li>
</ul>
</div>

</div>
<div id="footer" style="background-color:#3bb9ff;clear:both;text-align:center;">
Copyright © Raman, Abhinav& Shivam</div>

</div>
</body>
</html>