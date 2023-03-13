<?php 
  include("./connect.php");
  include("./header.php");

  $user_id = $_GET['user_id'];

  $sql = "select * from users where user_id=$user_id;";

  $result = $conn->query($sql);

  $row = $result->fetch_assoc();
  $user_username = $row['user_username'];
  $user_firstName = $row['user_firstName'];
  $user_lastName = $row['user_lastName'];
  $user_email = $row['user_email'];
  $user_phonenumber = $row['user_phonenumber'];
  $user_status = $row['user_status'];
  
  $admin_id = $_SESSION['user_id'];
?>

<div class="container py-5 h-100">
  <div class="row justify-content-center align-items-center h-100">
    <div class="col-12 col-lg-9 col-xl-7">
      <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
        <div class="card-body p-4 p-md-5">
          <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">User edit form</h3>
          <form action="./useredit_pro.php" method="post">
            <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
            <input type="hidden" name="user_status" value="<?php echo $user_status ?>">
            <!-- firstname lastname -->
            <div class="row">
              <div class="col-md-6 mb-2">
                <div class="form-outline">
                  <input type="text" name="fname" id="firstName" class="form-control form-control-md" value="<?php echo $user_firstName; ?>" required/>
                  <label class="form-label" for="firstName">First Name</label>
                </div>
              </div>
              <div class="col-md-6 mb-2">
                <div class="form-outline">
                  <input type="text" name="lname" id="lastName" class="form-control form-control-md" value="<?php echo $user_lastName; ?>" required/>
                  <label class="form-label" for="lastName">Last Name</label>
                </div>
              </div>
            </div>

            <!-- email phonenumber -->
            <div class="row">
              <div class="col-md-6 mb-2 pb-2">
                <div class="form-outline">
                  <input type="email" name="email" id="emailAddress" class="form-control form-control-md" value="<?php echo $user_email; ?>" required/>
                  <label class="form-label" for="emailAddress">Email</label>
                </div>
              </div>
              <div class="col-md-6 mb-2 pb-2">
                <div class="form-outline">
                  <input type="tel" name="phone" id="phoneNumber" class="form-control form-control-md" pattern="[0-9]{10}" title="Tenth digits of phone number" value="<?php echo $user_phonenumber; ?>" required/>
                  <label class="form-label" for="phoneNumber">Phone Number</label>
                </div>
              </div>
            </div>

            <!-- username -->
            <div class="row">
              <div class="col-md-6 mb-2 pb-2">
                <div class="form-outline">
                  <input type="text" name="username" id="username" class="form-control form-control-md"  value="<?php echo $user_username; ?>" required/>
                  <label for="username" class="form-label">Username</label>
                </div>
              </div>
            </div>

            <!-- submit button -->
            <div class="d-grid gap-2 mx-auto mt-4 mb-3">
              <input class="btn btn-primary btn-md" type="submit" value="Save change" />
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include("./footer.php")?>