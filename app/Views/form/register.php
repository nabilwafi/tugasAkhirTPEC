<?= $this->extend('form/layout/body'); ?>

<?= $this->section('content') ?>
<div class="login-page">
  <div class="container d-flex flex-column justify-content-center align-items-center login-content">
    <div class="card login-card">
      <div class="card-body login-information">
        <h5 class="card-title text-uppercase text-center login-title">Register Page</h5>
        <form class="form-area my-4" action="" method="POST">
          <div class="form-floating mb-3">
            <input name="name" type="text" class="form-control form-input" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Name</label>
          </div>

          <div class="form-floating mb-3">
            <input name="email" type="email" class="form-control form-input" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>

          <div class="form-floating mb-3">
            <input name="password" type="password" class="form-control form-input" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>

          <div class="form-floating mb-3">
            <input name="confirm_password" type="password" class="form-control form-input" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Confirm Password</label>
          </div>

          <div class="form-floating mb-3">
            <select name="roles" class="form-select form-input" id="floatingSelect" aria-label="Floating label select example">
              <option selected hidden>Open this select menu</option>
              <option value="company">Company</option>
              <option value="user">User</option>
            </select>
            <label for="floatingSelect">Roles Users</label>
          </div>

          <div class="text-center">
            <button class="btn btn-info form-btn" type="submit">Register</button>
          </div>
        </form>

        <p class="text-center">Already have an account? <a class="btn-link" href="/login">login now</a></p>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('head') ?>
<title>Sayang Mamah Service - Login</title>
<?= $this->endSection() ?>