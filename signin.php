<html>
<body>
<?php
	include('background.html');
?>
<div id="login" style="background-color:#EEEEEE;height:600px;width:650px;float:left;">
<center style="color:#008080;margin-top:100px"><h2>Sign In</h2></center>
<form name="loginform" action="logincheck.php" method="post">
<font size="5px" style="margin-left:80px"> UserID</font><br/>
<input type="text" style="margin-left:80px;border-radius:4px;font-size:20px" type="text" name="user1" size="50" maxlength="20" /><br/><br/>
<font size="5px" style="margin-left:80px"> Password</font><br/>
<input style="margin-left:80px;border-radius:4px;font-size:20px" type="password" name="pass1" size="50" maxlength="20"/></br><br/>
<p style="margin-left:80px;font-size:20px">Forgot Your <a href="#"><b>Password</b></a>?</p></br>
<input type="submit" style="margin-left:260px;font-size:20px" class="button blue" name="submit" value="Login"/>
</div>


<div id="register" style="background-color:rgb(193,193,193);height:600px;width:650px;float:left;">
<center style="color:#008080;"><h2>Register</h2></center>
<form name="registerform" action="index1.php" method="post">
<font size="3px" style="margin-left:15px"><b>UserID *</b></font>
<input style="margin-left:40px;border-radius:3px;font-size:15px" type="text" name="username" size="22" maxlength="20" /><br/><br/>
<font size="3px" style="margin-left:15px"><b>Password *</b></font>
<input style="margin-left:26px;border-radius:3px;font-size:15px" type="password" name="pass" size="22" maxlength="20" /><br/><br/>
<font size="3px" style="margin-left:15px"><b>Name *</b></font>
<input style="margin-left:50px;border-radius:3px;font-size:15px" type="text" name="name" size="22" maxlength="50" /><br/><br/>
<font size="3px" style="margin-left:15px;float:left"><b>Address *</b></font><textarea style="margin-left:40px;border-radius:10px" name="address" rows="4" cols="50">
</textarea><br/><br/>
<font size="3px" style="margin-left:15px"><b>Email *</b></font>
<input style="margin-left:52px;border-radius:3px;font-size:15px" type="text" name="email" size="50" maxlength="50" /><br/><br/>
<font size="3px" style="margin-left:15px"><b>Mobile No. *</b></font>
<input style="margin-left:15px;border-radius:3px;font-size:15px" type="text" name="mobile" size="22" maxlength="11" /><br/><br/>
<font size="3px" style="margin-left:15px"><b>Landline No.</font>
<input style="margin-left:16px;border-radius:3px;font-size:15px" type="text" name="land" size="22" maxlength="15" /><br/><br/>
<font size="3px" style="margin-left:15px"><b>State *</font>
<?php
		$states=array('1'=>'Andaman & Nicobar Islands',
'2'=>'Andhra Pradesh',
'3'=>'Arunachal Pradesh',
'4'=>'Assam',
'5'=>'Bihar',
'6'=>'Chandigarh',
'7'=>'Chhatisgarh',
'8'=>'Dadra & Nagar Haveli',
'9'=>'Daman & Diu',
'10'=>'Delhi',
'11'=>'Goa',
'12'=>'Gujarat',
'13'=>'Haryana',
'14'=>'Himachal Pradesh',
'15'=>'Jammu & Kashmir',
'16'=>'Jharkhand',
'17'=>'Karnataka',
'18'=>'Kerala',
'19'=>'Lakshadweep',
'20'=>'Pondicherry',
'21'=>'Madhya Pradesh',
'22'=>'Maharashtra',
'23'=>'Manipur',
'24'=>'Meghalaya',
'25'=>'Mizoram',
'26'=>'Nagaland',
'27'=>'Orissa',
'28'=>'Punjab',
'29'=>'Rajasthan',
'30'=>'Sikkim',
'31'=>'Tamil Nadu',
'32'=>'Tripura',
'33'=>'Uttar Pradesh',
'34'=>'Uttaranchal',
'35'=>'West Bengal');
?>
<select style="margin-left:57px;border-radius:3px;font-size:15px" name = "state">
<option>Select</option>
<?php
		foreach($states as $num => $nm)
		{
			echo "<option value='$num'><b>$nm</b></option>";
		}
	?>
</select><br/><br/>
<font size="3px" style="margin-left:15px"><b>City *</font>
<input style="margin-left:60px;border-radius:3px;font-size:15px" type="text" name="city" size="20" maxlength="20" /><br/><br/>
<input type="submit" style="margin-left:260px;font-size:20px" class="button blue" name="submit" value="Register"/>
</div>
<div id="footer" style="background-color:#3bb9ff;clear:both;text-align:center;">
Copyright © Raman, Abhinav& Shivam</div>

</body>
</html>