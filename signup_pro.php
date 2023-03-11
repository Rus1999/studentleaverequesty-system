<?php
    include("./connect.php");

    $signup_firstName = $_POST['fname'];
    $signup_lastName = $_POST['lname'];
    $signup_email = $_POST['email'];
    $signup_phonenumber = $_POST['phone'];
    $signup_username = $_POST['username'];
    $signup_password = $_POST['password'];

    $sql = "insert into users values(null,'$signup_username', '$signup_password', '$signup_firstName', '$signup_lastName', '$signup_email', '$signup_phonenumber', 1, null);";

    $conn->query($sql);

    $conn->close();
?>
<meta http-equiv="refresh" content="0; url=./index.php">