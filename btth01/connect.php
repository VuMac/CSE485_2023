<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db="btth01_cse485";
    global $conn;
    
    $conn = mysqli_connect($servername,$username,$pass);
    if( !$conn)
    {
        die('chịu' . mysql_error($conn) );
    }
mysqli_select_db($conn,$db);
?>