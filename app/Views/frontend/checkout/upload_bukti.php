<?php $this->extend('frontend/layout/body') ?>

<?= $this->section('content') ?>
<div class="contact-page section-layout">
  <div class="container d-flex justify-content-center align-items-center">

    <form class="form-area contact-page-form checkout-form my-4"
      action="/upload/bukti-pembayaran/edit/<?= $transaction['id'] ?>" method="POST" enctype="multipart/form-data">
      <?php csrf_field() ?>
      <input type="hidden" name="transaction_id" value="<?= $transaction['id'] ?>">
      <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>">

      <h1 class="contact-page-title text-uppercase text-center">Upload Bukti Pembayaran</h1>

      <div class="mb-3">
        <label for="formFile" class="form-label">Input Bukti Pembayaran</label>
        <input class="form-control <?= $validation->hasError('bukti_pembayaran') ? 'is-invalid' : '' ?>" type="file" name="bukti_pembayaran" id="formFile"
          value="<?= old('keluhan') ? old('keluhan')  : "" ?>">
      </div>
      <p class="invalid-feedback"><?= $validation->getError('bukti_pembayaran') ?></p>

      <div class="mb-3">
        <button class="btn btn-info" type="submit">Submit</button>
      </div>
    </form>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('jumbotron') ?>
<h1 class="text-uppercase">Upload Bukti Pembayaran</h1>
<?= $this->endSection() ?>

<?= $this->section('head') ?>
<title>Sayang Mamah Service - Upload Bukti Pembayaran</title>
<?= $this->endSection() ?>