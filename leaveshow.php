<?php 
  include("./connect.php");
  include("./header.php");

  if(isset($_GET['msg']))
  {
    if($_GET['msg'] == 'success')
    {
      echo '<div class="alert alert-success alert-dismissible">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Leave added Success!</strong> wait for approving.
            </div>';
    }
  }

  $user_id = $_SESSION['user_id'];

  $sql = "select * from studentleave where member_id = $user_id;";

  $result = $conn->query($sql);
?>

<div class="container col-lg-6 pt-3 pb-3">
  <h2>Student's Leave List (Owner's only)</h2>       
  <div class="mt-2 mb-2">
    <a href="./leaveform.php">
      <button type="button" class="btn btn-success">Add new Leave</button>   
    </a>
  </div>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>Title</th>
        <th>Status</th>
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
          $admin_id = $row['admin_id'];
          $leave_status = $row['leave_status'];

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
        
          echo "
              <tr>
                <td>$leave_id</td>
                <td>$leave_title</td>
                <td class=$status_color>$leave_status_mes</td>
              ";
          
          echo "
              <td>
                <button type='button' class='btn btn-info' data-bs-toggle='modal' data-bs-target='#myModal_$leave_id'>
                  Info
                </button>
      
                <div class='modal' id='myModal_$leave_id'>
                  <div class='modal-dialog modal-xl'>
                    <div class='modal-content'>
      
                      <div class='modal-header'>
                        <h4 class='modal-title'>$leave_title</h4>
                        <button type='button' class='btn-close' data-bs-dismiss='modal'></button>
                      </div>

                      <div class='modal-body'>
              ";
          
          echo "
          <form action='./leaveform_pro.php' method='post' enctype='multipart/form-data'>
            <!-- leave type -->
            <div class='col-md-6 mb-4'>
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
              <input type='text' class='form-control' disabled/>
              <label class='form-label'>Title</label>
            </div>
            
            <div class='form-outline mb-4'>
              <textarea class='form-control' rows='4' disabled></textarea>
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
              <input class='form-control form-control-md' name='leave_picture' id='fileUpload' type='file' value='$leave_picture>
            </div>
          
            <!-- Checkbox -->
            <div class='form-check d-flex justify-content-center mb-4'>
              <input class='form-check-input me-2' type='checkbox' id='truthfulness' required/>
              <label class='form-check-label' for='truthfulness'>
                I'm affirm that data above is the truth.
              </label>
            </div>
          
            <!-- Submit button -->
            <div class='d-grid gap-2 mx-auto mt-4 mb-3'>
              <input class='btn btn-primary btn-md' type='submit' value='Submit' onclick='compareDate()'/>
            </div>
            <div class='d-grid gap-2 mx-auto mb-4'>
              <input class='btn btn-secondary btn-sm' type='reset' value='Clear' />
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
              </td>
              ";
              
                // <td>
                //   <button type=\"button\" class=\"btn btn-info\">Info</button>
                //   <button type=\"button\" class=\"btn btn-warning\">Edit</button>
                //   <button type=\"button\" class=\"btn btn-danger\">Delete</button>
                // </td>
        }
      ?>



    </tbody>
  </table>
</div>

<?php include("./footer.php")?>