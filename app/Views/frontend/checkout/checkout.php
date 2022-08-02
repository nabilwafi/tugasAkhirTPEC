<?php $this->extend('frontend/layout/body') ?>

<?= $this->section('content') ?>
<div class="contact-page section-layout">
    <div class="container d-flex justify-content-center align-items-center">
      
      <form class="form-area contact-page-form checkout-form my-4" action="/register/company/create" method="POST">
        <h1 class="contact-page-title text-uppercase text-center">Order Form</h1>
        <input type="hidden" name="id_customer" value="<?= $_SESSION['user_id']; ?>" />

        <div class="form-floating mt-5 mb-3">
          <select name="id_company" class="form-select form-input" id="floatingSelect" aria-label="Floating label select example">
            <option selected hidden>Open this select menu</option>
            <?php foreach($jenis_devices as $j_device) : ?>
              <option value="<?= $j_device['id'] ?>"><?= $j_device['nama'] ?> || <?= $j_device['harga'] ?></option>
              <?php endforeach ?>
          </select>
          <label for="floatingSelect">Select company for fix your device</label>
        </div>

        <div class="form-floating mb-3">
          <select name="id_company" class="form-select form-input" id="floatingSelect" aria-label="Floating label select example">
            <option selected hidden>Open this select menu</option>
            <?php foreach($couriers as $courier) : ?>
              <option value="<?= $courier['id'] ?>"><?= $courier['name'] ?> || <?= $courier['harga'] ?></option>
              <?php endforeach ?>
          </select>
          <label for="floatingSelect">Select courier to deliver your device</label>
        </div>

        <?php csrf_field()  ?>

        <div class="form-floating mb-3">
          <input name="name_device" type="text" class="form-control form-input <?= $validation->hasError('name_device') ? "is-invalid" : null ?>" id="floatingInput" placeholder="name@example.com" value="<?= old('name_device') ?>">
          <label for="floatingInput">Name Device</label>
          <?php if($validation->hasError('name_device')) : ?>
            <p class="invalid-feedback"><?= $validation->showError('name_device') ?></p>
          <?php endif ?>
        </div>

        <div class="form-floating mb-3">
          <textarea name="keluhan" class="form-control form-input <?= $validation->hasError('keluhan') ? "is-invalid" : null ?>" placeholder="Your Address" id="floatingTextarea2" style="height: 100px"><?= old('keluhan') ? old('keluhan')  : "" ?></textarea>
          <label for="floatingTextarea2">Keluhan</label>
          <?php if($validation->hasError('keluhan')) : ?>
            <p class="invalid-feedback"><?= $validation->showError('keluhan') ?></p>
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
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('jumbotron') ?>
<h1 class="text-uppercase">Order Page</h1>
<?= $this->endSection() ?>

<?= $this->section('head') ?>
<title>Sayang Mamah Service - Order</title>
<?= $this->endSection() ?>