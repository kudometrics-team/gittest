<?php 
	include 'config.php';

	$Query="select * from checkout where sesid='$ses'";
	$orderdetails=$fnsout->MYQuery($Query);
	
	$_POST["tid"] = '';
	$_POST["merchant_id"] = 252789;
	$_POST["currency"] = 'INR';
	$_POST["amount"] = $orderdetails->total;
	$_POST["order_id"] = $orderdetails->orderid;
	$_POST["redirect_url"] = 'https://www.clickscreative.com/ccavResponseHandler.php';
	$_POST["cancel_url"] = 'https://www.clickscreative.com/ccavResponseHandler.php';
	$_POST["language"] = 'EN';
?>
<html>
<head>
<title>CCAvenue Payment</title>
<style>
	body{background:#eef1f2;}
	@keyframes  lo{to{transform:rotate(360deg)}}@-webkit-keyframes lo{to{-webkit-transform:rotate(360deg)}}
	.loader{height:24px;width:24px;border-radius:50%;display:inline-block;
	animation:lo .8s infinite linear;-webkit-animation:lo .8s infinite linear;
	transition:0.3s;-webkit-transition:0.3s;
	opacity:0;border:2px solid #3395FF;border-top-color:transparent}
	.vis{opacity:1}
</style>
</head>
<body>
<div class="loader vis" style="position:absolute;top:115px;left:50%;margin-left:-12px"></div>
<center>
<?php include('crypto.php')?>
<?php 

	error_reporting(0);
	
	$merchant_data='';
	$working_key='E138F91AF444A1F8A8D7CC4FB1CA2E7B';//Shared by CCAVENUES
	$access_code='AVBL91HC17BN00LBNB';//Shared by CCAVENUES
	
	foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.$value.'&';
	}

	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.

?>
<form method="post" name="redirect" action="https://test.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
	<?php
	echo "<input type=hidden name=encRequest value=$encrypted_data>";
	echo "<input type=hidden name=access_code value=$access_code>";
	?>
</form>
</center>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>
