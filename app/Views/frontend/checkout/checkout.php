<?php $this->extend('frontend/layout/body') ?>

<?= $this->section('content') ?>
<div class="contact-page section-layout">
    <div class="container d-flex justify-content-center align-items-center">
      
      <form class="form-area contact-page-form checkout-form my-4" action="/take/services/create" method="POST">
        <?php csrf_field()  ?>

        <h1 class="contact-page-title text-uppercase text-center">Order Form</h1>
        <input type="hidden" name="id_customer" value="<?= $_SESSION['user_id']; ?>" />

        <div class="form-floating mt-5 mb-3">
          <select name="id_company" class="form-select form-input" id="floatingSelect" aria-label="Floating label select example">
            <?php foreach($jenis_devices as $j_device) : ?>
              <option value="<?= $j_device['id'] ?>"><?= $j_device['nama'] ?> || Rp.<?= $j_device['harga'] ?></option>
              <?php endforeach ?>
          </select>
          <label for="floatingSelect">Select company for fix your device</label>
        </div>

        <div class="form-floating mb-3">
          <select name="id_courier" class="form-select form-input" id="floatingSelect" aria-label="Floating label select example">
            <?php foreach($couriers as $courier) : ?>
              <option value="<?= $courier['id'] ?>"><?= $courier['name'] ?> || Rp.<?= $courier['harga'] ?></option>
              <?php endforeach ?>
          </select>
          <label for="floatingSelect">Select courier to deliver your device</label>
        </div>

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

        <div class="text-center">
          <button class="btn btn-info form-btn" type="submit">Submit</button>
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