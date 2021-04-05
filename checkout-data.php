<?php
    include 'config.php';
    //$orderid=$_REQUEST['orderid'];
    //$total=$_REQUEST['total'];
    //$coupon_amount=$_REQUEST['coupon_amount'];
    $first_name=$_REQUEST['form_name'];
    $last_name=$_REQUEST['form_lastname'];
    $company_name=$_REQUEST['form_company'];
    $email=$_REQUEST['form_email'];
    $payment_type=$_REQUEST['payment_type'];
    $_SESSION['useremail']=$_REQUEST['form_email'];
	
	$Query="select * from checkout where sesid='$ses'";
	$orderdetail=$fnsout->MYQuery($Query);
	
	$Query="select sum(price) as cart_total from add_cart where ses_id='$ses'";
	$cartdetail=$fnsout->MYQuery($Query);
	
	if($orderdetail->total){
		$Query="update checkout set payment_type='$payment_type', first_name='$first_name', last_name='$last_name', company_name='$company_name', email='$email' where sesid='$ses'";
	}else{
		$Query="update checkout set payment_type='$payment_type', total='$cartdetail->cart_total', first_name='$first_name', last_name='$last_name', company_name='$company_name', email='$email' where sesid='$ses'";
	}
	$getcartcnt=$fnsout->MYQuery($Query);
	
    //order email mail
    $GetCart=$fnsout->CartCnt($ses);
    $CartTotal=$fnsout->CartTotal($ses);
    $tot=$CartTotal->tot;
    
    $GetUserDetails=$fnsout->GetUserDetails($ses);
    $discount=$GetUserDetails->coupon_amount;
    $grandtotal=$tot-$discount;
    
    
    $unicid=$_GET['unicid'];
    $useremail=$_SESSION['useremail'];
    $CheckValidUser=$fnsout->CheckValidUser($invoiceno,$unicid,$useremail);
    $UpdateInvoice=$fnsout->UpdateInvoice($invoiceno,$unicid,$useremail);
    
    $row=mysqli_num_rows($CheckValidUser);
    
    while($fet_row=mysqli_fetch_object($GetCart))
    {
        $data[]='<tr>
            <td style="width:80%;">
            <h4>'.$fet_row->connection.'</h4>
			<p>'.$fet_row->url.'</p>
			<p>'.$fet_row->profile.'</p>
			<p>'.$fet_row->second_text.'</p>
               </td>
            <td style="padding-left: 10px">
                <h4 style="text-align: right;">$'.$fet_row->price.'.00</h4>
            </td>
        </tr><tr><td colspan="2"><hr /></td></tr>';
    }
    $packagedetails=implode("",$data);
    
    if($GetUserDetails->company_name)
    {
        $companyname='<p><b>Company Name :</b> '. $GetUserDetails->company_name .'</p>';
    }
    else
    {
        $companyname='<p><b>Company Name :</b> ******** </p>';
    }
    
    if($discount)
    {
        $userdis='<tr>
                    <td style="text-align: right; padding-right: 10px;"><h4 style="margin-bottom: 0;">Sub Total</h4></td>
                    <td style="padding-left: 10px; text-align: right;"><h4 style="margin-bottom: 0;"><b>$'.number_format($tot, 2).'</b></h4></td>
                </tr>
                
                <tr>
                    <td style="text-align: right; padding-right: 10px;"><h4 style="margin-bottom: 0;">Discount Amount</h4></td>
                    <td style="padding-left: 10px; text-align: right;"><h4 style="margin-bottom: 0;"><b>$'.number_format($discount, 2).'</b></h4></td>
                </tr>
				 <tr>
                    <td style="width:80%;text-align: right; padding-right: 10px;"><h2>Invoice Total</h2></td>
                    <td style="padding-left: 10px; text-align: right;"><h2><b>$'.number_format($grandtotal, 2).'</b></h2></td>
                </tr>';
    }
    
    $emaill = 'info@clickscreative.com';
	    
    $html = '<html>
    			<body>
				<div style="width: 100%;background:#3700b3;padding:30px 0px;">
    			    <div style="width: 60%;margin:0 auto;">
    				<table style="width: 100%;">
					 <tr>
    					<td>
						<table style="width: 100%;">
						<tr><td style="text-align:center;">
						<a href="https://www.clickscreative.com/"><img src="https://www.clickscreative.com/images/logo-email.png" alt="Clicks Creative" /></a>
    					</td>
    				    </tr>
						</td>
    				    </tr>
						 <tr>
    				<td style="height:10px;">
					</td>
    				    </tr>
    				    <tr>
    					<td style="font-family:Arial,verdana,sans-serif;background:#fff;padding:20px;margin-top:10px;border-radius:5px;">
						<table style="width: 100%;">
							<tr><td style="font-size:14px;">
						 <h4>Billed To</h4>
    					    <p><b>Full Name :</b> '.$GetUserDetails->first_name.' '. $GetUserDetails->last_name.'</p>
    					    '.$companyname.'
    					    <p><b>Email Address :</b> '. $GetUserDetails->email.'</p>
						  </td>
						  <td style="font-size:14px;">
						    <h4 style="color: #fff">.</h4>
							<p><b>IP Address : </b> '.$GetUserDetails->ip_address.'</p>
                            <p><b>Pay Type : </b> '.$GetUserDetails->payment_type.'</p>
    					    <p><b>Order Number : </b> '.$GetUserDetails->orderid.'</p>
    					    <p><b>Date of Issue : </b> '.$GetUserDetails->date.'</p>
						  </td>
    				    </tr>
						<tr><td style="height:20px;" colspan="2">
						</td></tr>
							<tr><td colspan="2">
						
						
						<table style="width: 100%;">
							<tr>
							<th style="text-align:left;">
						SERVICE NAME
							</th>
							<th style="text-align:right;">
							PRICE
							</th></tr>
							<tr><td colspan="2"><hr /></td></tr>
		
							 '.$packagedetails.'
    				    
    				    '.$userdis.'
						</table>
						
						
						  </td>
						 
    				    </tr>
						
						
						</table>
					   </td>
    				    </tr>
					   
					   
					    <tr>
    					<td>
						<table style="width: 100%;">
							<tr><td><a href="#" style="font-family:Arial,verdana,sans-serif;color:#fff;text-decoration:none;font-size:12px;"><img src="https://www.clickscreative.com/images/logo-email.png" alt=""/><br/>
							© 2020 Clicks Creative. All Rights Reserved.
							</a>
							</td>
							<td>
							 <p style="font-family:arial;text-align: right; font-size: 14px;color:#fff;">Mail ID: <a href="mailto:info@clickscreative.com" style="font-family:Arial,verdana,sans-serif;color:#fff;text-decoration:none;">info@clickscreative.com</a></p>
    					    <p style="font-family:arial;text-align: right; font-size: 14px;color:#fff;">Website: <a href="https://www.clickscreative.com" style="font-family:Arial,verdana,sans-serif;color:#fff;text-decoration:none;">www.clickscreative.com</a></p>
							</td></tr>
							
						</table>
					   </td>
    				    </tr>
					   
    				  
    				</table>
    			
    			    </div></div>
    			</body>
    		    </html>';
        
    $subject = 'Your ClicksCreative.com Order: '. $GetUserDetails->orderid;
    $message = $html;
    
    $info="info@clickscreative.com";
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From: ClicksCreative <$info>";
	if($GetUserDetails->orderid!=''){
		$res=mail($emaill,$subject,$message,$headers,"-f$info");
	}
	
	if($payment_type=='CCAvenue'){
		echo '<form id="ccavenue_form" method="post" name="customerData" action="'.$baseurl.'/ccavRequestHandler.php">
				<input type="submit" style="display:none;">
			</form>';
	}
	else if($payment_type=='PayUBiz'){
		echo '<form id="payubiz_form" action="https://kudometrics.com/payubiz-cc/index.php" method="POST">
				<input type="hidden" name="orderid" value="'.$GetUserDetails->orderid.'">
				<input type="submit" style="display:none;">
			</form>';
	}
	else if($payment_type=='Stripe'){
		echo '<form id="stripe_form" action="'.$baseurl.'/stripe/" method="POST">
				<input type="hidden" name="orderid" value="'.$GetUserDetails->orderid.'">
				<input type="submit" style="display:none;">
			</form>';
	}
	else if($payment_type=='Cashfree'){
		echo '<form id="cashfree_form" action="'.$baseurl.'/cashfree/request.php" method="POST">
				<input type="hidden" name="orderid" value="'.$GetUserDetails->orderid.'">
				<input type="submit" style="display:none;">
			</form>';
	}
    //send user login details
    $email=$useremail;
    $CheckUsr=$fnsout->RecoveryPwd($email);
    $oldusr=$CheckUsr->email;
    if(empty($oldusr))
    {
        function rand_string( $length ) {
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            return substr(str_shuffle($chars),0,$length);
        }
        $pwd= rand_string(8);
        
        $InsertUsr=$fnsout->InsertUserAccount($useremail,$pwd);
        if($InsertUsr)
        {
            $subject="Your account on clickscreative.com";
            $messageuser = '';
            $messageuser .= '<table width="100%" border="0" cellspacing="0" cellpadding="0" style="background:#DFDFDF;padding-top:30px; padding-bottom:30px;">
                <tr>
                    <td>
                        <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
                            <tr>
                                <td align="center" valign="top">
                                    <!-- // Begin Template Preheader \\ -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="80%">
                                        <tr></tr>
                                    </table><table width="100%" border="0" cellspacing="0" cellpadding="0" style="background:#DFDFDF">
                <tr>
                    <td>
                        <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
                            <tr>
                                <td align="center" valign="top">
                                <table border="0" cellpadding="0" cellspacing="0" width="80%" style="background:#fff;border: solid 3px #ccc; ">
                                        <tr>
                                            <td align="center" valign="top">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td style=" border-bottom: solid 3px #ccc; background: #ccc; text-align: center;">
                                                            <a href="https://www.clickscreative.com/"><img src="https://www.clickscreative.com/images/logo.png" alt="ClicksCreative"  title="ClicksCreative" style="margin:0 auto; padding: 20px 0;"/></a>
                                                            <div>
                                                                <p style="background: #36474F; font-size: 35px; color: #fff; margin: 0; padding: 20px 0 10px 20px; text-align: left;">Welcome to <b>ClicksCreative</b></p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="top" style="border-bottom:4px solid #E9E9E9">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">                                                    
                                                    <tr>	
                                                        <td valign="top">
                                                            <table border="0" cellpadding="20" cellspacing="0" width="100%" style="margin: 10px;">
                                                                <tr>
                                                                    <td valign="top">
                                                                        <div style="padding: 30px;">
                                                                            <p>Thanks for creating an account on Clicks Creative. Your E-mail is <b>'.$useremail.'</b></p>
                                                                            <p>Your password has been automatically generated: <b>'.$pwd.'</b></p>
                                                                            <p>You can access your account area to view your orders and change your password here: <a href="https://clickscreative.com/login.php">https://clickscreative.com/login.php</a>.</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        
                                    </table></td>
                            </tr>
                        </table>
                                        </td>
                      </tr>
                    </table></td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>';
            
            $info="info@clickscreative.com";
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= "From: ClicksCreative <$info>";
            
            $emails=mail($useremail,$subject,$messageuser,$headers,"-f$info");
        }
    }
	
?>