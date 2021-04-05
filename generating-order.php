<?php
    // Initialize the session.
    // If you are using session_name("something"), don't forget it now!
    session_start();
    
    // Unset all of the session variables.
    $_SESSION = array();
    
    // If it's desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    
    // Use this too
    ini_set('session.gc_max_lifetime', 0);
    ini_set('session.gc_probability', 1);
    ini_set('session.gc_divisor', 1);
    
    // Finally, destroy the session.
    //session_destroy();
    //echo "<meta http-equiv='refresh' content='0;url= thank-you'>";
	//session_regenerate_id();
?>