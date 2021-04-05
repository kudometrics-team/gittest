<?php
    include('config.php');
    if(empty($_SESSION['usersesid']))
    {
        header("location:index.php");
    }
    
    if(isset($_REQUEST['Update']))
    {
        $email=$_REQUEST['email'];
        $pwd=$_REQUEST['oldpwd'];
        $npwd=$_REQUEST['newpwd'];
        
        $CheckUsr=$fnsout->ChangeUsrPwd($email,$pwd);
	
        if($CheckUsr)
        {
            $UpdQry=$fnsout->ChangePwd($email,$npwd);
            if($UpdQry)
            {
                $msg = "<div class='alert alert-success'><b>Success:</b> Password Changed!</div>";
                echo "<meta http-equiv='refresh' content='0;url= logout.php'>";
            }
            else
            {
                $msg = "<div class='alert alert-warning'><b>Failed:</b> Error!</div>";
            }
        }
        else
        {
            $msg = "<div class='alert alert-warning'><b>Warning:</b> Mismatch E-mail and password!</div>";
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Change User Password | Clicks Creative</title>
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
    <?php include'head-links.php';?>
</head>
<body>
	       
	    <div class="head-slide-check mt-0">
            <?php include'header.php';?>
		<div class="slide-caption-program">
       
		    <h1 class="text-center mt-2">Change Password</h1>
		</div>
                
                <div class="home-package-boxs mt-2 mb-5">
                    <div class="container">
                        <div class="col-lg-5 col-md-6 mx-auto">
                            <div class="checkout-white-bg">
                                <form autocomplete="off" action="#" method="post" class="login_form" id="ChangeUsrPwd">
                                    <?php echo $msg; ?>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>E-mail Address</label>
                                            <input type="text" name="email" class="form-control" title="Enter your email address" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input type="password" name="oldpwd" class="form-control" title="Enter your old password" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" name="newpwd" class="form-control" title="Enter your new password" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                    <div class="form-group">
                                    
                                    </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="submit" name="Update" id="login_sumbit" value="Change Password" class="form-control pay_btn"/>
                                        </div>
                                        <span id="err" class="text-danger"></span>
                                        <span id="loader" style="display: none">Checking your account details!</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
		</div>
	    </div>
	</div>
    </header>
    
    <?php include'footer.php';?>
    <?php include'footer-script.php';?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
    <script>
        $(function() {
            $("#ChangeUsrPwd").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    oldpwd: {
                        required: true
                    },
                    newpwd: {
                        required: true
                    }
                },
                
            });
            
            jQuery.validator.addMethod("lettersonly", function(value, element) {
              return this.optional(element) || /^[a-z]+$/i.test(value);
            }, "Letters only please"); 
        });
    </script>
  </body>
</html>