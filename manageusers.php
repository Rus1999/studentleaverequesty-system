<?php 
  include("./connect.php");
  include("./header.php");

  if(isset($_GET['msg']))
  {
    if($_GET['msg'] == 'addsuccess')
    {
      echo '<div class="alert alert-success alert-dismissible">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Users added Success!</strong> wait for approving.
            </div>';
    }
    else if($_GET['msg'] == 'editsuccess')
    {
      echo '<div class="alert alert-success alert-dismissible">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Users edit Success!</strong> wait for approving.
            </div>';
    }
    else if($_GET['msg'] == 'deletesuccess')
    {
      echo '<div class="alert alert-success alert-dismissible">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Users delete Success!</strong>
            </div>';
    }
  }

  $sql = "select * from users";

  $result = $conn->query($sql);
?>

<div class="container col-lg-6 pt-3 pb-3">
  <h2>Users List</h2>       
  <div class="mt-2 mb-2">
    <a href="./adminadd.php">
      <button type="button" class="btn btn-success">Add new admin</button>   
    </a>
  </div>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>Username</th>
        <th>Firstname</th>
        <th>Status</th>
        <th>Details</th>
        <th>Manage</th>
      </tr>
    </thead>
    <tbody>
      <?php
        while ($row = $result->fetch_assoc())
        {
          $user_id = $row['user_id'];
          $user_username = $row['user_username'];
          $user_firstName = $row['user_firstName'];
          $user_lastName = $row['user_lastName'];
          $uesr_email = $row['user_email'];
          $user_phonenumber = $row['user_phonenumber'];
          $user_status = $row['user_status'];

          if ($user_status == 0)
          {
            $user_status_mess = "Admin";
          }
          else
          {
            $user_status_mess = "Member";
          }
        
          // user table *******************************************
          echo "
              <tr>
                <td>$user_id</td>
                <td>$user_username</td>
                <td>$user_firstName</td>
                <td>$user_status_mess</td>
              ";
          

          // user information *************************************
          echo "
              <td>
                <button type='button' class='btn btn-info' data-bs-toggle='modal' data-bs-target='#info_$user_id'>
                  Info
                </button>
      
                <div class='modal' id='info_$user_id'>
                  <div class='modal-dialog modal-xl'>
                    <div class='modal-content'>
      
                      <div class='modal-header'>
                        <h4 class='modal-title'>$user_username (Information)</h4>
                        <button type='button' class='btn-close' data-bs-dismiss='modal'></button>
                      </div>

                      <div class='modal-body'>
              ";
          
          echo "

          ";

          echo "
                      </div>
      
                      <div class='modal-footer'>
                        <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Close</button>
                      </div>
    
                    </div>
                  </div>
                </div>
              ";

          // leave edit
          echo "
                <td>
                  <a href='./useredit.php?user_id=$user_id' class='btn btn-warning btn-md' role='button'>Edit</a>
              ";

          // leave delete
          echo "
                  <a href='./userdelete_pro.php?user_id=$user_id' class='btn btn-danger btn-md' role='button'>Delete</a>
                </td>
              ";

        }
      ?>



    </tbody>
  </table>
</div>

<?php include("./footer.php")?>
