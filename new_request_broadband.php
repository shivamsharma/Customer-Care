<html>
<body>

<?php
	//Start the session to see if the user is authenticated user.
	session_start();
	//Check if the user is authenticated first. Or else redirect to login page
	if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
	{
		include('background1.html');
		$_SESSION['REQUEST']='broadband';

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
<h2 align="center" style="color:#008080">Request New Service For Broadband</h2>
<p style="font-size:15px;margin-left:20px;font-family:Arial Rounded MT Bold">Select the following Service...</p>
<form name="requestfor" value="requestforbroadband" action="action.php" method="post">
<input type="checkbox" name="request[]" value="b1" style="margin-left:350px"/>B1
<input type="checkbox" name="request[]" value="b2"/>B2
<input type="checkbox" name="request[]" value="b3"/>B3
<input type="checkbox" name="request[]" value="b4"/>B4</br></br></br>
<input type="submit" value ="Submit" class="button blue" style="margin-left:400px">
</form></div>
<div id="footer" style="background-color:#3bb9ff;clear:both;text-align:center;">
Copyright © Raman, Abhinav& Shivam</div>

</div>
</body>
</html>