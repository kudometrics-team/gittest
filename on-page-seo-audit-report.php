<?php 
	include('config.php'); 
	$product_id='CC_CO04';
	
    $Query="select * from products where product_id='$product_id'";
    $product_details=$fnsout->MYQuery($Query);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>On-Page SEO Audit Report  | Clicks Creative</title>
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
   
	<?php include'head-links.php';?>
</head>
<body>
 <div class="head-slide-check">
		<?php include'header.php';?>
            <div class="slide-caption-program">
			<div class="container">
                <h1 class="text-center text-md-left"><b>On-Page SEO Audit Report</b></h1>
			</div>	
            </div>
        </div>
                
                <div class="home-package-boxs mt-2 mb-5">
                    <div class="container">
					<div class="row flex-column-reverse flex-lg-row">
					<div class="col-lg-8 col-md-12">
					<p class="text-justify">Boost organic traffic volumes and maximize conversions through the strategic implementation of on-page SEO enhancements.</p>
					<p class="text-justify">Let Clicks Creative show you the hidden potential of your online business and take its SEO performance to the next level.</p>
					<h2 class="pb-1">Comprehensive On-Page SEO Audits</h2>
					<p class="text-justify">It’s no secret that Google takes into account more than 200 ranking factors when determining its SERP rankings. If you’re serious about improving your visibility and outranking your competitors, you need to know exactly how your SEO campaign is performing.</p>
					<p class="text-justify">At Clicks Creative, we provide bespoke on-page SEO audits for small and large online businesses alike.  Along with invaluable insights into your SEO performance, we’ll also provide you with clear and actionable recommendations to make important improvements.</p>
					<p class="text-justify">For more information or to discuss your requirements in more detail, contact a member of the team at Clicks Creative today.</p>
					<h2 class="pb-1">Why Choose Our On-Page SEO Audits?</h2>
					<p class="text-justify">Irrespective of the size and nature of the business you run, you’ll benefit from our on-page SEO auditing services in the following ways:</p>
					
					<ul class="list">
					<li><b>Save Time</b> - Traditional SEO analysis and auditing can be a difficult and time-consuming process. With Clicks Creative, you’ll have all the insights you need to improve your SEO performance in a matter of hours.</li>
					<li><b>Boost Traffic</b> - Ultimately, our SEO auditing services are all about boosting traffic.  Not on a one-time-only basis, but for the long-term benefit of your business and its bottom lines.</li>
					<li><b>Generate Sales</b> - By focusing on targeted traffic and qualified leads, you stand to convert more visitors to your website into paying customers.  All translating to an unbeatable and ongoing ROI.</li>
					</ul>
					<p class="text-justify">Our on-page SEO audits take into account everything that matters where Google and the other major search engines are concerned.  You’ll be provided with a detailed report and a proposed action plan, after which you’ll have the opportunity to decide how you’d like to proceed.</p>
					<p class="text-justify">Whatever your requirements and budget, we’re standing by to show you what we can do.  Contact a member of the team at Clicks Creative today for an obligation-free consultation.</p>					
					</div>
                        <div class="col-lg-4 col-md-12">
						<div id="side-package">
                            <div class="package-box">
							<div class="service-img"><img src="<?php echo $baseurl; ?>/images/on-page-seo-audit-report.jpg" alt="On Page SEO Audit Report"/></div>
							    
                                <form id="orderform" method="POST" autocomplete="off">
                                    <div class="pack-price">$<?php echo $product_details->price; ?> <span>$<?php echo $product_details->offer_price; ?></span></div>
									<label class="label-title">Website URL</label>
									<input type="text" id="url" class="form-control required" title="Enter Your Website URL"/>
									<span class="service-span">Ex: https://www.website.com</span>
                                    <button type="submit" class="btn btn-main mt-4">Buy Now</button>                                  
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