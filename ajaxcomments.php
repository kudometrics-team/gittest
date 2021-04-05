<?php
    include "config.php";
    $curnturl = $_SERVER['HTTP_REFERER'];
    $ipaddress = md5($_SERVER['REMOTE_ADDR']);
    
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $comment = addslashes($_REQUEST['comment']);
    
    $InsCmnt=$fnsout->InsCmnt($name,$email,$comment,$curnturl);
    if($InsCmnt) 
    {
        echo "0";
    }
?>