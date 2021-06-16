

<?php
if(isset($_POST['sent'])
){
	

$uname = $_POST['uname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$country = $_POST['country'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$uname . $email . $subject . $country . $phone . $message;


$msg = "
	 <div style='background:white; width:100%;height:500px;> <h2 style='background:red;color:white;padding:10px;'> coming from website</h2>
<table border='1px;'>
		
	<tr>
		<td>User Name</td>
		<td>$uname</td>
	</tr> 
	<tr>
		<td>Email</td>
		<td>$email</td>
	</tr>
	<tr>
		<td>Subject</td>
		<td>$subject</td>
	</tr>
	<tr>
		<td>Country</td>
		<td>$country</td>
	</tr>
	<tr>
		<td>Phone</td>
		<td>$phone</td>
	</tr>
	<tr>
		<td>Message</td>
		<td>$message</td>
	</tr>
</table>

 <div>
"; 


//Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail('orsipresellersales@gmail.com', 'coming from website', $msg, $headers);



}
?>




<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<title>Orsip Better Then The Best quality </title>
	<link rel="stylesheet" href="stylee.css">
</head>


<body>
	<div class="fwidth">
	<div class="heder">
	<div class="lleft"><a href="index.html">
			<img style="border:0px;"src="images/logo.jpg"></a></div>
	<div class="lright"> <div dir="ltr" style="text-align:left;" trbidi="on"><a href="mailto:Orsipresellersales@gmail.com">Send Email To:- Orsipresellersales@gmail.com
			</a></div></div>
	</div>
	
	<div class="menu">
	<div class="marq"><marquee> HELLOBYTE DIALER WONT BE AVAILABLE ANYMORE WITH ORSIP BRAND   |   | </marquee></div>
	<div class="nabi">
	
	<ul>
	<li><a href="index.html">Home</a></li>
	<li><a href="Service.html">Rates</a></li>
	<li><a href="about.html">About us</a></li>
	<li><a href="about.html">Download</a></li>
	<li><a href="contact.php">Contact</a></li>
	</ul>
	
	</div>
	</div>
	</br>
	
	
	<center>
	<div class="contact">
	<form action=""method="post">
	<table border="0px;">
		
	<tr>
		<td>Your Name</td>
		<td><input type="text" name="uname"></td>
	</tr>
	<tr>
		<td>Your Email</td>
		<td><input type="email" name="email"></td>
	</tr>
	<tr>
		<td>Subject</td>
		<td><input type="text" name="subject"></td>
	</tr>
	<tr>
		<td>Country</td>
		<td><input type="text" name="country"></td>
	</tr>
	<tr>
		<td>Phone</td>
		<td><input type="number" name="phone"></td>
	</tr>
	<tr>
		<td>Message</td>
		<td><input type="text" name="message"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="sent" class="cbtn"
		value="submit"></td>
	</tr>
	</table>
	 
	  </h2>
	</form>
	</div>
	</center>
	
	
	</br>
	<div class="footer"> 
		for reseller enquriee please email info@orsip.net
	</div>
	</br>
	
</body>
</html>
