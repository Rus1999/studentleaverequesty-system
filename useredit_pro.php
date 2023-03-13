<?php
    include("./connect.php");

    $edited_user_id = $_POST['user_id'];
    $edited_firstName = $_POST['fname'];
    $edited_lastName = $_POST['lname'];
    $edited_email = $_POST['email'];
    $edited_phonenumber = $_POST['phone'];
    $edited_username = $_POST['username'];

    $admin_id = $_SESSION['user_id'];

    $sql = "update users set 
            user_username = '$edited_username',
            user_firstName = '$edited_firstName',
            user_lastName = '$edited_lastName',
            user_email = '$edited_email',
            user_phonenumber = '$edited_phonenumber',
            admin_id = $admin_id
            where user_id = $edited_user_id;
        ";

    $conn->query($sql);

    $conn->close();
?>
<meta http-equiv="refresh" content="0; url=./manageusers.php">