<?php 
  include("./connect.php");
  include("./header.php");
?>

<div class="container py-5 h-100">
  <div class="row justify-content-center align-items-center h-100">
    <div class="col-12 col-lg-9 col-xl-7">
      <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
        <div class="card-body p-4 p-md-5">
          <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Admin add Form</h3>
          <form action="./adminadd_pro.php" method="post">
            <!-- firstname lastname -->
            <div class="row">
              <div class="col-md-6 mb-2">
                <div class="form-outline">
                  <input type="text" name="fname" id="firstName" class="form-control form-control-md" required/>
                  <label class="form-label" for="firstName">First Name</label>
                </div>
              </div>
              <div class="col-md-6 mb-2">
                <div class="form-outline">
                  <input type="text" name="lname" id="lastName" class="form-control form-control-md" required/>
                  <label class="form-label" for="lastName">Last Name</label>
                </div>
              </div>
            </div>

            <!-- email phonenumber -->
            <div class="row">
              <div class="col-md-6 mb-2 pb-2">
                <div class="form-outline">
                  <input type="email" name="email" id="emailAddress" class="form-control form-control-md" required/>
                  <label class="form-label" for="emailAddress">Email</label>
                </div>
              </div>
              <div class="col-md-6 mb-2 pb-2">
                <div class="form-outline">
                  <input type="tel" name="phone" id="phoneNumber" class="form-control form-control-md" pattern="[0-9]{10}" title="Tenth digits of phone number" required/>
                  <label class="form-label" for="phoneNumber">Phone Number</label>
                </div>
              </div>
            </div>

            <!-- username -->
            <div class="row">
              <div class="col-md-6 mb-2 pb-2">
                <div class="form-outline">
                  <input type="text" name="username" id="username" class="form-control form-control-md"  required/>
                  <label for="username" class="form-label">Username</label>
                </div>
              </div>
              <div class="col-md-6 mb-2 pb-2">
                <div class="form-outline">
                  <input type="password" name="password" id="password" class="form-control form-control-md" required/>
                  <label class="form-label" for="phoneNumber">Password</label>
                  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                  <input class="form-check-input" type="checkbox" id="check1" onclick="showPassword()">
                  <label class="form-check-label" for="check1">Show Password</label>
                </div>
              </div>
            </div>

            <!-- submit button -->
            <div class="d-grid gap-2 mx-auto mt-4 mb-3">
              <input class="btn btn-primary btn-md" type="submit" value="Submit" />
            </div>
            <div class="d-grid gap-2 mx-auto mb-4">
              <input class="btn btn-secondary btn-sm" type="reset" value="Clear" />
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function showPassword() 
  {
    var x = document.getElementById("password");
    if (x.type === "password") 
    {
      x.type = "text";
    } 
    else 
    {
      x.type = "password";
    }
  }
</script>

<?php include("./footer.php")?>