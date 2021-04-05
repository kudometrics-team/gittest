<?php
	error_reporting(0);
	$product_name = $_REQUEST["product_name"];
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
	
	$myQuery="select * from checkout where orderid='$product_name'";
	$getuserdetails=$fnsout->SingleData($myQuery);
	
	$price = $_REQUEST["product_price"];
	$name = $getuserdetails->first_name;
	$email = $getuserdetails->email;
	
?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
		var usdprice = <?php echo $getuserdetails->total; ?>;
		var orderid='<?php echo $product_name; ?>';
        
        // App Id
        app_id = 'b5690695b5274055877d95d74b478924';
        
        $.ajax({
            url: 'https://openexchangerates.org/api/latest.json?app_id=' + app_id,   
            dataType: 'jsonp',
            success: function(json) {
				var instafp = Math.round(<?php echo $getuserdetails->total; ?> * json.rates.INR );
				//alert(instafp);
				//$("#instafp").val(instafp);
				
				$.ajax({
				    type: "POST",
				    url: "update-inr-price.php",
				    data:{instafp:instafp, orderid:orderid},		 
				    success: function (response) {
						window.location.href = "instamojo-payment.php?orderid="+orderid;
				    }
				});
            }
        });
        
    </script>
	