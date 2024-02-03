<!-- User Profile Page -->
<div class="container">
  <div class="row">
    <div class="col-12 col-sm8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white form-wrapper">
      <div class="container">
        <h3>Profile For: <?= $user["FirstName"] . " " . $user["LastName"] ?></h3>
        <hr />
        <!-- Show Success Message after Successful User Profile Update -->
        <?php if (session()->get("success")): ?>
          <div class="alert alert-success" role="alert">
            <?= session()->get("success") ?>
          </div>
        <?php endif; ?>
        <form action="/profile" method="POST" autocomplete="off">
          <div class="row">
            <!-- First Name -->
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input class="form-control" type="text" name="firstName" id="firstName" value="<?= set_value("firstName", $user["FirstName"]) ?>" />              
              </div>
            </div>
            <!-- Last Name -->
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input class="form-control" type="text" name="lastName" id="lastName" value="<?= set_value("lastName", $user["LastName"]) ?>" />
              </div>
            </div>
            <!-- Email Address -->
            <div class="col-12">
              <div class="form-group">
                <label for="email">Email Address</label>
                <input class="form-control" type="text" id="email" readonly value="<?= $user["Email"] ?>" />
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
            <!-- Submit Update Button -->
            <div class="col-12 col-sm-4">
              <button class="btn btn-primary" type="submit">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>