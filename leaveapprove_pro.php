<?php
    include("./connect.php");
    
    $leave_id = $_GET['leave_id'];
    $leave_status = $_GET['leave_status'];
    $admin_id = $_GET['admin_id'];
    
    $sql = "update studentleave set leave_status=$leave_status, admin_id=$admin_id where leave_id=$leave_id;";

    $conn->query($sql);

    $conn->close();

    if ($leave_status == 0)
    {
        $mes = "denined"; 
    }
    else
    {
        $mes = "approved";
    }
?>
<meta http-equiv="refresh" content="0; url=./leaveapprove.php?msg=<?php echo $mes;?>">