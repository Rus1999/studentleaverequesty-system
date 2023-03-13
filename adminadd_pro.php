<?php
    include("./connect.php");

    $admin_id = $_SESSION['user_id'];

    $admin_firstName = $_POST['fname'];
    $admin_lastName = $_POST['lname'];
    $admin_email = $_POST['email'];
    $admin_phonenumber = $_POST['phone'];
    $admin_username = $_POST['username'];
    $admin_password = $_POST['password'];

    $sql = "insert into users values(null,'$admin_username', '$admin_password', '$admin_firstName', '$admin_lastName', '$admin_email', '$admin_phonenumber', 0, $admin_id);";

    $conn->query($sql);

    $conn->close();
?>
<meta http-equiv="refresh" content="0; url=./manageusers.php">