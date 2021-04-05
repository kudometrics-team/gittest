<?php
	class myDBC
    {
		public $server = '45.79.173.199';
        public $user = 'rqsjuwbgdm';
        public $passwd = 'wrpqKRy3hB';
        public $db = 'rqsjuwbgdm';
		
	    
        public $dbCon;
        
        function __construct(){
            $this->dbCon = mysqli_connect($this->server, $this->user, $this->passwd, $this->db);
        }
        
        function __destruct(){
            mysqli_close($this->dbCon);
        }
		
        function SingleData($myQuery){
    	    $results = mysqli_query($this->dbCon, $myQuery);
			$row=mysqli_fetch_object($results);
    	    return $row;
    	}
    }
	$fnsout= new myDBC();
	
	$orderid=$_REQUEST['orderid'];
	$myQuery="select * from checkout where orderid='$orderid'";
	$getuserdetails=$fnsout->SingleData($myQuery);
	
	include 'src/instamojo.php';

	//$api = new Instamojo\Instamojo('009b4d8dfd0e7b99da02a9b8eea0d772', '310c3a036c60c9644540b319131fea63','https://www.instamojo.com/api/1.1/');
	$api = new Instamojo\Instamojo('test_5233a5e64cd8fe7f5bb79cedf21', 'test_42f3b75c9048efd359918406b4e','https://test.instamojo.com/api/1.1/');

	try {
		$response = $api->paymentRequestCreate(array(
			"purpose" => $getuserdetails->orderid,
			"amount" => $getuserdetails->convey_total,
			"buyer_name" => $getuserdetails->first_name,
			//"phone" => $phone,
			"send_email" => true,
		   // "send_sms" => true,
			"email" => $getuserdetails->email,
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