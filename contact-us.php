<?php include('config.php'); ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Contact ClicksCreative | Get In Touch With Us Today!</title>
<meta name="Description" content="Use the contact form provided in this page to get in touch with us regarding social media promotion services. We will get back to you within 24-48 hours."/>
<meta name="Keywords" content="Contact ClicksCreative, ClicksCreative contact details"/>
<?php include'head-links.php';?>
</head>
<body class="contact-page-template">

    
        <div class="head-slide-check">
            <?php include'header.php';?>
            <div class="slide-caption-program">
                <h1 class="text-center"><b>CONTACT US</b></h1>
            </div>
        </div>
    
        <div class="about-paragh">
            <div class="container">
                <h4 class="text-center"><b>Got some questions? We can help you</b></h4>
                <p class="text-center">We are here to help you answer your questions as best as we can. You can also use our live help to chat with our customer support.</p>
            </div>
        </div>
    
        <div class="contact-form">
            <div class="container">
                <div class="offset-lg-3 col-lg-6 offset-lg-3 offset=md-2 col-md-8 offset-md-2 offset-sm-1 col-sm-10 offset-sm-1">
                <form id="quickmail" method="post" autocomplete="off">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control cont-font-size" name="name" placeholder="Enter name" name="name">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" class="form-control cont-font-size" name="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <label>Website:</label>
                        <input type="text" class="form-control cont-font-size" name="website" placeholder="Enter website" name="website">
                    </div>
                    <div class="form-group">
                        <label>Order Number:</label>
                        <input type="text" class="form-control cont-font-size" name="order" placeholder="Enter orderno" name="orderno">
                    </div>
                    <div class="form-group">
                        <label>What do you need help with?</label>
                        <select class="form-control" name="help">
                            <option value="" disabled="disabled" selected>Please select one</option>
							<option value="I have problems with my order">I have problems with my order</option>
							<option value="I'm not receiving any email">I'm not receiving any email</option>
							<option value="I'm confused about something">I'm confused about something</option>
							<option value="Something is broken">Something is broken</option>
							<option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Your Message:</label>
                        <textarea class="form-control cont-font-size" rows="5" name="message"></textarea>
                    </div>  
                    <button type="submit" class="submit-btn form-control text-center">SUBMIT YOUR QUERY</button>
                    <p id="loader_con" class="text-center" style="display: none;">Please wait while processing ...</p>
                    <span id="msg"></span>
                </form>
            </div>
        </div>
   
       <div class="contact-mail mx-auto text-center">
           <div class="container">
               <div class="contact-border">
                <h4><b>Contact Information</b></h4><br />
				 <h4><b>KudoMetrics Technologies Private Limited</b></h4>
				<h6>Door No: 204/115, 1st Floor, Near Essar Petrol Bunk, Vinayagapuram, Attur, Salem, Tamilnadu, India - 636102.</h6>
				<h6><b>Phone:</b><a href="tel:+919677450988"> +91-9677450988</a></h6>
                <h6><b>Email Id:</b><a href="mailto:info@ClicksCreative.com"> info@clickscreative.com</a></h6>
                </div>
            </div>
        </div>
        <?php include'get-started.php';?>
    <?php include'footer.php';?>
<?php include'footer-script.php';?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script>
	    $(function() {
		$("#quickmail").validate({
			rules: {
				name: {
				    required: true
				},
				email: {
				    required: true,
				    email: true
				},
               	help: {
				    required: true
				},
				message: {
				    minlength: 10,
				    required: true
				}
			},
			
			submitHandler: function(form) {
				$('#loader_con').show();
				
				$.post('quickmail.php', $("#quickmail").serialize(), function(data) {
				    $("#loader_con").hide();
				    $('#msg').html(data);
				    $('#quickmail')[0].reset();
				});
			}
		});
		
		jQuery.validator.addMethod("lettersonly", function(value, element) {
		  return this.optional(element) || /^[a-z]+$/i.test(value);
		}, "Letters only please"); 
	    });

		function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
		 {
		 //alert("u must enter number only");
            return false;
			}
			else
			{

         return true;
		 }
      }	
	</script>
</body>
</html>