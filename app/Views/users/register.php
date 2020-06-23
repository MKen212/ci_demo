<!-- User Registration Page -->
<div class="container">
  <div class="row">
    <div class="col-12 col-sm8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white form-wrapper">
      <div class="container">
        <h3>Register</h3>
        <hr />
        <form action="/register" method="POST" autocomplete="off">
          <div class="row">
            <!-- First Name -->
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input class="form-control" type="text" name="firstName" id="firstName" value="<?= set_value("firstName") ?>" />              
              </div>
            </div>
            <!-- Last Name -->
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input class="form-control" type="text" name="lastName" id="lastName" value="<?= set_value("lastName") ?>" />
              </div>
            </div>
            <!-- Email Address -->
            <div class="col-12">
              <div class="form-group">
                <label for="email">Email Address</label>
                <input class="form-control" type="text" name="email" id="email" value="<?= set_value("email") ?>" />
              </div>
            </div>
            <!-- Password -->
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password" value="" />
              </div>
            </div>
            <!-- Password Confirmation -->
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label for="password_confirm">Confirm Password</label>
                <input class="form-control" type="password" name="password_confirm" id="password_confirm" value="" />
              </div>
            </div>
            <!-- Show any Validation Errors -->
            <?php if (isset($validation)): ?>
              <div class="col-12">
                <div class="alert alert-danger" role="alert">
                  <?= $validation->listErrors(); ?>
                </div>
              </div>
            <?php endif; ?>
          </div>
          <div class="row">
            <!-- Submit Button -->
            <div class="col-12 col-sm-4">
              <button class="btn btn-primary" type="submit">Register</button>
            </div>
            <!-- Link to Login Page -->
            <div class="col-12 col-sm-8 text-right">
              <a href="/login">Already have an account?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>