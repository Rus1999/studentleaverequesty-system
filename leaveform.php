<?php 
  include("./connect.php");
  include("./header.php");
?>

<div class="container py-5 h-100">
  <div class="row justify-content-center align-items-center h-100">
    <div class="col-12 col-lg-9 col-xl-7">
      <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
        <div class="card-body p-4 p-md-5">
          <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Student's Leave Form (student only)</h3>
          <form action="./leaveform_pro.php" method="post" enctype="multipart/form-data">
              <!-- leave type -->
              <div class="col-md-6 mb-4">
              <h6 class="mb-2 pb-1">Leave Type: </h6>
              <div class="form-check form-check-inline">
                <input class="form-check-input" name="leaveType" type="radio" id="Business"
                  value="0" checked required/>
                <label class="form-check-label" for="Business">Business Leave</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input"  name="leaveType" type="radio" id="Sick"
                  value="1" required/>
                <label class="form-check-label" for="Sick">Sick Leave</label>
              </div>
            </div>

            <!-- title and reason -->
            <div class="form-outline mb-4">
              <input type="text" name="title" id="title" class="form-control" required/>
              <label class="form-label" for="title">Title</label>
            </div>
            
            <div class="form-outline mb-4">
              <textarea class="form-control" name="reason" id="reason" rows="4" required></textarea>
              <label class="form-label" for="reason">Reason</label>
            </div>

            <!-- date -->
            <?php 
              $today = date('Y-m-d');
              $endDate = date('Y-m-d',strtotime("+2 months"));
              
            ?>
            <div class="row">
              <div class="col-md-6 mb-2 pb-2">
                <div class="form-outline">
                  <input type="date" name="startDate" id="startDate" class="form-control" 
                        min="<?php echo $today ?>" max="<?php echo $endDate ?>"
                        required />
                  <label class="form-label" for="startDate">From this date</label>
                </div>
              </div>
              <div class="col-md-6 mb-2 pb-2">
                <div class="form-outline">
                  <input type="date" name="endDate" id="endDate" class="form-control" 
                        min="<?php echo $today ?>" max="<?php echo $endDate ?>"
                        required/>
                  <label class="form-label" for="endDate">To this date</label>
                </div>
              </div>
            </div>

            <div class="mb-3 mt-4">
              <label for="fileUpload" class="form-label">Attach Picture</label>
              <input class="form-control form-control-md" name="leave_picture" id="fileUpload" type="file">
            </div>
          
            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
              <input class="form-check-input me-2" type="checkbox" id="truthfulness" required/>
              <label class="form-check-label" for="truthfulness">
                I'm affirm that data above is the truth.
              </label>
            </div>
          
            <!-- Submit button -->
            <div class="d-grid gap-2 mx-auto mt-4 mb-3">
              <input class="btn btn-primary btn-md" type="submit" value="Submit" onclick="compareDate()"/>
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
  // listening when startDate is picked
  document.getElementById("startDate").addEventListener("change", function() {
    var input = this.value;
    var dateEntered = new Date(input);
    console.log(input); //e.g. 2015-11-13
    console.log(dateEntered); //e.g. Fri Nov 13 2015 00:00:00 GMT+0000 (GMT Standard Time)

    // set minDate of Endtime
    var endDate = document.getElementById("endDate");
    endDate.setAttribute("min", input);
});
</script>

<?php include("./footer.php")?>