<html>
<body>

<?php
	//Start the session to see if the user is authenticated user.
	session_start();
	//Check if the user is authenticated first. Or else redirect to login page
	if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
	{
		include('background1.html');
		
		//Connect to mysql server
			$link = mysql_connect('localhost', 'root', 'admin');
			//Check link to the mysql server
			if(!$link)
			{
				die('Failed to connect to server: ' . mysql_error());
			}
			//Select database
			$db = mysql_select_db('customer_care');
			if(!$db)
			{
				die("Unable to select database");
			}
	}
?>

<div id="gallery" style="height:480px;width:400px;float:left;">
<img src="image\image3.jpg"/>
</div>

<div id="content" style="background-color:#EEEEEE;height:480px;width:900px;float:left;">

<h2 align="center" style="color:#008080"><?php echo $_SESSION['complaintfor']; ?></h2>

<p style="font-size:15px;margin-left:20px;font-family:Arial Rounded MT Bold">Your complaint has suscessfully submitted.</p>

<?php
	if($_SESSION['complaintfor']=='Complaint for Landline')
	{
		$complaint=$_POST['complaint'];
		//Create query
		while(true)
		{
			$rand=rand(111111111,999999999);
			$qry1='SELECT * FROM COMPLAINT WHERE complaint_no = "'.$rand.'"';
			$result=mysql_query($qry1);
			if($result!=0)
			{
				break;
			}
		}
		$qry2='INSERT INTO COMPLAINT VALUES("'.$_SESSION['USERNAME'].'","'.$rand.'")';
		$result=mysql_query($qry2);
		$status='unattended';
		$date=date("Y/m/d");
		$qry3='INSERT INTO COMPLAINT_LANDLINE VALUES("'.$rand.'","'.$_SESSION['USERNAME'].'","'.$status.'","'.$date.'","'.$complaint.'")';
		$result1=mysql_query($qry3);
		echo "<b style='margin-left:20px'>Your Complaint No. is ".$rand.'</b>';
	}
	else if($_SESSION['complaintfor']=='Complaint for Broadband')
	{
		$complaint=$_POST['complaint'];
		//Create query
		while(true)
		{
			$rand=rand(111111111,999999999);
			$qry1='SELECT * FROM COMPLAINT WHERE complaint_no = "'.$rand.'"';
			$result=mysql_query($qry1);
			if($result!=0)
			{
				break;
			}
		}
		$qry2='INSERT INTO COMPLAINT VALUES("'.$_SESSION['USERNAME'].'","'.$rand.'")';
		$result=mysql_query($qry2);
		$status='unattended';
		$date=date("Y/m/d");
		$qry3='INSERT INTO COMPLAINT_BROADBAND VALUES("'.$rand.'","'.$_SESSION['USERNAME'].'","'.$status.'","'.$date.'","'.$complaint.'")';
		$result1=mysql_query($qry3);
		echo "<b style='margin-left:20px'>Your Complaint No. is ".$rand.'</b>';
	}
	else if($_SESSION['complaintfor']=='Complaint for Mobile')
	{
		$complaint=$_POST['complaint'];
		//Create query
		while(true)
		{
			$rand=rand(111111111,999999999);
			$qry1='SELECT * FROM COMPLAINT WHERE complaint_no = "'.$rand.'"';
			$result=mysql_query($qry1);
			if($result!=0)
			{
				break;
			}
		}
		$qry2='INSERT INTO COMPLAINT VALUES("'.$_SESSION['USERNAME'].'","'.$rand.'")';
		$result=mysql_query($qry2);
		$status='unattended';
		$date=date("Y/m/d");
		$qry3='INSERT INTO COMPLAINT_MOBILE VALUES("'.$rand.'","'.$_SESSION['USERNAME'].'","'.$status.'","'.$date.'","'.$complaint.'")';
		$result1=mysql_query($qry3);
		echo "<b style='margin-left:20px'>Your Complaint No. is ".$rand.'</b>';
	}
?>