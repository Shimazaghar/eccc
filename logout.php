<?php
require_once 'config.php';


session_destroy();
header("location:index.php");

exit();


?>
<!DOCTYPE html>

<html>
    <head>
        <title>Logout</title>

    </head>
    <body>
        <h2>You have been logged out.</h2>

        <p>Click <a href="login.php">here</a> to login again.</p>
        

        
    </body>
</html>