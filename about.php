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
<img src="image\image.jpg"/>
</div>

<div id="content" style="background-color:#EEEEEE;height:480px;width:900px;float:left;">

<h2 align="center" style="color:#008080">About Us</h2>

<p style="font-size:15px;margin-left:20px;font-family:Arial Rounded MT Bold"><b>Connectify~All</b> was incorporated on 20th April 2000. It took over the business of providing of telecom services and network management from the erstwhile Central Government Departments of Telecom Services (DTS) and Telecom Operations (DTO), with effect from 1st October‘ 2010 on going concern basis.It is one of the largest & leading public sector units providing comprehensive range of telecom services in India. 

<b>Connectify~All</b> has installed Quality Telecom Network in the country & now focusing on improving it, expanding the network, introducing new telecom services with ICT applications in villages & winning customer's confidence. Today, it has about 43.74 million line basic telephone capacity, 8.83 million WLL capacity, 72.60 million GSM capacity, 37,885 fixed exchanges, 68,162 GSM BTSs, 12,071 CDMA Towers, 197 Satellite Stations, 6,86,644 RKm. of OFC, 50,430 RKm. of microwave network connecting 623 districts, 7330 cities/towns & 5.8 lakhs villages .
 
<b>Connectify~All</b> is the only service provider, making focused efforts & planned initiatives to bridge the rural-urban digital divide in ICT sector. In fact there is no telecom operator in the country to beat its reach with its wide network giving services in every nook & corner of the country & operates across India except New Delhi & Mumbai. Whether it is inaccessible areas of Siachen glacier or North-Eastern regions of the country, <b>Connectify~All</b> serves its customers with a wide bouquet of telecom services namely Wireline, CDMA mobile, GSM mobile, Internet, Broadband, Carrier service, MPLS-VPN, VSAT, VoIP, IN Services, FTTH, etc.
<b>Connectify~All</b> is numero uno of India in all services in its license area. The company offers wide ranging & most transparent tariff schemes designed to suit every customer.<b> Connectify~All</b> has 90.09 million cellular & 5.06 million WLL customers as on 31.07.2011. 3G Facility has been given to all 2G connections of <b>Connectify~All</b>. In basic services, <b>Connectify~All</b> is miles ahead of its rivals, with 24.58 million wireline phone subscribers i.e. 71.93% share of the wireline subscriber base.
<b>Connectify~All</b> has set up a world class multi-gigabit, multi-protocol convergent IP infrastructure that provides convergent services like voice, data & video through the same Backbone & Broadband Access Network. At present there are 8.09 million broadband customers. 

The company has vast experience in planning, installation, network integration & maintenance of switching & transmission networks & also has a world class ISO 9000 certified Telecom Training Institute.
</p>

</div>
<div id="footer" style="background-color:#3bb9ff;clear:both;text-align:center;">
Copyright © Raman, Abhinav& Shivam</div>

</div>
</body>
</html>