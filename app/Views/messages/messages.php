<?php if(session()->getFlashdata('success')) : ?>
  <div class="alert alert-success" role="alert">
    <?= session()->getFlashdata('success'); ?>
  </div>
<?php endif; ?>

<?php if(session()->getFlashData('success-logout')) : ?>
  <div class="position-relative container toast-wrapper">
      <div class="toast toast-logout position-absolute align-items-center text-bg-success py-1 border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body">
        <?= session()->getFlashdata('success-logout'); ?>
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
    </div>
<?php endif; ?>

<?php if(isset($validation) && $validation->hasError('jenis_devices')) : ?>
  <div class="alert alert-danger alert-devices" role="alert">
    <?= $validation->getError('jenis_devices') ?>
  </div>
<?php endif; ?>

<?php if(session()->getFlashdata('error')) : ?>
  <div class="alert alert-danger" role="alert">
    <?= session()->getFlashdata('error'); ?>
  </div>
<?php endif; ?>