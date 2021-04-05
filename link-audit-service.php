<?php 
	include('config.php'); 
	$product_id='CC_CO13';
	
    $Query="select * from products where product_id='$product_id'";
    $product_details=$fnsout->MYQuery($Query);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Link Audit Service | Clicks Creative</title>
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
   
	<?php include'head-links.php';?>
</head>
<body>
 <div class="head-slide-check">
		<?php include'header.php';?>
            <div class="slide-caption-program">
			<div class="container">
                <h1 class="text-center text-md-left"><b>Link Audit Service</b></h1>
			</div>	
            </div>
        </div>
                
                <div class="home-package-boxs mt-2 mb-5">
                    <div class="container">
					<div class="row flex-column-reverse flex-lg-row">
					<div class="col-lg-8 col-md-12">
					<p class="text-justify">Protect your website from the damaging effects of low-quality backlinks and negative SEO, with the help of Clicks Creative.</p>
					<p class="text-justify">Find out how a periodic link audit could boost your SEO performance and safeguard your site from a variety of threats.</p>
					<h2 class="pb-1">Backlink Basics: Quality Counts</h2>
					<p class="text-justify">We live in an era where low-quality backlinks are far more dangerous than no links at all.  Unfortunately, it can be far too easy to deal with your SEO performance, a hammer-blow with links of substandard quality.</p>
					<p class="text-justify">All major search engines are continuously moving the goalposts, making it difficult for online businesses to get by. Links of quality and value one day are routinely considered to spam the next, affecting your website’s SEO score and SERP rankings.</p>
					<p class="text-justify">The problem is that, more often than not, all of this happens silently in the background.  Precisely where our link audit services can help.</p>
					
					<h2 class="pb-1">Proactive Protection and Prevention</h2>
					<p class="text-justify">At Clicks Creative, we work hard to safeguard our clients’ websites and businesses from a variety of threats.  Manual penalties, negative SEO, poor performance in the SERP rankings - just a few of the consequences of turning a blind eye to backlink quality.</p>
					<p class="text-justify">Our comprehensive link audits make it quick, easy and affordable to identify inconsistencies and eliminate them at the earliest possible stage.  Rather than waiting for issues to occur, we prefer to take a more proactive approach for the benefit of our clients.</p>
					<p class="text-justify">If it’s been a while since your last link inspection or you’re yet to carry out your first audit, we strongly advise getting in touch to discuss the available options.</p>
					<h2 class="pb-1">Bespoke Services to Suit all Budgets</h2>
					<p class="text-justify">By tailoring the services we provide to suit our clients’ exact requirements, we’re able to accommodate all budgets across the board.  What’s more, we’re proud to adopt a pressure-free, obligation-free approach from start to finish.</p>					
					<p class="text-justify">Whether ready to go ahead or merely consider the options available, we’d be glad to hear from you. Contact the Clicks Creative team member at any time to discuss your needs in more detail.</p>
					</div>
                        <div class="col-lg-4 col-md-12">
						<div id="side-package">
                            <div class="package-box">
							<div class="service-img"><img src="<?php echo $baseurl; ?>/images/link-audit-service.jpg" alt="Link Audit Service"/></div>
							
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