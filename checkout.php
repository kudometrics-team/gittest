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
											<input type="radio" name="payment_type" id="payubiz" value="PayUBiz"><label class="paymentgateway" for="payubiz"><img src="<?php echo $baseurl; ?>/images/payubiz.jpg" alt="PayUBiz Icon"> <span>Pay with Credit/Debit Card</span></label>
											<input type="radio" name="payment_type" id="ccavenue" value="CCAvenue"/> <label class="paymentgateway" for="ccavenue"><img src="<?php echo $baseurl; ?>/images/ccavenue.png" alt="CCAvenue Icon"/> <span>Pay with CCAvenue</span></label>                                       
											<input type="radio" name="payment_type" id="stripe" value="Stripe"/> <label class="paymentgateway" for="stripe"><img src="<?php echo $baseurl; ?>/images/stripe.png" alt="Stripe Icon"/> <span>Pay with Stripe</span></label>                                       
											<input type="radio" name="payment_type" id="cashfree" value="Cashfree"/> <label class="paymentgateway" for="cashfree"><img src="<?php echo $baseurl; ?>/images/cashfree.png" alt="Cashfree Icon"/> <span>Pay with Credit/Debit Card</span></label>                                       
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
                        
						<div id="payubiz_form_div"></div>
						<div id="ccavenue_form_div"></div>
						<div id="stripe_form_div"></div>
						<div id="cashfree_form_div"></div>
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
									if( val=="CCAvenue")
									{
										
										$.ajax({
											type: "POST",
											url: "checkout-data.php",
											data: $(form).serialize(),			 
											success: function (response) {
												$('#ccavenue_form_div').html(response);
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
												$('#payubiz_form_div').html(response);
												$("#payubiz_form").find('input[type="submit"]').trigger('click');
												$('#loader').show();
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
												$('#stripe_form_div').html(response);
												$("#stripe_form").find('input[type="submit"]').trigger('click');
												$('#loader').hide();
											}
										});
										
									}
											else if( val=="Cashfree")
								{
								
									$.ajax({
										 type: "POST",
										 url: "checkout-data.php",
										 data: $(form).serialize(),			 
										 success: function (response) {
											$('#cashfree_form_div').html(response);
											$("#cashfree_form").find('input[type="submit"]').trigger('click');
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
 
	<script>
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
	};
	
</script>

<script>

	// Disable inspect element
$(document).bind("contextmenu",function(e) {
 e.preventDefault();
});
$(document).keydown(function(e){
    if(e.which === 123){
       return false;
    }
});

document.onkeydown = function(e) {
if(event.keyCode == 123) {
return false;
}
if(e.ctrlKey && e.keyCode == 'E'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'Ctrl+Shift+c'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'Ctrl+Shift+I'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'H'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'A'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'E'.charCodeAt(0)){
return false;
}
}


</script>
    
</body>
</html>