<?php
    include('config.php');
    
    $CartTotal=$fnsout->CartTotal($ses);
    $tot=$CartTotal->tot;
    
    $GetCart=$fnsout->CartCnt($ses);
    $rows=mysqli_num_rows($GetCart);
    $GetUserDetails=$fnsout->GetUserDetails($ses);
$discount=$GetUserDetails->coupon_amount;
   	if($discount)
    	{
    	    $grandtotal=$tot-$discount;
    	}
    	else
    	{
    	    $grandtotal=$tot;
    	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PayPal Payment Cancelled | Clicks Creative</title>
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
    <?php include('head-links.php'); ?>
    
</head>
<body>
    
   <div class="head-slide-check">
        <?php include'header.php';?>
           
			 <div class="slide-caption-program">
			 <img src="images/cancel.png" alt="Facebook Icon" class="mx-auto d-block mb-3" />
		    <h1 class="text-center"><b>Cancel Payment</b></h1>
		</div>
         
    <span class="clearfix"></span>
    
    <div class="thank-bg">  
        <div class="container">
            <div class="divpading">
                <div class="thankyou mx-auto">
				<table class="col-sm-6 table table-bordered d-none">
				<tr>
				<td style="text-align:right">Order Id:</td>
				<td><?php echo $GetUserDetails->orderid ?></td>
				</tr>
				<tr>
				<td style="text-align:right">Amount:</td>
				<td>Rs. <?php echo $grandtotal ?></td>
				</tr>
				</table>
                    <p class="text-center">
                        Your Process is Cancelled. We regret for any inconvenience caused by our payment processor. For any assistance please send an email to 
                        <a href="mailto:info@clickscreative.com">info@clickscreative.com!</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include'footer.php' ?>
    <?php include'footer-script.php' ?>
</body>
</html>