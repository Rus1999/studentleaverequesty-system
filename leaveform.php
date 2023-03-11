<?php include("./header.php")?>

<div class="container py-5 h-100">
  <div class="row justify-content-center align-items-center h-100">
    <div class="col-12 col-lg-9 col-xl-7">
      <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
        <div class="card-body p-4 p-md-5">
          <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Student's Leave Form (student only)</h3>
        <form>
            <!-- Name input -->
            <div class="form-outline mb-4">
              <input type="text" id="form4Example1" class="form-control" />
              <label class="form-label" for="form4Example1">Title</label>
            </div>
          
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form4Example2" class="form-control" />
              <label class="form-label" for="form4Example2">Email address</label>
            </div>
          
            <!-- Message input -->
            <div class="form-outline mb-4">
              <textarea class="form-control" id="form4Example3" rows="4"></textarea>
              <label class="form-label" for="form4Example3">Why?</label>
            </div>

              <div class="form-outline mb-4">
                <input type="email" id="form4Example2" class="form-control" />
                <label class="form-label" for="form4Example2">Option sick or bussiness leave</label>
              </div>

              <div class="form-outline mb-4">
                <input type="email" id="form4Example2" class="form-control" />
                <label class="form-label" for="form4Example2">from this date</label>
              </div>

              <div class="form-outline mb-4">
                <input type="email" id="form4Example2" class="form-control" />
                <label class="form-label" for="form4Example2">to this date</label>
              </div>
          
            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
              <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
              <label class="form-check-label" for="form4Example4">
                I'm affirm that data above is the truth.
              </label>
            </div>
          
            <!-- Submit button -->
            <div class="d-grid gap-2 mx-auto mt-4 mb-3">
              <input class="btn btn-primary btn-md" type="submit" value="Submit" />
            </div>
            <div class="d-grid gap-2 mx-auto mb-4">
              <input class="btn btn-secondary btn-sm" type="submit" value="Clear" />
            </div>
          </form>
    </div>
    </div>
      </div>
    </div>
  </div>
</div>

<?php include("./footer.php")?>