<?= $this->extend('company/default') ?>
<?= $this->section('title') ?>
<title>Company &mdash; SMG</title>>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="section">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4 class="font-weight-bold text-primary">COMPANY PROFILE</h4>
            </div>
            <div class="card-body">
                <br>Id : <?= $company['id'] ?> </br>
                <br>Nama Perusahaan : <?= $company['nama'] ?></br>
                <br>Alamat : <?= $company['alamat'] ?></br>
                <br>Jenis Service : <?= $company['jenis_devices'] ?></br>
                <br>Email : <?= $company['email'] ?></br>
                <br><a href="/dashboard/company/profile/editprofile/<?= $_SESSION["user_id"] ?>" class="btn btn-primary">Edit</a></br>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>