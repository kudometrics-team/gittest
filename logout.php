<?php
    session_start();
    unset($_SESSION['usersesid']);
    unset($_SESSION['usersesemail']);
    header("Location:login.php");
?>