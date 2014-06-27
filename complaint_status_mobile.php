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
<img src="image\image1.gif"/>
</div>

<div id="content" style="background-color:#EEEEEE;height:480px;width:900px;float:left;">

<h2 align="center" style="color:#008080">Complaint Status For Mobile</h2>

<p style="font-size:15px;margin-left:20px;font-family:Arial Rounded MT Bold">Your Complaint history with status...</p>

<?php
	$qry='SELECT * FROM COMPLAINT_MOBILE WHERE USER_ID = "'.$_SESSION['USERNAME'].'"';
	$result=mysql_query($qry);
	echo '<h1>The Complaint Details are - </h1>';
	//Draw the table for Players
	echo '<table border="1">
	<th>Complaint No</th>
	<th>User Id </th>
	<th>Complaint Status</th>
	<th>Date of Complaint</th>
	<th>Reason of Complaint</th>';
	//Show the rows in the fetched resultset one by one
	while ($row = mysql_fetch_assoc($result))
	{
		echo '<tr>
		<td>'.$row['complaint_no'].'</td>
		<td>'.$row['user_id'].'</td>
		<td>'.$row['complaint_status'].'</td>
		<td>'.$row['date_of_complaint'].'</td>
		<td>'.$row['reason_of_complaint'].'</td>

		</tr>';
	}
	echo '</table>';
?>

</div>
<div id="footer" style="background-color:#3bb9ff;clear:both;text-align:center;">
Copyright © Raman, Abhinav& Shivam</div>

</div>
</body>
</html>