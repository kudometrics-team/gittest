<?php 
	include('config.php'); 
	$product_id='CC_CO14';
	
    $Query="select * from products where product_id='$product_id'";
    $product_details=$fnsout->MYQuery($Query);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blog Installation Services | Clicks Creative</title>
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
   
	<?php include'head-links.php';?>
</head>
<body>
 <div class="head-slide-check">
		<?php include'header.php';?>
            <div class="slide-caption-program">
			<div class="container">
                <h1 class="text-center text-md-left"><b>Blog Installation Services</b></h1>
			</div>	
            </div>
        </div>
                
                <div class="home-package-boxs mt-2 mb-5">
                    <div class="container">
					<div class="row flex-column-reverse flex-lg-row">
					<div class="col-lg-8 col-md-12">
					<p class="text-justify">A well-managed blog can generate engagement, boost revenues and satisfy several key SEO requirements at the same time.</p>
					<p class="text-justify">If you’d like to bring your website to life with a regularly updated blog, our blog installation services have you and your business covered.</p>
					<h2 class="pb-1">Professional Blog Installation Services</h2>
					<p class="text-justify">Setting up a blog is technically quite simple.  By contrast, setting up a high-quality blog that’s guaranteed to attract and engage your target audience is something else entirely.  From the moment you set up and launch your blog, it needs to send a strong and convincing message about your business.</p>
					<p class="text-justify">At Clicks Creative, we know how to create, install and launch high-performance blogs for the modern business. If you’re serious about capitalizing on the unique power of blogging, you need a team of experienced digital developers on your side.  In no time at all and for a surprisingly low price, we’ll inject new life into your website with a beautiful blog to be proud of.</p>
					<p class="text-justify">For more information or to discuss the benefits of blogging in more detail, contact a member of the team at Clicks Creative anytime.</p>
					
					<h2 class="pb-1">Our Innovative Blog Installation Solutions</h2>
					<p class="text-justify">We specialize in creative and innovative blog installations that go beyond the basics.  Working with Clicks Creative, your website and your business will benefit from the following:</p>
					<ul class="list-ul">
					<li>Installation of the latest version of your chosen operating system/CMS or complete website migration where necessary.</li>
					<li>Installation of all required plugins and extensions to boost traffic to your blog and enhance its SEO performance.</li>
					<li>Creative theme design and enhancement of your blog’s aesthetic value to create something 100% unique to your brand.</li> 
					<li>A complete turnkey blog installation solution, after which you’re free to start posting and connecting with your audience.</li>
					</ul>
					<p class="text-justify">In the right hands, a blog can be one of the most powerful and influential business tools available. It’s simply a case of getting things off to the best possible start, which is where we can help.</p>
					<p class="text-justify">Contact a member of the team at Clicks Creative anytime for more information, or to discuss setting up a blog for your business.</p>					
					</div>
                        <div class="col-lg-4 col-md-12">
						<div id="side-package">
                            <div class="package-box">
							<div class="service-img"><img src="<?php echo $baseurl; ?>/images/blog-installation.jpg" alt="Blog Installation Services"/></div>
							
                                <form id="orderform" method="POST" autocomplete="off">
									<div class="pack-price">$<?php echo $product_details->price; ?> <span>$<?php echo $product_details->offer_price; ?></span></div>
									<label class="label-title">Platform</label>
									<input type="text" id="profile" class="form-control required" title="Enter Your Platform"/>
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