<?php
    include("./connect.php");

    $user_id = $_GET['user_id'];
    $sql = "delete from users where user_id = $user_id;";

    $conn->query($sql);

    $conn->close();
?>
<meta http-equiv="refresh" content="0; url=./manageusers.php">