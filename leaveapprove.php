<?php 
  include("./connect.php");
  include("./header.php");

  if(isset($_GET['msg']))
  {
    if($_GET['msg'] == 'denined')
    {
      echo '<div class="alert alert-success alert-dismissible">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Denined Success!</strong>
            </div>';
    }
    else if($_GET['msg'] == 'approved')
    {
      echo '<div class="alert alert-success alert-dismissible">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Approved Success!</strong>
            </div>';
    }
  }

  $user_id = $_SESSION['user_id'];

  $sql = "select * from studentleave where leave_status = 2;";

  $result = $conn->query($sql);
?>

<div class="container col-lg-6 pt-3 pb-3">
  <h2>All Student's Leave List (waiting)</h2>       
  <table class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>Title</th>
        <th>Status</th>
        <th>Details</th>
        <th>Manage</th>
      </tr>
    </thead>
    <tbody>
      <?php
        while ($row = $result->fetch_assoc())
        {
          $leave_id = $row['leave_id'];
          $leave_title = $row['leave_title'];
          $leave_reason = $row['leave_reason'];
          $leave_type = $row['leave_type'];
          $leave_startDate = $row['leave_startDate'];
          $leave_endDate = $row['leave_endDate'];
          $leave_picture_path = $row['leave_picture'];
          $member_id = $row['member_id'];
          $leave_status = $row['leave_status'];

          $sql = "select * from users where user_id = $member_id;";

          $member_result = $conn->query($sql);
          $row_member = $member_result->fetch_assoc();
          $member_id = $row_member['user_id'];
          $member_username = $row_member['user_username'];
          $member_firstName = $row_member['user_firstName'];
          $member_lastName = $row_member['user_lastName'];
          $member_email = $row_member['user_email'];
          $member_phonenumber = $row_member['user_phonenumber'];

          if ($leave_type == 0)
          {
            $leave_type_mes = "Business";
          }
          else if ($leave_type == 1)
          {
            $leave_type_mes = "Sick";
          }

          if ($leave_status == 0)
          {
            $leave_status_mes = "Denied";
            $status_color = "text-danger";
          }
          else if ($leave_status == 1)
          {
            $leave_status_mes = "Approved";
            $status_color = "text-success";
          }
          elseif ($leave_status == 2)
          {
            $leave_status_mes = "Waiting";
            $status_color = "text-dark";
          }

          if ($leave_type == 0)
          {
            $leave_type_business_check = "checked";
            $leave_type_sick_check = "";
          }
          else if ($leave_type == 1)
          {
            $leave_type_business_check = "";
            $leave_type_sick_check = "checked";
          }
        
          // leave table *******************************************
          echo "
              <tr>
                <td>$leave_id</td>
                <td>$leave_title</td>
                <td class=$status_color>$leave_status_mes</td>
              ";
          

          // leave information *************************************
          echo "
              <td>
                <button type='button' class='btn btn-info' data-bs-toggle='modal' data-bs-target='#info_$leave_id'>
                  Info
                </button>
      
                <div class='modal' id='info_$leave_id'>
                  <div class='modal-dialog modal-xl'>
                    <div class='modal-content'>
      
                      <div class='modal-header'>
                        <h4 class='modal-title'>$leave_title (Information)</h4>
                        <button type='button' class='btn-close' data-bs-dismiss='modal'></button>
                      </div>

                      <div class='modal-body'>
              ";
          
          echo "
          <form action='./leaveform_pro.php' method='post' enctype='multipart/form-data'>
            <h2 class='mb-2 pb-1'>Student Information: </h2>
            <!-- firstname lastname -->
            <div class='row'>
              <div class='col-md-6 mb-2'>
                <div class='form-outline'>
                  <input type='text' class='form-control form-control-md' value='$member_firstName' disabled/>
                  <label class='form-label'>First Name</label>
                </div>
              </div>
              <div class='col-md-6 mb-2'>
                <div class='form-outline'>
                  <input type='text' class='form-control form-control-md' value='$member_lastName' disabled/>
                  <label class='form-label'>Last Name</label>
                </div>
              </div>
            </div>

            <!-- email phonenumber -->
            <div class='row'>
              <div class='col-md-6 mb-2 pb-2'>
                <div class='form-outline'>
                  <input type='email' name='email' class='form-control form-control-md' value='$member_email' disabled/>
                  <label class='form-label'>Email</label>
                </div>
              </div>
              <div class='col-md-6 mb-2 pb-2'>
                <div class='form-outline'>
                <input type='tel' class='form-control form-control-md' value='$member_phonenumber' disabled />
                <label class='form-label'>Phone Number</label>
                </div>
              </div>
            </div>

            <!-- username -->
            <div class='row'>
              <div class='col-md-6 mb-2 pb-2'>
                <div class='form-outline'>
                  <input type='text' class='form-control form-control-md' value='$member_username' disabled/>
                  <label class='form-label'>Username</label>
                </div>
              </div>
            </div>

            <!-- leave information ************************************************************************************************ -->
            <!-- leave type -->
            <div class='col-md-6 mb-4'>
              <h2 class='mb-2 pb-1'>Leave Information: </h2>
              <h6 class='mb-2 pb-1'>Leave Type: </h6>
              <div class='form-check form-check-inline'>
                <input class='form-check-input' type='radio' name='leave_type' $leave_type_business_check disabled/>
                <label class='form-check-label'>Business Leave</label>
              </div>
              <div class='form-check form-check-inline'>
                <input class='form-check-input' type='radio' name='leave_type' $leave_type_sick_check disabled/>
                <label class='form-check-label'>Sick Leave</label>
              </div>
            </div>

            <!-- title and reason -->
            <div class='form-outline mb-4'>
              <input type='text' class='form-control' value='$leave_title' disabled/>
              <label class='form-label'>Title</label>
            </div>
            
            <div class='form-outline mb-4'>
              <textarea class='form-control' rows='4' disabled>$leave_reason</textarea>
              <label class='form-label'>Reason</label>
            </div>

            <div class='row'>
              <div class='col-md-6 mb-2 pb-2'>
                <div class='form-outline'>
                  <input type='date' class='form-control' value='$leave_startDate' disabled/>
                  <label class='form-label'>From this date</label>
                </div>
              </div>
              <div class='col-md-6 mb-2 pb-2'>
                <div class='form-outline'>
                  <input type='date' class='form-control' value='$leave_endDate' disabled/>
                  <label class='form-label'>To this date</label>
                </div>
              </div>
            </div>

            <div class='mb-3 mt-4'>
              <label for='fileUpload' class='form-label'>Attach Picture</label>
              <br>
              <img src='$leave_picture_path' class='rounded col-12 '>
            </div>
          </form>
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
                <a href='leaveapprove_pro.php?leave_id=$leave_id&leave_status=1&admin_id=$user_id' class='btn btn-success btn-md' role='button'>Approved</a>
          ";

          // leave delete
          echo "
              <a href='./leaveapprove_pro.php?leave_id=$leave_id&leave_status=0&admin_id=$user_id' class='btn btn-danger btn-md' role='button'>Denied</a>
            </td>
          ";
        }
      ?>



    </tbody>
  </table>
</div>

<?php include("./footer.php")?>
