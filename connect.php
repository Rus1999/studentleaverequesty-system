<?php
    session_start();

    $conn = new mysqli("localhost", "root", "", "studentleavesystem");
    
    if ($conn->connect_error)
    {
        echo "Fail to connection database".$conn->connect_errno;
    }

    $conn->query("set names utf8");
    date_default_timezone_set("Asia/Bangkok");
?>