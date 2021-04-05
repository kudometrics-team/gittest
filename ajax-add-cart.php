<?php
	header("Content-Type: application/json");
	include 'config.php';
	
	$product_id=$_REQUEST['product_id'];
    $Query="select * from products where product_id='$product_id'";
    $product_details=$fnsout->MYQuery($Query);
	
	$connection=$product_details->product_name;
	$price=$product_details->price;
	$url=$_REQUEST['url'];
	$profile=$_REQUEST['profile'];
	$second_text=$_REQUEST['second_text'];
	
	$profile=$_REQUEST['profile'];
	$second_url=$_REQUEST['second_url'];
	
	$emptyqry="INSERT INTO `add_cart` (`product_id`, `connection`, `price`, `url`, `profile`, `second_text`, `date`, `time`, `ses_id`, `status`, `user_email`, `cart_status`) 
								VALUES ('$product_id', '$connection', '$price', '$url', '$profile', '$second_url', now(), now(), '$ses', '', '', '')";
	
	$AddCart=$fnsout->PagnatQry($emptyqry);
	if($AddCart){
		$Query="update checkout set total='', coupon_amount='' where sesid='$ses'";
		$carttotal=$fnsout->MYQuery($Query);
		
		$sucmsg='<div class="alert alert-success text-center" style="z-index: 99999;"><i class="fa fa-check-circle"></i> Success: You have added <b>'.$connection.'</b> to your <a href="'.$baseurl.'/view-cart.php">shopping cart</a>! <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times" aria-hidden="true"></i></button></div>';
		
		$Query="select count(*) as cart_cnt from add_cart where ses_id='$ses'";
		$getcartcnt=$fnsout->MYQuery($Query);
		$cart_cnt=$getcartcnt->cart_cnt;
		
		$Query="select sum(price) as cart_total from add_cart where ses_id='$ses'";
		$carttotal=$fnsout->MYQuery($Query);
		
		$Query="update checkout set total='$carttotal->cart_total', coupon_amount='' where sesid='$ses'";
		$carttotal=$fnsout->MYQuery($Query);
	}
	else{
		$sucmsg='<div class="alert alert-danger text-center" style="z-index: 99999;"><i class="fa fa-warning"></i> Failed: You have some technical error, Please try again! <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times" aria-hidden="true"></i></button></div>';
		$Query="select count(*) as cart_cnt from add_cart where ses_id='$ses'";
		$getcartcnt=$fnsout->MYQuery($Query);
		$cart_cnt=$getcartcnt->cart_cnt;
	}
	
	echo json_encode(array("cart_cnt" => $cart_cnt, "message" => $sucmsg));
?>

