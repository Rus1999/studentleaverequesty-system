<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/x-icon" href="imgs/donkey.png">
    <title>Student Leave System - ระบบขออนุญาตหยุดเรียน</title>
</head>
<body>
    <!-- Header -->
    <div class="container-fluid pt-4 pb-2 bg-dark text-white text-center">
        <a href="./index.php" class="text-decoration-none text-white"><h1>Student Leave System</h1></a>
    </div>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">
                <img src="imgs/donkey.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <!-- check login -->
                    <?php
                        if (isset($_SESSION['user_status']))
                        {
                            echo '<span class="navbar-text text-white">'.$_SESSION['user_username'].'</span>';
                            echo '<li class="nav-item">
                                    <a class="nav-link" href="./logout.php">Logout</a>
                                </li>';
                            echo '<span class="navbar-text text-white">|</span>';

                            if ($_SESSION['user_status'] == 0)
                            {
                                echo '<li class="nav-item"> 
                                        <a class="nav-link" href="./leaveapprove.php">Approve Leave</a>
                                    </li>';
                                echo '<li class="nav-item">
                                        <a class="nav-link" href="./manageusers.php">Manage Users</a>
                                    </li>';
                            }
                            else if ($_SESSION['user_status'] == 1)
                            {
                                echo '<li class="nav-item"> 
                                        <a class="nav-link" href="./leaveshow.php">Leave List</a>
                                    </li>';
                            }
                        }
                        else
                        {
                            echo '<li class="nav-item">
                                    <a class="nav-link" href="./login.php">Login</a>
                                </li>';
                            echo '<li class="nav-item">
                                    <a class="nav-link" href="./signup.php">Signup</a>
                                </li>';
                        }
                    ?>
                </ul>
            </div>
        </div> 
    </nav>

    <div style="background-color: #f1f1f1;">