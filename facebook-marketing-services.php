<?php 
	include('config.php'); 
	$product_id='CC_CO06';
	
    $Query="select * from products where product_id='$product_id'";
    $product_details=$fnsout->MYQuery($Query);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Facebook Marketing Services | Clicks Creative</title>
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
   
	<?php include'head-links.php';?>
</head>
<body>
 <div class="head-slide-check">
		<?php include'header.php';?>
            <div class="slide-caption-program">
			<div class="container">
                <h1 class="text-center text-md-left"><b>Facebook Marketing Services</b></h1>
			</div>	
            </div>
        </div>
                
                <div class="home-package-boxs mt-2 mb-5">
                    <div class="container">
					<div class="row flex-column-reverse flex-lg-row">
					<div class="col-lg-8 col-md-12">
					<p class="text-justify">Social media presents businesses like yours with the opportunity to reach hundreds of millions of potential customers worldwide.</p>
					<p class="text-justify">Whether starting out or looking to take an existing Facebook marketing strategy to the next level, the Clicks Creative social team is standing by to take your call.</p>
					<h2 class="pb-1">Enormous Reach and Influence</h2>
					<p class="text-justify">By a considerable margin, Facebook remains the most influential social network on the web.  It’s also the most popular platform in the history of social media, attracting approximately 1.4 billion users worldwide on a daily basis. The power and reach of Facebook haven’t escaped the attention of savvy business owners, with more than 80 million Facebook business pages having been launched to date.</p>
					<p class="text-justify">With such ferocious competition, you need to think beyond the basics to succeed on Facebook.  Precisely where our dynamic Facebook marketing services can help.  Backed by more than 30 years of combined experience, we create bespoke social media marketing solutions that deliver measurable and ongoing results.</p>
					<p class="text-justify">For more information or to discuss our Facebook marketing services in more detail, contact a member of the team at Clicks Creative anytime.</p>
					
					<h2 class="pb-1">Strategic Social Media Marketing</h2>
					<p class="text-justify">Irrespective of size and sector, all businesses across the board can benefit from a strategic approach to social media marketing. With the help of our Facebook experts, your business will gain access to the following advantages at an unbeatable price:</p>
					<ul class="list">
						<li>Improved brand awareness and authority</li>
						<li>Maximum engagement among new and existing customers</li>
						<li>The opportunity to reach out to new audiences</li>
						<li>More targeted traffic driven to your website</li>
						<li>Enhanced communication with your followers and customers</li>
						<li>Detailed insights into your competitors’ performance</li> 
						<li>Better overall customer support and service quality</li>
					</ul>
					<p class="text-justify">All from a surprisingly affordable Facebook marketing strategy - well within the means of even the smallest online businesses.</p>
					<p class="text-justify">Whether ready to go ahead or simply considering an investment in social media marketing, we’re standing by to take your call.  Contact a member of the team at Clicks Creative anytime for an obligation-free consultation.</p>
					</div>
                        <div class="col-lg-4 col-md-12">
						<div id="side-package">
                            <div class="package-box">
							<div class="service-img"><img src="<?php echo $baseurl; ?>/images/facebook-marketing.jpg" alt="Facebook Marketing Services"/></div>
							    
                                <form id="orderform" method="POST" autocomplete="off">
									<div class="pack-price">$<?php echo $product_details->price; ?> <span>$<?php echo $product_details->offer_price; ?></span></div>
                                    <label class="label-title">Website URL</label>
									<input type="text" id="url" class="form-control required" title="Enter Your Website URL"/>
									<span class="service-span">Ex: https://www.website.com</span>
									<label class="label-title">Facebook Page URL</label>		
									<input type="text" id="second_url" class="form-control required" title="Enter Your Facebook Page URL"/>
                                    <span class="service-span">Ex: https://www.website.com/page</span>
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
					var second_url=$('#second_url').val();
					$.post("ajax-add-cart.php", {
						dataType: 'json',	
						product_id:product_id,url:url,second_url:second_url,
						
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