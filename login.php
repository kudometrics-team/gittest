<?php include('config.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>User Login | GetAFollower</title>
    <meta name="Description" content="Login into your GetAFollower account using registered email address and password to check your order details."/>
    <meta name="Keywords" content="getafollower user login, getafollower login, GetAFollower user login"/>
    <?php include'head-links.php';?>
</head>
<body>
	    
	    
	    <div class="head-slide-view mt-0">
            <?php include'header.php';?>
		<div class="slide-caption-1 text-center">
            <img src="images/login.png" alt="login"/>
		    <h1 class="text-center head-family">User Login</h1>
		</div>
                
                <div class="home-package-boxs mt-2 mb-5">
                    <div class="container">
                        <div class="col-lg-5 col-md-6 mx-auto">
                            <div class="checkout-white-bg">
                                <div class="login-white-bg center-block">
                                    <div class="login">
                                        <form autocomplete="off" action="#" method="post" class="login_form" id="UsrLogin">
                                                <div class="col-sm-12">
                                                <div class="form-group">
                                                <label>E-mail Address</label>
                                                        <input type="email" name="uemail" id="username" class="form-control" title="Enter your email address" />
                                                </div>
                                                </div>
                                                <div class="col-sm-12">
                                                <div class="form-group">
                                                <label class="fullwidth">Password <a href="javascript:;" class="pull-right forgot-password"><small class="">Forgot Password?</small></a></label>
                                                <input type="password" name="upwd" id="password" class="form-control" title="Enter your password" />
                                                </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="submit" name="login_sumbit" id="login_sumbit" value="Login" class="form-control pay_btn"/>
                                                    </div>
                                                    <span id="err" class="text-danger"></span>
                                                    <span id="loader" style="display: none">Checking your account details!</span>
                                                </div>
                                        </form>
                                    </div>
                                    
                                    <div class="forgotpwd" style="display: none">
                                        <form autocomplete="off" action="#" method="post" class="login_form" id="ForgotPwd">
                                            <span id="errpwd"></span>
                                                <div class="col-sm-12">
                                                <div class="form-group">
                                                <label class="fullwidth">E-mail Address <a href="javascript:;" class="pull-right backtologin"><small class="text-white">Back to login?</small></a></label>
                                                        <input type="email" name="recemail" class="form-control" title="Enter your email address" />
                                                </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="submit" name="login_sumbit1" id="login_sumbit1" value="Get Password" class="form-control pay_btn"/>
                                                    </div>
                                                    <span id="err" class="text-danger"></span>
                                                    <span id="recloader" style="display: none">Checking your account details!</span>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
		</div>
	    </div>
	</div>
    </header>
    
    <?php include'footer.php';?>
    <?php include'footer-script.php';?>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        $(function() {
            $("#UsrLogin").validate({
                rules: {
                    uemail: {
                        required: true,
                        email: true
                    },
                    upwd: {
                        required: true
                    }
                },
                
                submitHandler: function(form) {
                    $('#loader').show();
                    $.post('check-userlogin.php', $("#UsrLogin").serialize(), function(data) {
                        if(data=='1'){
                            $("#loader").hide();
                            location.href="my-order-details.php";
                        }
			else
			{
			  $("#loader").hide();
			  $("#err").html(data);
			}
                    });
                }
            });
            
            jQuery.validator.addMethod("lettersonly", function(value, element) {
              return this.optional(element) || /^[a-z]+$/i.test(value);
            }, "Letters only please"); 
        });
        
        $(function() {
            $("#ForgotPwd").validate({
                rules: {
                    recemail: {
                        required: true,
                        email: true
                    }
                },
                
                submitHandler: function(form) {
                    $('#recloader').show();
                    $.post('recovery-pwd.php', $("#ForgotPwd").serialize(), function(data) {
                        if(data){
                            $("#recloader").hide();
                            $('#errpwd').html(data);
                        }
                    });
                }
            });
            
            jQuery.validator.addMethod("lettersonly", function(value, element) {
              return this.optional(element) || /^[a-z]+$/i.test(value);
            }, "Letters only please"); 
        });
    </script>
    <script>
        $(".forgot-password").click(function(){
            $(".login").hide();
            $(".forgotpwd").show();
        });
        $(".backtologin").click(function(){
            $(".login").show();
            $(".forgotpwd").hide();
        });
    </script>
</body>
</html>