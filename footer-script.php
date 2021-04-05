<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo $baseurl; ?>/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="<?php echo $baseurl; ?>/js/jquery.easing.1.3.js"></script>
<!--<script src="<?php echo $baseurl; ?>/js/jquery.ui.totop.js"></script>-->
<script src="<?php echo $baseurl; ?>/js/slick.js"></script>
<script>
    $(document).on('ready', function() {
	  $(".home-pack-scroll").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true,
  slidesToShow:4,
  slidesToScroll: 1,
  responsive: [
 
    {
      breakpoint: 960,
      settings: {
        slidesToShow: 2,
		autoplay:true,
		
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 787,
      settings: {
        slidesToShow: 2,
		autoplay:true,
		
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
      });
	  
	  
    });
</script>
 <script>
    $(document).on('ready', function() {
  
$('.mainpackage').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
  {
      breakpoint: 1330,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      }
      },
    {
      breakpoint: 1060,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      }
      },
    {
	breakpoint: 990,
	settings: {
	  slidesToShow: 1,
		  autoplay:true,
		  
	  slidesToScroll: 1
	}
      },
      {
      breakpoint: 600,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1
      }
      },
      {
	breakpoint: 481,
	settings: {
	slidesToShow: 1,
	slidesToScroll: 1
	}
    }
  ]
});   


 $('.we-offer-list').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
   autoplay:true,
  responsive: [
  {
      breakpoint: 1330,
      settings: {
      slidesToShow: 4,
      slidesToScroll: 1,
      infinite: true,
      }
      },
    {
      breakpoint: 1060,
      settings: {
      slidesToShow: 4,
      slidesToScroll: 1,
      infinite: true,
      }
      },
    {
	breakpoint: 990,
	settings: {
	  slidesToShow: 4,
		  autoplay:true,
		  
	  slidesToScroll: 2
	}
      },
      {
      breakpoint: 600,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1
      }
      },
      {
	breakpoint: 481,
	settings: {
	slidesToShow: 1,
	slidesToScroll: 1
	}
    }
  ]
});   
 
 
 
 $('.get-testimonial').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
  {
      breakpoint: 1330,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      }
      },
    {
      breakpoint: 1060,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      }
      },
    {
	breakpoint: 990,
	settings: {
	  slidesToShow: 1,
		  autoplay:true,
		  
	  slidesToScroll: 1
	}
      },
      {
      breakpoint: 600,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1
      }
      },
      {
	breakpoint: 481,
	settings: {
	slidesToShow: 1,
	slidesToScroll: 1
	}
    }
  ]
});   
	  
    });
  
</script>
<script>
function isPasswordPresent() {
    return $('#url').val().length > 0;
}
    (function($,W,D)
    {
	var JQUERY4U = {};
    
	JQUERY4U.UTIL =
	{
	    setupFormValidation: function()
	    {
		//form validation rules
		$("#PackageForm").validate({
		    rules: {
			product_type: {
			      required: true,
			      },
			profile: {
			      required: true,
			      },
			url: {
			      required: true,
			      url: true,
			      },
			second_url: {
			      required: true,
			    },
			target_country: {
			      required: true,
			      },
			      
		    },
		    //messages: {
            //       	profile: {
            //               required: "Enter your Username",
			//},
            //       	url: {
            //               required: "Enter your valid URL",
			//},
           	//    },
		    
		    submitHandler: function(form) {
		      form.submit();
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
  <script src="js/jquery.ui.totop.js"></script>
<script>
$(window).load(function() {
	//$(".loader").fadeOut("slow");
	
	 $().UItoTop({ easingType: 'easeOutQuart' });
	 
})

</script>

<script>
  $(".onscrollbtn").click(function() {
	  $('html,body').animate({
	      scrollTop: $(".onscroll").offset().top},
	      'slow');
      });
</script>
<script>
	      function CheckUsedCat(val){
		  var element=document.getElementById('commenttype');
		  if(val=='Custom Comments')
		      element.style.display='block';
		  else  
		      element.style.display='none';
	      }
	      
	      function CheckytView(val){
		  var element=document.getElementById('Worldwide');
		  if(val=='Worldwide')
		      element.style.display='block';
		  else  
		      element.style.display='none';
	      }
	      
	      function YouTubeCmnt(val){
	      var element=document.getElementById('Worldwide');
	      if(val=='Worldwide')
		  element.style.display='block';
	      else  
		  element.style.display='none';
	      }
	      
	      //fixed menu while scroll
		jQuery("document").ready(function($){
			var nav = $('.headerbg');
			$(window).scroll(function () {
				if ($(this).scrollTop() > 100) {
					nav.addClass("f-nav");
				} else {
					nav.removeClass("f-nav");
				}
			});
		});
</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

//fot mobile dropdown
function myFunctionMob() {
    document.getElementById("myDropdownMob").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtnmob')) {

    var dropdowns = document.getElementsByClassName("dropdown-content-mob");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<script>
	function CheckUsedCat(val){
	    var element=document.getElementById('Custom');
	    if(val=='Custom Comments')
		element.style.display='block';
	    else  
		element.style.display='none';
	}
</script>
<script>
  $(".onscrollbtn").click(function() {
	  $('html,body').animate({
	      scrollTop: $(".onscroll").offset().top},
	      'slow');
      });
</script>

<!-- script>
$(document).keydown(function (event) {
    if (event.keyCode == 123) { // Prevent F12
        return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
        return false;
    }
});
/*Disable Inspect Element*/
$(document).bind("contextmenu",function(e) {
     e.preventDefault();
});
</script -->

<!--click to copy start-->
<!-- script>
var copyBtn   = $("#copy-btn"),
    input     = $("#copy-me");

function copyToClipboardFF(text) {
  window.prompt ("Copy to clipboard: Ctrl C, Enter", text);
}

function copyToClipboard() {
  var success   = true,
      range     = document.createRange(),
      selection;

  // For IE.
  if (window.clipboardData) {
    window.clipboardData.setData("Text", input.val());        
  } else {
    // Create a temporary element off screen.
    var tmpElem = $('<div>');
    tmpElem.css({
      position: "absolute",
      left:     "-1000px",
      top:      "-1000px",
    });
    // Add the input value to the temp element.
    tmpElem.text(input.val());
    $("body").append(tmpElem);
    // Select temp element.
    range.selectNodeContents(tmpElem.get(0));
    selection = window.getSelection ();
    selection.removeAllRanges ();
    selection.addRange (range);
    // Lets copy.
    try { 
      success = document.execCommand ("copy", false, null);
    }
    catch (e) {
      copyToClipboardFF(input.val());
    }
    if (success) {
      alert ("The text is on the clipboard, try to paste it!");
      // remove temp element.
      tmpElem.remove();
	  
    }
  }
}

copyBtn.on('click', copyToClipboard);
</script -->
<!--click to copy end-->

<!-- timer script start -->
<?php if($promotion->banner_status=='1'){ ?>
	<script src="<?php echo $baseurl; ?>/timer-scripts/jquery.countdown.min.js"></script>
	<script>
		$('#example').countdown({
			date: '01/01/2020 23:01:01',
			//mm/dd/yy
			offset: -8,
			day: 'Day',
			days: 'Days'
		}, function () {
			
		});
	</script>
<?php } ?>
<!-- timer script end -->
<!--Start of Zopim Live Chat Script-->
<script>
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?oxiyx6IsPS4yHzCKD1Q0KbJ1FYnxNFI9";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->