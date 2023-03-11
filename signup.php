<?php include("./header.php")?>

<div class="container py-5 h-100">
  <div class="row justify-content-center align-items-center h-100">
    <div class="col-12 col-lg-9 col-xl-7">
      <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
        <div class="card-body p-4 p-md-5">
          <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
          <form>
            
            <div class="row">
              <div class="col-md-6 mb-2">

                <div class="form-outline">
                  <input type="text" id="firstName" class="form-control form-control-md" />
                  <label class="form-label" for="firstName">First Name</label>
                </div>

              </div>
              <div class="col-md-6 mb-2">

                <div class="form-outline">
                  <input type="text" id="lastName" class="form-control form-control-md" />
                  <label class="form-label" for="lastName">Last Name</label>
                </div>

              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-4 d-flex align-items-center">

                <div class="form-outline datepicker w-100">
                  <input type="text" class="form-control form-control-md" id="birthdayDate" />
                  <label for="birthdayDate" class="form-label">Birthday</label>
                </div>

              </div>
              <div class="col-md-6 mb-4">

                <h6 class="mb-2 pb-1">Gender: </h6>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                    value="option1" checked />
                  <label class="form-check-label" for="femaleGender">Female</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                    value="option2" />
                  <label class="form-check-label" for="maleGender">Male</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                    value="option3" />
                  <label class="form-check-label" for="otherGender">Other</label>
                </div>

              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-2 pb-2">

                <div class="form-outline">
                  <input type="email" id="emailAddress" class="form-control form-control-md" />
                  <label class="form-label" for="emailAddress">Email</label>
                </div>

              </div>
              <div class="col-md-6 mb-2 pb-2">

                <div class="form-outline">
                  <input type="tel" id="phoneNumber" class="form-control form-control-md" />
                  <label class="form-label" for="phoneNumber">Phone Number</label>
                </div>

              </div>

              <div class="col-md-6 mb-2 pb-2">

                <div class="form-outline">
                  <input type="password" id="password" class="form-control form-control-md" />
                  <label class="form-label" for="phoneNumber">Password</label>
                </div>

              </div>
              <div class="col-md-6 mb-2 pb-2">

                <div class="form-outline">
                  <input type="password" id="confirmpassword" class="form-control form-control-md" />
                  <label class="form-label" for="phoneNumber">Confirm Password</label>
                </div>

              </div>
            </div>

            
        <div class="form-check d-flex justify-content-center mb-3">
            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
            <label class="form-check-label" for="form2Example3g">
              I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
            </label>
          </div>
          
            <div class="d-grid gap-2 mx-auto mt-4 mb-4">
              <input class="btn btn-primary btn-md" type="submit" value="Submit" />
            </div>

            <p class="text-center text-muted mb-0">Have already an account? <a href="#!"
                class="fw-bold text-body"><u>Login here</u></a></p>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include("./footer.php")?>