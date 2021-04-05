<?php 
	include('config.php'); 
	$product_id='CC_CO19';
	
    $Query="select * from products where product_id='$product_id'";
    $product_details=$fnsout->MYQuery($Query);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Google Penalty Recovery Services | Clicks Creative</title>
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
   
	<?php include'head-links.php';?>
</head>
<body>
 <div class="head-slide-check">
		<?php include'header.php';?>
            <div class="slide-caption-program">
			<div class="container">
                <h1 class="text-center text-md-left"><b>Google Penalty Recovery Services</b></h1>
			</div>	
            </div>
        </div>
                
                <div class="home-package-boxs mt-2 mb-5">
                    <div class="container">
					<div class="row flex-column-reverse flex-lg-row">
					<div class="col-lg-8 col-md-12">
					<p class="text-justify">Struggling to recover in the wake of the Google penalty?  Wondering how to restore your former SERP position after suffering a fall in the rankings?</p>
					<p class="text-justify">At Clicks Creative, we provide a comprehensive range of Google penalty recovery services of proven effectiveness.  All 100% white-hat and backed by our comprehensive satisfaction guarantee.</p>
					<h2 class="pb-1">Fast and Effective Google Penalty Recovery</h2>
					<p class="text-justify">It’s unfortunate, but being hit by a manual penalty from Google is anything but uncommon.  Each time Google updates its primary search algorithm, websites and businesses of all shapes and sizes suddenly plummet down the rankings.  Despite having done nothing ‘wrong’ to their own knowledge, they find themselves struggling to remain visible and viable.</p>
					<p class="text-justify">Fortunately, no Google penalty is too severe to repair and recover from. It’s simply a case of knowing when, where and how to react - precisely where we can help.  By involving Clicks Creative at the earliest possible stage, you stand every chance of restoring your former position in the SERP rankings.</p>
					<p class="text-justify">If you suspect you’ve been handed a Google penalty, contact a member of the team at Clicks Creative for more information.</p>
					
					<h2 class="pb-1">Repairing Rankings with Confidence</h2>
					<p class="text-justify">At Clicks Creative, we exclusively provide 100% white-hat Google penalty recovery services of the highest standard.  Tailored in accordance with our clients’ requirements and budgets, our Google penalty recovery services are based on creativity, innovation and our unrivalled experience.</p>
					<p class="text-justify">We’ll begin by comprehensively analyzing your website and its SEO profile in order to establish when, how and why you were penalized.  After which, we’ll create a strategic plan of action, gradually implement the required changes upon your approval and strive for ongoing optimization.</p>
					<h2 class="pb-1">Ask the Experts</h2>
					<p class="text-justify">To us, Google penalty recovery is not simply about repairing the damage. At Clicks Creative, we also see it as an opportunity to help our clients boost their rankings further than before they were hit.</p>					
					<p class="text-justify">Once again, the importance of taking immediate action following a Google penalty cannot be overstated.  For more information or if you have any questions on Google penalties, contact a member of the team at Clicks Creative anytime.</p>
					</div>
                        <div class="col-lg-4 col-md-12">
						<div id="side-package">
                            <div class="package-box">
							<div class="service-img"><img src="<?php echo $baseurl; ?>/images/google-penalty-recovery-service.jpg" alt="Google Penalty Recovery Services"/></div>
							    
                                <form id="orderform" method="POST" autocomplete="off">
									<div class="pack-price">$<?php echo $product_details->price; ?> <span>$<?php echo $product_details->offer_price; ?></span></div>
									<label class="label-title">Website URL</label>
									<input type="text" id="url" class="form-control required" title="Enter Your Website URL"/>
									<span class="service-span">Ex: https://www.website.com</span>
                                    <button type="submit" class="btn btn-main mt-4">Buy Now <i class="loading-image fa fa-spin fa-spinner" style="display:none;"></i></button>
                                </form>
                            </div>
							</div>
                        </div>
						 </div>
                    </div>
		        </div>
        </div>
            
 <?php include'list-services.php';?>

	<?php include'get-started.php';?>
    <?php include'footer.php';?>
    <?php include'footer-script.php';?>
	
<script type="text/javascript" src="js/jquery.hc-sticky.js"></script>

<script>
    (function($,W,D)
    {
		var JQUERY4U = {};
		
		JQUERY4U.UTIL =
		{
			setupFormValidation: function()
			{
			//form validation rules
			$("#orderform").validate({
				
				submitHandler: function(form) {
					var product_id='<?php echo $product_id; ?>';
					var url=$('#url').val();
					$.post("ajax-add-cart.php", {
						dataType: 'json',	
						product_id:product_id,url:url,
						
						beforeSend: function() {
						  $(".loading-image").show();
						  $(':input[type="submit"]').prop('disabled', true);
						  return false;
						},
					}, function (response, textStatus) {
						if(response){
							$(".result_txt").html(response.message);
							$(".result_txt").show();
							$(".result_cart_cnt").html(response.cart_cnt);
							$(".result_cart_cnt").show();
							$(".loading-image").hide();
							$(':input[type="submit"]').prop('disabled', false);
							$("html, body").animate({scrollTop: 0}, 1000);
							$('#orderform')[0].reset();
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
</script>
  
<script>
if ($(window).width() > 767) {
function execute(settings) {
settings = settings;
$('#side-package').hcSticky(settings);
}
// if page called directly
jQuery(document).ready(function($){
if (top === self) {
execute({});
}
});
}
</script>
<script>
if ($(window).width()>1024) {
    $(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 150 & scroll <= 1000) {
        $(".slide-caption-program").addClass("fixheader");
    } else {
        $(".slide-caption-program").removeClass("fixheader");
    }
});
}
</script>
</body>
</html>