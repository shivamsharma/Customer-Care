<?php
{
	if ($_POST['submit'] == 'Login' )
	{
		//Collect POST values
		$id = $_POST['user1'];
		$pass = $_POST['pass1'];
		if($id && $pass)
		{
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
			//Create query
			$qry='SELECT * FROM LOGIN WHERE user_id = "'.$id.'" AND password = "'.$pass.'"';
			//Execute query
			$result=mysql_query($qry);
			//Check whether the query was successful or not 
			if(mysql_num_rows($result)>0)
			{
				$count = mysql_num_rows($result);
			}
			else
			{
				//Login failed
				echo '<center><b>Incorrect Username or Password !!!</b><center>';
				include('signin.php');
				exit();
			}
			//if query was successful it should fetch 1 matching record from the table.
			if( $count == 1)
			{
				//Login successful set session variables and redirect to main page.
				session_start();
				$_SESSION['IS_AUTHENTICATED'] = 1;
				$_SESSION['USERNAME'] = $id;
				header('location:index1.php');
			}
		}
		else
		{
			echo '<center><b>Username or Password missing of '.$id.'!!</b></center>';
			include('signin.php');
			exit();
		}
	}
	else if($_POST['submit'] == 'Register')
		{
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
			$validationFlag = true;
			if(!($_POST['username'] && $_POST['pass']&& $_POST['name'] && $_POST['email'] &&
			$_POST['address'] && $_POST['mobile'] && $_POST['state'] && $_POST['city']))
			{
				echo 'All the fields marked as * are compulsary.<br/>';
				$validationFlag = false;
			}
			else
			{
				$id='\''.$_POST['username'].'\'';
				$pass='\''.$_POST['pass'].'\'';
				$name='\''.$_POST['name'].'\'';
				$email='\''.$_POST['email'].'\'';
				$address='\''.$_POST['address'].'\'';
				$mobile='\''.$_POST['mobile'].'\'';
				if($_POST['land'])
				$land='\''.$_POST['land'].'\'';
				else
				$land='NULL';
				$state='\''.$_POST['state'].'\'';
				$city='\''.$_POST['city'].'\'';
				//If all validations are correct, connect to MySQL and execute the query
				if($validationFlag)
				{
					//Create Insert query
					$qry1='SELECT * FROM USER WHERE user_id = '.$id.'';		//Checking userID  exist in USER Table
					$qry2='SELECT * FROM COMPANY_DB WHERE mobile_no = '.$mobile.'';		//Checking mobile no. exist in USER Table
					$query1='INSERT INTO LOGIN VALUES('.$id.','.$pass.',NULL,NULL)';
					$query='INSERT INTO USER VALUES('.$name.','.$id.','.$address.','.$email.','.$mobile.','.$land.','.$state.','.$city.')';
					//Execute query
					$result1 = mysql_query($qry1);
					$result2 = mysql_query($qry2);
					//Check if query executes successfully
					if(mysql_num_rows($result1)>0)
					{
						echo "User Id Already Exist";
					}
					else if(mysql_num_rows($result2)==0)
					{
						echo "Mobile No. Doesn't Exist in Company's DataBase";
					}
					else
					{
						$result=mysql_query($query1);
						$result = mysql_query($query);
						session_start();
						$_SESSION['IS_AUTHENTICATED'] = 1;
						$_SESSION['USERNAME'] = $id;
						header('location:index1.php');
					}
				}
			}
		}
}
?>