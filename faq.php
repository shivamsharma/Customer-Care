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

<h2 align="center" style="color:#008080">Frequently Asked Questions</h2>
<h3 style="font-size:15px;margin-left:20px;font-family:Arial Rounded MT Bold;color:red">1.What is Toll Free phone service?</h3>
<ul>
<li>This service shows the new function in charging, a call to a service subscriber will be paid by the called party.</li>
<li>All charges are levied on the service subscriber.</li>
<li>The service is free of any charge to the calling user.</li>
<li>Service is accessible from networks of other Operators also.</li>
<li>11 digit number 1800-XYZ-ABCD</li>
</ul>
<p style="font-size:15px;margin-left:20px;font-family:Arial Rounded MT Bold"></p>

</div>
<div id="footer" style="background-color:#3bb9ff;clear:both;text-align:center;">
Copyright © Raman, Abhinav& Shivam</div>

</div>
</body>
</html>