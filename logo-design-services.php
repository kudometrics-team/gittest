<?php 
	include('config.php'); 
	$product_id='CC_CO03';
	
    $Query="select * from products where product_id='$product_id'";
    $product_details=$fnsout->MYQuery($Query);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Logo Design Services | Clicks Creative</title>
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
   
	<?php include'head-links.php';?>
</head>
<body>
 <div class="head-slide-check">
		<?php include'header.php';?>
            <div class="slide-caption-program">
			<div class="container">
                <h1 class="text-center text-md-left"><b>Logo Design Services</b></h1>
			</div>	
            </div>
        </div>
                
                <div class="home-package-boxs mt-2 mb-5">
                    <div class="container">
					<div class="row flex-column-reverse flex-lg-row">
					<div class="col-lg-8 col-md-12">
					<p class="text-justify">The logo that represents your business isn’t just a compact and colorful visual representation of your brand. It’s one of the most important marketing tools at your disposal, sending a strong message about who you are and what you do.</p>
					<p class="text-justify">If you’d like your logo to send the right message to your target audience, reach out to a member of the team at Clicks Creative for a free design consultation.</p>
					<h2 class="pb-1">Professional Logo Design</h2>
					<p class="text-justify">In our experience, we’ve found that far too many businesses underestimate the importance of a high-impact logo.  Not to mention, a logo that says something relevant and meaningful about the brand behind it.  Pretty pictures and colorful characters are all well and good but hold no value whatsoever, if not 100% relevant to your business.</p>
					<p class="text-justify">At Clicks Creative, our skilled digital design team has more than 10 years of combined experience working with clients across the US and worldwide.  We know an effective logo when we see it - we also know how to create inspiring and imaginative logos from scratch.</p>
					<p class="text-justify">Whether launching a new business or looking to revamp an existing enterprise, we’re standing by to take your call.  Contact Clicks Creative anytime for more information.</p>
					
					<h2 class="pb-1">The Principles of Effective Logo Design</h2>
					<p class="text-justify">The key to effective logo design lies in ensuring four primary principles are prioritized:</p>
					<ul class="list-ul">
					<li><span class="font-weight-bold">Uniqueness</span> - Your logo must not bear even the slightest similarity to any other logo, in order to avoid issues with mistaken identity.</li>
					<li><span class="font-weight-bold">Relevance</span> - The logo you use to represent your business must be relevant to your brand, comprising appropriate colors, imagery, fonts, and so on.</li>
					<li><span class="font-weight-bold">Simplicity</span> - The most memorable and recognizable logos in the world are almost always the simplest, with no unnecessary complications.</li> 
					<li><span class="font-weight-bold">Elegance</span> - A logo that looks amateurish sends entirely the wrong message about the business it represents.</li>
					</ul>
					<p class="text-justify">Based on these four important design principles, we create impactful and memorable logos for businesses spanning all industries and sectors.</p>
					<p class="text-justify">For more information or to discuss the benefits of an effective logo design in more detail, contact a member of the team at Clicks Creative anytime.</p>					
					</div>
                        <div class="col-lg-4 col-md-12">
						<div id="side-package">
                            <div class="package-box">
							<div class="service-img"><img src="<?php echo $baseurl; ?>/images/logo-design.jpg" alt="Logo Design Services"/></div>
							
                                <form id="orderform" method="POST" autocomplete="off">
                                    <div class="pack-price">$<?php echo $product_details->price; ?> <span>$<?php echo $product_details->offer_price; ?></span></div>
									<label class="label-title">Business Name</label>
									<input type="text" id="profile" class="form-control required" title="Enter Your Business Name"/>
									<label class="label-title">Type of Business</label>		
									<input type="text" id="second_url" class="form-control required" title="Enter Your Type of Business"/>
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
					var second_url=$('#second_url').val();
					$.post("ajax-add-cart.php", {
						dataType: 'json',	
						product_id:product_id,profile:profile,second_url:second_url,
						
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