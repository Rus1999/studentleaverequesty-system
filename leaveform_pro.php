<?php
    include("./connect.php");

    $leave_type = $_POST['leaveType'];
    $leave_title = $_POST['title'];
    $leave_reason = $_POST['reason'];
    $leave_startDate = $_POST['startDate'];
    $leave_endDate = $_POST['endDate'];
    $user_id = $_SESSION['user_id'];
    
    if ($_FILES['leave_picture']['size']==0)
    {
        $uploadfile_path = null;
    }
    else
    {
        // file
        $leave_picture_name = $_FILES['leave_picture']['name'];
        $leave_picture_type = $_FILES['leave_picture']['type'];
        $leave_picture_size = $_FILES['leave_picture']['size'];
        $leave_picture_name_temp = $_FILES['leave_picture']['tmp_name'];
        $leave_picture_error = $_FILES['leave_picture']['error'];

        // echo "
        //     $leave_picture_name <br>
        //     $leave_picture_type <br>
        //     $leave_picture_size <br>
        //     $leave_picture_name_temp <br>
        //     $leave_picture_error <br>
        // ";

        // move file
        $uploaddir = 'imgs/leavePic/';
        $uploadfile_path = $uploaddir . basename($leave_picture_name);
        move_uploaded_file($leave_picture_name_temp, $uploadfile_path);
    }


    $sql = "insert into studentleave values(null, '$leave_title', '$leave_reason', '$leave_type', '$leave_startDate', '$leave_endDate', '$uploadfile_path', $user_id, null, 0);";

    $conn->query($sql);

    $conn->close();
?>
<meta http-equiv="refresh" content="0; url=./leaveshow.php?msg=success">