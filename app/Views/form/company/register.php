<?= $this->extend('form/layout/body'); ?>

<?= $this->section('content') ?>
<div class="login-page">
  <div class="container d-flex flex-column justify-content-center align-items-center login-content">
    <div class="card login-card">
      <div class="card-body login-information">
        <h5 class="card-title text-uppercase text-center login-title">Register Company Page</h5>
        <?= $this->include('messages/messages') ?>
        <form class="form-area my-4" action="/register/company/create" method="POST">
          <?php csrf_field()  ?>

          <div class="form-floating mb-3">
            <input name="name" type="text" class="form-control form-input <?= $validation->hasError('name') ? "is-invalid" : null ?>" id="floatingInput" placeholder="name@example.com" value="<?= old('name') ?>">
            <label for="floatingInput">Name Company</label>
            <?php if ($validation->hasError('name')) : ?>
              <p class="invalid-feedback"><?= $validation->showError('name') ?></p>
            <?php endif ?>
          </div>

          <div class="form-floating mb-3">
            <input name="email" type="email" class="form-control form-input <?= $validation->hasError('email') ? "is-invalid" : null ?>" id="floatingEmail" placeholder="name@example.com" value="<?= old('email') ? old('email')  : "" ?>">
            <label for="floatingEmail">Email address</label>
            <?php if ($validation->hasError('email')) : ?>
              <p class="invalid-feedback"><?= $validation->showError('email') ?></p>
            <?php endif ?>
          </div>

          <div class="form-floating mb-3">
            <input name="harga" type="text" class="form-control form-input <?= $validation->hasError('harga') ? "is-invalid" : null ?>" id="floatingHarga" placeholder="name@example.com" value="<?= old('harga') ? old('harga')  : "" ?>">
            <label for="floatingHarga">Harga</label>
            <?php if ($validation->hasError('harga')) : ?>
              <p class="invalid-feedback"><?= $validation->showError('harga') ?></p>
            <?php endif ?>
          </div>

          <div class="form-floating mb-3">
            <textarea name="alamat" class="form-control form-input <?= $validation->hasError('alamat') ? "is-invalid" : null ?>" placeholder="Your Address" id="floatingTextarea2" style="height: 100px"><?= old('alamat') ? old('alamat')  : "" ?></textarea>
            <label for="floatingTextarea2">Address</label>
            <?php if ($validation->hasError('alamat')) : ?>
              <p class="invalid-feedback"><?= $validation->showError('alamat') ?></p>
            <?php endif ?>
          </div>

          <div class="row mb-3">
            <div class="form-floating col">
              <input name="password" type="password" class="form-control form-input <?= $validation->hasError('password') ? "is-invalid" : null ?>" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
              <?php if ($validation->hasError('password')) : ?>
                <p class="invalid-feedback"><?= $validation->showError('password') ?></p>
              <?php endif ?>
            </div>

            <div class="form-floating col">
              <input name="confirm_password" type="password" class="form-control form-input <?= $validation->hasError('confirm_password') ? "is-invalid" : null ?>" id="floatingConfirmPassword" placeholder="Password">
              <label for="floatingConfirmPassword">Confirm Password</label>
              <?php if ($validation->hasError('confirm_password')) : ?>
                <p class="invalid-feedback"><?= $validation->showError('confirm_password') ?></p>
              <?php endif ?>
            </div>
          </div>

          <div class="form-floating mb-3">
            <select name="jenis_devices" class="form-select form-input" id="floatingSelect" aria-label="Floating label select example">
              <option selected hidden>Open this select menu</option>
              <option <?= old('jenis_devices') == 'handphone' ? "selected"  : null ?> value="handphone">Handphone</option>
              <option <?= old('jenis_devices') == 'laptop' ? "selected"  : null ?> value="laptop">Laptop</option>
              <option <?= old('jenis_devices') == 'pc' ? "selected"  : null ?> value="pc">PC</option>
              <option <?= old('jenis_devices') == 'printer' ? "selected"  : null ?>value="printer">Printer</option>
            </select>
            <label for="floatingSelect">Works with selects</label>
          </div>

          <div class="text-center">
            <button class="btn btn-info form-btn" type="submit">Register</button>
          </div>
        </form>

        <p class="text-center">Already have an account? <a class="btn-link" href="/login/company">login now</a></p>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('head') ?>
<title>Sayang Mamah Service - Login</title>
<?= $this->endSection() ?>