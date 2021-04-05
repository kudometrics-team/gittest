<?php
	include 'config.php';

	$Query="select * from checkout where sesid='$ses'";
	$getorderdetails=$fnsout->MYQuery($Query);
	
	$product_name = $getorderdetails->orderid;
	$price = $_REQUEST['product_price'];
	$name = $getorderdetails->first_name;
	$email = $getorderdetails->email;

include 'src/instamojo.php';

$api = new Instamojo\Instamojo('009b4d8dfd0e7b99da02a9b8eea0d772', '310c3a036c60c9644540b319131fea63','https://www.instamojo.com/api/1.1/');


try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $product_name,
        "amount" => $price,
        "buyer_name" => $name,
        //"phone" => $phone,
        "send_email" => true,
       // "send_sms" => true,
        "email" => $email,
        'allow_repeated_payments' => false,
        "redirect_url" => "https://clickscreative.com/payment-status-check.php",
        "webhook" => "https://clickscreative.com/webhook.php"
        ));
    //print_r($response);

    $pay_ulr = $response['longurl'];
    
    //Redirect($response['longurl'],302); //Go to Payment page

    header("Location: $pay_ulr");
    exit();

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}     
  ?>