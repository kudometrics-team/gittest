<?php
	include('config.php');
    
    $Total=$fnsout->CartTotal($ses);
    $subtotal=$Total->tot;
    
	$getmyorderid=$fnsout->GetUserDetails($ses);
	$Myorderid=$getmyorderid->orderid;

	$GetCart=$fnsout->CartCnt($ses);
	
	$Query="select sum(price) as cart_total from add_cart where ses_id='$ses'";
	$getcartcnt=$fnsout->MYQuery($Query);
	
	if($getmyorderid->total){
		$grande_tot=$getmyorderid->total;
	}
	else{
		$grande_tot=$getcartcnt->cart_total;
	}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Checkout | Clicks Creative</title>
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
    <?php include'head-links.php';?>
</head>
<body>
	    
	    
	    <div class="head-slide-check mt-0">
        <?php include'header.php';?>
		 <div class="slide-caption-program">
           
		    <h1 class="text-center">Checkout</h1>
		</div>
                <div class="checkout-get mb-5">
                <div class="container">
                    <form autocomplete="off" name="mediapayment" class="row" action="#" id="checkout-form" method="post" autocomplete="off">
                                           
                        <div class="col-sm-12 col-lg-6 check-border">
                            <div class="checkout-white-bg">
                            <div class="row1">
                                    <div class="col-12 clearfix mb-3">
                                        <h3>Your Order (<?php echo $Myorderid; ?>)</h3>
                                    </div>
                                   
                                    <div class="check-value col-12">
                                        <span class="float-left">Product</span>
                                        <span class="float-right">Price</span>
                                    </div>
                                        <span class="clearfix"></span>

                                    <div class="col-xs-12 checkoutpack fullwidth">
                                        <div class="panel-group">
                                            <div class="panel panel-default">
                                                <?php
                                                    $i=1;
                                                    $GetCarts=$fnsout->CartCnt($ses);
                                                    while($rows=mysqli_fetch_object($GetCarts))
                                                    {
														
													if($rows->connection=='Static Web Design Service'){
														$label_type='No of Webpages';
													}
													else if($rows->connection=='Web Design Consultation Call'){
														$label_type='Model Website';				
													}
													else if($rows->connection=='Website Migration Services'){
														$label_type='From Platform';				
													}
													else if($rows->connection=='Blog Installation Services'){
														$label_type='Platform';		
													}
													else if($rows->connection=='Shopify Store Setup Service'){
														$label_type='Number of Products';				
													}
													else if($rows->connection=='Brochure Design Services'){
														$label_type='Number of Pages';				
													}
													else if($rows->connection=='Logo Design Services'){
														$label_type='Business Name';				
													}
													else{$label_type='';}

													if($rows->second_text && $rows->connection=='Website Migration Services'){
														$second_label_type='To Platform';	
														//echo $rows->second_text;			
													}
													else if($rows->second_text && $rows->connection=='Logo Design Services'){
														$second_label_type='Type of Business';
														//echo $rows->second_text;				
													}
													else if($rows->second_text && $rows->connection=='Facebook Marketing Services'){
														$second_label_type='Facebook Page URL';	
														//echo $rows->second_text;			
													}
													else{$second_label_type='';}
												?>
                                                   
                                                    <div class="panel-heading">
                                                    
                                                        <h4 <?php echo $rows->id; ?>" class="panel-title">
															
                                                            <div class="right-arrow pull-right expand">$<?php echo number_format($rows->price,2); ?></div>
                                                            <p class="mb-0"> <?php echo $rows->connection; ?></p>
															<?php if($rows->url){ ?><p style="font-size:13px;font-weight:normal;padding-top:10px;margin-bottom:5px;"><b>URL:</b> <?php echo $rows->url; ?></p><?php } ?>
															<?php if($label_type){ ?><p style="font-size:13px;font-weight:normal;padding-top:10px;margin-bottom:5px;"><b><?php echo $label_type; ?>:</b> <?php echo $rows->profile; ?></p><?php } ?>
															<?php if($second_label_type){ ?><p style="font-size:13px;font-weight:normal;"><b><?php echo $second_label_type; ?>:</b> <?php echo $rows->second_text; ?></p><?php } ?>
                                                        </h4>
                                                    </div>
                                                   
                                                    <hr class="check-line" />
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <table class="check_table clearfix">
                                        <tbody>
                                            <?php if($getmyorderid->coupon_amount){ ?>
                                                <tr>
                                                    <td>Sub Total</td>
                                                    <td class="text-right">$<?php echo number_format($grande_tot+$getmyorderid->coupon_amount,2); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Coupon Amount</td>
                                                    <td class="text-right">$<?php echo number_format($getmyorderid->coupon_amount,2); ?></td>
                                                </tr>
                                            <?php } ?>
                                            <tr>
                                                <td class="pt-3"><h5><b>Grand Total</b></h5></td>
                                                <td class="text-right"><h5><b>$<span id="getgrandvalue"><?php echo number_format($grande_tot,2); ?></span></b></h5></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    <input type="hidden" name="orderid" value="<?php echo $Myorderid; ?>">
                                    <input type="hidden" name="total" value="<?php echo $grande_tot; ?>">
                                    <input type="hidden" name="coupon_amount" value="<?php echo $getmyorderid->coupon_amount; ?>">
                                </div>
                            </div>
                        </div>
                        
                    
                        <div class="col-sm-12 col-lg-6 check-border">
                            <div class="checkout-white-bg">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>First Name *</label>
                                            <input id="form_name" type="text" name="form_name" class="form-control" required="required" data-error="Firstname is required." value="<?php echo $getmyorderid->first_name; ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Last Name *</label>
                                            <input id="form_lastname" type="text" name="form_lastname" class="form-control" required="required" data-error="Lastname is required." value="<?php echo $getmyorderid->last_name; ?>">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input id="form_company" type="text" name="form_company" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email Address *</label>
                                            <input id="form_email" type="email" name="form_email" class="form-control" required="required" data-error="Valid email is required." value="<?php echo $getmyorderid->email; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <p class="clearfix"></p>
                            
                            <div class="checkout-white-bg">
                                <div class="row payment_type">
                                    <div class="col-sm-12 col-12">
                                        <div class="form-group mb-0">
                                            <p class="mb-1">Payment Options *</p>
											<!--<input type="radio" name="payment_type" id="razorpay" value="Razorpay"/> <label class="paymentgateway text-center" for="razorpay"><img src="images/razorpay.jpg" class="img-fluid" alt="Razorpay Payment Icon"/> <span>Pay with Credit/Debit Card</span></label>-->
											<input type="radio" name="payment_type" id="payubiz" value="PayUBiz"><label class="paymentgateway" for="payubiz"><img src="images/payubiz.jpg" alt="PayUBiz Icon"> <span>Pay with Credit/Debit Card</span></label>
                                            <input type="radio" name="payment_type" id="instamojo" value="Instamojo"/> <label class="paymentgateway text-center" for="instamojo"><img src="images/instamojo.jpg" class="img-fluid" alt="Instamojo Payment Icon"/> <span>Pay with Indian Credit/Debit Card</span></label>
                                            <input type="radio" name="payment_type" id="bitcoin" value="Bitcoin"/> <label class="paymentgateway" for="bitcoin"><img src="images/coin-payment-icon.jpg" alt="Coin Payment Icon"/> <span>Pay with Bitcoin/Ethereum</span></label>
											<input type="radio" name="payment_type" id="ccavenue" value="CCAvenue"/> <label class="paymentgateway" for="ccavenue"><img src="images/ccavenue.png" alt="CCAvenue Icon"/> <span>Pay with CCAvenue</span></label>                                       
									   </div>
                                    </div>
                                </div>
								 <div class="form-group">  
                                <input type="submit" name="submit" value="Place Order" class="pay_btn float-lg-right" />
                                <p id="checkout_loader" style="display:none;"></p>
                                <p id="loader1"></p>
                            </div>
                            </div>
                                
                           
                        </div>
                        
                        </form>
                        
                       
                
                        <form autocomplete="off" id="bitcoin_form" action="https://www.coinpayments.net/index.php" method="post">
                            <input type="hidden" name="cmd" value="_pay_simple">
                            <input type="hidden" name="reset" value="1">
                            <input type="hidden" name="merchant" value="e5ed25dacf27fa16e65b12c102897284">
                            <input type="hidden" name="currency" value="USD">
                            <input type="hidden" name="amountf" value="<?php echo $grande_tot; ?>">
                            <input type="hidden" name="item_name" value="clickscreative">
                            <input type="hidden" name="item_desc" value="<?php echo $Myorderid; ?>">
                            <input type="hidden" name="want_shipping" value="1">
                            <input type="hidden" name="success_url" value="<?php echo $baseurl; ?>/thank-you.php">
                            <input type="hidden" name="cancel_url" value="<?php echo $baseurl; ?>/cancel-payment.php">
                            <input type="submit" src="https://www.coinpayments.net/images/pub/buynow-med.png" alt="Buy Now with CoinPayments.net" style="display:none;">
                        </form>
                        
                        
                        
                        <form id="instamojo_form" action="https://www.clickscreative.com/pay.php" method="POST">
                        <?php 
                            $GetUserDetails=$fnsout->GetUserDetails($ses); 
                            
                        ?>
                        		<input type="hidden" name="product_name" value="<?php echo $Myorderid; ?>"> 
                        		<input type="hidden" name="product_price" id="instasetfp" value="<?php echo $grande_tot; ?>"> 
                        		<input type="hidden" name="person_name" id="getpersonname" value="<?php echo $GetUserDetails->first_name; ?>">
                        		<input type="hidden" name="person_email" id="getpersonemail" value="<?php echo $GetUserDetails->email; ?>">
                        		
                        		<input type="submit" src="https://www.coinpayments.net/images/pub/buynow-med.png" alt="Buy Now with CoinPayments.net" style="display:none;">
                        	</form>
                       
                        <?php 
                            $GetUserDetails=$fnsout->GetUserDetails($ses); 
                        	//$Getorgval=str_replace(".", "", $grande_tot);
                        	$Getorgval=$grande_tot * 100;
                        ?>
                        
                        <form  style="display:none;">
                        	<button id="rzp-button1">Pay</button>
                        </form>
						
						<form id="ccavenue_form" method="post" name="customerData" action="<?php echo $baseurl; ?>/ccavRequestHandler.php">
							<input type="hidden" id="amount" name="amount" value="<?php echo $grande_tot; ?>">
							<input type="hidden" name="tid" id="tid" readonly />
							<input type="hidden" name="merchant_id" value="252789"/>
							<input type="hidden" name="order_id" value="<?php echo $Myorderid; ?>"/>
							<input type="hidden" name="currency" value="INR"/>
							<input type="hidden" name="redirect_url" value="https://www.clickscreative.com/ccavResponseHandler.php"/>
							<input type="hidden" name="cancel_url" value="https://www.clickscreative.com/ccavResponseHandler.php"/>
							<input type="hidden" name="language" value="EN"/>
							<input type="submit" src="https://www.clickscreative.com/images/pub/buynow-med.png" alt="" style="display:none;">
						</form>

						<form id="payubiz_form" action="https://kudometrics.com/payubiz-cc/index.php" method="POST">
							<input type="hidden" name="orderid" value="<?php echo $Myorderid; ?>"> 
							<input type="hidden" name="amount" value="<?php echo $grande_tot; ?>"> 
							<input type="hidden" name="payfrom" value="cc">
							<input type="submit" style="display:none;">
						</form>
                    </div>
                </div>
            </div>
	    </div>
	</div>
    
    <?php include'get-started.php';?>
    <?php include'footer.php';?>
    <?php include'footer-script.php';?>
    
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        (function($,W,D)
        {
            var JQUERY4U = {};
            JQUERY4U.UTIL =
            {
                setupFormValidation: function()
                {
                    //form validation rules
                    $("#checkout-form").validate({
                        rules: {
                            form_name: {
                                required: true,
                            },
                            form_lastname: {
				required: true,
			    },
			    payment_type: {
				required: true,
			    },
                            form_email: {
				required: true,
				email:true,
			    },	
                        },
                                         messages: {
                                  form_name: {
                                   required: "Enter your first name",
                              },
                                                  form_lastname: {
                                   required: "Enter your last name",
                              },
                                                 form_email: {
                                   required: "Enter a valid E-mail address",
                              }, 
                                                  payment_type: {
                                                required: "Select payment type",
                                                }, 
                                                
                                        },
                           
                        submitHandler: function(form) {
                        
                        $("#checkout_loader").show();
                        $("#loader1").html("loading please wait...");
                        
        $("input:radio").each(function () {
        
            var $this = $(this);
             
            if (this.checked) {
                var src = $this.attr('name');
                var val = $this.val();
           
                        if (val=="Paypal")
                        {
                                $.ajax({
				    type: "POST",
				    url: "checkout-data.php",
				    data: $(form).serialize(),			 
				    success: function (response) {
					
					   $("#paypal_form").find('input[type="submit"]').trigger('click');
				    }
                                });
                            }
			else if( val=="2CheckOut")
			{
			    $.ajax({
				type: "POST",
				url: "checkout-data.php",
				data: $(form).serialize(),			 
				success: function (response) {
				     
				       $("#2co_form").find('input[type="submit"]').trigger('click');
				}
			    });
			}
                          else if( val=="Bitcoin")
		{
                        
                                $.ajax({
				    type: "POST",
				    url: "checkout-data.php",
				    data: $(form).serialize(),			 
				    success: function (response) {
			
					$("#bitcoin_form").find('input[type="submit"]').trigger('click');
				    }
                                });
                                
                            }
								else if( val=="Instamojo")
		{
		
			$.ajax({
				 type: "POST",
				 url: "checkout-data.php",
				 data: $(form).serialize(),			 
				 success: function (response) {
					
 
					$("#instamojo_form").find('input[type="submit"]').trigger('click');
				 }
	
			});
			
		}
						else if( val=="Stripe")
		{
		
			
			$.ajax({
				 type: "POST",
				 url: "checkout-data.php",
				 data: $(form).serialize(),			 
				 success: function (response) {
					
  $('.stripe-button-el').trigger('click');
					
					 $('#checkout_loader').hide();
					 $("#loader1").hide();
                
				 }
	
			});
			
		}
		
									else if( val=="Razorpay")
		{
		
	
			$.ajax({
				 type: "POST",
				 url: "checkout-data.php",
				 data: $(form).serialize(),			 
				 success: function (response) {
					
  $('#rzp-button1').trigger('click');
				
					 $('#loader').hide();
                
				 }
	
			});
			
		}		
		else if( val=="CCAvenue")
                                                        {
															
                                                            $.ajax({
                                                                type: "POST",
                                                                url: "checkout-data.php",
                                                                data: $(form).serialize(),			 
                                                                success: function (response) {
                                                                    $("#ccavenue_form").find('input[type="submit"]').trigger('click');
																	 $('#loader').hide();
                                                                }
                                                            });
                                                            
                                                        }
														else if( val=="PayUBiz")
                                                        {
															//alert('PayUBiz');
                                                            $.ajax({
                                                                type: "POST",
                                                                url: "checkout-data.php",
                                                                data: $(form).serialize(),			 
                                                                success: function (response) {
                                                                    $("#payubiz_form").find('input[type="submit"]').trigger('click');
																	$('#loader').show();
                                                                }
                                                            });
                                                            
                                                        }
                        }
                    });
                        }
                    });
                }
            }
            //when the dom has loaded setup form validation rules
            $(D).ready(function($) {
                JQUERY4U.UTIL.setupFormValidation();
            });
        })(jQuery, window, document);
        
        /*radio select*/
        $('.payment_type label').click(function() {
           $('.payment_type label').removeClass("checked_radio");
           $(this).addClass("checked_radio");
        
           //or may be $('.gfield_radio li').removeClass('highlighted');
           $('.payment_type').closest('li').removeClass("highlighted");
           $(this).closest('li').addClass('highlighted');   
        });
    </script>
    
    <!-- Instamojo -->
    <script>
          $(document).ready(function(){
        	  $("input").change(function(){
          		var getpersonname = $('#form_name').val();
        		var getpersonemail = $('#form_email').val();
        		$('#getpersonname').val(getpersonname);
          $('#getpersonemail').val(getpersonemail);
            });
        });
        
        
          $(document).ready(function(){
        	  $("input").change(function(){
        	var getpersonemail1 = $('#form_email').val();
        	$('#getpersonemail1').val(getpersonemail1);
        $('.stripe-button').attr("data-email",getpersonemail1);
            });
        });
          
          $('input:radio[name="payment_type"]').change(function () {
            if ($(this).val() == 'Instamojo') {
                
                var usdprice = $('#getgrandvalue').text();
        
        //alert(usdprice);
                
        // App Id
        app_id = 'b5690695b5274055877d95d74b478924';
        
        $.ajax({
            url: 'https://openexchangerates.org/api/latest.json?app_id=' + app_id,   
            dataType: 'jsonp',
            success: function(json) {
        
                // exchange rata data is stored in json.quotes
                //var usdinr = json.quotes.USDINR
                //alert(usdinr);
                 //alert(json.rates.INR);
              
         var instafp = Math.round($('#getgrandvalue').text() * json.rates.INR );
         //alert(instafp);
         
         $('#grand_total').val(instafp);
         $('#instasetfp').val(instafp);
            }
        });
        } 
        });
        
    </script>
 <!-- razorpay -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        var options = {
            "key": "rzp_live_D0VAOzCk5ve5vr",
            "amount": "<?php echo $Getorgval; ?>", // 2000 paise = INR 20
            "currency": "USD",
            "name": "Clicks Creative",
            "description": "<?php echo $Myorderid; ?>",	
            "image": "https://clickscreative.com/images/cc-icon.jpg",
            "handler": function (response){
                //alert(response.razorpay_payment_id);
        window.location.href = 'https://clickscreative.com/thank-you.php';
            },
        	"prefill": {
                "email": "<?php echo $GetUserDetails->email; ?>"
            },
               "theme": {
                "color": "#009bdf"
            }
        };
        var rzp1 = new Razorpay(options);
        
        document.getElementById('rzp-button1').onclick = function(e){
            rzp1.open();
            e.preventDefault();
        }
    </script>
	<script>
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
	};
</script>
    
</body>
</html>