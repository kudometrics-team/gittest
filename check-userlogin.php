<?php
    include('config.php');
    
    $email=$_REQUEST['uemail'];
    $pwd=$_REQUEST['upwd'];
    
    $CheckUsrLogs=$fnsout->CheckUsrLogs($email,$pwd);
    if($CheckUsrLogs)
    {
        echo "1";
    }
    else
    {
        echo "<p class='text-center'>Invalid user details!</p>";
    }
?>