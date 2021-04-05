<?php 
    include 'loader.php';

    include 'config.php';
    $id=$_REQUEST['id'];
    $tablename='add_cart';
    $DelCart=$fnsout->DeleteData($id,$tablename);
    
	if($DelCart){
		$Query="select sum(price) as cart_total from add_cart where ses_id='$ses'";
		$getorderdetails=$fnsout->MYQuery($Query);
		
		$Query="update checkout set total='$getorderdetails->cart_total', coupon_amount='' where sesid='$ses'";
		$getcartcnt=$fnsout->MYQuery($Query);
		
		echo '<meta http-equiv="refresh" content="0; url=view-cart.php" />';
	}
?>