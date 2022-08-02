<?= $this->extend('form/layout/body'); ?>

<?= $this->section('content') ?>
<div class="login-page">
  <div class="container d-flex flex-column justify-content-center align-items-center login-content">
    <div class="card login-card">
      <div class="card-body login-information">
        <h5 class="card-title text-uppercase text-center login-title">Register User Page</h5>
        <form class="form-area my-4" action="/register/create" method="POST">
          <?php csrf_field()  ?>

          <div class="form-floating mb-3">
            <input name="name" type="text" class="form-control form-input <?= $validation->hasError('name') ? "is-invalid" : null ?>" id="floatingInput" placeholder="name@example.com" value="<?= old('name') ?>">
            <label for="floatingInput">Name</label>
            <?php if($validation->hasError('name')) : ?>
              <p class="invalid-feedback"><?= $validation->showError('name') ?></p>
            <?php endif ?>
          </div>

          <div class="form-floating mb-3">
            <input name="email" type="email" class="form-control form-input <?= $validation->hasError('email') ? "is-invalid" : null ?>" id="floatingEmail" placeholder="name@example.com" value="<?= old('email') ? old('email')  : "" ?>">
            <label for="floatingEmail">Email address</label>
            <?php if($validation->hasError('email')) : ?>
              <p class="invalid-feedback"><?= $validation->showError('email') ?></p>
            <?php endif ?>
          </div>

          <div class="form-floating mb-3">
            <input name="telp" type="text" class="form-control form-input <?= $validation->hasError('telp') ? "is-invalid" : null ?>" id="floatingTelp" placeholder="name@example.com" value="<?= old('telp') ? old('telp')  : "" ?>">
            <label for="floatingTelp">Phone</label>
            <?php if($validation->hasError('telp')) : ?>
              <p class="invalid-feedback"><?= $validation->showError('telp') ?></p>
            <?php endif ?>
          </div>

          <div class="form-floating mb-3">
            <textarea name="alamat" class="form-control form-input <?= $validation->hasError('alamat') ? "is-invalid" : null ?>" placeholder="Your Address" id="floatingTextarea2" style="height: 100px"><?= old('alamat') ? old('alamat')  : "" ?></textarea>
            <label for="floatingTextarea2">Address</label>
            <?php if($validation->hasError('alamat')) : ?>
              <p class="invalid-feedback"><?= $validation->showError('alamat') ?></p>
            <?php endif ?>
          </div>

          <div class="row mb-3">
          <div class="form-floating col">
            <input name="password" type="password" class="form-control form-input <?= $validation->hasError('password') ? "is-invalid" : null ?>" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
            <?php if($validation->hasError('password')) : ?>
              <p class="invalid-feedback"><?= $validation->showError('password') ?></p>
            <?php endif ?>
          </div>

          <div class="form-floating col">
            <input name="confirm_password" type="password" class="form-control form-input <?= $validation->hasError('confirm_password') ? "is-invalid" : null ?>" id="floatingConfirmPassword" placeholder="Password">
            <label for="floatingConfirmPassword">Confirm Password</label>
            <?php if($validation->hasError('confirm_password')) : ?>
              <p class="invalid-feedback"><?= $validation->showError('confirm_password') ?></p>
            <?php endif ?>
          </div>
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