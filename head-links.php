	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<!-- link rel="icon" href="<?php echo $baseurl; ?>/images/favicon.png" type="image/x-icon"-->
	<!-- link rel="shortcut icon" href="<?php echo $baseurl; ?>/images/favicon.png" type="image/x-icon"/ -->
	<link rel="stylesheet" href="<?php echo $baseurl; ?>/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>/css/slick.css">
	<link href="<?php echo $baseurl; ?>/css/style.css" rel="stylesheet" type="text/css"/>
	
	<link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>/css/responsive.css">
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
	<!-- Google Fonts-->
	<!--<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">-->
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">
	<!-- link href="<?php echo $baseurl; ?>/images/favicon.png" rel="shortcut icon" -->
	<script src="<?php echo $baseurl; ?>/js/rating-min.js"></script>
	
	<!--menu files-->
	<link id="effect" rel="stylesheet" type="text/css" media="all" href="<?php echo $baseurl; ?>/webslidemenu/dropdown-effects/fade-down.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo $baseurl; ?>/webslidemenu/webslidemenu.css" />
	<link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo $baseurl; ?>/webslidemenu/color-skins/white-gry.css" />
	<script src="<?php echo $baseurl; ?>/webslidemenu/webslidemenu.js"></script>
	<!--menu files-->
	
	<script>
		$(document).ready(function(){
			$(".dropdown, .btn-group").hover(function(){
				var dropdownMenu = $(this).children(".dropdown-menu");
				if(dropdownMenu.is(":visible")){
					dropdownMenu.parent().toggleClass("open");
				}
			});
		});		
	</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156933662-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-156933662-1');
</script>