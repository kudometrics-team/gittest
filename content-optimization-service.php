<?php 
	include('config.php'); 
	$product_id='CC_CO01';
	
    $Query="select * from products where product_id='$product_id'";
    $product_details=$fnsout->MYQuery($Query);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Content Optimization | Clicks Creative</title>
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
   
	<?php include'head-links.php';?>
</head>
<body>
	<div class="head-slide-check">
		<?php include'header.php';?>
            <div class="slide-caption-program">
			<div class="container">
                <h1 class="text-center text-md-left"><b>Content Optimization</b></h1>
			</div>	
            </div>
        </div>
                
                <div class="home-package-boxs mt-2 mb-5">
                    <div class="container">
					<div class="row flex-column-reverse flex-lg-row">
					<div class="col-lg-8 col-md-12">
					<p class="text-justify">At Clicks Creative, we know how to maximize the lifetime value of your website content. If you’re looking to generate the best possible ROI from your web copy, we can help.</p>
					<p class="text-justify">Contact a member of the team at Clicks Creative anytime to discuss our content optimization services in more detail.</p>
					<h2 class="pb-1">Leveraging Your Investment</h2>
					<p class="text-justify">Producing quality content in the first place represents an extensive investment of time, effort, and resources.  Hence, you want when sure that every piece of content you produce generates a strong and consistent ROI for your business.</p>
					<p class="text-justify">If it costs you $200 to produce a piece of content that attracts 500 views in a week, that’s a decent start.  But what if the same piece of content could attract 1,000 views within the same week?  More importantly, what if it could then achieve 2,000 views the second week, followed by 2,500 views the following week?</p>
					<p class="text-justify">Content optimization is all about boosting the performance and appeal of the content you publish.  It’s a tricky act to pull off, but it’s an area in which we excel at Clicks Creative.</p>
					
					<h2 class="pb-1">How Our Content Optimization Service Can Help You</h2>
					<p class="text-justify">All content optimization solutions are unique but nonetheless share the same basic goals.  Along with maximizing the lifetime value of your content investment, content optimization is about future-proofing your digital assets and boosting engagement.</p>
					<p class="text-justify">At Clicks Creative, this is achieved through a combination of the following:</p>
					<ul class="list">
					<li>Keyword Research </li>
					<li>Personal Development </li>
					<li>Keyword optimization </li>
					<li>Content Auditing </li>
					<li>Gap Analysis</li>
					<li>Content Improvement</li> 
					<li>Audience Analysis </li>
					</ul>
					<p class="text-justify">Irrespective of how good you think your content is, there’s always room for improvement.  Particularly when it comes to attracting clicks, generating engagement, and encouraging readers to take action.</p>
					<h2 class="pb-1">Ask the Experts</h2>
					<p class="text-justify">Whether ready to go ahead with a content overhaul or simply considering content optimization, we’d be delighted to hear from you.  Reach out to a member of the team at Clicks Creative anytime for more information, or to book your obligation-free initial consultation.</p>					
					</div>
                        <div class="col-lg-4 col-md-12">
						<div id="side-package">
                            <div class="package-box">
							<div class="service-img"><img src="<?php echo $baseurl; ?>/images/content-optimization.jpg" alt=""/></div>
							
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