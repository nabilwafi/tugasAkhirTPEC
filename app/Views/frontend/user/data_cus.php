<?= $this->extend('frontend/layout/body.php') ?>
<?= $this->section('title') ?>
<title>User &mdash; SMG</title>>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="card" style="width: 100%">
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <h3 class="card-title" style="text-align: center;">My Profile</h5>
                    <li class="list-group-item">Nama : <?= $customers['nama_cus'] ?></li>
                    <li class="list-group-item">Email : <?= $customers['email'] ?></li>
                    <li class="list-group-item">Telp : <?= $customers['telp'] ?></li>
                    <li class="list-group-item">Alamat : <?= $customers['alamat'] ?></li>
                    <a href="/edit_profileC/user/<?= $customers["id"]; ?> " class="btn btn-primary">Edit</a>
            </ul>
        </div>
    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('jumbotron') ?>
<h1 class=" text-uppercase">My Profile Page</h1>
<?= $this->endSection() ?>

<?= $this->section('head') ?>
<title>Sayang Mamah Service - My Profile</title>
<?= $this->endSection() ?>