<html>
<head>
<title>Payment Status Checker</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>
<script type="text/javascript">
        $(document).ready(function () {
            if(window.location.href.indexOf("Failed") > -1) 
            {
				window.location.href = "https://www.clickscreative.com/cancel-paypal.php";
              
            }
			else
			{
				window.location.href = "https://www.clickscreative.com/thank-you.php";
			}
        });
</script>
</body>
</html>