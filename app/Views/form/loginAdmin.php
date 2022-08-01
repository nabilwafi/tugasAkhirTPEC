<?= $this->extend('form/layout/body'); ?>

<?= $this->section('content') ?>
<div class="login-page">
  <div class="container d-flex flex-column justify-content-center align-items-center login-content">
    <div class="card login-card">
      <div class="card-body login-information">
        <h5 class="card-title text-uppercase text-center login-title">Login Page</h5>
        <?= $this->include('messages/messages') ?>
        <form class="form-area my-4" action="/login/admin/to" method="POST">
          <?php csrf_field() ?>

          <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control form-input <?= $validation->hasError('email') ? "is-invalid" : null ?>" id="floatingInput" placeholder="name@example.com" value="<?= old('email') ? old('email') : "" ?>">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control form-input <?= $validation->hasError('password') ? "is-invalid" : null ?>" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>

          <div class="text-center">
            <button class="btn btn-info form-btn" type="submit">Login</button>
          </div>
        </form>
      </div>
    </div>
    
    <a href="/" class="btn btn-light btn-back">Back To Home</a>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('head') ?>
<title>Sayang Mamah Service - Login</title>
<?= $this->endSection() ?>