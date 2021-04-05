<?php
    include "config.php";
    $crnt_url = $_SERVER['HTTP_REFERER'];
    $ipaddress = md5($_SERVER['REMOTE_ADDR']);
    $rate = $_REQUEST['rate'];
    
    $CheckRating=$fnsout->CheckRating($ipaddress,$crnt_url);
    if(empty($CheckRating))
    {
        $InsRating=$fnsout->InsertRating($rate,$ipaddress,$crnt_url);
        if($InsRating)
        {
            echo "<p class='text-success'>Thanks for your rating!</p>";
        }
        
    }
    else
    {
        echo "<p class='text-danger'>Your already rated!</p>";
    }
?>