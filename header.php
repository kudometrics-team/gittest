<div class="result_txt" style="display:none;"></div>
	
<?php if($promotion->banner_status=='1'){ ?>
	<link type="text/css" href="<?php echo $baseurl; ?>/timer-scripts/jquery.countdown.css?v=1.0.0.0" rel="stylesheet">
	<div class="offerdiv">
	   <?php echo $promotion->top_nav; ?>
	   <input type="text" name="Element To Be Copied" id="copy-me" value="<?php echo $promotion->coupon_code; ?>"/>
	   <button id="copy-btn">Copy</button>
		<br />
		
		Sales Ends In:
		<ul id="example">
			<li><span class="days">00</span><p class="days_text d-none">Days</p></li>
			<li class="seperator">:</li>
			<li><span class="hours">00</span><p class="hours_text d-none">Hours</p></li>
			<li class="seperator">:</li>
			<li><span class="minutes">00</span><p class="minutes_text d-none">Minutes</p></li>
			<li class="seperator">:</li>
			<li><span class="seconds">00</span><p class="seconds_text d-none">Seconds</p></li>
		</ul>
	</div>
<?php } ?>

	<header>
	    <div class="header">
	    <!-- Mobile Header -->
		
	    <div class="wsmobileheader clearfix">
			<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
			<span class="smllogo"><a href="<?php echo $baseurl; ?>"><img src="<?php echo $baseurl; ?>/images/logo.png" width="95" alt="Clicks Creative logo"/></a></span>
			
			<div class="mobcartdesign">
				    <a href="view-cart.php" class="mobilecart float-right">
						<i class="fa fa-opencart" aria-hidden="true"></i>
						<span class="result_cart_cnt"><?php if($CartCnt){ echo $CartCnt; } else{ echo '0'; } ?></span>
					</a>
				    <?php if($_SESSION['usersesid']){ ?>
						<div class="dropdown">
							    <button onclick="myFunctionMob()" class="dropbtnmob mobilelog float-right"><i class="fa fa-user-o"></i> User Panel <i class="fa fa-angle-down"></i></button>
							    <div id="myDropdownMob" class="dropdown-content-mob">
									<a href="<?php echo $baseurl; ?>/my-order-details.php" class="dropdown-item">My Orders</a>
									<a href="<?php echo $baseurl; ?>/change-user-password.php" class="dropdown-item">Change Password</a>
									<a href="<?php echo $baseurl; ?>/logout.php" class="dropdown-item">Logout</a>
							    </div>
						</div>
				    <?php }else{ ?>
						<a href="login.php" class="mobilelog float-right">User Login</a>
				    <?php } ?>
			</div>
	    </div>
		
	    <!-- Mobile Header -->
<div class="top-header">
	    <div class="container menubar d-none d-md-block">
			<div class="col-md-12"> 
				    <div class="row">
						<div class="col-lg-3 col-md-2 col-6 logodiv nopadding">
						    <button class="pl-0 navbar-toggler d-block d-md-none float-left" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
							<img src="<?php echo $baseurl; ?>/images/menu.png" alt="Menu Icon" style="height: 20px;" />
						    </button>
						    <a class="navbar-brand float-left" href="<?php echo $baseurl; ?>"><img src="<?php echo $baseurl; ?>/images/logo.png" alt="Clicks Creative logo"/></a>
						</div>
						
						<div class="offset-xl-1 col-xl-8 col-lg-9 col-md-10 col-6 text-left text-sm-right rightsubmenus d-none d-sm-none d-md-block">
							<div class="float-right text-right topright">
								    <a href="tel:+15186597427" class="topright border-right" style="display:none;"><i class="fa fa-phone" aria-hidden="true"></i> +1 (518) 659-7427</a>
								    <a href="mailto:info@clickscreative.com" class="topright border-right"><i class="fa fa-envelope" aria-hidden="true"></i> info@clickscreative.com</a>
								    
								    <?php if($_SESSION['usersesid']){ ?>
									<div class="dropdown">
									    <button onclick="myFunction()" class="dropbtn"><i class="fa fa-user-o"></i> User Panel <i class="fa fa-angle-down"></i></button>
									    <div id="myDropdown" class="dropdown-content">
										<a href="<?php echo $baseurl; ?>/my-order-details.php" class="dropdown-item">My Orders</a>
										<a href="<?php echo $baseurl; ?>/change-user-password.php" class="dropdown-item">Change Password</a>
										<a href="<?php echo $baseurl; ?>/logout.php" class="dropdown-item">Logout</a>
									    </div>
									</div>
								    <?php }else{ ?>
									<a href="login.php" class="login-btn usrbtn"><i class="fa fa-lock" aria-hidden="true"></i> Login</a>
								    <?php } ?>
								    <a href="view-cart.php" class="site-cart login-btn">
										<i class="fa fa-opencart" aria-hidden="true"></i>
										<span class="result_cart_cnt"><?php if($CartCnt){ echo $CartCnt; } else{ echo '0'; } ?></span>
									</a>
							</div>
						</div>
				    </div>
			</div>
	    </div>
	    </div>
<div class="headerfull">
    <div class="wsmain container clearfix">
    
	<nav class="wsmenu clearfix">
	    <ul class="wsmenu-list" itemscope itemtype="http://schema.org/SiteNavigationElement">
		<li><a href="<?php echo $baseurl; ?>" class="navtext"><i class="fa fa-home pr-2" aria-hidden="true"></i>Home</a></li>
		
		<li><a href="about-us.php" class="navtext">About Us</a>
		   
		</li>
		
		<li class=""><a href="#" class="navtext"><span>List Of Our Services</span></a>
		    <div class="wsmegamenu clearfix">
			<div class="container-fluid">
			    <div class="row">
				    <div class="col-lg-4 col-md-12">
						<ul class="wstliststy02 clearfix">
							    <li><a class="dropdown-item" itemprop="url" href="<?php echo $baseurl; ?>/content-optimization-service.php"><span itemprop="name">Content Optimization</span></a></li>
							    <li><a class="dropdown-item" itemprop="url" href="<?php echo $baseurl; ?>/on-page-seo-audit-report.php"><span itemprop="name">On-Page SEO Audit Report</span></a></li>
							    <li><a class="dropdown-item" itemprop="url" href="<?php echo $baseurl; ?>/technical-seo-audit-report.php"><span itemprop="name">Technical SEO Audit Report</span></a></li>
							    <li><a class="dropdown-item" itemprop="url" href="<?php echo $baseurl; ?>/link-building-services.php"><span itemprop="name"> Link Building Services</span></a></li>
								<li><a class="dropdown-item" itemprop="url" href="<?php echo $baseurl; ?>/link-audit-service.php"><span itemprop="name">Link Audit Report</span></a></li>
							    <li><a class="dropdown-item" itemprop="url" href="<?php echo $baseurl; ?>/website-audit-report.php"><span itemprop="name">Website Audit Report</span></a></li>
								<li><a class="dropdown-item" itemprop="url" href="<?php echo $baseurl; ?>/google-penalty-recovery-service.php"><span itemprop="name">Google Penalty Recovery Services</span></a></li>							    
						</ul>
				    </div>
				    <div class="col-lg-4 col-md-12">
						<ul class="wstliststy02 clearfix">
								<li><a class="dropdown-item" itemprop="url" href="<?php echo $baseurl; ?>/static-web-design-service.php"><span itemprop="name">Static Website Design</span></a></li>
							    <li><a class="dropdown-item" itemprop="url" href="<?php echo $baseurl; ?>/web-design-consultation-call.php"><span itemprop="name">Web Design Consultation Call</span></a></li>
							    <li><a class="dropdown-item" itemprop="url" href="<?php echo $baseurl; ?>/website-maintenance-services.php"><span itemprop="name">Website Maintenance</span></a></li>
							    <li><a class="dropdown-item" itemprop="url" href="<?php echo $baseurl; ?>/website-migration-services.php"><span itemprop="name">Website Migration</span></a></li>
							    <li><a class="dropdown-item" itemprop="url" href="<?php echo $baseurl; ?>/blog-installation-services.php"><span itemprop="name">Blog Installation</span></a></li>
							    <li><a class="dropdown-item" itemprop="url" href="<?php echo $baseurl; ?>/shopify-store-setup-service.php"><span itemprop="name">Shopify Store Setup</span></a></li>
								<li><a class="dropdown-item" itemprop="url" href="<?php echo $baseurl; ?>/brochure-design-services.php"><span itemprop="name">Brochure Design</span></a></li>
						</ul>
				    </div>
					 <div class="col-lg-4 col-md-12">
						<ul class="wstliststy02 clearfix">
							    <li><a class="dropdown-item" itemprop="url" href="<?php echo $baseurl; ?>/logo-design-services.php"><span itemprop="name">Logo Design</span></a></li>
							    <li><a class="dropdown-item" itemprop="url" href="<?php echo $baseurl; ?>/facebook-marketing-services.php"><span itemprop="name">Facebook Marketing</span></a></li>
							    <li><a class="dropdown-item" itemprop="url" href="<?php echo $baseurl; ?>/instagram-marketing-services.php"><span itemprop="name">Instagram Marketing</span></a></li>
								<li><a class="dropdown-item" itemprop="url" href="<?php echo $baseurl; ?>/seo-consultation-call-one-hour.php"><span itemprop="name">SEO Consultation call (1-Hour)</span></a></li>
								<li><a class="dropdown-item" itemprop="url" href="<?php echo $baseurl; ?>/seo-consultation-call-two-hours.php"><span itemprop="name">SEO Consultation call (2- Hours)</span></a></li>
							    <li><a class="dropdown-item" itemprop="url" href="<?php echo $baseurl; ?>/youtube-channel-audit.php"><span itemprop="name">Youtube Channel Audit</span></a></li>
						</ul>
				    </div>
			    </div>
			</div>
		    </div>
		</li>
		<li><a href="faq.php" class="navtext">FAQ</a>		</li>
		<li><a href="contact-us.php" class="navtext">Contact Us</a>		</li>
		 <li><a href="#" class="navtext">Blog</a></li>
		

		
	    </ul>
	</nav>
    </div>
</div>
</div>
</header>