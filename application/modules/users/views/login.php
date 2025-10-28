<div class="wrapper wrapper-login wrapper-login-full p-0">
  <div class="login-aside w-50 d-flex flex-column align-items-center justify-content-center text-center" style="background: url('https://fik.umpr.ac.id/wp-content/uploads/2021/06/IMG_9835_27-scaled.jpg') rgba(93, 166, 255, 0.68);background-repeat: no-repeat;background-size: cover;background-blend-mode: darken">
    <h1 class="title fw-bold mb-3 text-white">Laboratorium</h1>
    <p class="subtitle text-white op-7"></p>
  </div>
  <div class="login-aside w-50 d-flex align-items-center justify-content-center bg-white">
    <div class="container container-login container-transparent animated fadeIn">
      <h3 class="text-center">Sign In</h3>
      <?= form_open($this->uri->uri_string(), array('id' => 'frm_login', 'name' => 'frm_login')) ?>
      <div class="login-form">
        <div class="form-group">
          <label for="username"><b>Username</b></label>
          <input id="username" name="username" type="text" placeholder="Username" class="form-control" value="<?= set_value('username'); ?>" required autofocus>
        </div>
        <div class="form-group">
          <label for="password"><b>Password</b></label>
          <!-- <a href="#" class="link float-end">Forget Password ?</a> -->
          <div class="position-relative">
            <input id="password" placeholder="Password" name="password" type="password" class="form-control" required>
            <div class="show-password">
              <i class="icon-eye"></i>
            </div>
          </div>
        </div>
        <div class="form-group form-action-d-flex mb-3">
          <!-- <div class="form-check">
            <input type="checkbox" class="form-check-input" id="rememberme">
            <label class="custom-control-label m-0" for="rememberme">Remember Me</label>
          </div> -->
          <button type="submit" name="login" class="btn btn-primary w-100 mt-3 mt-sm-0 fw-bold">Sign In</button>
        </div>
        <!-- <div class="login-account">
          <span class="msg">Don't have an account yet ?</span>
          <a href="#" id="show-signup" class="link">Sign Up</a>
        </div> -->
      </div>
      <?= form_close() ?>
    </div>

    <div class="container container-signup container-transparent animated fadeIn">
      <h3 class="text-center">Sign Up</h3>
      <div class="login-form">
        <div class="form-group">
          <label for="fullname"><b>Fullname</b></label>
          <input id="fullname" name="fullname" type="text" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="email"><b>Email</b></label>
          <input id="email" name="email" type="email" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="passwordsignin"><b>Password</b></label>
          <div class="position-relative">
            <input id="passwordsignin" name="passwordsignin" type="password" class="form-control" required>
            <div class="show-password">
              <i class="icon-eye"></i>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="confirmpassword"><b>Confirm Password</b></label>
          <div class="position-relative">
            <input id="confirmpassword" name="confirmpassword" type="password" class="form-control" required>
            <div class="show-password">
              <i class="icon-eye"></i>
            </div>
          </div>
        </div>
        <div class="row form-sub m-0">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="agree" id="agree">
            <label class="form-check-label" for="agree">I Agree the terms and conditions.</label>
          </div>
        </div>
        <div class="row form-action">
          <div class="col-md-6">
            <a href="#" id="show-signin" class="btn btn-danger btn-link w-100 fw-bold">Cancel</a>
          </div>
          <div class="col-md-6">
            <a href="#" class="btn btn-secondary w-100 fw-bold">Sign Up</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>