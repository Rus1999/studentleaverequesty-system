<?php
    include("./connect.php");

    // store login email username
    $login_usernameemail = $_POST['usernameemail'];
    $login_password = $_POST['password'];

    $sql = "select * from Users where user_username='$login_usernameemail' or user_email='$login_usernameemail';";

    echo $sql;

    $result = $conn->query($sql);

    // find match username or email
    if ($result->num_rows > 0)
    {
        $row = $result->fetch_assoc();
        
        $user_password = $row['user_password'];
        $user_username = $row['user_username'];
        $user_status = $row['user_status'];
        $user_id = $row['user_id'];

        if ($login_password==$user_password)
        {
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_username'] = $user_username;
            $_SESSION['user_status'] = $user_status;
            echo '<meta http-equiv="refresh" content="0; url=./index.php">';
        }
        else
        {
            echo '<meta http-equiv="refresh" content="0; url=./login.php?error=PasswordNotMatch">';
        }
    }
    else
    {
        echo '<meta http-equiv="refresh" content="0; url=./login.php?error=UserEmailNotFound">';
    }

    $conn->close();
?>