<?php 

    function OpenCon() 
    {
        $dbhost = "localhost";
        $dbuser = "ghostblade";
        $dbpassword = "admin";
        $db = "iacademy";
        
        $conn = new mysqli($dbhost, $dbuser, $dbpassword, $db);

        return $conn;
    }

    // Password: admin
    // UUID: ZRNQztMsdyniRtCm

    function CloseCon($conn) {
        $conn -> close();
    }
?>


