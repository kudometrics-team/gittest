<?php
    include('config.php');
    
    if(empty($_SESSION['usersesid']))
    {
        header("location:index.php");
    }
    $usersesemail=$_SESSION['usersesemail'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My orders | Clicks Creative</title>
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
    <?php include'head-links.php';?>
</head>
<body>
	    <div class="head-slide-check mt-0">
        <?php include'header.php';?>
		<div class="slide-caption-program">
         	    <h1 class="text-center mt-2">My Order Details</h1>
		</div>
	    </div>
	
    </header>
    <span class="clearfix"></span>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5 mb-4">
                <?php
                    $FetcOrder=$fnsout->FetOrder($usersesemail);
                    $cnt=mysqli_num_rows($FetcOrder);
                    if($cnt)
                    {
                        ?>
                            <table class="table table-striped table-bordered table-hover my-order-table" id="no-more-tables">
                                <thead class="alert alert-info d-none d-md-block" style="display: table-row-group !important">
                                    <tr>
                                        <th style="padding-top: 15px;" class="text-center">S. No.</th>
                                        <th>Invoice No.</th>
                                        <th>Price Details</th>
                                        <th>Order Date/Status</th>
                                        <th class="text-center">View Order</th>
                                    </tr>
                                </thead>
                        <?php
                            $i=1;
                            while($row=mysqli_fetch_object($FetcOrder))
                            {
                            ?>
                                <tr>
                                    <td class="text-md-center"><?php echo $i++; ?></td>
                                    <td class="caps">
                                        <h6><?php echo $row->orderid; ?></h6>
                                        <p style="font-size: 14px"><b>Payment Type: </b><?php echo $row->payment_type; ?></p>
                                    </td>
                                    <td class="caps">
                                        <p style="font-size: 14px"><b>Total Amount: </b>$<?php echo number_format($row->total,2); ?><br />
                                        <?php if($row->coupon_amount){ ?><span style="font-size: 14px"><b>Coupon Amount: </b>$<?php echo number_format($row->coupon_amount,2); ?></span><?php } ?>
                                    </td>
                                    <td><p style="font-size: 14px" class="text-left"><?php echo $row->date; ?><br /><b>Order Status: </b><?php echo $row->status; ?></p></td>
                                    <td style="padding-top: 15px;"><p class="text-md-center mb-0"><a href="view-order.php?id=<?php echo $row->id; ?>&sesid=<?php echo $row->sesid; ?>&orderid=<?php echo $row->orderid; ?>"><i class="fa fa-search"></i> View</a></p></td>
                                </tr>
                            <?php
                            }
                        ?>
                            </table>
                        <?php
                    }
                    else
                    {
                        echo "<p class='alert alert-warning'>No Order Found!</p>";
                    }
                ?>
            </div>
        </div>
    </div>
    
    <?php include'footer.php';?>
    <?php include'footer-script.php';?>
</body>
</html>