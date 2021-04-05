<?php 
	include('config.php'); 
	$product_id='CC_CO20';
	
    $Query="select * from products where product_id='$product_id'";
    $product_details=$fnsout->MYQuery($Query);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Brochure Design Services | Clicks Creative</title>
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
   
	<?php include'head-links.php';?>
</head>
<body>
 <div class="head-slide-check">
		<?php include'header.php';?>
            <div class="slide-caption-program">
			<div class="container">
                <h1 class="text-center text-md-left"><b>Brochure Design Services</b></h1>
			</div>	
            </div>
        </div>
                
                <div class="home-package-boxs mt-2 mb-5">
                    <div class="container">
					<div class="row flex-column-reverse flex-lg-row">
					<div class="col-lg-8 col-md-12">
					<p class="text-justify">Quality graphic design is about more than just showcasing your products and services in an attractive way.</p>
					<p class="text-justify">At Clicks Creative, we see brochure design as an invaluable opportunity to deliver a strong and lasting message about your company’s personality.</p>
					<h2 class="pb-1">Creative Brochure Design Solutions</h2>
					<p class="text-justify">The approach you take to graphic design will determine whether you stand out in your field or fade into the background.  Shortchange your customers with generic or uninspiring materials and you can’t expect to be taken seriously.  By contrast, deliver the ‘wow’ factor with something they’ve never seen before and it’s an entirely different story.</p>
					<p class="text-justify">Clicks Creative designs print-ready brochures and business tools of impeccable quality, bursting with creativity and innovation.  Don’t simply present your products and services - showcase your brand in an impactful and unforgettable way.</p>
					<p class="text-justify">Call Clicks Creative to discuss our brochure design services in more detail.</p>
					
					<h2 class="pb-1">Why Hire Clicks Creative to Design Your Brochure?</h2>
					<p class="text-justify">We’ve been in business for long enough to know the difference between inspiring brochures and mundane marketing materials.  Working with Clicks Creative, your business will benefit from a high-impact brochure that brings the following advantages:</p>
					<ul class="list-ul">
					<li>Your primary products and services showcased beautifully</li>
					<li>The opportunity to stand out with unique graphic design</li>
					<li>A powerful and influential reflection of your brand and voice</li> 
					<li>The chance to impress new and existing clients with something original</li>
					<li>An accessible and affordable way to market your brand</li>
					</ul>
					<p class="text-justify">Not to mention, invaluable expert advice and consultancy from the team at Clicks Creative, every step of the way.</p>					
					<h2 class="pb-1">Call for a Free Consultation</h2>
					<p class="text-justify">Whether starting from scratch or looking to improve the quality of an existing brochure, we can help.  By getting to know our clients and their businesses at a deeper level, we’re able to consistently exceed expectations at unbeatable prices.</p>
					<p class="text-justify">For more information or to discuss your requirements in more detail, contact a member of the team at Clicks Creative today.</p>
					</div>
                        <div class="col-lg-4 col-md-12">
						<div id="side-package">
                            <div class="package-box">
							<div class="service-img"><img src="<?php echo $baseurl; ?>/images/brochure-design.jpg" alt="Brochure Design Services"/></div>
							
                                <form id="orderform" method="POST" autocomplete="off">
									<div class="pack-price">$<?php echo $product_details->price; ?> <span>$<?php echo $product_details->offer_price; ?></span></div>
									<label class="label-title">Number of Pages</label>
									<input type="text" id="profile" class="form-control required" title="Enter Your Pages"/>
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
					var profile=$('#profile').val();
					$.post("ajax-add-cart.php", {
						dataType: 'json',	
						product_id:product_id,profile:profile,
						
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