<?php include("./header.php") ?>

<div class="container py-5 h-100">
  <div class="row justify-content-center align-items-center h-100">
  <div class="col-12 col-lg-9 col-xl-6">
      <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
        <div class="card-body p-4 p-md-5">
          <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Login</h3>
          <form action="/action_page.php">
            <div class="mb-2">
              <div class="form-outline">
                <input type="text" id="email" class="form-control form-control-md">
                <label class="form-label" for="email">Email</label>
              </div>
            </div>
            <div class="mb-2">
              <div class="form-outline">
                <input type="password" id="pwd" class="form-control form-control-md">
                <label class="form-label" for="pwd">Password</label>
              </div>
            </div>
            <div class="form-check mb-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
              </label>
            </div>
            <div class="d-grid gap-2 mx-auto mt-4 mb-4">
              <input class="btn btn-primary btn-md" type="submit" value="Login" />
            </div>
            <p class="text-center text-muted mb-0">Don't have an account? <a href="#!"
                class="fw-bold text-body"><u>Signup here</u></a></p>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include("./footer.php") ?>