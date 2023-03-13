<?php
    include("./connect.php");

    $leave_id = $_GET['leave_id'];

    $sql = "delete from studentleave where leave_id=$leave_id;";
    $conn->query($sql);

    $conn->close();
?>

<meta http-equiv="refresh" content="0; url=./leaveshow.php?msg=deletesuccess">