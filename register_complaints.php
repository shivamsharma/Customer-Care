<html>
<body>

<?php
	//Start the session to see if the user is authenticated user.
	session_start();
	//Check if the user is authenticated first. Or else redirect to login page
	if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
	{
		include('background1.html');
		if($_SESSION['shortcut']=='landline')
		{
			$complaintfor='Complaint for Landline';
		}
		else if($_SESSION['shortcut']=='broadband')
		{
			$complaintfor='Complaint for Broadband';
		}
		else if($_SESSION['shortcut']=='mobile')
		{
			$complaintfor='Complaint for Mobile';
		}
		else
		$complaintfor=$_POST['complaintfor'];
		$_SESSION['complaintfor']=$complaintfor;
	}
?>

<div id="gallery" style="height:480px;width:400px;float:left;">
<img src="image\image2.jpg"/>
</div>

<div id="content" style="background-color:#EEEEEE;height:480px;width:900px;float:left;">

<h2 align="center" style="color:#008080"><?php echo $complaintfor; ?></h2>

<p style="font-size:15px;margin-left:20px;font-family:Arial Rounded MT Bold">Please select the following checkbox matching to your problem.</p>

<?php
	if($complaintfor=='Complaint for Landline')
	{
		echo '<div id="top1" style="margin-left:250px;margin-top:60px;width:400px;height:28px;background-color:#A8A8A8;float:top;border-radius:10px"><font style="margin-left:120px;" FACE="Arial Rounded MT Bold">List of Complaints</font></div>
		<div id="1" style="margin-left:250px;width:400px;height:250px;background-color:#D8D8D8;float:left;border-radius:10px">
		<form name="complaintsform" value="forml" action="show_complaint_no.php" method="post">
		</br>
		<input type="radio" name="complaint" value="Hardware Problem" ><font size="4px" style="color:rgb(198,48,62);margin-left:20px">Hardware Problem</font></br></br>
		<input type="radio" name="complaint" value="Connection Dissrupted" ><font size="4px" style="color:rgb(198,48,62);margin-left:20px">Connection Dissrupted</font></br></br>
		<input type="radio" name="complaint" value="Distraction in Line" ><font size="4px" style="color:rgb(198,48,62);margin-left:20px">Distraction in Line</font></br></br>
		<input type="submit" name="submit" value="Submit" class="button blue" style="margin-left:130px;margin-top:15px;font-size:20px">
		</form>
		</div>';
	}
	else if($complaintfor=='Complaint for Broadband')
	{
		echo '<div id="top1" style="margin-left:250px;margin-top:60px;width:400px;height:28px;background-color:#A8A8A8;float:top;border-radius:10px"><font style="margin-left:120px;" FACE="Arial Rounded MT Bold">List of Complaints</font></div>
		<div id="1" style="margin-left:250px;width:400px;height:250px;background-color:#D8D8D8;float:left;border-radius:10px">
		<form name="complaintsform" value="formb" action="show_complaint_no.php" method="post">
		</br>
		<input type="radio" name="complaint" value="Modem Problem" ><font size="4px" style="color:rgb(198,48,62);margin-left:20px">Modem Problem</font></br></br>
		<input type="radio" name="complaint" value="Connection Dissrupted" ><font size="4px" style="color:rgb(198,48,62);margin-left:20px">Connection Dissrupted</font></br></br>
		<input type="radio" name="complaint" value="Distraction in Line" ><font size="4px" style="color:rgb(198,48,62);margin-left:20px">Distraction in Line</font></br></br>
		<input type="submit" name="submit" value="Submit" class="button blue" style="margin-left:130px;margin-top:15px;font-size:20px">
		</form>
		</div>';
	}
	else if($complaintfor=='Complaint for Mobile')
	{
		echo '<div id="top1" style="margin-left:250px;margin-top:60px;width:400px;height:28px;background-color:#A8A8A8;float:top;border-radius:10px"><font style="margin-left:120px;" FACE="Arial Rounded MT Bold">List of Complaints</font></div>
		<div id="1" style="margin-left:250px;width:400px;height:250px;background-color:#D8D8D8;float:left;border-radius:10px">
		<form name="complaintsform" value="formm" action="show_complaint_no.php" method="post">
		</br>
		<input type="radio" name="complaint" value="Value Added Service Related" ><font size="4px" style="color:rgb(198,48,62);margin-left:20px">Value Added Service Related</font></br></br>
		<input type="radio" name="complaint" value="Connectivity Problem" ><font size="4px" style="color:rgb(198,48,62);margin-left:20px">Connectivity Problem</font></br></br>
		<input type="radio" name="complaint" value="Sim Blocked" ><font size="4px" style="color:rgb(198,48,62);margin-left:20px">Sim Blocked</font></br></br>
		<input type="radio" name="complaint" value="PUK Code Request" ><font size="4px" style="color:rgb(198,48,62);margin-left:20px">PUK Code Request</font></br></br>
		<input type="submit" name="submit" value="Submit" class="button blue" style="margin-left:130px;margin-top:15px;font-size:20px">
		</form>
		</div>';
	}
?>
</div>
<div id="footer" style="background-color:#3bb9ff;clear:both;text-align:center;">
Copyright © Raman, Abhinav& Shivam</div>

</div>
</body>
</html>