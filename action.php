<html>
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
	else
	{
		include('background.html');
	}
	if($_SESSION['REQUEST']=='mobile')
	{
		$request=$_POST['request'];
		$j=count($request);
		$sms=NULL;
		$roaming=NULL;
		$validity=NULL;
		$gprs=NULL;
		$tariff=NULL;
		$i=0;
		while($i < $j)
		{
			if($request[$i]=='sms')
			{	
				$sms=$request[$i];
			}
			else if($request[$i]=='roaming')
			{
				$roaming=$request[$i];
			}
			else if($request[$i]=='validity')
			{
				$validity=$request[$i];
			}
			else if($request[$i]=='gprs')
			{
				$gprs=$request[$i];
			}
			else if($request[$i]=='tariff')
			{
				$tariff=$request[$i];
			}
			$i++;
		}
		$qry='SELECT * FROM NEW_REQUEST_MOBILE WHERE USER_ID = "'.$_SESSION['USERNAME'].'"';
		$result=mysql_query($qry);
		if(mysql_num_rows($result)==0)
		{
			$qry1='INSERT INTO NEW_REQUEST_MOBILE VALUES("'.$_SESSION['USERNAME'].'","'.$sms.'","'.$roaming.'","'.$validity.'","'.$gprs.'","'.$tariff.'")';
		}
		else
		$qry1='UPDATE NEW_REQUEST_MOBILE SET SERVICE_TYPE_SMS="'.$sms.'",SERVICE_TYPE_ROAMING="'.$roaming.'",SERVICE_TYPE_VALIDITY="'.$validity.'",SERVICE_TYPE_GPRS="'.$gprs.'",SERVICE_TYPE_TARIFF="'.$tariff.'" WHERE USER_ID="'.$_SESSION['USERNAME'].'"'; 
		$result=mysql_query($qry1);
	}
	else if($_SESSION['REQUEST']=='landline')
	{
		$request=$_POST['request'];
		$j=count($request);
		$roaming=NULL;
		$validity=NULL;
		$tariff=NULL;
		$i=0;
		while($i < $j)
		{
			if($request[$i]=='roaming')
			{
				$roaming=$request[$i];
			}
			else if($request[$i]=='validity')
			{
				$validity=$request[$i];
			}
			else if($request[$i]=='tariff')
			{
				$tariff=$request[$i];
			}
			$i++;
		}
		$qry='SELECT * FROM NEW_REQUEST_LANDLINE WHERE USER_ID= "'.$_SESSION['USERNAME'].'"';
		$result=mysql_query($qry);
		if(mysql_num_rows($result)==0)
		$qry1='INSERT INTO NEW_REQUEST_lANDLINE VALUES("'.$_SESSION['USERNAME'].'","'.$roaming.'","'.$validity.'","'.$tariff.'")';
		else $qry1='UPDATE NEW_REQUEST_LANDLINE SET SERVICE_TYPE_ROAMING="'.$roaming.'",SERVICE_TYPE_VALIDITY="'.$validity.'",SERVICE_TYPE_TARIFF="'.$tariff.'" WHERE USER_ID="'.$_SESSION['USERNAME'].'"'; 
		$result=mysql_query($qry1);
	}
	else if($_SESSION['REQUEST']=='broadband')
	{
		$request=$_POST['request'];
		$j=count($request);
		$b1=NULL;
		$b2=NULL;
		$b3=NULL;
		$b4=NULL;
		$i=0;
		while($i < $j)
		{
			if($request[$i]=='b1')
			{
				$b1=$request[$i];
			}
			else if($request[$i]=='b2')
			{
				$b2=$request[$i];
			}
			else if($request[$i]=='b3')
			{
				$b3=$request[$i];
			}
			else if($request[$i]=='b4')
			{
				$b4=$request[$i];
			}
			$i++;
		}
		$qry='SELECT * FROM NEW_REQUEST_BROADBAND WHERE USER_ID= "'.$_SESSION['USERNAME'].'"';
		$result=mysql_query($qry);
		if(mysql_num_rows($result)==0)
		{
			$qry1='INSERT INTO NEW_REQUEST_BROADBAND VALUES("'.$_SESSION['USERNAME'].'","'.$b1.'","'.$b2.'","'.$b3.'","'.$b4.'")';
		}
		else $qry1='UPDATE NEW_REQUEST_BROADBAND SET service_type_b1="'.$b1.'",service_type_b2="'.$b2.'",service_type_b3="'.$b3.'",service_type_b4="'.$b4.'" WHERE USER_ID="'.$_SESSION['USERNAME'].'"';
		$result=mysql_query($qry1);
	}
?>
<div id="gallery" style="height:480px;width:400px;float:left;">
<img src="image\image1.gif"/>
</div>

<div id="content" style="background-color:#EEEEEE;height:480px;width:900px;float:left;">

<h2 align="center" style="color:#008080">Request For Service</h2>

<p style="font-size:15px;margin-left:20px;font-family:Arial Rounded MT Bold">You have been registered successfully for selected request.</p>

</div>
<div id="footer" style="background-color:#3bb9ff;clear:both;text-align:center;">
Copyright © Raman, Abhinav& Shivam</div>

</div>
</body>
</html>