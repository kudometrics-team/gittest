<?php
	include 'config.php';
	include 'loader.php';

	$connection=$_REQUEST['connection'];
	$price=$_REQUEST['pack_price'];
	$url=$_REQUEST['url'];
	$profile=$_REQUEST['profile'];
	$second_url=$_REQUEST['second_url'];
	
	
	$emptyqry="INSERT INTO `add_cart` (`connection`, `price`, `url`, `profile`, `second_text`, `date`, `time`, `ses_id`, `status`, `user_email`, `cart_status`) VALUES ('$connection', '$price', '$url', '$profile', '$second_url', now(), now(), '$ses', '', '', '')";
	
	$AddCart=$fnsout->PagnatQry($emptyqry);
	if($AddCart)
	{
		//echo "here";
		echo '<meta http-equiv="refresh" content="2;url=view-cart.php" />';
	}
?>

