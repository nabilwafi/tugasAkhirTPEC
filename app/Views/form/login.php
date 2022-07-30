<?= $this->extend('form/layout/body'); ?>

<?= $this->section('content') ?>
<div class="login-page">
  <div class="container d-flex flex-column justify-content-center align-items-center login-content">
    <div class="card login-card">
      <div class="card-body login-information">
        <h5 class="card-title text-uppercase text-center login-title">Login Page</h5>
        <form class="form-area my-4" action="" method="POST">

          <div class="form-floating mb-3">
            <input type="email" class="form-control form-input" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control form-input" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>

          <div class="text-center my-4">
            <p>Login as : </p>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1">Company</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">User</label>
            </div>
          </div>

          <div class="text-center">
            <button class="btn btn-info form-btn" type="submit">Login</button>
          </div>
        </form>

        <p class="text-center">don't have an account? <a class="btn-link" href="/register">register now</a></p>
      </div>
    </div>
    
    <a href="/" class="btn btn-light btn-back">Back To Home</a>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('head') ?>
<title>Sayang Mamah Service - Login</title>
<?= $this->endSection() ?>