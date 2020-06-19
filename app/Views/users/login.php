<!-- User Login Page -->
<div class="container">
  <div class="row">
    <div class="col-12 col-sm8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white form-wrapper">
      <div class="container">
        <h3>Login</h3>
        <hr />
        <form action="/login" method="POST">
          <!-- Email Address -->
          <div class="form-group">
            <label for="email">Email Address</label>
            <input class="form-control" type="text" name="email" id="email" value="<?= set_value("email") ?>" autocomplete="off" />
          </div>
          <!-- Password -->
          <div class="form-group">
          <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password" value="" />
          </div>
          <div class="row">
            <!-- Submit Button -->
            <div class="col-12 col-sm-4">
              <button class="btn btn-primary" type="submit">Login</button>
            </div>
            <!-- Link to Registration Page -->
            <div class="col-12 col-sm-8 text-right">
              <a href="/register">Don't have an account yet?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>