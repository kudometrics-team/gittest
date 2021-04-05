<?php
	header("Content-Type: application/json");
	include 'config.php';
	$coupon_code=$_REQUEST['coupon_code'];
	
	$Query="select sum(price) as cart_total from add_cart where ses_id='$ses'";
	$getcartcnt=$fnsout->MYQuery($Query);
	
	if($coupon_code=='CC10' || $coupon_code=='cc10' || $coupon_code=='Cc10'){
		if($getcartcnt->cart_total>=50){
			$discount_amount=$getcartcnt->cart_total*10/100;
			$g_tot=$getcartcnt->cart_total-$discount_amount;
			$sucmsg="<span class='text-success'>Cool! You got 10% OFF using this promo code.</span>";
			
			$Query="update checkout set total='$g_tot', coupon_amount='$discount_amount' where sesid='$ses'";
			$getcartcnt=$fnsout->MYQuery($Query);
		}
		else{
			$g_tot=$getcartcnt->cart_total;
			$Query="update checkout set total='$getcartcnt->cart_total', coupon_amount='' where sesid='$ses'";
			$getcartcnt=$fnsout->MYQuery($Query);
			$sucmsg="<span class='text-danger'>Oops! Minimum order should be 50 USD</span>";
		}
	}
	else if($coupon_code=='CC20' || $coupon_code=='cc20' || $coupon_code=='Cc20'){
		if($getcartcnt->cart_total>=100){
			$discount_amount=$getcartcnt->cart_total*20/100;
			$g_tot=$getcartcnt->cart_total-$discount_amount;
			$sucmsg="<span class='text-success'>Cool! You got 20% OFF using this promo code.</span>";
			
			$Query="update checkout set total='$g_tot', coupon_amount='$discount_amount' where sesid='$ses'";
			$getcartcnt=$fnsout->MYQuery($Query);
		}
		else{
			$g_tot=$getcartcnt->cart_total;
			$Query="update checkout set total='$getcartcnt->cart_total', coupon_amount='' where sesid='$ses'";
			$getcartcnt=$fnsout->MYQuery($Query);
			$sucmsg="<span class='text-danger'>Oops! Minimum order should be 100 USD</span>";
		}
	}
	else{
		$g_tot=$getcartcnt->cart_total;
		$sucmsg="<span class='text-danger'>Oops! invalid Coupon Code</span>";
		$Query="update checkout set total='$getcartcnt->cart_total', coupon_amount='' where sesid='$ses'";
		$getcartcnt=$fnsout->MYQuery($Query);
	}
	
	echo json_encode(array("dis_values" => number_format($discount_amount,2), "g_tot" => number_format($g_tot,2), "coupon_txt" => $sucmsg));
?>