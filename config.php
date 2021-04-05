<?php
	
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	//$urlink=$url.'#'.$variable;
	
    include("admin/config.php");
    $baseurl='http://localhost:8080/clickscreative';
    $currenturl = 'http://localhost:8080/clickscreative'.$_SERVER['REQUEST_URI'];
    
    $fnsout= new myDBC();
    $Starcnt=$fnsout->CheckSeenRatingCnt($currenturl);
    
    $FetchseenDatasCmnt=$fnsout->CheckSeenCmntCnt($currenturl);
    $reviewcmnt=$FetchseenDatasCmnt->cnt;
    $FetchComment=$fnsout->FetchComment($currenturl);
    
    session_start();
    $ses=session_id();
    
    $GetCart=$fnsout->CartCnt($ses);
    $cnt=mysqli_num_rows($GetCart);
    $CartCnt=mysqli_num_rows($GetCart);
	
    $Query="select * from promotion where id='1'";
    $promotion=$fnsout->MYQuery($Query);
?>