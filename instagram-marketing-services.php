<?php 
	include('config.php'); 
	$product_id='CC_CO09';
	
    $Query="select * from products where product_id='$product_id'";
    $product_details=$fnsout->MYQuery($Query);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Instagram Marketing Services | Clicks Creative</title>
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
   
	<?php include'head-links.php';?>
</head>
<body>
 <div class="head-slide-check">
		<?php include'header.php';?>
            <div class="slide-caption-program">
			<div class="container">
                <h1 class="text-center text-md-left"><b>Instagram Marketing Services</b></h1>
			</div>	
            </div>
        </div>
                
                <div class="home-package-boxs mt-2 mb-5">
                    <div class="container">
					<div class="row flex-column-reverse flex-lg-row">
					<div class="col-lg-8 col-md-12">
					<p class="text-justify">Leverage the popularity, reach and influence of one of the world’s most popular social networks, with the help of Clicks Creative.</p>
					<p class="text-justify">Whether new to Instagram or ready to take your existing presence a step further, we’re standing by with the support you need to make it happen.</p>
					<h2 class="pb-1">Tried, Tested and Trusted Instagram Marketing Services</h2>
					<p class="text-justify">For some of our clients, nothing matters more than attracting more followers on Instagram.  For others, it’s about using the power and reach of Instagram to boost conversions and close more sales. Or perhaps, to generate brand awareness and establish authority on one of the world’s most influential platforms.</p>
					<p class="text-justify">However, ambitious your goals may be, we’re here to make them happen. Clicks Creative provides an extensive range of Instagram marketing services and complete social media solutions for businesses worldwide. Banish the bland and embrace a more innovative approach to Instagram marketing, with the help of our skilled and experienced social media managers.</p>
					<p class="text-justify">Call today to book your obligation-free consultation with a member of the team at Clicks Creative.</p>
					
					<h2 class="pb-1">Why Choose our Instagram Marketing Agency?</h2>
					<p class="text-justify">Unlike some social media marketers, we’re about far more than false promises and hot air.  To date, we’ve helped hundreds of businesses like yours achieve things they never dreamed possible. All by way of the web’s most flexible and affordable Instagram marketing services, tailored to suit all requirements and budgets across the board.</p>
					<p class="text-justify">All you need to do is tell us what you’d like to achieve on Instagram - we’ll take care of the rest.</p>
					<h2 class="pb-1">Contact Clicks Creative</h2>
					<p class="text-justify">To learn more about our extensive range of social media marketing services, we’d be delighted to offer you an obligation-free consultation.  Simply contact a member of the team to discuss your requirements in more detail, with no obligation to go ahead at any time.</p>					
					<p class="text-justify">Call Clicks Creative today or drop us an email anytime and we’ll get back to you as soon as possible.</p>
					</div>
                        <div class="col-lg-4 col-md-12">
						<div id="side-package">
                            <div class="package-box">
							<div class="service-img"><img src="<?php echo $baseurl; ?>/images/instagram-marketing.jpg" alt="Instagram Marketing Services"/></div>
							    
                                <form id="orderform" method="POST" autocomplete="off">
									<div class="pack-price">$<?php echo $product_details->price; ?> <span>$<?php echo $product_details->offer_price; ?></span></div>
									<label class="label-title">Profile URL</label>
									<input type="text" id="url" class="form-control required" title="Enter Your Profile URL"/>
									<span class="service-span">Ex: https://www.website.com/profilename</span>
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