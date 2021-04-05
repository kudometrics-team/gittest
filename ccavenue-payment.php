<style>
	body{background:#eef1f2;}
@keyframes  lo{to{transform:rotate(360deg)}}@-webkit-keyframes lo{to{-webkit-transform:rotate(360deg)}}
.loader{height:24px;width:24px;border-radius:50%;display:inline-block;
  animation:lo .8s infinite linear;-webkit-animation:lo .8s infinite linear;
  transition:0.3s;-webkit-transition:0.3s;
  opacity:0;border:2px solid #3395FF;border-top-color:transparent}
.vis{opacity:1}
</style>
<div class="loader vis" style="position:absolute;top:115px;left:50%;margin-left:-12px"></div>

<?php
	include('config.php');
    
	$Query="select * from checkout where sesid='$ses'";
	$orderdetails=$fnsout->MYQuery($Query);
	
	echo '<form id="ccavenue_form" method="post" name="customerData" action="'.$baseurl.'/ccavRequestHandler.php">
				<input type="hidden" id="amount" name="amount" value="'.strip_tags($orderdetails->total).'">
				<input type="hidden" name="tid" id="tid" readonly />
				<input type="hidden" name="merchant_id" value="252789"/>
				<input type="hidden" name="order_id" value="'.$orderdetails->orderid.'">
				<input type="hidden" name="currency" value="INR"/>
				<input type="hidden" name="redirect_url" value="https://www.clickscreative.com/ccavResponseHandler.php"/>
				<input type="hidden" name="cancel_url" value="https://www.clickscreative.com/ccavResponseHandler.php"/>
				<input type="hidden" name="language" value="EN"/>
				<input type="submit" style="display:none;">
			</form>';
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.1/jquery.min.js" integrity="sha256-oTBTRyGdZzzJcxcklCSOVXzo7Mr2WvmVwHydfa7UR10=" crossorigin="anonymous"></script>
<script>
	$(document).ready(function(){
		//$("#ccavenue_form").find('input[type="submit"]').trigger('click');
	});
</script>